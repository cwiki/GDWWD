<?php
/**
 * Created by PhpStorm.
 * User: codywikman
 * Date: 4/22/16
 * Time: 9:10 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

    <title>Wik // web development</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="300">
<header id="top">
    <a href="index.php">
        <?php echo file_get_contents('assets/wikweblogoSmall.svg') ?>
    </a>
    <nav>
        <div id="headerRow" class="navbar">
            <ul class="nav navbar-nav text-right">
<!--                <li><a href="#gallery">Gallery</a></li>-->
                <li><a href="#biography">Biography</a>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

<div id="scene" class="scene container-fluid">

    <div id="title" class="clip
    col-lg-6 col-lg-offset-3
    col-md-6 col-md-offset-3
    col-sm-8 col-sm-offset-2
    col-xs-10 col-xs-offset-1">
        <?php echo file_get_contents('assets/wikwebdev2016.svg') ?>
    </div>
    <div id="specialty" class="clip sneak center col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <h1 class="text-center">My specialty is php programming</h1>
        <h4 class="bold text-center">... that's not to say it's all I do</h4>
    </div>
    <div id="stay" class="clip sneak center col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <h1 class="text-center">Enjoy your stay</h1>
        <h4 class="bold text-center">and feel free to drop me a line</h4>
    </div>
    <div id="email" class="clip sneak center col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
        <h1 class="text-center"><a href="mailto:cody.wikman@wikwebdev.com" target="_top">
                cody.wikman@wikwebdev.com</a></h1>
    </div>
</div>

<?php //include_once('gallery.php') ?>

<div id="biography" class="clip spaced scene container-fluid">
    <div id="biography-box" class="dyno-center col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
    col-sm-10 col-sm-offset-1 col-sm-11 col-sm-offset-1">
        <p>
            Currently I'm a <strong class="strong">PHP / Javascript Developer</strong> for Phoenix Group Metals. An
            awesome company
            that scooped me up when I was a completely novice PHP developer
            ( I'd like to think I'm a rockstar in training now ).
        <p>
        <p>
            Passion? I'd say developing my programming skills and expanding my tech universe.
            Usually this means working with new technology I haven't mastered yet.
            One week I might be tinkering
            with a <strong class="strong">Raspberry Pi</strong> and the next I'll be writing
            <strong class="strong">Bash scripts</strong>.
        </p>
        <br>
        <p> Tech I use the most
        <ul id="skills">
            <?php
            $skills = array(
                'javascript',
                'apache',
                'mysql',
                'mssql',
                'bash',
                'php',
            );
            foreach ($skills as $s)
                echo "<li>$s</li>";
            ?>
        </ul>
        </p>

    </div>
</div>

<div id="contact" class="clip spaced scene container-fluid">
    <div id="contact-box" class="dyno-center col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2
    col-sm-10 col-sm-offset-1 col-sm-11 col-sm-offset-1">
        <!--        <h1>Contact</h1>-->
        <p>
            Currently I live in Scottsdale ( Arizona ) where I work
            tirelessly work to better my skills.
        </p>
        <p class="">
            I still make sure to <span class="strike">occasionally</span> frequently break for coffee.
        </p>
        <br>
        <div id="angle-box" class="">

            <!--Email-->
            <p class="">
                <a href="mailto:cody.wikman@wikwebdev.com" target="_top">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    cody.wikman@wikwebdev.com</a>
            </p>

            <!--YouTube-->
            <p>
                <!--        <div id=""><a id="youtube-color" href="https://www.youtube.com/channel/UCkUTcFTgHL-5bi_u4Q0mPDw"-->
                <!--                      target="_blank">-->
                <!--                <i class="fa fa-youtube-play" aria-hidden="true"></i>-->
                <!--                Wik Videos ( in development )-->
                <!--            </a></div>-->
                <!--        </p>-->
            <p id="">
            <span class="strike">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                Wik Videos</span> ( in development )
            </p>
            </p>
            <!--SKYPE-->
            <p id="skype-color">
                <!--        <div id="SkypeButton_Call_cody.wiki_1"></div>-->
            <span><i class="fa fa-skype" aria-hidden="true"></i>
             cody.wiki</span>
            </p>

            <!--github-->
            <p>
                <a id="github-color" href="https://github.com/cwiki" target="_blank">
                    <i class="fa fa-github" aria-hidden="true"></i> GitHub @ cwiki
                </a>
            </p>

            <!--Linked In-->
            <p>
                <a id="linked-color" href="www.linkedin.com/in/cody-wikman-2296b5105" target="_blank">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i> Linked In
                </a>
            </p>

        </div>
    </div>
</div>

<btn id="browser-alert" class="btn btn-danger">
    Download Google Chrome (For Best Experience)
    <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
</btn>
</body>
</html>
