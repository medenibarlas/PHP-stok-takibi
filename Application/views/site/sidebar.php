
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=IMG_PATH;?>/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->myuserinfo['name']; ?></p>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>SİPARİŞLER</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/siparis/create"><i class="fa fa-circle-o"></i> Yeni Sipariş Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/siparis/"><i class="fa fa-circle-o"></i> Sipariş Listesi</a></li>
                </ul>
            </li>

            <?php  if($this->model('uyeModel')->permission($this->myuserid,0)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>KATEGORİLER</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/category/create"><i class="fa fa-circle-o"></i> Yeni Kategori Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/category/"><i class="fa fa-circle-o"></i> Kategori Listesi</a></li>
                </ul>
            </li>
            <?php } ?>

            <?php  if($this->model('uyeModel')->permission($this->myuserid,1)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>ÜRÜNLER</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/urunler/create"><i class="fa fa-circle-o"></i> Yeni Ürün Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/urunler/"><i class="fa fa-circle-o"></i> Ürün Listesi</a></li>
                </ul>
            </li>
            <?php } ?>


            <?php  if($this->model('uyeModel')->permission($this->myuserid,2)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>MÜŞTERİLER</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/musteriler/create"><i class="fa fa-circle-o"></i> Yeni Müşteri Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/musteriler/"><i class="fa fa-circle-o"></i> Müşteri Listesi</a></li>
                </ul>
            </li>
            <?php } ?>


            <?php  if($this->model('uyeModel')->permission($this->myuserid,3)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>STOK İŞLEMLERİ</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/stok/create"><i class="fa fa-circle-o"></i> Yeni Stok İşlemi Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/stok/"><i class="fa fa-circle-o"></i> Stok işlemleri Listesi</a></li>
                </ul>
            </li>
            <?php } ?>


            <?php  if($this->model('uyeModel')->permission($this->myuserid,4)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>KASA</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/kasa/create"><i class="fa fa-circle-o"></i> Yeni Kasa Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/kasa/"><i class="fa fa-circle-o"></i> Kasa Listesi</a></li>
                </ul>
            </li>
            <?php } ?>


            <?php  if($this->model('uyeModel')->permission($this->myuserid,5)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Faturalar</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/fatura/create"><i class="fa fa-circle-o"></i> Yeni Fatura Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/fatura/"><i class="fa fa-circle-o"></i> Fatura Listesi</a></li>
                </ul>
            </li>
            <?php } ?>

            <?php  if($this->model('uyeModel')->permission($this->myuserid,6)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Kullanıcılar</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/kullanici/create"><i class="fa fa-circle-o"></i> Yeni Kullanıcı Oluştur</a></li>
                    <li><a href="<?=SITE_URL;?>/kullanici/"><i class="fa fa-circle-o"></i> Kullanıcı Listesi</a></li>
                </ul>
            </li>
            <?php } ?>


            <?php  if($this->model('uyeModel')->permission($this->myuserid,7)){ ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>RAPORLAR</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?=SITE_URL;?>/rapor/urun"><i class="fa fa-circle-o"></i> Ürün  Listesi</a></li>
                    <li><a href="<?=SITE_URL;?>/rapor/musteri"><i class="fa fa-circle-o"></i> Müşteri  Listesi</a></li>
                    <li><a href="<?=SITE_URL;?>/rapor/kasa"><i class="fa fa-circle-o"></i> Kasa Raporu</a></li>
                    <li><a href="<?=SITE_URL;?>/rapor/tarih"><i class="fa fa-circle-o"></i> Tarih Bazlı Raporlama</a></li>
                </ul>
            </li>
            <?php } ?>
            <li><a href="<?=SITE_URL;?>/logout"><i class="fa fa-circle-o"></i> Çıkış</a></li>




        </ul>

    </section>
    <!-- /.sidebar -->
</aside>