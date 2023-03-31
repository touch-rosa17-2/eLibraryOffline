<?php
    include './configStyle.php';
?>
<div class="container-nav">
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
                <a href="#">Book</a>
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