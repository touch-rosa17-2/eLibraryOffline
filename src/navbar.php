<?php
    include './configStyle.php';
?>
<div class="container-nav" id="navbar">
    <nav>
        <input type="checkbox" name="showNavbar" id="showNavbar">
        <div class="showNavbar">
            <label for="showNavbar">
                <i class="fa-solid fa-bars"></i>
            </label>
            
        </div>
        <ul>
            <li>
                <a href="./index.php"><span class="underlineStyle">Home</span></a>
            </li>
            <!-- <li>
                <a href="#">Browse</a>
            </li> -->
            <li>
                <a href="./mainBookShow.php">Book</a>
            </li>
            <li>
                <a href="#">Request Book</a>
            </li>
            <li class="login-nav">
                <a href="#">
                    <span id="login-text" style="color:red">Login</span> 
                    <div class="profile-pic-new">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</div>
<script type="text/javascript">
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;
    }
</script>