<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=0" />             
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/materialize.css" />
        <title>Financeiro</title>
    </head>
<body>
    <header>

    </header>
    
     <div id="pagina">
        <?php $this->loadViewinTemplate($viewName, $viewData); ?>
    </div>

    <footer>

    </footer>
    <script type="text/javascript">
        var BASE_URL = '<?php echo BASE_URL; ?>';
    </script> 
    <!-- Jquery antes do Materialize -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/css/jquery-3.3.1.min.js"></script>      
    <!-- Materialize -->
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/css/materialize.js"></script>
</body>
</html>
