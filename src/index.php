<?php 
    include './configStyle.php';
?>

<body>
    <div class="container">
        <!-- <nav>
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
        </nav> -->
        <!-- include navigation new -->
        <?php
            include 'navbar.php';
        ?>
        <div class="content-main">
            <?php 
                // for($x=0; $x<5; $x++){

            ?>  
            
            <div class="item-type swiper">
                <h1 class="item-branch">
                    <a href="#">
                       <span class="underlineStyle">Trending Book</span> 
                    </a>
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
                                        <span>The secret</span>
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
                // }
                
            ?>

            <!-- feature book -->
            <div class="featuredEbook">
                <div class="leftFeatured">
                    <div class="title">
                        <a href="#">
                            <span class="underlineStyle">Featured <span style="color:green;">eBooks</span></span>
                        </a>
                    </div>
                    <div class="featured-main">
                        <?php
                            for($i=0; $i<5; $i++){
                                
                        ?>  
                        <div class="item-featured" data-aos="zoom-in-right">
                            <div class="item-before-hover">
                                <a href="">
                                    <img src="./assets/upload/imgBOok/picBook (<?php echo $i+1;?>).jpg" alt="">
                                    <div class="detail-info">
                                        <h3 class="titleUnderline">Book titles goes hereBook titles goes hereBook titles goes here</h3>
                                        <span>By author name goes here</span>
                                        <p>Descript alittle bit about boook goes hereDescript alittle bit about boook goes here</p>
                                    </div>
                                </a>
                            </div>
                            <!-- <div class="item-after-hover">
    
                            </div> -->
                        </div>
                        <?php
    
                            }
                        ?>
                    </div>
                </div>
                <div class="rightFeatured">
                    <div class="title-rightFea">
                        <a href="#">
                            <span class="underlineStyle">Great <span class="underlineStyle-highlight">Book</span> Lists</span>
                        </a>
                    </div>
                    <div class="right-feature-main">
                        <?php
                            for($x=0;$x<5;$x++){
                        ?>
                        <div class="item-right-feature" data-aos="zoom-in-left">
                            <a href="greate-book-title">
                                <span class="underlineStyle">Technology book</span>
                            </a>
                            <div class="right-feature-img">
                                <?php
                                    for($i=0; $i<3;$i++){
                                ?>
                                <div class="img-right-feature">
                                    <img src="./assets/upload/imgBook/picBook (<?php echo $i+1;?>).jpg" alt="">
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- lastest arrivals -->
            <?php 
                for($t=0; $t<3;$t++){
            ?>
            <div class="lastestArrivals" data-aos="fade-up" data-aos-duration="1200">
                <div class="title section-title-lastestArr">
                    <a href="#">
                        <span class="underlineStyle">Lastest <span style="color:green;">Arrivals</span></span>
                    </a>
                    <a href="#" class="see-all">
                        <span class="see-all-txt">
                            See all
                        </span>
                        <i class="fa-solid fa-arrow-right see-all-arrow"></i>
                    
                    </a>
                </div>
                <div class="content-lastestArrivals">
                    <?php
                        for($i=0; $i<10; $i++){
                    ?>
                    <div class="items-lastestArr">
                        <a href="#">
                            <img src="./assets/upload/imgBook/picBook (<?php echo $i+1;?>).jpg" alt="">
                            <div class="title-lastestArr">
                                <h5>Harry Poter</h5>
                                <p>by Nikola Tesla</p>
                            </div>
                        </a>
                    </div>
                    <?php
                        }

                    ?>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!-- footer -->
        <section>
            <?php
                include './footer.php';
            ?>
        </section>


    </div>
      <!-- Swiper JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->
  <script src="../node_modules/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript">
    //AOS
    AOS.init({
        duration: 700,
        // disable: 'mobile',
    });

    //wrapper
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 6,
        spaceBetween: 30,
        centeredSlide: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },

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
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 2,
            },
            560: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 4,
            },
            960: {
                slidesPerView: 5,
            },
            1080: {
                slidesPerView: 6,
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