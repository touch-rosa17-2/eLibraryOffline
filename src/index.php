<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <!-- ===============js -->
    <!-- wrapper item -->
    <script src="./assets/js/script.js"></script>
    <!-- responsive 960px -->
    <link rel="stylesheet" href="./assets/css/maxW960.css">
    <link rel="stylesheet" href="./assets/css/maxW1366.css">
    <link rel="stylesheet" href="./assets/css/minW1367.css">
    <!-- font -->
    <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.min.css">


    <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="../node_modules/swiper/swiper-bundle.min.css"></script>


    <title>Dolphin Libra</title>
</head>

<body>
    <div class="container">
        <nav>
            <div class="logo-nav">
                <a href="./index.php">
                    <img src="./assets/icon/logo.png" alt="">
                </a>
            </div>
            <div class="menu-nav">
                <ul>
                    <div class="left-menu-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">My Book</a>
                        </li>
                        <li>
                            <!-- browse book -->
                            <div class="browseBook">
                                <select name="browseBook" id="">
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                    <option value="Subject">Subject</option>
                                </select>
                            </div>
                        </li>
                    </div>
                    <div class="right-menu-nav">
                        <li>
                            <form action="" method="POST">
                                <select name="typeBook" id="">
                                    <option value="All">All</option>
                                    <option value="Author">Author</option>
                                    <option value="Title">Title</option>
                                    <option value="Subjects">Subjects</option>
                                </select>
                                <input type="search" name="searchNav" placeholder="Search" id="">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </li>
                        <li>
                            <a href="#" class="profile-nav">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="menu-bar-nav">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="content-main">
            <?php 
                for($x=0; $x<5; $x++){

            ?>  
            
            <div class="item-type swiper">
                <h1 class="item-branch">
                    <a href="#">Trending Book</a>
                </h1>
                <div class="slide-content">
                    <div class="items-book swiper-wrapper" id="items-book">
                        <?php
                        for ($i = 1; $i < 20; $i++) {
                        ?>
                            <div class="items swiper-slide">
                                <div class="picBook">
                                    <a href="#"><!--- Navigate to detail ---->
                                        <img src="./assets/upload/imgBook/picBook (<?php echo $i; ?>).jpg" alt="">
                                    </a>
                                </div>
                                <div class="itemBtn">
                                    <a href="#"><!--- Navigate to read or puchase ---->
                                        <span><?php if ($i % 2 == 0) {
                                                    echo "Checked Out";
                                                } else {
                                                    echo "Borrow";
                                                } ?></span>
                                    </a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
    
                    </div>
                    <div class="btn-change">
                        <button class="previous-btn swiper-button-next" >
                            <!-- <i class="fa-solid fa-angle-right fa-rotate-180" ></i> -->
                        </button>
                        <button class="next-btn swiper-button-prev" >
                            <!-- <i class="fa-solid fa-angle-right" ></i> -->
                        </button>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

            <?php
                }
                
            ?>
        </div>
    </div>
      <!-- Swiper JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>

<script type="text/javascript">

    var swiper = new Swiper(".slide-content", {
        slidesPerView: 6,
        spaceBetween: 30,
        centeredSlide: true,
        grabCursor: true,
        fade: true,
        grabCursor: true,
        loop:true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
            // renderBullet: function (index, className){
            //     return '<span class="' + className + '">' + (index + 1) + "</span>";
            // }
        },
        navigation: {
            prevEl: ".swiper-button-prev",
            nextEl: ".swiper-button-next",
        },
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            320: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 3,
            },
            960: {
                slidesPerView: 4,
            },
            1080: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
            1366: {
                slidesPerView: 6,
            }
        },
    });


   

</script>


</body>

</html>