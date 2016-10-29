<div class="page-content">
        <div class="container-fluid">
            <header class="section-header">
                <div class="tbl">
                    <div class="tbl-row">
                        <div class="tbl-cell">
                            <h3>Главные настройки</h3>
                        </div>
                    </div>
                </div>
            </header>

            <div class="box-typical box-typical-padding">
                
                <form method="post" action="/admin_panel/main_settings" enctype='multipart/form-data'>
                    <h5 class="m-t-lg with-border">Логотип и др.</h5>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Логотип</label>
                        <div class="col-sm-4">
                            <p class="form-control-static"><input type="file" name='logo' class="form-control"></p>
                            <input type="hidden" name="old_logo" value="<?php echo $data['main_settings']['logo']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Favicon</label>
                        <div class="col-sm-4">
                            <p class="form-control-static"><input type="file" name='favicon' class="form-control"></p>
                            <input type="hidden" name="old_favicon" value="<?php echo $data['main_settings']['favicon']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Название сайта</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input type="text" name="main_title" class="form-control" placeholder="Введите название/title сайта. Пример: Нестенка - лучшие блоки для вашей стройки" autocomplete="off" value="<?php echo $data['main_settings']['title'] ?>"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Имя сайта</label>
                        <div class="col-sm-2">
                            <p class="form-control-static"><input type="text" name="main_name" class="form-control" placeholder="Введите имя сайта" autocomplete="off" value="<?php echo $data['main_settings']['main_name'] ?>"></p>
                        </div>
                    </div>
                    <h5 class="m-t-lg with-border">Доступ к Административной панели</h5>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Логин</label>
                        <div class="col-sm-2">
                            <p class="form-control-static"><input type="text" name="admin_login" class="form-control" placeholder="Логин" autocomplete="off"></p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 form-control-label">Пароль</label>
                        <div class="col-sm-2">
                            <input type="password" name="admin_pass" class="form-control" id="inputPassword" placeholder="Password" autocomplete="new-password">
                        </div>
                    </div>
                    <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                    <input class="btn btn-success" name="action" type="submit" value="Сохранить">
                </form>

            </div><!--.box-typical-->
        </div><!--.container-fluid-->
    </div><!--.page-content-->