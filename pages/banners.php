<?php require_once('controller/banner_controller.php'); ?> 
<?php require_once('header.php'); ?>
<script>
    function jsExcluir(banner)
    {        
        document.formBannerListar.action = "banners.php";
        document.getElementById("bannerID").value = banner;
        document.getElementById("formBannerListar").submit();
    }

    function jsEditar(banner)
    {           
        document.formBannerListar.action = "cad_banners.php";
        document.getElementById("bannerID").value = banner;
        document.getElementById("formBannerListar").submit(); 
    }
</script> 
<div id="page-wrapper"><br>
    <h1 class="page-header"> <i class="fa fa-camera fa-fw"></i> Textos Banner 
       <a href="cad_banners.php"><span class="pull-right text-muted small"><button class="btn btn-success">Cadastrar novo banner</button></a>
   </h1>
   <div class="row"><br>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <tr style="background-color: #2c3e50; color: white;">
                        <th>Banners</th>
                        <th>Título :</th>
                        <th>Edição</th>
                    </tr>
                    <form id="formBannerListar" name="formBannerListar" action="banners.php" method="post">
                        <?php foreach($listaBanners['dados'] as $banner){?>
                        <tr>
                            <td><?php echo $banner['ClienteBanner']['id']; ?></td>
                            <td><?php echo $banner['ClienteBanner']['titulo']; ?></td>
                            <td>
                                <a href="javascript:void(0);" onclick="jsExcluir('<?php echo $banner['ClienteBanner']['id']; ?>');">
                                    <i class="fa fa-trash-o fa-fw"></i>
                                </a> 
                                <a href="javascript:void(0);" onclick="jsEditar('<?php echo $banner['ClienteBanner']['id']; ?>');">
                                    <i class="fa fa-pencil fa-fw"></i>
                                </a>
                            </td>
                        </tr>
                        <?php }?>
                        <input type="hidden" name="bannerID" value="" id="bannerID">                            
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once('footer.php'); ?>