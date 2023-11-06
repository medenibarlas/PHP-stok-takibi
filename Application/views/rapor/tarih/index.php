<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <form action="" method="GET">
            <div class="form-group">

                <div class="col-md-6">
                    <label>Başlangıç Tarihi</label>
                    <input type="date" name="firstDate" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Başlangıç Tarihi</label>
                    <input type="date" name="secondDate" class="form-control">
                </div>
                <div class="col-md-12">
                    <button class="btn btn-info">Sorgula</button>
                </div>
            </div>
            </form>

            <div class="col-md-12">

                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">Ürün Rapor Listesi</h3>
                    </div>


                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Ad</th>
                                <th>Toplam Gider</th>
                                <th>Toplam Giren Ürün</th>
                                <th>Toplam Gelir</th>
                                <th>Toplam Çıkan Ürün</th>
                                <th>Fiyat Kalan</th>
                                <th>Ürün Kalan</th>
                            </tr>
                            <?php
                            if(count($params['data'])!=0)
                            {
                                foreach($params['data'] as $key => $value)
                                {
                                    $urunRow = $this->model('urunlerModel')->getData($value['urun_id']);
                                    $toplamGiren = $this->model('raporModel')->girenUrunToplam($value['urun_id']);
                                    $toplamCikan = $this->model('raporModel')->cikanUrunToplam($value['urun_id']);

                                    $toplamKalan = $toplamCikan-$toplamGiren;

                                    $girenAdet = $this->model('raporModel')->girenUrunAdet($value['urun_id']);
                                    $cikanAdet = $this->model('raporModel')->cikanUrunAdet($value['urun_id']);
                                    $toplamAdet = $girenAdet-$cikanAdet;
                                    ?>
                                    <tr>
                                        <td><?=$value['id'];?></td>
                                        <td><?=$urunRow['ad'];?></td>
                                        <td>-<?=$toplamGiren;?></td>
                                        <td><?=$girenAdet;?></td>
                                        <td><?=$toplamCikan;?></td>
                                        <td><?=$cikanAdet;?></td>
                                        <td><?=$toplamKalan;?></td>
                                        <td><?=$toplamAdet;?></td>

                                    </tr>
                                    <?php
                                }
                            }
                            ?>



                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>

