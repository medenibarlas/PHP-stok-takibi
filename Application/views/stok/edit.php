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
                        <h3 class="box-title">Stok İşlemi Düzenle</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/stok/update/<?=$params['data']['id'];?>" method="post">

                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Seçimi:</label>
                                <select name="urun_id" id="" class="form-control">
                                    <?php
                                    if(count($params['urunler'])!=0) {
                                        foreach ($params['urunler'] as $key => $value) {
                                            ?>
                                            <option <?php if($value['id'] == $params['data']['urun_id']){echo 'selected';}?> value="<?= $value['id']; ?>"><?= $value['ad']; ?></option>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo '<option value="0">Ürün Yok</option>';
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Seçimi:</label>
                                <select name="musteri_id" id="" class="form-control">
                                    <option <?php if( $params['data']['musteri_id'] == 0){echo 'selected';}?>  value="0">Müşteri Yok</option>
                                    <?php
                                    if(count($params['musteriler'])!=0) {
                                        foreach ($params['musteriler'] as $key => $value) {
                                            ?>
                                            <option <?php if($value['id'] == $params['data']['musteri_id']){echo 'selected';}?>  value="<?= $value['id']; ?>"><?= $value['ad']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Kasa Seçimi:</label>
                                <select name="kasa_id" id="" class="form-control">
                                    <option <?php if( $params['data']['kasa_id'] == 0){echo 'selected';}?>  value="0">Kasa Yok</option>
                                    <?php
                                    if(count($params['kasalar'])!=0) {
                                        foreach ($params['kasalar'] as $key => $value) {
                                            ?>
                                            <option <?php if($value['id'] == $params['data']['kasa_id']){echo 'selected';}?>  value="<?= $value['id']; ?>"><?= $value['ad']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">İşlem Seçimi:</label>
                                <select name="islem_tipi" id="" class="form-control">
                                    <option <?php if($params['data']['islem_tipi']==0){echo 'selected';}?>  value="0">Stok Giriş</option>
                                    <option <?php if($params['data']['islem_tipi']==1){echo 'selected';}?>  value="1">Stok Çıkış</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Adeti:</label>
                                <input type="text" name="adet" class="form-control" value="<?=$params['data']['adet'];?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Birim Fiyatı:</label>
                                <input type="text" name="fiyat" class="form-control" value="<?=$params['data']['fiyat'];?>">
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