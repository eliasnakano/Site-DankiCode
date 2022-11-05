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
            <li><a href="#"> Contato </a></li>
        </ul>
        <div class="menu-mobile">
            <i class="fa-solid fa-bars"></i>
            <ul>
                <li><a href="#"> Inicio </a></li>
                <li><a href="sobre.php"> Sobre </a></li>
                <li><a href="contato.php"> Contato </a></li>
            </ul>
        </div>
    </div>
    <!---center--->
</section>
<section class="contato">
    <div class="center">
        <div class="contato-info">
            <h2>A mais importante,<br>Primeira conversa.</h2>
            <p><b>Telefone:</b>+55 48 9999-9999 </p>
            <p><b>E-mail:</b>contato@produto.com.br</p>
            <p>Endereço:1600 Amphitheatre Pkwy <br>
                Mountain View , CA 94043, EUA </p>
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4023.4292404734697!2d-37.536649660134586!3d-7.586642918678427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1667582315874!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!--center-->
    <!--W50-->
    <div class="contato-form">
        <form>
            <input type="text" placeholder="Nome"></input>
            <input type="text" placeholder="Email"></input>
            <select name="select">
                <option value="valor1">Valor 1</option>
                <option value="valor2" selected>Valor 2</option>
                <option value="valor3">Valor 3</option>
            </select>
            <textarea placeholder="Fale mais da sua nessecidade"></textarea>
        </form>
        <input type="submit" value="Enviar formulário">
    </div>
    <!--contato-fo-->
    <div class="clear"></div>
    </div>
    <!--CENTER-->
</section>
<!--contato-->
<div class="clear"></div>
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
    </div>
    <!--center-->
</footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="slick/slick.js"></script>
<script>
    //menu Humburger codigo js abaixo para abrir

    $('.menu-mobile i').click(function() {
        $('.menu-mobile').find('ul').slideToggle();
    });
</script>
</body>
</html>