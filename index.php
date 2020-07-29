<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
       <pre>
          <h1>Roteador Intelbras</h1>
    <body>
        <?php
           include_once 'Roteador301.php';
               $r = new Roteador301();
               $r->ligar();
               $r->conectadoarede();
               print_r($r);
        ?>
    </body>
       </pre>
</html>
