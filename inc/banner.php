<div class="banner owl-carousel">
    <?php 
    $path = "assets/images/banner/";
    $diretorio = dir($path);
    while($arquivo = $diretorio -> read()){
    $caminho_completo =  $path.$arquivo;
    if($arquivo != '.' && $arquivo != '..' ) { ?>
    <div class="banner-item-wrapper" data-banner="<?php echo$caminho_completo;?>">
        <div class="overlay"></div>
        <div class="container">
            <div class="description px-2">
                <div class="text-right">
                    <h5>Terminal de cruzeiros</h5>
                </div>
            </div>
        </div>
    </div>
    <?php 
    }   
    }
    $diretorio -> close();
    ?> 
</div>
<style>

</style>