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

            <form method="post" action="/admin_panel/oneclick" enctype='multipart/form-data'>

                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Спец цена 1 клик (Блоки)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="main_title" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['block_price'] ?>"></p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Спец цена 1 клик (Плиты)</label>
                    <div class="col-sm-2">
                        <p class="form-control-static"><input type="text" name="main_name" class="form-control" autocomplete="off" value="<?php echo $data['oneclick']['slab_price'] ?>"></p>
                    </div>
                </div>

                <input id="<?php echo $csrf_token_name; ?>" type="hidden" value="<?php echo $csrf_hash; ?>" name="<?php echo $csrf_token_name; ?>">
                <input class="btn btn-success" name="action" type="submit" value="Сохранить">
            </form>

        </div><!--.box-typical-->
    </div><!--.container-fluid-->
</div><!--.page-content-->