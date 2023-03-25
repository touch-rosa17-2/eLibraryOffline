<?php
    include './sidebar.php';
?>
<body>
    <div class="container">
        <div class="container-dashboard">
            <h1 class="dashTitle">
                Dashboard
                <i class="fa fa-solid fa-dashboard"></i>
            </h1>
            <div class="body-dashboard ">
                <div class="total-items grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4">
                    <div class="total-books ">
                        <div class="total-box">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="title-total">
                            <p>Total Book</p>
                            <span>90</span>
                        </div>
                    </div>
                    <div class="total-books">
                        <div class="total-box fine">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="title-total">
                            <p>Fine</p>
                            <span>$ 90</span>
                        </div>
                    </div>
                    <div class="total-books mt-5 sm:mt-5 lg:mt-0">
                        <div class="total-box borrow">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="title-total">
                            <p>Borrow</p>
                            <span>90</span>
                        </div>
                    </div>
                    <div class="total-books mt-5 sm:mt-5 lg:mt-0">
                        <div class="total-box users">
                            <i class="fa fa-users"></i>
                        </div>
                        <div class="title-total">
                            <p><a href="./mngUser.php">Users</a></p>
                            <span>90</span>
                        </div>
                    </div>
                    <!-- <div class="total-fine"></div>
                    <div class="total-borrow"></div>
                    <div class="total-users"></div> -->
                </div>
                <div class="chart">
                    <div class="visitor">
                        <div id="chartContainer" class="chartVisitor"></div>
                        <!-- <div id="chatContainerPopularBook" class="chartVisitor"></div> -->
                    </div>
                    <div class="popularBook">
                        <!-- <i class="fa fa-chart"></i>
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <i class="fa fa-car"></i>
                        <i class="far fa-chart-line-down"></i> -->
                    </div>
                                
                    
                </div>
            </div>
        </div>
        <div class="container-content">
            
        </div>
    </div>
</body>
</html>