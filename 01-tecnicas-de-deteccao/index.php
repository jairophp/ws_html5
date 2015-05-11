<?php
/**
 * Created by PhpStorm.
 * User: jairo.sousa
 * Date: 11/05/2015
 * Time: 15:08
 */
?>
<!DOCTYPE html>
<html>
<head lang="pt-Br">
    <meta charset="UTF-8">
    <title></title>

    <script src="js/modernizr.custom.87867.js"></script>
    <script>
        function teste(texto){
           document.getElementById('teste').innerHTML = '<p>' + texto + '</p>';
        }
        window.onload = function(){
            if(Modernizr.localstorage){
               teste('podemos armazenar offiline!');
            }
        };
    </script>
</head>
<body>
     <div id="teste">

     </div>
</body>
</html>