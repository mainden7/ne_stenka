<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * WordPres Integration Class.
 * This class enables the use of wordpress functions.
 *
 * @author Oscar Dias
 * @link http://oscardias.com/codeigniter/integrating-wordpress-with-codeigniter
 */
class Current {

    /**
     * Constructor.
     */
    public function __construct() {

        // Additional WordPress global variables
        # global $table_prefix, $wp_embed, $wp_widget_factory, $_wp_deprecated_widgets_callbacks, $wp_locale, $wp_rewrite, 
        # $wpdb, $current_user, $auth_secure_cookie, $wp_roles, $wp_the_query, $wp_query, $wp, $_updated_user_settings,
        # $wp_taxonomies, $wp_filter, $wp_actions, $merged_filters, $wp_current_filter, $wp_registered_sidebars,
        # $wp_registered_widgets, $wp_registered_widget_controls, $wp_registered_widget_updates, $_wp_deprecated_widgets_callbacks,
        # $posts, $post, $wp_did_header, $wp_did_template_redirect, $wp_version, $id, $comment, $user_ID;
    }

    /**
     * Is logged in?
     * 
     * @return boolean Whether the user is logged in.
     */
    public function isLoggedIn() {
        $CI = & get_instance();
        $logged_in = $CI->session->userdata('logged_in');
        if (isset($logged_in)) {
            if ($logged_in) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    /**
     * Is logged in?
     * 
     * @return boolean Whether the user is logged in.
     */
    public function isDirector() {
        $CI = & get_instance();
        $director_status = $CI->session->userdata('director_status');
        if ($director_status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Is logged in?
     * 
     * @return boolean Whether the user is logged in.
     */
    public function isSubAdmin() {
        $CI = & get_instance();
        $sub_admin_status = $CI->session->userdata('sub_admin_status');
        if ($sub_admin_status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * Is logged in?
     * 
     * @return boolean Whether the user is logged in.
     */
    public function isSupport() {
        $CI = & get_instance();
        $support_status = $CI->session->userdata('support_status');
        if ($support_status) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
     * getCurrentUser
     * 
     * @return user id.
     */
    function getCurrentUser() {
        $CI = & get_instance();

        $user_id = $CI->session->userdata('user_id');

        return $user_id;
    }

    /**
     * Is the user is admin?
     * 
     * @param User $user
     *  User entity.
     * 
     * @return boolean Whether the user is admin.
     */
    public function isSuperAdmin() {
        $CI = & get_instance();
        $user_id = $CI->session->userdata('user_id');
        if (isset($user_id) AND $user_id != 0) {
            if ($user_id == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    /**
     * Login link.
     * 
     * @return string Login link.
     */
//    public function loginLink() {
//        $redirect = current_url();
//
//        return wp_login_url() . "?redirect_to=$redirect";
//    }

    /**
     * Logout link.
     * 
     * @return string Logout link.
     */
//    public function logoutLink() {
//        $redirect = current_url();
//
//        return wp_logout_url() . "&redirect_to=$redirect";
//    }

    /**
     * WP admin link.
     * 
     * @return string WP admin link.
     */
//    public function adminLink() {
//        return get_option('siteurl') . "/wp-admin";
//    }
}

/* End of file WPIntegration.php */
/* Location: ./ci/application/libraries/WPIntegration.php */