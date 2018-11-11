<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="google-site-verification" content="srOzIgYDzjl4lFSpQFPrEmp6AG0PLxmT-DHcoUBeknc"/>
    <meta name="description" content="Dynamic and detail-oriented Web Developer with a knack for conceptualizing and delivering elegant, user-friendly solutions effectively and efficiently."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <title>aarif ahmed - Web and WordPress Developer</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand|Black+Han+Sans|Roboto|Pacifico|Noto+Serif|Pontano+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body id="body">
    <div id="loader" class="loader">
        <div class='body'>
            <span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
            <div class='base'>
                <span></span>
                <div class='face'></div>
            </div>
        </div>
        <div class='longfazers'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <h1>loading</h1>
    </div>
    <nav class="menu">
        <div class="menu__logo">
            <a href="http://aarif.ml"><?php include 'inc/logo.php'; ?></a>
        </div>
        <div class="menu-wrapper">
            <div class="hamburger-menu"></div>
        </div>
        <div class="menu__link">
            <a onclick="$('#about').animatescroll();" href="#about" class="menu__link--item">about</a>
            <a onclick="$('#skills').animatescroll();" href="#skills" class="menu__link--item">skills</a>
            <a onclick="$('#projects').animatescroll();" href="#projects" class="menu__link--item">works</a>
            <a onclick="$('#contact').animatescroll();" href="#contact" class="menu__link--item">contact &rarr;</a>
        </div>
    </nav>
    <div class="hero">
        <div class="hero__text">
            <h1 class="hero__text--heading">Hi,
                <br>I'm aarif,
                <br>Web &amp; WordPress
                <br>Developer.
            </h1>
            <div class="hero__contact">
                <button class="hero__contact--btn animated" onclick="$('#contact').animatescroll();">Hire Me
                </button>
            </div>
        </div>
        <img class="hero__sideimg" src="img/heroimg.svg" alt="hero image">
    </div>
    <section id="about" class="about">
        <img class="about__img" src="img/me-alt.png">
        <div class="about__txt">
            <div class="main">
                <h1 class="main_heading"><span class="main__highlight">about</span> me</h1>
            </div>
            <h2 class="secondary_heading">Hi, I'm aarif. Web and WordPress Developer.</h2>
            <p>
                Dynamic and detail-oriented Web Developer with a knack for conceptualizing and delivering elegant, user-friendly solutions effectively and efficiently. Possesses a track record of developing an e-commerce website, a CRM online portal and a fully-functional website for a nonprofit working with underprivileged children. Armed with an extensive understanding of end-to-end SDLC and cloud computing. Regular participant and organizer of local hackathons and web developer meetups.
            </p>
        </div>
    </section>
    <section id="skills" class="skills">
        <div class="main">
            <h1 class="main_heading">things I'm <span class="main__highlight">really good</span> at...</h1>
        </div>
        <div class="skills__container">
            <ul class="skills">
                <li>HTML<div class="skills__bar" id="html"></div></li>
                <li>CSS<div class="skills__bar" id="css"></div></li>
                <li>JavaScript<div class="skills__bar" id="js"></div></li>
                <li>jQuery<div class="skills__bar" id="jq"></div></li>
                <li>Bootstrap<div class="skills__bar" id="bs"></div></li>
                <li>PHP<div class="skills__bar" id="php"></div></li>
                <li>WordPress<div class="skills__bar" id="wp"></div></li>
                <li>MySql<div class="skills__bar" id="sql"></div></li>
                <li>Node.js<div class="skills__bar" id="node"></div></li>
                <li>Photoshop<div class="skills__bar" id="ps"></div></li>
                <li>Illustrator<div class="skills__bar" id="ai"></div></li>
                <li>Git<div class="skills__bar" id="git"></div></li>
            </ul>
        </div>
    </section>
    <section id="projects" class="project">
        <div class="main">
            <h1 class="main_heading">recent <span class="main__highlight">projects</span></h1>
        </div>
        <div class="project__showcase">
            <a href="https://aarif.ml/trillo" target="_blank"><div class="project__screen" style="background-image: url(img/shots4.jpg)"></div></a>
            <a href="https://aarif.ml/natours" target="_blank"><div class="project__screen" style="background-image: url(img/shots2.jpg)"></div></a>
            <a href="https://aarif.ml/supernova" target="_blank"><div class="project__screen" style="background-image: url(img/shots3.jpg)"></div></a>
            <a href="https://aarif.ml/" target="_blank"><div class="project__screen" style="background-image: url(img/shots5.jpg)"></div></a>
            <a href="https://aarif.ml/" target="_blank"><div class="project__screen" style="background-image: url(img/shot6.jpg)"></div></a>
            <a href="https://aarif.ml/bootstrap" target="_blank"><div class="project__screen" style="background-image: url(img/shots1.jpg)"></div></a>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="main">
            <h1 class="main_heading">let's <span class="main__highlight">talk</span></h1>
        </div>
        <p class="contact__text">Feel free to contact me anytime.</p>
        <div class="form">
            <img class="form__sideimg" src="img/contactside.svg">
            <form id="cform" method="post" class="form__group">
                <input id="name" name="name" type="text" class="form__group--input" placeholder="Full Name" required>
                <input id="email" name="email" type="email" class="form__group--input" placeholder="Email Address" required>
                <input id="subject" name="subject" type="text" class="form__group--input" placeholder="Subject" required>
                <textarea id="message" name="message" class="form__group--message" cols="30" rows="10" placeholder="Say Something" required></textarea>
                <div>
                    <button id="submit" name="submit" type="submit" class="form__group--btn">send &rarr;</button>
                    <div id="msg"></div>
                </div>
            </form>
        </div>
    </section>
    <section class="footer">
        <div class="footer__link">
            <a href="https://facebook.com/aarifparif" target="_blank" class="footer__link--social"><i class="animated fab fa-facebook"></i></a>
            <a href="https://instagram.com/arifparif" target="_blank" class="footer__link--social"><i class="animated fab fa-instagram"></i></a>
            <a href="https://github.com/aarif2" target="_blank" class="footer__link--social"><i class="animated fab fa-github"></i></a>
            <a href="https://twitter.com/arif_2d" target="_blank" class="footer__link--social"><i class="animated fab fa-twitter"></i></a>
            <a href="https://codepen.io/aarif5" target="_blank" class="footer__link--social"><i class="animated fab fa-codepen"></i></a>
        </div>
        <hr>
        <div class="footer__logo"> 
            <a href="http://aarif.ml" alt="home"><?php include 'inc/logo.php'; ?></a>
        </div>
    </section>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/lib.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
</body>

</html>