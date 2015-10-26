<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es"> <!--<![endif]-->
    <head>
        <?php include("includes/head.php") ?>
        
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <header class="quimixLogo" >
        
    </header>
    <?php include("includes/menu.php") ?>
    <main class="main container-fluid">
        <script>
            $.ajax({
                url: 'http://www.behance.net/v2/users/puntoyguion/projects?api_key=ou7brZchU1j4Ig5gvkl2rsz8e2r5hX72',
                type: 'GET'
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {
                console.log("error");
            })
            
        </script>
        <div>
              <h1></h1> 
        </div>
    </main>
    <?php include("includes/footer.php") ?>
    </body>
</html>
