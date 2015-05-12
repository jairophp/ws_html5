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
           document.getElementById('teste').innerHTML += '<p>' + texto + '</p>';
        }
        window.onload = function(){
            if(Modernizr.localstorage){
               teste('podemos armazenar offline!');
            }
            if(Modernizr.geolocation){
                teste('podemos te encontrar!');
            }
            if(Modernizr.input.placeholder){
                teste('podemos utilizar placeholder!');
            }
            if(Modernizr.inputtypes.date){
                teste('podemos utilizar type date');
            }else{
                teste('<b> Nao podemos utilizar o type date</b>');
                Modernizr.load('js/jquery-2.1.4.min.js');
            }

        };

        function check(){
            if(Modernizr.inputtypes.date){
                document.getElementById('date').setAttribute('type', 'date');
            }else{
               $(function(){
                  var i = 0;
                   $('#date').attr('maxLength','10');
                   $('#date').keyup(function (){
                       i++;
                       if(i % 2 === 0 && i < 6){
                           $(this).val($(this).val()+ '/');
                       }
                   });
               });
            }
        };
    </script>
</head>
<body>
     <div id="teste">

     </div>
   <input type="text" name="data" id="date" onfocus="check()" placeholder="Informe uma Data" />
</body>
</html>