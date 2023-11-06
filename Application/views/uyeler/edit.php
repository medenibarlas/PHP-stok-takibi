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
                        <h3 class="box-title">Kullanıcı Düzenle</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/kullanici/update/<?=$params['data']['id'];?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Adı:</label>
                                <input type="text" class="form-control" name="name" value="<?=$params['data']['name'];?>">
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Email:</label>
                                <input type="text" class="form-control" name="email" value="<?=$params['data']['email'];?>">
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
                                    <input type="checkbox" <?php if(in_array($key,explode(',',$params['data']['permission']))){echo 'checked';}?> name="permissions[]" value="<?=$key;?>"> <?=$value;?><br>
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