<?php

// Adds Variables
require('require/config.php');


require('require/header.php');
?>

    <link rel="stylesheet" href="js/button.css">
    <link rel="stylesheet" href="js/move.css">
    <link rel="stylesheet" href="beak/index.css">
    <link rel="canonical" href="index-2.html" />
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Montserrat:700,700italic,400,400italic,900,900italic%7CRubik:400,400italic,300,300italic,500,500italic,700,700italic%7CRoboto:400,400italic,300,300italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- DECORATIONS -->

<?php
if ($snowfall && $cherryblossom) {
    // disable both
} elseif ($snowfall) {
    require('features/snowfall.php');
} elseif ($cherryblossom) {
    require('features/cherry.php');
}
?>



    
<img src="../items/icons/spotify.svg" style=" max-width: 8%; padding: 0px; width: auto; text-align: left; border:1px solid black; border-radius:28px;" onclick="myFunction(),back()" id="spotify" class="icon"> 


    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <section id="home-section" style="border-radius: 20px;">
                    <div id="container07" class="container default full">
                        <div class="wrapper">
                            <div class="inner"></div>
                        </div>
                    </div>
                    <div id="container08" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <div id="image01" class="image"><span class="frame glow-on-hover"><img id="randomImage"
                                              alt="PFP" /></span></div>
                                </div>
                                <div>
                                    <h1 id="text04" style="color: rgb(0, 0, 0);"><?php echo $fullname ?><span style="color: rgb(111, 152, 240)"> <img src="https://i.ibb.co/VH8vR9V/verified.png" style=" max-width: 7%; width: auto; margin-bottom: -7px;" id="text04"></span></h1>
                                    <div>
                                        <ul> </ul>
                                    </div>

                                </div>

                                <div>
                                    <ul id="buttons04" class="buttons cont">
                                        <li><button class="glow-on-hover buttonglow" type="button" onclick="window.location.href='tel:<?php echo $number ?>/';">Contact</button>  </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="container02" class="container default">
                        <div class="wrapper">
                            <div class="inner">
                                <hr id="divider01">
                            </div>
                        </div>
                    </div>
                    <div id="container14" class="container columns">



                        
<?php 
include('require/navbar.php');
?>

                        
                        <div id="container02" class="container default">
                            <div class="wrapper">
                                <div class="inner">
                                    <hr id="divider09">
                                </div>
                            </div>
                        </div>


                        <div id="container03" class="container default">
                            <div class="wrapper">
                                <div class="inner">
                                    <p id="text01" style="" class="style1 movetext">About Me</p>
                                </div>
                            </div>
                        </div>
                        <div id="container06" class="container columns">
                            <div class="wrapper1">
                                <div class="inner">

                                    <div>
<!-- About me code -->
                                     <?php 
require('require/aboutme.php');
?>

                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    
                                        


                    <style>
                        li {
                        display:inline
                        }
                    </style>

                    <div style="border-radius: 0 0 20px 20px;" id="container15" class="container default">
                        <div class="wrapper" style="border-radius: 20px;">
                            <div class="inner">
                                <hr id="divider03">
                                <ul id="buttons01" class="buttons">
                                    <li><a target="_blank" href="https://youtube.com/@<?php echo $youtube_username ?>" class="button n02"><svg>
                                                <use xlink:href="#icon-993"></use>
                                            </svg><span class="label">Youtube</span></a></li>

                                    
                                <div id="myDIV" style="  display: none;">
                                    
    <?php echo $spotify_button ?>         
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

            </div>
        </div>

    </div>


<?php
require('require/js.php');
?>
                    
</body>
<?php include('require/footer.php');?>

</html