<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">


                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sipariş Detayı</h3>
                    </div>



                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Müşteri Seçiniz:</label>
                                <?=$params['musteri']['ad'];?> <?=$params['musteri']['soyad'];?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Firma Adı:</label>
                                <?=$params['data']['firma_adi'];?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sipariş Tarihi:</label>
                                <?=$params['data']['tarih'];?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sipariş Tutarı:</label>
                                <?=$params['data']['fiyat'];?>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sipariş Numarası:</label>
                                <?=$params['data']['no'];?>
                            </div>

                            <div class="form-group">

                                <div class="col-md-12">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ürün Adı</th>
                                            <th>Ürün Adet</th>
                                            <th>Ürün Birim Fiyat</th>
                                            <th>Ürün Toplam Fiyat</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                <?php
                                    if(count(json_decode($params['data']['urunler'],true))!=0)
                                    {
                                        foreach(json_decode($params['data']['urunler'],true) as $key => $value)
                                        {
                                            $urunRow = $this->model('urunlerModel')->getData($value['id']);
                                            $toplamFiyat = intval($value['adet']) * $value['fiyat'];
                                ?>
                                  <tr>
                                      <td><?=$urunRow['ad'];?></td>
                                      <td><?=$value['adet'];?></td>
                                      <td><?=$value['fiyat'];?></td>
                                      <td><?=$toplamFiyat;?></td>

                                  </tr>
                                <?php
                                        }
                                    }
                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>


                </div>

            </div>
        </div>
    </section>
</div>
