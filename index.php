<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Az. Agr. Rizzetto</title>
        
        <?php include_once 'INCLUDE/headers.php'; ?>
        
        <script>
            $(document).ready(function() {
                $('.pageContent#homeContent, #outerContainer').css('min-height', $(window).height());
                $('.backBlack').stop().fadeTo(0, 0.75 );
            });
        </script>
    </head>
    <body>
        
        <div id="outerContainer">
        
        <?php
        
        // Imposta la pagina
        $pages = array(
            'home',
            'intro',
            'land',
            'products',
            'contacts',
            'gallery'
        );
        
        $page = 'home';
        
        if (isset($_GET['page']))
        {
            if (in_array($_GET['page'], $pages) )
            {
                $page = $_GET['page'];
            } 
        }
        
        
        // Imposta la lingua
        $languages = array(
            'it',
            'en',
            'de'
        );
        
        $lang = 'it';
        
        if (isset($_GET['lang']))
        {
            if (in_array($_GET['lang'], $languages))
            {
                $lang = $_GET['lang'];
            }
        }
        
        // Tranne che per la home carico la galleria di sfondo
        if ($page != 'home'){
            include_once 'INCLUDE/langStrings.php';
            include_once 'INCLUDE/topMenu.php';
            include_once 'INCLUDE/backGallery.php';
        }
        
        // Carico la pagina
        include_once 'INCLUDE/'.$page.".php";
        
        
        // Tranne che per la home carico le note legali
        if ($page != 'home'){
            include_once 'INCLUDE/legal.php';
        }
        
        ?>
            
        </div>
        
    </body>
</html>
