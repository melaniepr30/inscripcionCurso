<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Defensoría Pública Electoral para Pueblos y Comunidades Indígenas SIDEPE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Estilos -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <link href="css/sm-core-css.css" rel="stylesheet" type="text/css" />
        <link href="css/sm-mainMenu.css" rel="stylesheet" type="text/css" />
        <link href="css/tepjf.css" rel="stylesheet" type="text/css">
        <link href="css/defensoriaPublica.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
        <!-- /Estilos -->
        <!--<script src='js/jquery-3.1.1.js'></script>-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/js.js"></script>
        <script type="text/javascript" src='js/bootstrap.min.js'></script>
        <!--Datepicker plugin -->
        <script type="text/javascript" src='js/bootstrap-datetimepicker.min.js'></script>
        <!-- SmartMenus jQuery plugin -->
        <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
        <!-- SmartMenus jQuery init -->
        <script type="text/javascript">
            $(function() {
                $('#main-menu').smartmenus({
                    subMenusSubOffsetX: 1,
                    subMenusSubOffsetY: -8
                });
            });
        </script>
        <!--Datetimepicker init-->
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker').datetimepicker({
                    format:'Y-m-d H:i',
            });
        </script>

        <script type="text/javascript">
         $('#divMiCalendario').datetimepicker({
              format: 'YYYY-MM-DD HH:mm'       
          });
          $('#divMiCalendario').data("DateTimePicker").show();
       </script>
    </head>
    
    <body>
        <div class="container">
        <!--inicia header-->
        <header>
          <?php include 'index/header.html'; ?> 
        </header>
        <!--termina header-->
        
        <!--inicia menu principal-->
        <div>
            <?php include 'index/menu.html'; ?> 
        </div>
         <!--termina menu principal-->
        
        <!-- contenido --> 
        <div>
            <?php include 'content.php'; ?> 
        </div>
        <!--termina contenido -->
       
        <!--inicia footer-->
        <footer>
            <?php include 'index/footer.html'; ?>
        </footer>
        <!--termina footer-->
        </div>
    </body>
</html>
