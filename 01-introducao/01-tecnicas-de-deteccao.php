<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>

        <script src="js/modernizr.custom.69742.js"></script>
        <script>
            function teste(texto) {
                var div = document.getElementById('teste');
                div.innerHTML += '<p>' + texto + '</p>';
            }

            window.onload = function() {
                if (Modernizr.localstorage) {
                    teste('Podemos armazenar offline!');
                }

                if (Modernizr.geolocation) {
                    teste('Podemos te encontrar!');
                }

                if (Modernizr.input.placeholder) {
                    teste('Podemos trabalhar com placeholder!');
                }

                if (Modernizr.inputtypes.date) {
                    teste('Podemos trabalhar com datas!');
                    document.getElementById('date').setAttribute('type', 'date');
                } else {
                    teste('<b>Não podemos trabalhar com datas, vamos ao jQuery!</b>');
                    Modernizr.load('js/jquery-2.1.1.min.js');

                    $(function() {
                        var i = 0;
                        $('#date').attr('maxlength', '10');
                        $('#date').keyup(function() {
                            i++;
                            if (i % 2 === 0 && i < 6) {
                                $(this).val($(this).val() + '/');
                            }
                        });
                    });
                }
            };
        </script>

    </head>
    <body>

        <div id="teste"></div>
        <input type="text" id="date" placeholder="Informe a Data:">

    </body>
</html>
