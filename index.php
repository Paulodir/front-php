<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Frontend Gincana - PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            *{
                font-family: Helvetica,sans-serif;
            }
            .content{
                margin: 50px;
                border-radius: 8px;
                background-color: #efefef;
                min-height: 50px;
                min-width: 50px;
                max-width: 400px
            }
        </style>
    </head>
    <body>
        <h1>Frontend Gincana - PHP</h1>
        <h3>Comunicação com web service via php</h3>
        <p>http://senacsmo.educacao.ws/paulodir/</p>

        <h1>Prova</h1>
        <a href="getprova.php" id="getprova">GET</a>

        <div class="content"></div>

        <form name="cliente" method="POST" action="postprova.php">
            <input type="hidden" name="id" value="">
            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" id="nome" value=""><br>
            <label for="descricao">descricao</label><br>
            <input type="descricao" name="descricao" id="descricao" value=""><br>
            <label for="num_int">Nº Integrantes</label><br>
            <input type="num_int" name="num_int" id="num_int" value=""><br><br>
            <button type="submit">Enviar</button>
            <button type="reset">Cancelar</button>
        </form>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>        
        <script src="script.js?1" type="text/javascript"></script>
    </body>
</html>
