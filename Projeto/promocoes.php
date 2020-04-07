<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title> Padoka Hill Valley </title>   
    </head>
    <body>
        <?php require_once('head.php'); ?>
        
        <div class="containerConteudo espaco">
            <div class="conteudoSecundario">
                <div class="tituloPaginas">
                    <h1> Promoções atuais de nossa padaria: </h1>
                </div>
                    <div class="containerSessaoPromocao">
                        <?php require('mods/card.php'); ?>  
                    </div>
                </div>
            </div>
        
        <?php require_once('foot.php'); ?>  
    </body>
</html>