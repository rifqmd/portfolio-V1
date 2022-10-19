<?php
include_once "function.php";

if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message'])){
    $sendEmail = $_POST['email'];
    $sendName = $_POST['name'];
    $sendMessage = $_POST['message'];

    $querySQL = "INSERT INTO contact (name, email, message) VALUES('$sendName','$sendEmail','$sendMessage')";

    $execSQL = mysqli_query(koneksi(), $querySQL);

    if($execSQL){
        // header('Location: contact.php?sent=1');
        echo"Berhasil";
        // exit;
    } else {
        // header('Location: contact.php?sent=0');
        echo"Gagal";
        // exit;    
    }
}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>rifqi md.</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <!-- <link rel="stylesheet" href="../../css/base.css"> -->
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/vendor.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contact.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <!-- CDN
    ================================================== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body id="top">

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- site header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="../images/logo.svg" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav-wrap">
            <ul class="header-main-nav">
                <li><a href="../index.php" title="home">Home</a></li>
                <li><a href="about.php" title="about">About</a></li>
                <li><a href="project.php" title="project">Projects</a></li>
                <li><a href="#" title="contact us">Contact US</a></li>
                <li><a href=".././resume/resumeV1.pdf" title="resume" target="blank">View Resume</a></li>
            </ul>

            <ul class="header-social">
                <li><a href="https://wa.me/6289635218206"><i class="fa-brands fa-whatsapp"></i></a></li>
                <li><a href="mailto: deniky110@gmail.com"><i class="fa-regular fa-envelope"></i></i></a></li>
                <li><a href="https://www.instagram.com/rfqimd/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li><a href="https://github.com/rifqmd"><i class="fab fa-github" aria-hidden="true"></i></a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- contact
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row heading-block" data-aos="fade-up">
            <div class="column large-full">
                <h2 class="section-heading">Contact Us</h2>
            </div>
        </div>

        <form class="form" action="../php/contact.php" method="POST">
            <h2 class="title">CONTACT US</h2>
            <p class="titlep" type=" Name:"><input type="text" class="input-form inputform" id="name" name="name"
                    placeholder="Masukan Nama Anda.."></input></p>
            <p class="titlep" type=" Email:"><input type="email" class="inputform" id="email" name="email"
                    placeholder="name@email.com"></input></p>
            <p class="titlep" type=" Message:"><input type="text" class="inputform" id="message" name="message"
                    placeholder="Tuliskan Pesan Anda.."></input></p>
            <button class="btnform" type="submit" name="submit">Send Message</button>
        </form>

    </section> <!-- end s-contact -->



    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="column large-full ss-copyright">
                <span>Portfolio <a href="https://www.instagram.com/rfqimd/">Rifqi Muhammad</a> | V.1 2022</span>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                        title="Close (Esc)"></button> <button class="pswp__button pswp__button--share"
                        title="Share"></button> <button class="pswp__button pswp__button--fs"
                        title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom"
                        title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

</body>