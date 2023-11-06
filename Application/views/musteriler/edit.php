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
                        <h3 class="box-title">"<?=$params['data']['ad'];?> <?=$params['data']['soyad'];?>" Düzenle</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/musteriler/update/<?=$params['data']['id'];?>" method="post">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adı:</label>
                                <input type="text" class="form-control" name="ad" value="<?=$params['data']['ad'];?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Soyad:</label>
                                <input type="text" class="form-control" name="soyad" value="<?=$params['data']['soyad'];?>">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Şirket:</label>
                                <input type="text" class="form-control" name="sirket" value="<?=$params['data']['sirket'];?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input type="text" class="form-control" name="email" value="<?=$params['data']['email'];?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefon:</label>
                                <input type="text" class="form-control" name="telefon" value="<?=$params['data']['telefon'];?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Adres:</label>
                                <input type="text" class="form-control" name="adres" value="<?=$params['data']['adres'];?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tc:</label>
                                <input type="text" class="form-control" name="tc" value="<?=$params['data']['tc'];?>">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Not:</label>
                                <input type="text" class="form-control" name="notu" value="<?=$params['data']['notu'];?>">
                            </div>




                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Düzenle</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>