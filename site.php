<?php

    session_start();
    require_once "config.php";

    function logout()
    {
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    }

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("Location: index.php");
        exit;
    }

?>

<html>


<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<!--==Title==================================-->
<title>Trofos</title>

<!--Stylesheet(CSS)==========================-->
<link rel="stylesheet" href="css/style.css"/>

<!--==Fav-icon=================================-->
<link rel="shortcut icon" href="Images/fav-icon.png">

<!--==Import-poppins-font======================-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!--Import-Rubik-Mono-One-Font===============-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">

<!--==Using-Font-Awesome=====================-->
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

<!--==CSS-Swiper=============================-->
<link rel="stylesheet" href="css/swiper-bundle.min.css">
</head>

<body>  

<!--==Navigation=============================-->
<nav class="navigation">

    <!--menu-btn---------------------->
    <input type="checkbox" class="menu-btn" id="menu-btn">
    <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
    </label>


<!--logo------------------------>
<a href="index.html" class="logo">
    TROFOS<span></span>
</a>

    <!--menu-------------------->
    <ul class="menu">
        <li><a href="site.php">Home</a></li>
        <li><a href="todasasseries.html">Serie</a></li>
        <li><a href="todososfilmes.html">Movies</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

     <!--Search-box------------->
     <form action="" class="search-box"> 
        <!--input-->
        <input type="text" name="search" placeholder="Search Movie" class="search-input" required/>
        <!--btn-->
        <button type="submit">
            <i class="fas fa-search"></i>
        </button>
     </form>

</nav>
<!--nav-end-->




<!--==slider=======================================-->
<section id="main-slider">

<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      
    <!--1--------------------------------------------->    
        <div class="swiper-slide">
            <!--box------------------->
        <div class="main-slider-box">
            <!--overlayer-------->
            <a href="#" class="main-slider-overlay">
                <i class="fas fa-play"></i>
            </a>
            <!--img----------->
            <div class="main-slider-img">
                <img alt="Poster" src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fTGJWXuFDcRSIVPgQLbxziGquOC.jpg"/>
            </div>
            <!--text---------->
            <div class="main-slider-text">
                <!--quality----->
                <span class="quality">Full HD</span>
                <!--bottom-text-->
                <div class="bottom-text">
                    <!--name----->
                    <div class="movie-name">
                        <span>2024</span>
                        <a href="#">Venom: A Última Dança (2024)</strong>
                    </div>
                    <!--Category-and-rating---->
                    <div class="category-rating">
                        <!--category-->
                        <div class="category">
                            <a href="#">Ação</a>,<a href="#">Aventura</a>,<a href="#">Ficção científica</a>
                        </div>
                        <!--rating--->
                        <div class="rating">
                            5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--2--------------------------------------------->    
    <div class="swiper-slide">
        <!--box------------------->
    <div class="main-slider-box">
        <!--overlayer-------->
        <a href="piratasdoscaribevingaca.html" class="main-slider-overlay">
            <i class="fas fa-play"></i>
        </a>
        <!--img----------->
        <div class="main-slider-img">
            <img alt="Poster" src="images/p-2.jpg"/>
        </div>
        <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</strong>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--3--------------------------------------------->    
    <div class="swiper-slide">
        <!--box------------------->
    <div class="main-slider-box">
        <!--overlayer-------->
        <a href="#" class="main-slider-overlay">
            <i class="fas fa-play"></i>
        </a>
        <!--img----------->
        <div class="main-slider-img">
            <img alt="Poster" src="images/p-3.jpg"/>
        </div>
        <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</strong>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--4--------------------------------------------->    
    <div class="swiper-slide">
        <!--box------------------->
    <div class="main-slider-box">
        <!--overlayer-------->
        <a href="#" class="main-slider-overlay">
            <i class="fas fa-play"></i>
        </a>
        <!--img----------->
        <div class="main-slider-img">
            <img alt="Poster" src="images/p-4.jpg"/>
        </div>
        <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</strong>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--5--------------------------------------------->    
    <div class="swiper-slide">
        <!--box------------------->
    <div class="main-slider-box">
        <!--overlayer-------->
        <a href="#" class="main-slider-overlay">
            <i class="fas fa-play"></i>
        </a>
        <!--img----------->
        <div class="main-slider-img">
            <img alt="Poster" src="images/p-5.jpg"/>
        </div>
        <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</strong>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--6--------------------------------------------->    
    <div class="swiper-slide">
        <!--box------------------->
    <div class="main-slider-box">
        <!--overlayer-------->
        <a href="#" class="main-slider-overlay">
            <i class="fas fa-play"></i>
        </a>
        <!--img----------->
        <div class="main-slider-img">
            <img alt="Poster" src="images/p-6.jpg"/>
        </div>
        <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</strong>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
  </div>

    

</section>
<!--btns-------------------------->
<div class="slider-btns">
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<!--slider-end----------------->







<!--==Latest-Movies======================================-->
<section id="latest">
    <!--heading-------->
    <div class="latest-heading">
        <h1>Latest Movies and TV Shows</h1>
    </div>

    <!--container---------->
    <div class="post-container">

        <!--post-box-1-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-1.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>

                        

                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-2-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-2.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-3-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-3.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-4-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-4.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-5-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-5.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-6-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-6.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-7-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-7.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-8-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-8.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-9-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-9.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-10-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-10.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-11-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-11.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

        <!--post-box-12-------------->
        <div class="post-box">
            <!--img-->
            <div class="post-img">
                <img src="Images/post-12.jpg" alt=""/>
            </div>
            <!--text---------->
        <div class="main-slider-text">
            <!--quality----->
            <span class="quality">Full HD</span>
            <!--bottom-text-->
            <div class="bottom-text">
                <!--name----->
                <div class="movie-name">
                    <span>2014</span>
                    <a href="#">Paranormal Activity: The Marked Ones</a>
                </div>
                <!--Category-and-rating---->
                <div class="category-rating">
                    <!--category-->
                    <div class="category">
                        <a href="#">Horror</a>,<a href="#">Mistery</a>,<a href="#">Thriller</a>
                    </div>
                    <!--rating--->
                    <div class="rating">
                        5.2 <img alt="imbd" src="images/IMDb-icon.png"/>
                    </div>
                </div>
            </div>
        </div>
        
        </div>

    </div>
    <!--container-end--->

    



    <!--page-number================================-->
    <div class="page-number">
        <a href="#" class="page-activer">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        .....
        <a href="#">100</a>
    </div>

</section>
<!--latest-post-end---------->




<!--==foooter======================================-->
<footer>
    <!--footer-logo--->
    <a href="index.html" class="logo">
        Trofos<span></span>
    </a>
    <!--copyright----->
    <span class="copyright">
        Copyright 2024 - Trofos
    </span>
</footer>





    <!--==JS-Swiper=================================-->
    <script src="js/swiper-bundle.min.js"></script>
    <!--==jQuery====================================-->
    <script src="js/jQuery.js"></script>

    
    
  <script>
    /*Initialize Swiper*/
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      },
    });

    /*--menu-btn-fixed-when-scroll======================*/
    $(window).scroll(function(){
        if($(document).scrollTop() > 20){
            $('.navigation').addClass('fix-icon');
        }
        else{
            $('.navigation').removeClass('fix-icon');
        }
    });
  </script>

</body>

</html>