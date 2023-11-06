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
                        <h3 class="box-title">Fatura Düzenle</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/fatura/update/<?=$params['data']['id'];?>" method="post">

                        <div class="box-body">

                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Fatura Tipi:</label>
                                    <select name="tip" id="" class="form-control">
                                        <option <?php if($params['data']['tip'] ==0){ echo 'selected'; } ?> value="0">Gelir</option>
                                        <option <?php if($params['data']['tip'] ==1){ echo 'selected'; } ?> value="1">Gider</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1">Müşteri Seçiniz:</label>
                                    <select name="musteriid" id="" class="form-control">
                                        <?php
                                        foreach($params['musteriler'] as $key => $value)
                                        {
                                            ?>
                                            <option <?php if($params['data']['musteriid'] == $value['id']){ echo 'selected'; } ?> value="<?=$value['id'];?>"><?=$value['ad'];?> <?=$value['soyad'];?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Fatura No:</label>
                                    <input type="text" name="fatura_no" class="form-control" value="<?=$params['data']['fatura_no'];?>">
                                </div>
                                <div class="col-md-4">
                                    <label>Fatura Tutarı:</label>
                                    <input type="text" name="tutar" class="form-control" value="<?=$params['data']['tutar'];?>">
                                </div>
                                <div class="col-md-4">
                                    <label>Açıklama:</label>
                                    <input type="text" name="aciklama" class="form-control" value="<?=$params['data']['aciklama'];?>">
                                </div>
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