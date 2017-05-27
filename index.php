<?php
    require_once __DIR__.'/includes/config.php';
    /*require_once('includes/ViewScripts/NoticiasVista.php');*/
    use \estatica\includes\Aplicacion as App;
    use \estatica\includes\ViewScripts\NoticiasVista as NV;
                    
?>
<!DOCTYPE html>
<html>
<head>
    <title>YourHealth</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/YourHealthIco.ico" />
    <link rel="stylesheet" type="text/css" href="css/comun.css">
    <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class = "contenedor">

        <?php
            include 'comun/cabecera.php';
            /*include('comun/menu.php');*/
        ?>

        <div class = "cuerpo">
            
                
    <!-- #region Jssor Slider Begin -->
    <script src="js/jssor.slider-23.1.6.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Outside:true,$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1800,x:1,y:0.2,$Delay:30,$Cols:10,$Rows:5,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$Reverse:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2050,$Easing:{$Left:$Jease$.$InOutSine,$Top:$Jease$.$OutWave,$Clip:$Jease$.$InOutQuad},$Outside:true,$Round:{$Top:1.3}},
              {$Duration:1000,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,y:-1,$Cols:12,$Formation:$JssorSlideshowFormations$.$FormationStraight,$ChessMode:{$Column:12}},
              {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

    <div id="jssor_1">

        <!-- Loading Screen -->
        <div data-u="slides">
            <div>
                <img data-u="image" src="img/pasillo.png" />
            </div>
            <div>
                <img data-u="image" src="img/quirofano.png" />
            </div>
            <div>
                <img data-u="image" src="img/tecnologiaHospital.png" />
            </div>
            <div>
                <img data-u="image" src="img/salaespera.png" />
            </div>
            <div>
                <img data-u="image" src="img/salaQuirofano.png" />
            </div>
        </div>
    </div>

    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    

                <?php

                    $app = App::getSingleton();

                    /*$vista = new NoticiasVista();
                    $vista->muestraUnaNoticia();*/
                    NV::muestraUnaNoticia();

                ?>


            <div class = "fotosIndex">
                <div class = "citaOnline">
                    <a href="Login.php"><img class="citaOnline" src="img/citaonline.jpg"></a>
                </div>

                <div class = "listaQuirur">
                    <a href="listaQuirurgica.php"><img class="listaQuirur" src="img/listaespera.jpg"></a>
                </div>

                <div class = "donaSangr">
                    <a href="donaSangre.php"><img class="donaSangr" src="img/dona.jpg"></a>
                </div>

            </div>
        </div>
        <?php include 'comun/pie.php';?>

    </div>
</body>
</html>