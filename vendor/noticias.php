<meta charset="utf-8">  

<div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="margin:0;">Notícias</h1>
                </div>
                <div class="col-md-6">
                    <ul class="bcrumbs">
                        <li><a href="index.php">Principal</a></li>
                        <li><a href="?pg=Noticias">Noticias</a></li>                        
                    </ul>
                </div>
            </div>
        </div>
</div>
<div class="container">
  <div class="row">

  <?php

       $noticias = mysqli_query($conexao, "select * from noticias"); 
      if (mysqli_num_rows($noticias)<=0){
            ?>
            <div style="width: 100%">
                <div class="wrapper">
                    <div class="header" style="color: black">
                        <h1 style="color:red">Nenhuma notícia cadastrada.</h1>
                    </div>
                </div>
            </div>
        <?php  
        }else{
            while($listaNoticias = mysqli_fetch_assoc($noticias)){
                $codigo = base64_encode($listaNoticias["id"]);
                if ($listaNoticias["foto"]==''){
                  $foto = '../imgs/sem_foto.png';
                }else{
                  $foto ='admin/cadastros/noticias/fotos/'.$listaNoticias["foto"];
                }
                ?>
                <div class="cardblog" style="margin-bottom: 50px; width: 100%">
                  <h4 class="card-header"><img src="<?=$foto?>" width="100" height="100"> <?= utf8_encode($listaNoticias["titulo"])?></h4> 
                  <div class="card-body">
                  <a href="?pg=Noticias&noticia=<?=$codigo?>" target="_blank" class="btn btn-primary">Saiba Mais</a>
                  </div>
                </div>
            <?php    
        }
    }    
   ?>  
  </div>      
</div>

<!--<div align="center">
<nav aria-label="Navegação de página exemplo">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Anterior</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Próximo</a>
    </li>
  </ul>
</nav>
</div> 
  -->



