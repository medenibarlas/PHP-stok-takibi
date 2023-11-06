<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Sipariş Listesi</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Sipariş Numarası</th>
                                <th>Müşteri</th>
                                <th>Firma</th>
                                <th>Detay</th>
                                <th>Düzenle</th>
                                <th>Kaldır</th>
                            </tr>
                            <?php
                            if(count($params['data'])!=0)
                            {
                                foreach($params['data'] as $key => $value)
                                {
                                    $musteriRow = $this->model('musterilerModel')->getData($value['musteri_id']);
                                    ?>
                                    <tr>
                                        <td><?=$value['id'];?></td>
                                        <td><?=$value['no'];?></td>
                                        <td><?=$musteriRow['ad'];?> <?=$musteriRow['soyad'];?></td>
                                        <td><?=$value['firma_adi'];?></td>
                                        <th><a href="<?=SITE_URL;?>/siparis/detail/<?=$value['id'];?>">Detay</a></th>
                                        <th><a href="<?=SITE_URL;?>/siparis/edit/<?=$value['id'];?>">Düzenle</a></th>
                                        <th><a href="<?=SITE_URL;?>/siparis/delete/<?=$value['id'];?>">Sil</a></th>
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

