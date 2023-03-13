<div class="row no-gutters">
    <div class="col-12">
        <div class="title-wrapper">
            <h1>NOSSOS PROJETOS</h1>
        </div>
    </div>
    <?php
    $path = "assets/images/projetos/";
    $diretorio = dir($path);
    while($arquivo = $diretorio -> read()){
    $caminho_completo =  $path.$arquivo;
    if($arquivo != '.' && $arquivo != '..' ) { ?>
    <div class="col-12 col-12-m col-sm-4">
        <div class="project-wrapper">
            <a href="<?php echo$caminho_completo;?>" class="glightbox2" data-glightbox="title: <?php echo$arquivo;?>; description: .custom-desc2; descPosition: left;">
                <img src="<?php echo$caminho_completo;?>">
            </a>
            <div class="text-over fadeIn-left"><?php echo$arquivo;?></div>
            <div class="glightbox-desc custom-desc2">
                <p>You can set the position of the description in different ways for example top, bottom, left or right</p>
                <p>Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
            </div>
        </div>
    </div>
    <?php 
        }   
    }
    $diretorio -> close();
    ?> 
</div>