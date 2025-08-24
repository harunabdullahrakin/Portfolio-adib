<?php

// Adds Variables
require('../require/config.php');


require('../require/header.php');
?>
    <link rel="stylesheet" href="../js/button.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../js/move.css">
    <link rel="stylesheet" href="../beak/projects.css">
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

    <div id="wrapper">
        <div id="main">
            <div class="inner">
                <section id="home-section" style="border-radius: 20px;">
                    <div id="container07" class="container default full">
                        <div class="wrapper">
                            <div class="inner"></div>
                        </div>
                    </div>
                    <div id="container08" class="container columns full">
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
                    <div id="container02" class="container default full">
                        <div class="wrapper">
                            <div class="inner">
                                <hr id="divider01">
                            </div>
                        </div>
                    </div>
                    <div id="container14" class="container columns full">
<?php 
include('../require/navbar.php');
?>

                    <div id="container02" class="container default full">
                        <div class="wrapper">
                            <div class="inner">
                                <hr id="divider09">
                            </div>
                        </div>
                    </div>

                    
                    <div id="container03" class="container default full">
                        <div class="wrapper">
                            <div class="inner">
                                <p id="text01" class="style1">More About Me</p>
                            </div>
                        </div>
                    </div>
                    <div style="border-radius: 0 0 20px 20px;" id="container15" class="container default full">
                        <div class="wrapper" style="border-radius: 20px;">
                            <div class="inner">
                                <hr id="divider03">


<h1 class="pa">Personal Information</h1>
 <br>
<p class="bio">Name: Tahmid Hasnat Adib <br><br>
Father name : Md Selim (Assistant professor) <br><br>
Mother name : Ambiya Akter ( Assistant teacher)<br><br>
Date of Birth : 29/12/2009</p>    
<br>
<br>
<h1 class="pa">Additional Info</h1>
<br>
<p class="bio">
    Profession : Student,  Scientist <br><br>
Works at : Thakurgaon Govt. Boys' High school 
,<br> 
Samaira Bio & Chemistry Laboratory<br><br>
    Interest : Reading books
</p>
<br><br>

<style>
.pa {
    font-size:20px;
    font-weight:bold;
}

.bio {
    font-size:12px;
    font-weight:bold;
}
</style>
                                                                            
                                      

                    

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
include('../require/js.php');
?>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script>
</body>

                      <?php include('../require/footer.php');?>
</html>
