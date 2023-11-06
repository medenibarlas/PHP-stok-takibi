<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <?php
                helper::flashDataView("statu");
                ?>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Yeni Kullanıcı Oluştur</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/kullanici/send" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Adı:</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Email:</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                        </div>


                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Şifre:</label>
                                <input type="text" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label>İzinler</label>
                                <br>
                                <?php foreach(PERMISSIONS as $key => $value)
                                {
                                    ?>
                                    <input type="checkbox" name="permissions[]" value="<?=$key;?>"> <?=$value;?><br>
                                <?php
                                }
                                ?>
                            </div>
                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Ekle</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>