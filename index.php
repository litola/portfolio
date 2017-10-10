<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ocho-Cinco</title>
    <meta name="description" content="Agencia de mercadotecnia digital" />
    <meta name="keywords" content="website, pagina web, diseño, publicidad en linea, adwords, redes sociales, facebook, twitter, logos, branding, " />
    <meta name="author" content="Ocho cinco" />
    
<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
-->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>

        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		<!-- Demo content -->			
		<div id="page-content">
            
            <div id="slides-container">
                <div id="slides"
                    data-0="transform:translate(0%,0%);"
                    data-150p="transform:translate(0%,-50%);"
                    data-200p=""
                    data-300p="transform:translate(-50%,-50%);"
                    data-350p=""
                    data-450p="transform:translate(-50%,0%);"
                >
                    <div id="slide-1" class="slide">
                        <div class="caption1"
                            data-40p="opacity: 1; transform:translate(0px,0px);"
                            data-70p="opacity: 0; transform:translate(0px,-100%);"
                            data-anchor-target="#helper"
                        >
                          <div class="logo"> <img src="img/blanco85.png" alt="85 Ocho cinco Logo"></div>
                            <h1>Publicidad y </br>Marketing Digital</h1>
                        </div>
                    </div>
                    <div id="slide-2" class="slide">
                        <div class="caption"
                            data-130p="opacity: 0; transform:translate(0px,-200%);"
                            data-180p="opacity: 1; transform:translate(0px,0px);"
                            data-250p=""
                            data-280p="opacity: 0; transform:translate(-100px,0px);"
                            data-anchor-target="#helper"
                        >
                            <h1>Publicidad en linea</h1>
                            <p></p>
                        </div>
                    </div>
                    <div id="slide-3" class="slide">
                        <div class="caption"
                            data-250p="opacity: 0; transform:translate(300px,0px);"
                            data-300p="opacity: 1; transform:translate(0px,0px);"
                            data-anchor-target="#helper"
                        >
                            <h1>Diseño y Branding</h1>
                            <p></p>
                        </div>
                    </div>
                    <div id="slide-4" class="slide">
                        <div class="caption"
                            data-430p="opacity: 0;"
                            data-450p="opacity: 1;"
                            data-anchor-target="#helper"
                        >
                            <?php 
                            include("contact.php");
                            
                            ?>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="helper">
                <div class="marker red"></div>
                <div class="marker green"></div>
                <div class="marker blue"></div>
                <div class="marker yellow"></div>
            </div>





		</div>
		<!-- /Demo content -->

        <!-- Include Skrollr.js -->
        <script src="js/skrollr.min.js"></script>
        <script type="text/javascript">
            var s = skrollr.init();
        </script>
        

</body>
</html>