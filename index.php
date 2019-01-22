<?php include('page.php'); 
    
?>
<html>
<head>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1"/>-->
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/carosuel.css">
    <link rel="stylesheet" href="css/bootsrap.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel='stylesheet' href='css/normalize.min.css'>
    <link rel='stylesheet' href='css/stilislider.css'>
    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
    <script src='scripts/slider.js'></script>
    <script src='scripts/slider1.js'></script>
    <script src='scripts/c.js'></script>
    </script><meta charset='UTF-8'>
    

    <style>
        body{
            background-color: white;
        }
        .tit{
            color:white;
            font-size:30px;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }
        .navbar{
            
            border-radius: 0px;
            height:62px;
        }
        .btn-outline-success {
            color: #28a745;
            background-color: transparent;
            background-image: none;
            border-color: #28a745;
        }
        .grid-it,.grid-it3{
            border: 1px solid rgb(244,166,44);

        }
       a{
           color:darkred;
       }


    </style>
    <script type="text/javascript">
        function validSearch(){
            if(document.formsearch.titolo.value==""){
                alert("Inserisci il titolo");
                return false;
            }
            return true;
        }
    </script>

    
    
</head>
<body>
    <?php
        if(isset($_SESSION['email'])){
    ?> 
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <img src="images/nuovo_logo.png" style="width:250px; height:200px; transform: translate(-30px, 8px);" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto" style="transform: translate(-70px, 20px);">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html" style=" margin-top:30px; font-size:20px; ">
                            <img src="images/images_home.png" style="width:35px ;height:30px;">
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contatti.html" style="color:white; margin-top:30px; font-size:20px; transform: translateY(6px);">
                            Contatti
                        </a>
                    </li>    
                </ul>
                
                <form class="form-inline mt-2 mt-md-0" name="formsearch" method="POST" action="server.php" style="transform: translate(100px, 65px); width: 25%;" onsubmit="return validSearch();">
                        <input class="form-control mr-sm-2" type="text" name="titolo" placeholder="Inserisci titolo" aria-label="Inserisci titolo">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="ricerca" type="submit" value="Search" style="transform: translate(200px, -34px);" >Search</button>
                </form>

                
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="carr.html" style="transform: translate(600px, -30px);">
                            <img src="images/images_carrello.png" style="width:30px; height: 30px;"/>
                        </a>php
                    </li>
                <div style="transform: translate(610px, -30px)  ;">
                <h1 style="color:white; font-size: 20px;  "> Benvenuto <?php echo $_SESSION['name']; ?> </h1>
                </div>
                <li class="nav-item" style="transform: translate(690px,-10px); ">
                <a href="index.php?logout='1'"  style="font-size:20px; color:white;"> Logout </a>
                </li>
                </ul>  
            </div>
        </nav>
    </header>
    <?php 
        }
        else{
        ?>
        <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <img src="images/nuovo_logo.png" style="width:250px; height:200px; transform: translate(-30px, 8px);" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto" style="transform: translate(-70px, 10px);">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html" style=" margin-top:30px; font-size:20px; ">
                            <img src="images/images_home.png" style="width:35px ;height:30px;">
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contatti.html" style="color:white; margin-top:30px; font-size:20px; transform: translateY(6px);">
                            Contatti
                        </a>
                    </li>    
                </ul>
                
                <form class="form-inline mt-2 mt-md-0" name="formsearch" method="POST" action="server.php" style="transform: translate(100px, 52px); width: 25%;" onsubmit="return validSearch();">
                        <input class="form-control mr-sm-2" type="text" name="titolo" placeholder="Inserisci titolo" aria-label="Inserisci titolo">
                        <button class="btn btn-outline-success my-2 my-sm-0" name="ricerca" type="submit" value="Search" style="transform: translate(200px, -34px);" >Search</button>
                </form>

                
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="carr.html" style="transform: translate(790px, -40px);">
                            <img src="images/images_carrello.png" style="width:30px; height: 30px;"/>
                        </a>
                    </li>
                    <li class="nav-item" style="transform: translate(800px,-35px); ">
                        <a class="nav-link" href="login.php" style="font-size:20px;color:white; ">Login</a>
                    </li>
                </ul>  
            </div>
        </nav>
    </header>
            
    <?php }?>
                    
                
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Bitter" rel="stylesheet" type="text/css">
        <div class="container">
            <div class="row" style="background-color:black; margin-top:10px; border-radius: 5px 5px 5px 5px; height: 330px;">
                <div class="col-md-12">
                    <div class="carousel carousel-showmanymoveone slide" id="carousel123">
                        <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-xs-3"><a href="film/12soldier.php" style="margin:0px;"><img src="images/12soldier.jpg" class="img-responsive" style="margin:0px; "></a></div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-3"><a href="film/avengers3.php"><img src="images/A1t8xCe9jwL._SY679_.jpg" class="img-responsive" style="height:330px;"></a></div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-3"><a href="film/avengers1.php"><img src="images/avengers1.jpg" class="img-responsive"style="height:330px;" ></a></div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-3"><a href="film/equalizer1.php"><img src="images/equalizer.jpg" class="img-responsive"></a></div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-3"><a href="film/equalizer2.php"><img src="images/equalizer2.jpg" class="img-responsive"></a></div>
                                </div>
                                <div class="item">
                                    <div class="col-xs-3"><a href="film/fury.php" ><img src="images/fury.jpg" class="img-responsive"></a></div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            <a class="right carousel-control" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>  
            <script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js'></script>
            <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <script >
            (function () {
            // setup your carousels as you normally would using JS
            // or via data attributes according to the documentation
            // https://getbootstrap.com/javascript/#carousel
            $('#carousel123').carousel({ interval: 2000 });
                })();
                    
                    (function () {
                    $('.carousel-showmanymoveone .item').each(function () {
                        var itemToClone = $(this);
                    
                        for (var i = 1; i < 4; i++) {if (window.CP.shouldStopExecution(0)) break;
                        itemToClone = itemToClone.next();
                    
                        // wrap around if at end of item collection
                        if (!itemToClone.length) {
                            itemToClone = $(this).siblings(':first');
                        }
                    
                        // grab item, clone, add marker class, add to collection
                        itemToClone.children(':first-child').clone().
                        addClass("cloneditem-" + i).
                        appendTo($(this));
                        }window.CP.exitedLoop(0);
                    });
                    })();
                    //
            </script>  
            
        <br>
        <br>
        <br>
        
        <div class="grid" style="width:70%;">
            <div class="grid-item">
                <a href="film/deadpool2.php" >
                    <img src="images/DEADPOOL2_PosterITA.jpg" title="Clicca per acquistare">
                </a>
                <br>
                <a href="film/deadpool2.php" >
                    Deadpool 2
                </a>
            </div>
            <div class="grid-item">
                <a href="film/jurassicworld-2018.php">
                    <img src="images/locandinapg2.jpg" title="Clicca qui per acquistare">
                </a>
                <br>
                <a href="film/jurassicworld-2018.php">
                    Jurassic World: Il Regno Distrutto 
                </a>
            </div>
            <div class="grid-item">
                <a href="film/passengers.php">
                    <img src="images/locandinapg3.jpg">
                </a>
                <br>
                <a href="film/passengers.php">
                    Passenger
                </a>
            </div>
            <div class="grid-item">
                <a href="film/skyscraper.php"><img src="images/download.jpg">
                </a>
                <br>
                <a href="film/skyscraper.php">
                    SkyScraper
                </a>
            </div>
            <div class="grid-item">
                <a href="film/venom.php">
                    <img src="images/venom.jpg">
                </a>
                <br>
                <a href="film/venom.php">
                    Venom
                </a>
            </div>
            <div class="grid-item">
                <a href="film/fury.php">
                    <img src="images/fury.jpg">
                </a>
                <a href="film/fury.php">
                    Fury
                </a>
            </div>
            <div class="grid-item">
                <a href="film/avengers1.php">
                    <img src="images/avengers1.jpg">
                </a>
                <a href="film/avengers1.php">
                    Avengers
                </a>
            </div>
            <div class="grid-item">
                <a href="film/avengers2.php">
                    <img src="images/avengers2.jpg">
                </a>
                <a href="film/avengers2.php">
                    Avengers: Age of Ultron
                </a>
            </div>
            <div class="grid-item">
                <a href="film/avengers3.php">
                    <img src="images/A1t8xCe9jwL._SY679_.jpg">
                </a>
                <a href="film/avengers3.php">
                    Avengers: Infinity War
                </a>
            </div>
        </div>
        <div class="grid2">
            <div class="grid-it" style="height: 51px; text-align: center; padding-top:2px; padding-bottom:2px; color:black; border-radius: 5px 5px 0px 0px;">Film pi&ugrave; visti</div>
            <div class="grid-it" >
                <a href="film/deadpool2.php">
                    <img src="images/DEADPOOL2_PosterITA.jpg">
                    
                </a>
                <a href="film/deadpool2.php" >
                    Deadpool 2
                </a>
                <p>
                    AZIONE - DURATA 120' - ...
                </p>
            </div>
            <div class="grid-it" >
                <a href="film/avengers3.php">
                    <img src="images/A1t8xCe9jwL._SY679_.jpg">
                </a>
                <a href="film/avengers3.php" >
                    Avengers: Infinity War
                </a>
                <p>
                    AZIONE - AVVENTURA - FANTASY - DURATA 160' - ...
                </p>
            </div>
            <div class="grid-it">
                <a href="film/jurassicworld-2018.php">
                    <img src="images/locandinapg2.jpg">
                </a>
                <a href="film/jurassicworld-2018.php" >
                    Jurassic World: Il regno distrutto 
                </a>
                <p>
                    AZIONE - AVVENTURA- FANTASY - DURATA 128' - ...
                </p>
            </div>
            <div class="grid-it">
                <a href="film/rampage.php">
                    <img src="images/rampage.jpg">
                    
                </a>
                <a href="film/rampage.php" >
                    Rampage: Furia Animale
                </a>
                <p>
                    AZIONE - AVVENTURA - DURATA 107' - ...
                </p>
            </div>
            <div class="grid-it">
                <a href="film/readyplayerone.php">
                    <img src="images/readyforplaerone.jpg">
                    
                </a>
                <a href="film/readyplayerone.php" >
                    Ready Player One
                </a>
                <p>
                    AZIONE - THRILLER - FANTASCIENZA - DURATA 140' - ...
                </p>
            </div>
            <div class="grid-it" >
                <a href="film/redsparrow.php">
                    <img src="images/redsparrow.jpg">
                    
                </a>
                <a href="film/redsparrow.php" >
                    Red Sparrow
                </a>
                <p>
                    THRILLER - DRAMMATICO - DURATA 139' - ...
                </p>
            </div>
            <div class="grid-it" style="border-radius: 0px 0px 5px 5px;">
                <a href="film/12soldier.php">
                    <img src="images/12soldier.jpg">
                    
                </a>
                <a href="film/12soldier.php" >
                    12 Soldier
                </a>
                <p>
                    AZIONE - DRAMMATICO - GUERRA 129' - ...
                </p>
            </div>
        </div>
        <div class="grid3">
                <div class="grid-it3" style="height: 51px; text-align: center; padding-top:2px; padding-bottom:2px; color:black; border-radius: 5px 5px 0px 0px;border-color: rgb(240,166,44);">Nuove Uscite</div>
                <div class="grid-it3">
                    <a href="film/12soldier.php">
                        <img src="images/12soldier.jpg">
                    </a>
                    <a href="film/12soldier.php" >
                        12 Soldier
                    </a>
                    <p>
                        AZIONE - DRAMMATICO - GUERRA 129' - ...
                    </p>
                </div>
                <div class="grid-it3">
                    <a href="film/skyscraper.php">
                        <img src="images/download.jpg">
                    </a>
                    <a href="film/skyscraper.php" >
                        SkyScraper
                    </a>
                    <p>
                        AZIONE - 102' - ...
                    </p>
                    
                </div>
                <div class="grid-it3">
                    <a href="film/venom.php">
                        <img src="images/venom.jpg">
                    </a>
                    <a href="film/venom.php" >
                        Venom
                    </a>
                    <p>
                        AZIONE - HORROR - THRILLER - FANTASCIENZA - 112' - ...
                    </p>
                </div>
                <div class="grid-it3" style="border-radius:0px 0px 5px 5px;">
                    <a href="film/avengers3.php">
                        <img src="images/A1t8xCe9jwL._SY679_.jpg">
                    </a>
                    <a href="film/avengers3.php" >
                        Avengers: Infinity War
                    </a>
                    <p>
                        AZIONE - AVVENTURA - FANTASY - DURATA 160' - ...
                    </p>

                </div>
            </div>
        </div>
        <footer class="pageFooter" style="height:250px;bottom:-1700px;">
            <div class="container-fluid container-footer" style="height:200px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="pageFooter__section  ">
                            <h2 class="pageFooter__title">Chi siamo</h2>
                            <div class="pageFooter__content">
                                <a class="pageFooter__link text-4" target="_blank" href="" rel="nofollow">Chi siamo</a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="pageFooter__section  ">
                            <h2 class="pageFooter__title">Assistenza</h2>
                            <div class="pageFooter__content">
                                <a class="pageFooter__link text-4" target="_blank" href="" rel="nofollow">FAQ</a>
                                <a class="pageFooter__link text-4" target="_blank" href="" rel="nofollow">Pagamenti sicuri</a>
                                <a class="pageFooter__link text-4" target="_blank" href="" rel="nofollow">Resi e rimborsi</a>
                            </div>
                        </div>
                    </div>
                    <div class="pageFooter__section imageCont ">
                        <h2 class="pageFooter__title">Guarda su Nacho.Tv</h2>
                        <div class="pageFooter__content">
                            <img class="pageFooter__littleLogo devicesLogo" style="width:32.95px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0MS4wOSAyNC45MyI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNlNWU1ZTU7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5SaXNvcnNhIDI8L3RpdGxlPjxnIGlkPSJMaXZlbGxvXzIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAyIj48ZyBpZD0iTGl2ZWxsb18xLTIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAxIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xLjU4LDIxLjg3QTEuNTYsMS41NiwwLDAsMSwwLDIwLjQ2di0xOUExLjU5LDEuNTksMCwwLDEsMS42NywwSDM5LjQzYTEuNTksMS41OSwwLDAsMSwxLjY2LDEuNDJ2MTlhMS41OCwxLjU4LDAsMCwxLTEuNjYsMS40MUgxLjU4Wm0uMTktMS43N0gzOS4zM1YxLjc3SDEuNzdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjYuMTEsMjQuOTNIMTVhMS43MSwxLjcxLDAsMCwxLDAtLjc4aDBhMS40NCwxLjQ0LDAsMCwxLDEuMzYtMUgyNC44YTEuNDQsMS40NCwwLDAsMSwxLjM2LDFoMEExLjU5LDEuNTksMCwwLDEsMjYuMTEsMjQuOTNaIi8+PC9nPjwvZz48L3N2Zz4=">
                            <img class="pageFooter__littleLogo devicesLogo" style="width:31.81px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzOC4xOCAyNCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNlNWU1ZTU7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5SaXNvcnNhIDM8L3RpdGxlPjxnIGlkPSJMaXZlbGxvXzIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAyIj48ZyBpZD0iTGl2ZWxsb18xLTIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAxIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zMy4xMSwwaC0yOGExLjUxLDEuNTEsMCwwLDAtMS41LDEuNTFWMTkuMzhhMS41MiwxLjUyLDAsMCwwLDEuNSwxLjQ5aDI4YTEuNzIsMS43MiwwLDAsMCwxLjUxLTEuNzhWMS41MUExLjUzLDEuNTMsMCwwLDAsMzMuMTEsMFptLTE0LC4zMmEuNTQuNTQsMCwxLDEtLjUzLjU1aDBBLjU0LjU0LDAsMCwxLDE5LjEuMzJaTTMyLjg1LDE5LjA3SDUuMzZWMS43N0gzMi44NVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yMS44NSwyMi4xOWgwYzAsLjUtLjI0LjktLjUzLjlIMTYuODhjLS4yOSwwLS41My0uNC0uNTMtLjlIMHYuNzVDMCwyMy41Mi4yOCwyNCwuNjMsMjRIMzcuNTVjLjM1LDAsLjYzLS40OC42My0xLjA2di0uNzVaIi8+PC9nPjwvZz48L3N2Zz4=">
                            <img class="pageFooter__littleLogo devicesLogo" style="width:14.64px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNi41MiAyMi41NSI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNlNWU1ZTU7fTwvc3R5bGU+PC9kZWZzPjx0aXRsZT5SaXNvcnNhIDQ8L3RpdGxlPjxnIGlkPSJMaXZlbGxvXzIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAyIj48ZyBpZD0iTGl2ZWxsb18xLTIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAxIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xNS44OSwwSC42M0EuNjMuNjMsMCwwLDAsMCwuNjNIMFYyMS45MmEuNjMuNjMsMCwwLDAsLjYzLjYzSDE1Ljg5YS42My42MywwLDAsMCwuNjMtLjYzaDBWLjY0QS42My42MywwLDAsMCwxNS45LDBaTTguMjQsMjJhLjU0LjU0LDAsMSwxLC41NC0uNTRoMGEuNTQuNTQsMCwwLDEtLjUxLjU0Wk0xLjc2LDIwLjQxVjEuMzVoMTNWMjAuNDJaIi8+PC9nPjwvZz48L3N2Zz4=">
                            <img class="pageFooter__littleLogo devicesLogo" style="width:9.56px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA5LjA5IDE5Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2U1ZTVlNTt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPlJpc29yc2EgNTwvdGl0bGU+PGcgaWQ9IkxpdmVsbG9fMiIgZGF0YS1uYW1lPSJMaXZlbGxvIDIiPjxnIGlkPSJMaXZlbGxvXzEtMiIgZGF0YS1uYW1lPSJMaXZlbGxvIDEiPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTcuOTEsMEgxLjExQTEuMTEsMS4xMSwwLDAsMCwwLDEuMTFIMHYxNi43QTEuMiwxLjIsMCwwLDAsMS4xOCwxOUg3LjkxYTEuMiwxLjIsMCwwLDAsMS4xOC0xLjE5aDBWMS4xNUExLjIsMS4yLDAsMCwwLDcuOTEsMFpNNC42OCwxOC40OUEuNTUuNTUsMCwwLDEsNCwxOC4xYS41NS41NSwwLDAsMSwuNC0uNjYuNTQuNTQsMCwwLDEsLjY1LjM5LjYyLjYyLDAsMCwxLDAsLjI3LjUzLjUzLDAsMCwxLS4zOS4zNVpNOCwxNi45SDFWMi4yMUg4WiIvPjwvZz48L2c+PC9zdmc+">
                            <img class="pageFooter__littleLogo devicesLogo" style="width:29.27px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIyLjAuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxpdmVsbG9fMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDIyLjEgMTUuMSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjIuMSAxNS4xOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6I0U1RTVFNTt9Cjwvc3R5bGU+Cjx0aXRsZT5SaXNvcnNhIDY8L3RpdGxlPgo8ZyBpZD0iTGl2ZWxsb18yXzFfIj4KCTxnIGlkPSJMaXZlbGxvXzEtMiI+CgkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTEuMSwwQzAuNSwwLDAsMC41LDAsMS4xYzAsMCwwLDAsMCwwdjQuN2MwLDAuMywwLjIsMC41LDAuNSwwLjVIMVYxaDIwdjEzLjFIOC45djAuNWMwLDAuMywwLjIsMC41LDAuNSwwLjUKCQkJaDEyLjJjMC4zLDAsMC41LTAuMiwwLjUtMC41bDAsMFYxLjFDMjIuMSwwLjUsMjEuNiwwLDIxLDBjMCwwLDAsMCwwLDBIMS4xeiIvPgoJPC9nPgo8L2c+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTAuNSw3LjZjLTAuMiwwLTAuMywwLTAuNSwwdjFjMC4yLDAsMC4zLDAsMC41LDBjMy4zLDAsNiwyLjcsNiw2LjFjMCwwLjIsMCwwLjMsMCwwLjV2MGgxdjAKCQljMC0wLjEsMC0wLjMsMC0wLjVDNy42LDEwLjcsNC40LDcuNiwwLjUsNy42eiIvPgo8L2c+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTAuNSw3LjZjLTAuMiwwLTAuMywwLTAuNSwwdjFjMC4yLDAsMC4zLDAsMC41LDBjMy4zLDAsNiwyLjcsNiw2LjFjMCwwLjIsMCwwLjMsMCwwLjV2MGgxdjAKCQljMC0wLjEsMC0wLjMsMC0wLjVDNy42LDEwLjcsNC40LDcuNiwwLjUsNy42eiIvPgo8L2c+CjxnPgoJPHBhdGggY2xhc3M9InN0MCIgZD0iTTAuMSwxMEwwLjEsMTBMMCwxMWgwLjFjMi4xLDAsMy44LDEuNywzLjgsMy44YzAsMC4xLDAsMC4yLDAsMC4yaDFjMC0wLjEsMC0wLjIsMC0wLjJDNC45LDEyLjIsMi43LDEwLDAuMSwxMAoJCXoiLz4KPC9nPgo8Zz4KCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0wLjMsMTIuOWMtMC4xLDAtMC4yLDAtMC4zLDBsMCwyLjF2MGgyLjJ2MGMwLTAuMSwwLTAuMiwwLTAuM0MyLjIsMTMuNywxLjQsMTIuOSwwLjMsMTIuOXoiLz4KPC9nPgo8cmVjdCB5PSIxNS4xIiBjbGFzcz0ic3QwIiB3aWR0aD0iMi4yIiBoZWlnaHQ9IjAiLz4KPHJlY3QgeD0iNi41IiB5PSIxNS4xIiBjbGFzcz0ic3QwIiB3aWR0aD0iMSIgaGVpZ2h0PSIwIi8+Cjwvc3ZnPgo=">
                        </div>
                    </div>
                    </div>
                    
                    
                    <div class="col-xs-12 col-sm-3" style="float:right; transform: translateY(-150px);">
                        <div class="pageFooter__section imageCont ">
                            <h2 class="pageFooter__title">Seguici su</h2>
                                <div class="pageFooter__content">
                                    <a target="_blank" href="https://facebook.com/" rel="nofollow">
                                        <img class="pageFooter__littleLogo" style="width:10.8px;" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGl2ZWxsb18xIiBkYXRhLW5hbWU9IkxpdmVsbG8gMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAuODEgMjAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojYjNiM2IzO308L3N0eWxlPjwvZGVmcz48dGl0bGU+cml0YWdsaV9mb290ZXJfMTI3MjwvdGl0bGU+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTAuNDEsMEg3LjgxQTQuNTUsNC41NSwwLDAsMCwzLDQuOTJWNy4xOUguNDFBLjQxLjQxLDAsMCwwLDAsNy42djMuMjlhLjQxLjQxLDAsMCwwLC40MS40MUgzdjguM2EuNDEuNDEsMCwwLDAsLjQxLjQxaDMuNGEuNDEuNDEsMCwwLDAsLjQxLS40MVYxMS4zaDNhLjQxLjQxLDAsMCwwLC40MS0uNDFWNy42YS40MS40MSwwLDAsMC0uNDEtLjQxSDcuMjNWNS4yN2MwLS45Mi4yMi0xLjM5LDEuNDItMS4zOWgxLjc1YS40MS40MSwwLDAsMCwuNDEtLjQxVi40MUEuNDEuNDEsMCwwLDAsMTAuNDEsMFoiLz48L3N2Zz4="></a>
                                    <a target="_blank" href="https://www.instagram.com/" rel="nofollow">
                                        <img class="pageFooter__littleLogo" style="width:20px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxpdmVsbG9fMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDIwIDIwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyMCAyMDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgoJLnN0MHtmaWxsOiNCM0IzQjM7fQo8L3N0eWxlPgo8dGl0bGU+cml0YWdsaV9mb290ZXJfMTI3MjwvdGl0bGU+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xMCw2LjZjLTEuOSwwLTMuNCwxLjUtMy40LDMuNGMwLDEuOSwxLjUsMy40LDMuNCwzLjRjMS45LDAsMy40LTEuNSwzLjQtMy40QzEzLjQsOC4xLDExLjksNi42LDEwLDYuNnoKCSBNMTAsNi42Yy0xLjksMC0zLjQsMS41LTMuNCwzLjRjMCwxLjksMS41LDMuNCwzLjQsMy40YzEuOSwwLDMuNC0xLjUsMy40LTMuNEMxMy40LDguMSwxMS45LDYuNiwxMCw2LjZ6IE0xNC41LDBoLTkKCUMyLjUsMCwwLDIuNSwwLDUuNXY5YzAsMywyLjUsNS41LDUuNSw1LjVoOWMzLDAsNS41LTIuNSw1LjUtNS41di05QzIwLDIuNSwxNy41LDAsMTQuNSwweiBNMTAsMTUuMmMtMi44LDAtNS4yLTIuMy01LjItNS4yCgljMC0yLjgsMi4zLTUuMiw1LjItNS4yYzIuOCwwLDUuMiwyLjMsNS4yLDUuMkMxNS4yLDEyLjgsMTIuOCwxNS4yLDEwLDE1LjJ6IE0xNi4zLDUuNmMtMC4yLDAuMi0wLjYsMC40LTAuOSwwLjQKCWMtMC4zLDAtMC43LTAuMS0wLjktMC40Yy0wLjItMC4yLTAuNC0wLjYtMC40LTAuOWMwLTAuMywwLjEtMC43LDAuNC0wLjljMC4yLTAuMiwwLjYtMC40LDAuOS0wLjRjMC4zLDAsMC43LDAuMSwwLjksMC40CgljMC4yLDAuMiwwLjQsMC42LDAuNCwwLjlDMTYuNyw1LDE2LjUsNS4zLDE2LjMsNS42eiBNMTAsNi42Yy0xLjksMC0zLjQsMS41LTMuNCwzLjRjMCwxLjksMS41LDMuNCwzLjQsMy40YzEuOSwwLDMuNC0xLjUsMy40LTMuNAoJQzEzLjQsOC4xLDExLjksNi42LDEwLDYuNnoiLz4KPC9zdmc+Cg=="></a>
                                    <a target="_blank" href="https://www.youtube.com/" rel="nofollow">
                                        <img class="pageFooter__littleLogo" style="width:28.25px;" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGl2ZWxsb18xIiBkYXRhLW5hbWU9IkxpdmVsbG8gMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMjguMjYgMjAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojYjNiM2IzO308L3N0eWxlPjwvZGVmcz48dGl0bGU+cml0YWdsaV9mb290ZXJfMTI3MjwvdGl0bGU+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjIuMzksMEg1Ljg3QTUuODcsNS44NywwLDAsMCwwLDUuODd2OC4yNkE1Ljg3LDUuODcsMCwwLDAsNS44NywyMEgyMi4zOWE1Ljg3LDUuODcsMCwwLDAsNS44Ny01Ljg3VjUuODdBNS44Nyw1Ljg3LDAsMCwwLDIyLjM5LDBabS00LDEwLjRMMTAuNywxNC4wOWEuMzEuMzEsMCwwLDEtLjQ0LS4yOFY2LjIxYS4zMS4zMSwwLDAsMSwuNDUtLjI4bDcuNzMsMy45MkEuMzEuMzEsMCwwLDEsMTguNDIsMTAuNFoiLz48L3N2Zz4="></a>
                                </div>
                        </div>
                        <div class="pageFooter__section imageCont lastRow ">
                            <h2 class="pageFooter__title">Metodo di pagamento</h2>
                            <div class="pageFooter__content">
                                <img class="pageFooter__littleLogo" style="width:17.8px;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0MzcuMyA1MTIiPjx0aXRsZT5SaXNvcnNhIDE8L3RpdGxlPjxnIGlkPSJMaXZlbGxvXzIiIGRhdGEtbmFtZT0iTGl2ZWxsbyAyIj48ZyBpZD0iQ2FwYV8xIiBkYXRhLW5hbWU9IkNhcGEgMSI+PHBhdGggZD0iTTM3Mi4zNiwzOC42MkMzNDguNDksMTEuNTgsMzA1LjI5LDAsMjUwLDBIODkuNjRBMjIuOTQsMjIuOTQsMCwwLDAsNjcsMTkuMkwuMTcsNDM5LjM5YTEzLjcsMTMuNywwLDAsMCwxMy42LDE1Ljc4aDk5bDI0Ljg2LTE1Ni40OC0uNzcsNC45M2EyMi44NiwyMi44NiwwLDAsMSwyMi42My0xOS4yaDQ3YzkyLjQ1LDAsMTY0LjgtMzcuMjUsMTg2LTE0NSwuNjQtMy4yLDEuNjMtOS4zNCwxLjYzLTkuMzRDNDAwLjE0LDkwLjIxLDM5NC4wOSw2My4xNywzNzIuMzYsMzguNjJaIiBmaWxsPSIjYjNiM2IzIi8+PHBhdGggZD0iTTQxOS4xOCwxNTAuNWMtMjMsMTA2LjA4LTk2LjI5LDE2Mi4yLTIxMi42NCwxNjIuMkgxNjQuMzZMMTMyLjg3LDUxMmg2OC40MmEyMCwyMCwwLDAsMCwxOS44NC0xNi44M2wuOC00LjIzTDIzNy42NywzOTJsMS01LjQ0YTIwLDIwLDAsMCwxLDE5LjgtMTYuODNIMjcxYzgwLjg2LDAsMTQ0LjE2LTMyLjU4LDE2Mi42NS0xMjYuODJDNDQxLjEsMjA1LjEyLDQzNy41MSwxNzMuNDEsNDE5LjE4LDE1MC41WiIgZmlsbD0iI2IzYjNiMyIvPjwvZz48L2c+PC9zdmc+">
                                <img class="pageFooter__littleLogo" style="width:29.27px;" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGl2ZWxsb18xIiBkYXRhLW5hbWU9IkxpdmVsbG8gMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMjkuNzEgMjAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojOWM5YzljO30uY2xzLTJ7ZmlsbDojZmZmO30uY2xzLTN7ZmlsbDojY2NjO308L3N0eWxlPjwvZGVmcz48dGl0bGU+cml0YWdsaV9mb290ZXJfMTI3MjwvdGl0bGU+PHBvbHlnb24gY2xhc3M9ImNscy0xIiBwb2ludHM9IjI5LjIxIDIwIDAuNTEgMjAgMCAyMCAwIDE5LjQ5IDAgMC41MSAwIDAgMC41MSAwIDI5LjIxIDAgMjkuNzEgMCAyOS43MSAwLjUxIDI5LjcxIDE5LjQ5IDI5LjcxIDIwIDI5LjIxIDIwIDI5LjIxIDIwIi8+PHBvbHlnb24gY2xhc3M9ImNscy0yIiBwb2ludHM9IjI5LjIxIDE5LjQ5IDAuNTEgMTkuNDkgMC41MSAwLjUxIDI5LjIxIDAuNTEgMjkuMjEgMTkuNDkgMjkuMjEgMTkuNDkiLz48cG9seWdvbiBjbGFzcz0iY2xzLTEiIHBvaW50cz0iMTAuODggMTMuMDkgMTIuNzUgNi45NCAxNC40MSA2Ljk0IDEyLjU0IDEzLjA5IDEwLjg4IDEzLjA5IDEwLjg4IDEzLjA5Ii8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTAuMTMsNi45NCw4LjY0LDkuNTVBNi4zMSw2LjMxLDAsMCwwLDcuOTMsMTFoMGMwLS41NSwwLTEuMjItLjA1LTEuNkw3LjcyLDYuOTRINC45MnYuMTdBMS4xNiwxLjE2LDAsMCwxLDYuMSw4LjIxbC41NSw0Ljg4SDguNDFsMy40OC02LjE1SDEwLjEzWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTIzLjA2LDEzLjA4bDAtLjkySDIwLjk1bC0uNDIuOTJIMTguNzJMMjIsNi45M2gyLjIybC41NSw2LjE1aC0xLjdabS0uMTktMy42MmExNC4xNiwxNC4xNiwwLDAsMSwwLTEuNDVoMGMtLjEuMzEtLjU0LDEuMjItLjczLDEuNjdMMjEuNTIsMTFIMjNMMjIuOSw5LjQ5aDBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTYuMTUsMTMuMjZhNC42Miw0LjYyLDAsMCwxLTIuNTEtLjcxbC43Ny0xLjIxYTMuMDgsMy4wOCwwLDAsMCwxLjc5LjYuNzcuNzcsMCwwLDAsLjczLS4zNWMuMjMtLjQtLjA1LS42Mi0uNy0xbC0uMzItLjIxYy0xLS42Ni0xLjM4LTEuMjgtLjkyLTIuMzhhMi4zMSwyLjMxLDAsMCwxLDIuMzEtMS4yMywzLjcyLDMuNzIsMCwwLDEsMi4xNi43N2wtLjkxLDEuMDdhMiwyLDAsMCwwLTEuMjktLjU2Ljc3Ljc3LDAsMCwwLS43MS4zMmMtLjE4LjM1LjA1LjU4LjU2Ljg5bC4zOC4yNWMxLjE3Ljc3LDEuNDUsMS41NCwxLjE1LDIuMjNhMi40MSwyLjQxLDAsMCwxLTIuNTIsMS41NGgwWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI1LjI1LDcuNzdoLS4wOFY3LjMzaC4xNWMuMTEsMCwuMTYsMCwuMTYuMTJhLjEyLjEyLDAsMCwxLS4xMS4xMmgwbC4xMi4xOWgtLjA4bC0uMTItLjE4aDB2LjE4Wm0uMDgtLjI1Yy4wNSwwLC4xLDAsLjEtLjA3cy0uMDUtLjA2LS4wOS0uMDZoLS4wOHYuMTNoLjA4Wm0wLC40MmEuNC40LDAsMSwxLC4zOC0uNDJzMCwwLDAsMGEuMzguMzgsMCwwLDEtLjM4LjM5Wm0wLS43MmEuMzMuMzMsMCwxLDAsLjMuMzZ2MGEuMzEuMzEsMCwwLDAtLjI4LS4zM1oiLz48cG9seWdvbiBjbGFzcz0iY2xzLTMiIHBvaW50cz0iMjguNSAxNC45OSAxLjI2IDE0Ljk5IDEuMjYgMTguNjQgMjguNSAxOC42NCAyOC41IDE0Ljk5IDI4LjUgMTQuOTkiLz48cG9seWdvbiBjbGFzcz0iY2xzLTEiIHBvaW50cz0iMjguNDUgMS40MiAxLjIxIDEuNDIgMS4yMSA1LjA2IDI4LjQ1IDUuMDYgMjguNDUgMS40MiAyOC40NSAxLjQyIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjcuODIsMTguMzhoLS4wN3YtLjQ0aC4xN2MuMTEsMCwuMTYsMCwuMTYuMTJhLjEyLjEyLDAsMCwxLS4xMS4xMmgwbC4xMi4xOUgyOGwtLjEyLS4xOGgtLjA3di4xOGgwWm0uMDgtLjI1Yy4wNSwwLC4xLDAsLjEtLjA3cy0uMDUtLjA2LS4wOS0uMDZoLS4wOHYuMTNoLjA4Wm0wLC40MmEuNC40LDAsMSwxLC4zOC0uNDJ2MGEuMzguMzgsMCwwLDEtLjM3LjRabTAtLjcyYS4zMy4zMywwLDEsMCwuMy4zNnYwYS4zMS4zMSwwLDAsMC0uMjgtLjMzWiIvPjwvc3ZnPg==">
                                <img class="pageFooter__littleLogo" style="width:25.75px;" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGl2ZWxsb18xIiBkYXRhLW5hbWU9IkxpdmVsbG8gMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMjUuNzYgMjAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojZmZmO30uY2xzLTJ7ZmlsbDojYWJhYmFiO30uY2xzLTN7ZmlsbDojNzA3MDcwO30uY2xzLTR7ZmlsbDojZDFkMWQxO308L3N0eWxlPjwvZGVmcz48dGl0bGU+cml0YWdsaV9mb290ZXJfMTI3MjwvdGl0bGU+PHBhdGggaWQ9Il9UcmFjY2lhdG9fY29tcG9zdG9fIiBkYXRhLW5hbWU9IiBUcmFjY2lhdG8gY29tcG9zdG8gIiBjbGFzcz0iY2xzLTEiIGQ9Ik00LjY5LDE5LjkzVjE4LjYxQS43Ny43NywwLDAsMCw0LDE3Ljc3SDMuODZhLjgyLjgyLDAsMCwwLS43Ny4zOC43Ny43NywwLDAsMC0uNy0uMzguNy43LDAsMCwwLS42Mi4zMnYtLjI2SDEuMzV2Mi4xMWguNDZWMTguNzZhLjQ5LjQ5LDAsMCwxLC40Mi0uNTZoLjFhLjQ2LjQ2LDAsMCwxLC40Ni41NnYxLjE4aC40NlYxOC43NmEuNS41LDAsMCwxLC40My0uNTZoLjA4YS40Ni40NiwwLDAsMSwuNDYuNTZ2MS4xOGguNDZabTYuODctMi4xMWgtLjc3di0uNjRoLS40NnYuNjRIOS45di40MWguNDN2MWEuNjYuNjYsMCwwLDAsLjc3Ljc3LDEuMDgsMS4wOCwwLDAsMCwuNTgtLjE2bC0uMTMtLjM5YS44NS44NSwwLDAsMS0uNDEuMTIuMjkuMjksMCwwLDEtLjMxLS4zNXYtLjk1aC43N1YxNy44Wm0zLjkyLS4wNWEuNjIuNjIsMCwwLDAtLjU2LjMxdi0uMjVoLS40NXYyLjExaC40NlYxOC43NWEuNDUuNDUsMCwwLDEsLjM1LS41NGguMWEuNzcuNzcsMCwwLDEsLjI4LjA1bC4xNC0uNDNhMSwxLDAsMCwwLS4zMy0uMDVoMFpNOS41NSwxOGExLjU4LDEuNTgsMCwwLDAtLjg2LS4yMi43Ny43NywwLDAsMC0uODguNjR2MGEuNjguNjgsMCwwLDAsLjczLjYyaC4yMmMuMjUsMCwuMzcuMS4zNy4yMnMtLjE3LjI1LS40OC4yNWExLjEzLDEuMTMsMCwwLDEtLjcxLS4yMmwtLjIyLjM2YTEuNTQsMS41NCwwLDAsMCwuOTEuMjguNzcuNzcsMCwwLDAsMS0uNjkuNjguNjgsMCwwLDAtLjczLS42M0g4LjZjLS4yLDAtLjM2LS4wNy0uMzYtLjIxcy4xNS0uMjUuNC0uMjVhMS4zNiwxLjM2LDAsMCwxLC42Ni4xOFptMTIuMjktLjIyYS42Mi42MiwwLDAsMC0uNTYuMzF2LS4yNWgtLjQ1djIuMTFoLjUxVjE4Ljc1YS40NS40NSwwLDAsMSwuMzUtLjU0aC4xYS43Ny43NywwLDAsMSwuMjguMDVsLjE0LS40M2ExLDEsMCwwLDAtLjMzLS4wNWgwWk0xNiwxOC44OEExLjA3LDEuMDcsMCwwLDAsMTcsMjBoLjFhMS4xMSwxLjExLDAsMCwwLC43Ny0uMjVsLS4yMi0uMzdhLjkzLjkzLDAsMCwxLS41NS4xOS42OC42OCwwLDEsMSwwLTEuMzUuOTMuOTMsMCwwLDEsLjU1LjE5bC4yMi0uMzdhMS4xMSwxLjExLDAsMCwwLS43Ny0uMjUsMS4wNywxLjA3LDAsMCwwLTEuMTMsMXMwLC4wNywwLC4xWm00LjMxLDBWMTcuODJIMTkuOHYuMjVhLjc3Ljc3LDAsMCwwLS42Ny0uMzEsMS4xMSwxLjExLDAsMCwwLDAsMi4yMi43Ny43NywwLDAsMCwuNjctLjMxdi4yNWguNDZWMTguODdabS0xLjcxLDBhLjY0LjY0LDAsMSwxLC42NC42OC42NC42NCwwLDAsMS0uNjQtLjY4czAsMCwwLDBaTTEzLDE3Ljc3QTEuMTEsMS4xMSwwLDAsMCwxMywyMGExLjI4LDEuMjgsMCwwLDAsLjg3LS4zbC0uMjItLjM0YTEsMSwwLDAsMS0uNjEuMjIuNTguNTgsMCwwLDEtLjYzLS41MWgxLjU0di0uMThhMSwxLDAsMCwwLS45Mi0xLjFoMFptMCwuNDFhLjUyLjUyLDAsMCwxLC41NC41MUgxMi40MmEuNTUuNTUsMCwwLDEsLjU2LS41MWgwWm0xMS41My43VjE3aC0uNDZ2MS4xMWEuNzcuNzcsMCwwLDAtLjY3LS4zMSwxLjExLDEuMTEsMCwwLDAsMCwyLjIyLjc3Ljc3LDAsMCwwLC42Ny0uMzF2LjI1aC40NlptLTEuNzEsMGEuNjQuNjQsMCwxLDEsLjY0LjY4LjY0LjY0LDAsMCwxLS42NC0uNjhzMCwwLDAsMFptLTE1LjUzLDBWMTcuODJINi44M3YuMjVhLjc3Ljc3LDAsMCwwLS42Ny0uMzEsMS4xMSwxLjExLDAsMCwwLDAsMi4yMi43Ny43NywwLDAsMCwuNjctLjMxdi4yNWguNDZWMTguODhabS0xLjcxLDBhLjY0LjY0LDAsMSwxLC42NC42OC42NC42NCwwLDAsMS0uNjQtLjY4czAsMCwwLS4wNloiLz48ZyBpZD0iX0dydXBwb18iIGRhdGEtbmFtZT0iIEdydXBwbyAiPjxyZWN0IGNsYXNzPSJjbHMtMiIgeD0iOS40IiB5PSIxLjcxIiB3aWR0aD0iNi45NyIgaGVpZ2h0PSIxMi41MiIvPjxwYXRoIGlkPSJfVHJhY2NpYXRvXyIgZGF0YS1uYW1lPSIgVHJhY2NpYXRvICIgY2xhc3M9ImNscy0zIiBkPSJNOS44MSw4QTgsOCwwLDAsMSwxMi44OCwxLjdhOCw4LDAsMSwwLDAsMTIuNTJBOCw4LDAsMCwxLDkuODEsOFoiLz48cGF0aCBjbGFzcz0iY2xzLTQiIGQ9Ik0yNS43Niw4YTgsOCwwLDAsMS0xMi44OCw2LjI2LDgsOCwwLDAsMCwwLTEyLjUyQTgsOCwwLDAsMSwyNS43Niw4WiIvPjwvZz48L3N2Zz4=">                               </div>
                        </div>
                    </div>   
                </div>
            </div>
        </footer>  
        

       
        
    </body>
</html>
