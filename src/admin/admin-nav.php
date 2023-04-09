<?php
include './configStyle.php';
?>

<body>
    <div class="container-admin-nav">
        <nav>
            <div class="left-admin-nav">
                <a href="../index.php">
                    <img src="./Docs/img/myLogo-removebg-preview.png" alt="">
                    <h3>Dolphin Libra</h3>
                </a>
            </div>
            <div class="middle-admin-nav">
                <input type="checkbox" name="showNavbar" id="showNavbar" class="checked-navbar">
                <label for="showNavbar" class="showNavbar" id="btnShowNav">
                    <i class="fa fa-bars"></i>
                </label>
                <label for="showNavbar" class="showNavbar" id="btnHideNav">
                    <i class="fa fa-remove"></i>
                </label>
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-dashcube"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-receipt"></i> Receipt</a>
                    </li>
                    <li class="admin-dropdown">
                        <span class="hover-btn"><i class="fa fa-user"></i> Classification <i id="dropdown-icon1" class="fa fa-caret-down"></i></span>
                        <ul>
                            <li>
                                <a href="#">Category</a>
                            </li>
                            <li>
                                <a href="#">Author</a>
                            </li>
                            <li>
                                <a href="#">Publisher</a>
                            </li>
                        </ul>
                    </li>
                    <li class="admin-dropdown">
                        <span><i class="fa-solid fa-bars"></i> Library <i id="dropdown-icon2"  class="fa fa-caret-down"></i></span>
                        <ul>
                            <li>
                                <a href="#">Add Book</a>
                            </li>
                            <li>
                                <a href="#">Mng Book</a>
                            </li>
                            <li>
                                <a href="#">Issue Book</a>
                            </li>
                            <li>
                                <a href="#">Issued Book</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> User</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-warning"></i> Permission</a>
                    </li>
                </ul>
            </div>
            <div class="right-admin-nav">
                <div class="profile-admin">
                    <a href="#">
                        <img src="./Docs/img/add-friend.png" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <script type="text/javascript">
        // show hide bar btn
        var btnShowNav = document.getElementById("btnShowNav");
        var btnHideNav = document.getElementById("btnHideNav");

        btnShowNav.addEventListener("click", function() {
                btnShowNav.style.display = "none",
                btnHideNav.style.display = "block";
        });
        btnHideNav.addEventListener("click", function(){
            btnHideNav.style.display = "none",
            btnShowNav.style.display = "block";
        });


        
    </script>
</body>

</html>