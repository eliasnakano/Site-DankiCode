<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productrunt.com.br</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
</head>
<section class="topo">
    <div class="center">
        <header>
            <div class="logo">
                <img src="./img/logo.png">
            </div>
            <!---logo--->
        </header>
        <ul class="menu-desktop">
            <li><a href="index.php"> Inicio </a></li>
            <li><a href="sobre.php"> Sobre </a></li>
            <li><a href="contato.php"> Contato </a></li>
        </ul>
        <div class="menu-mobile">
            <i class="fa-solid fa-bars"></i>
            <ul>
                <li><a href="#"> Inicio </a></li>
                <li><a href="#"> Sobre </a></li>
                <li><a href="#"> Contato </a></li>
            </ul>
        </div>
    </div>
    <!---center--->
</section>


<section class="equipe">
    <div class="center">
        <div class="w50 equipe-texto">
        <h2>Uma equipe estratégica para um 
            trabalho incrivel </h2>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
          and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
        </p>
        </div>
        <div class="w50 equipe-img">
        <img src="./img/foto-equipe.png">
        </div>
       
    </div><!--center-->
    <div class="clear"></div>
</section>

<section class="sobre-imagens">
    <div class="center">
        <div class="img-sobre">
            <img src="./img/imagem-sobre5.jpg">
        </div>
        <div class="img-sobre">
            <img src="./img/imagem-sobre2.jpg">
        </div>
        <div class="img-sobre">
            <img src="./img/imagem-sobre3.jpg">
        </div>
        <div class="img-sobre">
            <img src="./img/imagem-sobre4.jpg">
        </div>
        
        
    </div>
</section>

<footer>
    <div class="center">
        <ul>
            <i>&nbsp;Email:productrunt@hotmail.com &nbsp;</i>
            <i>&nbsp;Telefone:9999-9999</i>
        </ul>

        <div class="header-social-media">
            <ul>
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f">&nbsp;</i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter">&nbsp; </i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram">&nbsp; </i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-github">&nbsp; </i>
                    </a>
                </li>
        </div>
        <div class="center">
            <div class="logo2">
                <img src="./img/logo-footer.png">
            </div>
        </div>
    </div> <!--center-->
</footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="slick/slick.js"></script>
<script>
    $('.carousel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    })

    //menu Humburger codigo js abaixo para abrir

    $('.menu-mobile i').click(function(){
    $('.menu-mobile').find('ul').slideToggle();
});


</script>

</body>

</html>

