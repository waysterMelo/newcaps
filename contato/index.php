<?php
session_start();
include('../includes/db.php');
include('../functions/functions.php');
?>
<!doctype html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Caps Contato</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="../styles/estilo5.css">
=======
    <link rel="stylesheet" href="../styles/estilo3.css">
>>>>>>> 7ba390ffad33be5d42f726c3dada46d2239d34a9
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/bootstrap4.1.min.css">
    <link rel="stylesheet" href="../styles/jquery-confirm.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-confirm.min.js"></script>

</head>
<body style="background-color: whitesmoke">

<div id="preloader">
    <div id="status"></div>
</div>

<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-6"><!-- col-md-6 offer Starts -->

                <a href="" class="btn btn-default btn-md text-white"
                   style="background-color: black; border: none; font-weight: 700">
                    <?php

                    if (!isset($_SESSION['email'])){
                        echo "Bem Vindo Visitante";
                    }else{
                        echo "<span class='mr-2'>Bem Vindo:</span>".$_SESSION['email']. "";
                    }
                    ?>
                </a>


            </div>

            <div class="col-md-6"><!-- col-md-6 Starts -->
                <ul class="menu"><!-- menu Starts -->

                    <li>
                        <?php
                        if (!isset($_SESSION['email'])){
                            echo "<a href=\"../customer/customer_register.php\"> Registrar</a>";
                        }else{
                            echo "<a href=\"../customer/minha_conta.php?edit_account\"> Editar Conta</a>";
                        }
                        ?>
                    </li>

                    <li>
                        <?php
                        if (!isset($_SESSION['email'])){
                            echo  "<a href='../shopping' >Produtos</a>";
                        }else{
                            echo  "<a class='text-capitalize' href=\"../customer/minha_conta.php?meus_pedidos\">meus Pedidos</a>";
                        }
                        ?>
                    <li>

                    <li>
                        <?php
                        if (!isset($_SESSION['email'])){
                            echo  "<a href='../carrinho/'>Carrinho</a>";
                        }else{
                            echo  "<a class='text-capitalize' href='../customer/minha_conta.php' >minha conta</a>";
                        }
                        ?>
                    </li>

                    <li>
                        <?php
                        if (!isset($_SESSION['email'])){
                            echo "<a href='../customer/login.php'> Login </a>";
                        }else {
                            echo "<a href='../customer/logout.php'> Sair </a>";
                        }
                        ?>
                    </li>

                </ul><!-- menu Ends -->

            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<<<<<<< HEAD
    <img src="../images/logo.png" alt="Logo new caps" class="img-fluid">
=======
    <img src="../admin_area/admin_images/logo.svg" alt="Logo new caps" class="img-fluid">
>>>>>>> 7ba390ffad33be5d42f726c3dada46d2239d34a9
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <form class="form-inline mx-5">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <input type="text" class="form-control" placeholder="pesquisar" aria-label="" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-danger" type="button"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <li class="nav-item ml-2">
                <a class="nav-link" href="../index.php">Pagina Inicial</a>
            </li>
            <li class="nav-item ml-2">
                <a class="nav-link" href="../shopping">Produtos</a>
            </li>
            <li class="nav-item">
                <?php
                if (!isset($_SESSION['email'])){
                    echo  "<a class=\"nav-link text-capitalize\" href='../customer/login.php' >Minha conta</a>";
                }else{
                    echo  "<a class='text-capitalize nav-link' href='../customer/minha_conta.php?meus_pedidos' >pedidos</a>";
                }
                ?>
            <li>
            <li class="nav-item">
                <a class="nav-link" href="../contato">Contato</a>
            </li>
            <li class="nav-item">
                <a style="background-color: black;" class="btn btn-md nav-link text-white" href="../carrinho/"><!-- btn btn-primary navbar-btn right Starts -->

                    <i class="fa fa-shopping-cart"></i>

                    <span><?php itens(); ?> item(s) no carrinho </span>

                </a><!-- btn btn-primary navbar-btn right Ends -->

            </li>
        </ul>
    </div>
</nav>

<div id="content">
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="../index.php">Pagina Inicial</a>
                </li>
                <li class="breadcrumb-item">
                    Contato
                </li>
            </ul>
        </div>
    </div>
</div>

<section style=" color: white; height: 600px">
    <div class="container-fluid" >
        <div class="col-md-12 col-lg-12">
            <div class="py-5 text-center">
                <h2>CONTATO</h2>
            </div>
        </div>
    </div>

    <div class="container bg-light text-dark py-5">
        <div class="row">
            <div class="col-md-8">
                <div class="">
                    <form action="send_email.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Nome</label>
                                    <input type="text" name="nome" class="form-control" id="name" placeholder="Nome Completo" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="Assunto">
                                        Assunto</label>
                                    <select id="subject" name="assunto" class="form-control" required="required">
                                        <option value="na" selected="">Assunto</option>
                                        <option value="service">Dúvidas</option>
                                        <option value="suggestions">Sugestões</option>
                                        <option value="product">Reclamações</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Mensagem</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="enviar" class="btn btn-dark text-white pull-right" id="btnContactUs">
                                    Enviar Mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Nosso Escritório</legend>
                    <address>
                        <strong>New Caps Oficial</strong><br>
                        Matozinhos<br>
                        Minas Gerais - Brasil<br>
                        <i class="fa fa-phone mx-2"></i>(123) 456-7890
                    </address>
                    <address>
                        <strong><i class="fa fa-envelope mx-2"></i>Contato</strong><br>
                        <a class="text-white" href="mailto:#">contato@newcapsoficial.com.br</a>
                    </address>
                </form>
            </div>
        </div>
    </div>

</section>

<section style="">
    <div class="py-5">

    </div>
</section>

<?php include "../includes/footer.php"; ?>

<script src="../js/bootstrap4.1.min.js"></script>
<script type="text/javascript">
    $(window).on('load',function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({ 'overflow' : 'visible'})
    });
</script>
</body>
</html>