<?php

// Adds Variables
require('../require/config.php');


require('../require/header.php');
?>
    <link rel="stylesheet" href="../js/button.css">
    <link rel="stylesheet" href="../js/move.css">
    <link rel="stylesheet" href="../beak/socials.css">
    <link rel="canonical" href="../index-2.html" />
    <link href="https://fonts.googleapis.com/css?display=swap&amp;family=Montserrat:700,700italic,400,400italic,900,900italic%7CRubik:400,400italic,300,300italic,500,500italic,700,700italic%7CRoboto:400,400italic,300,300italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
</head>

<body>

    <!-- DECORATIONS -->

    <?php
    if ($snowfall && $cherryblossom) {
        // disable both
    } elseif ($snowfall) {
        require('../features/snowfall.php');
    } elseif ($cherryblossom) {
        require('../features/cherry.php');
    }
    ?>
    <img src="../items/icons/spotify.svg" style=" max-width: 8vh; padding: 0px; width: auto; text-align: left; border:1px solid black; border-radius:28px;" onclick="myFunction(),back()" id="spotify" class="icon"> 

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
                    include('../require/navbar.php');
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
                                <p id="text01" class="style1">My Socials</p>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 0 0 0px 0px;" id="container15" class="container default">
                        <div class="wrapper" style="border-radius: 20px;">
                            <div class="inner">
                                <hr id="divider03">

                            </div>
                        </div>
                    </div>

                    <!-- Spotify music div-->

                    <div id="myDIV" style="  display: none; background-color:white;">
                        <?php
echo $spotify_button;
?>
                    </div>


                    



<div id="container10" class="container columns">
    <div class="wrapper">
        <div class="inner">
            <div>
                <div id="image08" class="image"><span class="frame"><img
                            src="https://cdn-icons-png.freepik.com/512/3694/3694362.png?ga=GA1.1.5085066.1717658460" alt="E-Mail" /></span></div>
            </div>
            <div>
                <h2 id="text18"><?php echo $mailadress ?></h2>
                <ul id="buttons07" class="buttons">
                    <li><a target="_blank" href="mailto:harunabdullahrakin@gmail.com" class="button n01"><svg>
                                <use xlink:href="#icon-a3c"></use>
                            </svg><span class="label">copy</span></a></li>
                            
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="container10" class="container columns">
    <div class="wrapper">
        <div class="inner">
            <div>
                <div id="image08" class="image"><span class="frame"><img
                            src="https://i.ibb.co.com/vCYz10nZ/phone-call.png" alt="phone"/></span></div>
            </div>
            <div>
                <h2 id="text18"><?php echo $number ?></h2>
                <ul id="buttons07" class="buttons">
                    <li><a target="_blank" href="tel:<?php echo $number ?>" class="button n01"><svg>
                                <use xlink:href="#icon-a3c"></use>
                            </svg><span class="label">Call</span></a></li>
                            
                </ul>
            </div>
        </div>
    </div>
</div>

                    <div id="container10" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <div id="image08" class="image"><span class="frame"><img
                                                src="https://cdn-icons-png.freepik.com/512/1384/1384053.png" alt="FaceBook LOGO" /></span></div>
                                </div>
                                <div>
                                    <h2 id="text18"><?php echo $facebook_username ?></h2>
                                    <h3 id="text19" class="style2"></h3>
                                    <ul id="buttons07" class="buttons">
                                        <li><a target="_blank" href="<?php echo $facebook_link ?>" class="button n01"><svg>
                                                    <use xlink:href="#icon-a3c"></use>
                                                </svg><span class="label">View</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div id="container10" class="container columns">
                        <div class="wrapper">
                            <div class="inner">
                                <div>
                                    <div id="image08" class="image"><span class="frame"><img
                                                src="https://cdn-icons-png.freepik.com/512/3938/3938026.png?ga=GA1.1.5085066.1717658460" alt="Youtube" /></span></div>
                                </div>
                                <div>
                                    <h2 id="text18">@<?php echo $youtube_username ?></h2>
                                    <ul id="buttons07" class="buttons">
                                        <li><a target="_blank" href="https://www.youtube.com/@<?php echo $youtube_username ?>" class="button n01"><svg>
                                                    <use xlink:href="#icon-a3c"></use>
                                                </svg><span class="label">View</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    





                    

                    <div style="border-radius: 0 0 20px 20px;" id="container15" class="container default">
                        <div class="wrapper" style="border-radius: 20px;">
                            <div class="inner">
                                <hr id="divider03">
                            </div>
                        </div>
                    </div>

                    
                </section>
            </div>
        </div>
    </div>



<?php
require('../require/js.php');
?>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>
</body>

                    <?php include('../require/footer.php');?>

</html>
