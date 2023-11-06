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
                        <h3 class="box-title">Yeni Fatura Oluştur</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/fatura/send" method="post">

                        <div class="box-body">

                            <div class="form-group">
                                <div class="col-md-6">
                                <label for="exampleInputEmail1">Fatura Tipi:</label>
                                <select name="tip" id="" class="form-control">
                                    <option value="0">Gelir</option>
                                    <option value="1">Gider</option>
                                </select>
                                </div>
                                <div class="col-md-6">
                                <label for="exampleInputEmail1">Müşteri Seçiniz:</label>
                                <select name="musteriid" id="" class="form-control">
                                    <?php
                                        foreach($params['musteriler'] as $key => $value)
                                        {
                                    ?>
                                            <option value="<?=$value['id'];?>"><?=$value['ad'];?> <?=$value['soyad'];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            </div>


                        <div class="form-group">
                            <div class="col-md-4">
                                <label>Fatura No:</label>
                                <input type="text" name="fatura_no" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Fatura Tutarı:</label>
                                <input type="text" name="tutar" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label>Açıklama:</label>
                                <input type="text" name="aciklama" class="form-control">
                            </div>
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