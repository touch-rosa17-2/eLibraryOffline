<div class="container-book-show">
        <?php
            include "./configStyle.php";
            include "./navbar.php";

            // get title
            if(isset($_GET["titleShow"])){
                $titleShow = $_GET["titleShow"];
            }else{
                $titleShow = "Book";
            }
        ?>
    
    <div class="main-show-book">
       <div class="title-book-type">
            <h1><?php echo $titleShow;
                      
                    
                    ?></h1>
            
            <span>/ <a href="./index.php">Home</a> /</span>
       </div> 
       <div class="sort-bar">
            <div class="left-sort-bar">
                <form action="" method="POST">
                    <label for="sort">Sort By</label>
                    <select name="sortType" id="">
                        <option value="Newest">Newest</option>
                        <option value="Lastest">Lastest</option>
                    </select>
                    <select name="sortTime" id="">
                        <option value="Anytime">Anytim6e</option>
                        <option value="Year">Year</option>
                        <option value="Month">Month</option>
                        <option value="Week">Week</option>
                    </select>
                </form>
            </div>
            <div class="right-sort-bar">
                <!-- for show result of search -->
                <span>
                    Showing results: 
                    1-10 of 58
                </span>
            </div>
       </div>
       <div class="content-show-book">
        <?php
            for ($i=0; $i<30; $i++){
        ?>
            <div class="content-items">
                <div class="imageBook">
                    <a href="#">
                        <img src="./assets/upload/imgBook/picBook (<?php echo $i+1;?>).jpg" alt="">
                    </a>
                </div>
                <div class="title-content">
                    <div class="title-book-content">
                        <a href="#">
                            <span>Google Ads Tutorial - How to Make Profitable Google Search Ads - Download Free Ebook</span>
                        </a>
                    </div>
                    <div class="detail-content-book">
                        <div class="left-detail-content">
                            <div class="author">
                                <a href="#">Author name</a>
                                | 
                                <a href="#">Category book(TextBook)</a>
                            </div>
                            <div>
                                Rating 
                                <span class="star-book">
                                    <?php 
                                        for($n=1; $n<5; $n++){
                                    ?>  
                                    <i class="fa-solid fa-star"></i>
                                    <?php 
                                        }
                                    ?>
                                </span>
                            </div>
                            <div>
                                Format:
                                <span>PDF, ePub, Kindle, TXT</span>
                            </div>
                        </div>
                        <div class="right-detail-content">
                            <div>
                                Published:
                                <span>Feb 2023</span>
                            </div>
                            <div>
                                Download:
                                <span>120</span>
                            </div>
                            <div>
                                Pages:
                                <span>40</span>
                            </div>
                        </div>
                    </div>
                    <div class="description-content-title">
                        <p>On the same day, Catriona's life is torn apart when a Monster destroys her home, and her new life begins as a mysterious shining figure bestows a gift.Through pioneering magi...</p>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
       </div>
    </div>
    <!-- footer -->
    <section>
        <?php
            include "./footer.php";
        ?>
    </section>
</div>
    