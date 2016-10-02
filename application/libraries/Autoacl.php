<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * AutoACL: auto access control library.
 *
 * @package         Autoacl
 * @author          Ardinoto Wahono
 * @version         8.11.1
 * @copyright       Copyright (c) 2009-2011 Ardinoto Wahono
 * 
 *                  Copyright (c) Wiredesignz & Maxximus 2009-10-03
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * Extended to satisfy WordPress integration functionality.
 */
class Autoacl {

    /**
     * Constructor.
     */
    public function __construct() {
        $this->ci = & get_instance();

        // Helpers.
        $this->ci->load->helper('url');
        $this->ci->load->helper('string');

        // Libraries.
        $this->ci->load->library('session');

        // Configurations.
        $this->ci->load->config('autoacl');

        // Auto check ACL.
        $this->check_acl();
    }

    /**
     * Check ACL.
     * AutoACL control logic.
     * 
     * @return boolean Whether access is granted.
     */
    public function check_acl() {

        // Get access check params.
        $current_page = $this->current_uri();
        $roles = $this->get_roles();
        $roles = (!empty($roles)) ? $roles : $this->ci->config->item('default_role');
        $config_page = $this->ci->config->item('page_control');
        $config_vpp_page = $this->ci->config->item('vpp_control');
        // Allow access for administrators.
        
        if (in_array('administrator', $roles)) {
            return TRUE;
        }

        // Check access according to config.
        
        elseif ($this->is_allowed($current_page, $roles, $config_page, $config_vpp_page)) {
            return TRUE;
        }

        // Show error if access denied.
        else {
            $filter_page = trim($this->segments_filter($current_page, $config_page, $config_vpp_page));
            

            // Message.
            $message = '';
            if (isset($config_vpp_page[$filter_page]['error_msg'])) {
                $message .= $config_vpp_page[$filter_page]['error_msg'];
            } elseif (isset($config_page[$filter_page]['error_msg'])) {
                $message .= $config_page[$filter_page]['error_msg'];
            } else {
                $message .= 'You\'re not allowed to visit this page';
            }

            show_403($message);
            return FALSE;
        }
    }

    /**
     * AutoACL general check.
     *
     * @param string $current_page
     *  The page relative path being now visited.
     * @param array $roles
     *  Roles of the current user.
     * @param array $config_page
     *  Configurations of the pages that need to be controlled.
     * @param type $config_vpp_page
     *  Configurations of the pages that need The Very Private Page (VPP) access control.
     * 
     * @return boolean Whether access is granted.
     */
    public function is_allowed($current_page, $roles, $config_page, $config_vpp_page) {

        // Get the page from the autoacl config (i.e. the page is controlled), FALSE if the page is uncontrolled.
        $filter_page = trim($this->segments_filter($current_page, $config_page, $config_vpp_page));

        // AutoACL -> FILTER PAGE return TRUE.
        if ($filter_page) {

            // Check page control.
            if (isset($config_page[$filter_page]['allowed'])) {

                // AutoACL -> filter page inside the first isset.
                $allowed_roles = array_intersect($roles, $config_page[$filter_page]['allowed']);

                // This page is controlled. But the user can access.
                if (!empty($allowed_roles)) {
                    return TRUE;
                }
            }

            // Check VPP control.
            if (isset($config_vpp_page[$filter_page]['allowed'])) {

                // Filter page inside the second isset.
                $allowed_roles = array_intersect($roles, $config_vpp_page[$filter_page]['allowed']);

                // The user has a role required.
                if (!empty($allowed_roles)) {

                    // Run function to check VPP.
                    if ($this->vpp_check($config_vpp_page, $filter_page)) {

                        // AutoACL -> This page is VPP controlled. The user is granted access by VPP key.");
                        return TRUE;
                    } else {

                        // AutoACL -> This page is VPP controlled. But the user is denied access by VPP key.");
                        $this->ci->session->set_flashdata('message', array(
                            'value' => $this->ci->lang->line($config_vpp_page[$filter_page]['error_msg']),
                            'type' => 'error'
                        ));
                        return FALSE;
                    }
                } else {

                    // AutoACL -> This page is VPP controlled. But the user is denied access by VPP key.
                    $this->ci->session->set_flashdata('message', array(
                        'value' => $this->ci->lang->line($config_vpp_page[$filter_page]['error_msg']),
                        'type' => 'error'
                    ));
                    return FALSE;
                }
            } else {

                // AutoACL -> This page is VPP controlled. But the user is denied access by roles.
                $this->ci->session->set_flashdata('message', array(
                    'value' => $this->ci->lang->line($config_page[$filter_page]['error_msg']),
                    'type' => 'error'
                ));
                return FALSE;
            }
        } else {

            // AutoACL -> This page is uncontrolled.
            return TRUE;
        }
    }

    /**
     * Get user roles.
     *
     * @return array User roles. 
     */
    public function get_roles() {
        return $this->ci->session->userdata($this->ci->config->item('sess_role_var'));
    }

    /**
     * Get key id from session.
     * In common, key ID is 'user_id' or 'username'.
     *
     * @return string Key ID.
     */
    public function get_key_id_sess($config_vpp_page, $filter_page) {
        return $this->ci->session->userdata($config_vpp_page[$filter_page]['vpp_sess_name']);
    }

    /**
     * Check if the user is an adminstrator.
     *
     * @return boolean Whether is an administrator.
     */
    public function is_admin() {
        if (in_array('administrator', $this->get_roles())) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Get current URI. Also remove index or index.php from uri
     *  
     * @param string $uri
     *  URI string.
     * 
     * @return string Current URI.
     */
    public function current_uri($uri = '') {
        $segments = $this->ci->uri->segment_array();

        // Remove index and index.php from an array.
        $segments = array_diff($segments, array('index', 'index.php'));

        // Reindex array.
        $segments = array_values($segments);

        foreach ($segments as $segment) {
            $uri .= $segment . '/';
        }
        return $uri;
    }

    /**
     * Filter current uri so that sub module or sub controller also can be controlled
     * 
     * @param string $current_page
     *  The page relative path being now visited.
     * @param array $config_page
     *  Configurations of the pages that need to be controlled.
     * @param type $config_vpp_page
     *  Configurations of the pages that need The Very Private Page (VPP) access control.
     * 
     * @return string|boolean Page been detected or FALSE.
     */
    public function segments_filter($current_page, $config_page, $config_vpp_page) {
        if (array_key_exists($current_page, $config_page)) {

            // AutoACL -> direct detection.
            return $current_page;
        } else {

            // Get URI segments.
            $segments = explode('/', $current_page);
            $filter_check_uri = '';
            $true_val = array();

            // Interprete (:num) & (:any) segments with appropriate values.
            foreach ($config_vpp_page as $k => $v) {
                $vpp_key = $v['vpp_key'] - 1;

                $aux = explode('/', $k);
                if ($_SERVER['REQUEST_URI'] !== '/') {
                    if ((($aux[$vpp_key] === '(:num)') && is_numeric($segments[$vpp_key])) || ($aux[$vpp_key] === '(:any)')) {

                        $aux[$v['vpp_key'] - 1] = $segments[$vpp_key];
                        $nk = implode('/', $aux);
                        $config_vpp_page[$nk] = $v;
                        $config_vpp_page[$nk]['real_path'] = $k;
                        unset($config_vpp_page[$k]);
                    }
                }
            }

            // Get filter page.
            for ($i = 1; $i <= $this->ci->config->item('segment_max'); $i++) {
                $segment_num = $i - 1;
                if (isset($segments[$segment_num])) {
                    $filter_check_uri .= $segments[$segment_num] . '/';
                }
                if (array_key_exists(trim($filter_check_uri), $config_page)) {

                    // AutoACL -> found the page that should be controlled.
                    $true_val[] = $filter_check_uri;
                }
                if (array_key_exists(trim($filter_check_uri), $config_vpp_page)) {

                    // AutoACL -> found the VPP page that should be controlled.
                    if (isset($config_vpp_page[$filter_check_uri]['real_path'])) {
                        $true_val[] = $config_vpp_page[$filter_check_uri]['real_path'];
                    } else {
                        $true_val[] = $filter_check_uri;
                    }
                }
            }

            // AutoACL -> this URI is need to be controlled.
            if (end($true_val)) {
                $filter_page = trim(end($true_val));
                return $filter_page;
            }
        }
        return FALSE;
    }

    /**
     * VPP check.
     * Compare key ID from session with key ID from URI.
     * 
     * @return boolean Whether the page is accepted by VPP check.
     * 
     * @param array $config_vpp_page
     *  VPP configurations.
     * @param array $filter_page
     *  Filter Page.
     * 
     * @return boolean Whether the check is passed.
     */
    public function vpp_check($config_vpp_page, $filter_page) {
        $key_id_sess = $this->get_key_id_sess($config_vpp_page, $filter_page);
        $key_segment_num = $config_vpp_page[$filter_page]['vpp_key'];
        $key_id_page = $this->ci->uri->segment($key_segment_num);
        if ($this->vpp_is_internal_var($config_vpp_page, $filter_page)) {
            $class = $config_vpp_page[$filter_page]['class'];
            $load = $config_vpp_page[$filter_page]['load_method'];
            $get = $config_vpp_page[$filter_page]['vpp_get_method'];
            $key_id_page = $class::$load($key_id_page)->{$get}();
        }
        if ($key_id_page == $key_id_sess) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Internal var check.
     * 
     * @param array $config_vpp_page
     *  VPP configurations.
     * @param array $filter_page
     *  Filter Page.
     * 
     * @return boolean Whether the check is on the internal var.
     */
    public function vpp_is_internal_var($config_vpp_page, $filter_page) {
        $is_internal_var = $key_segment_num = $config_vpp_page[$filter_page]['internal_var'];
        return (bool) $is_internal_var;
    }

}

/* End of file Autoacl.php */
/* Location: ./ci/application/libraries/Autoacl.php */