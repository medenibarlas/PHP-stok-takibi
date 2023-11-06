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
                        <h3 class="box-title">"<?=$params['data']['ad'];?>" Düzenle</h3>
                    </div>


                    <form role="form" action="<?=SITE_URL;?>/urunler/update/<?=$params['data']['id'];?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ürün Adı:</label>
                                <input type="text" class="form-control" name="ad" value="<?=$params['data']['ad'];?>">
                            </div>

                            <div class="form-group">
                                <label>Ürün Kategorisi:</label>
                                <select name="kategoriId" class="form-control" id="">
                                    <?php foreach ($params['category'] as $key => $value)
                                    {
                                        ?>
                                        <option <?php if($params['data']['kategoriId']==$value['id']){ echo 'selected';} ?> value="<?=$value['id'];?>"><?=$value['ad'];?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="display: block">Ürün Özellikleri</label>
                                <button id="yeniEkle" class="btn btn-info" type="button">Yeni Özellik Ekle</button>
                                <div id="urunOzellikAlani">
                                    <?php
                                        if(count(json_decode($params['data']['ozellikler'],true))!=0)
                                        {
                                            foreach(json_decode($params['data']['ozellikler'],true) as $key => $value)
                                            {
                                                ?>
                                                <div class="col-md-6"><label>Ürün Özellik Adı:</label>
                                                    <input  type="text" class="form-control selectOzellik" name="ozellik[<?=$key;?>][name]" value="<?=$value['name'];?>">
                                                </div>
                                                <div class="col-md-6"><label>Ürün Özellik Degeri:</label>
                                                    <input type="text" class="form-control" name="ozellik[<?=$key;?>][value]" value="<?=$value['value'];?>">
                                                </div>
                                        <?php
                                            }
                                        }


                                    ?>



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
<script src="http://udemy.local/public/bower_components/jquery/dist/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var i = $(".selectOzellik").length;
        $("#yeniEkle").click(function () {
            var temp ='<div class="col-md-6"><label>Ürün Özellik Adı:</label><input  type="text" class="form-control selectOzellik" name="ozellik['+i+'][name]"></div>' +
                '<div class="col-md-6"><label>Ürün Özellik Degeri:</label><input type="text" class="form-control" name="ozellik['+i+'][value]"></div>';
            $("#urunOzellikAlani").append(temp)
            i++;
        })
    })
</script>