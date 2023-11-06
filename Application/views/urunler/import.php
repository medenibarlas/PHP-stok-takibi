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
                        <h3 class="box-title">Ürün İmport</h3>
                    </div>


                    <form role="form" enctype="multipart/form-data" action="<?=SITE_URL;?>/excel/import" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Xls:</label>
                                <input type="file" class="form-control" name="file">
                            </div>





                        </div>


                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Yükle</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</div>
