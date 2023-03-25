<?php
    include './configStyle.php';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <link rel="stylesheet" href="../../node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="./assets/js/script.js"></script>
    responsive
    <link rel="stylesheet" href="./assets/css/maxW768.css">

    <title>Document</title>
</head>
<body> -->
    <div class="container-sidebar">
        <div class="sidebar">
            <input type="checkbox" name="showSidebar" id="showSidebar">
            <div class="content">
                <label for="showSidebar">
                    <i class="fa-solid fa-bars"></i>
                </label>
                <span>Welcome back Rosa</span>
            </div>
            <input type="checkbox" name="hideSidebar" id="hideSidebar">
            <ul class="sidebarMain">
                <!-- hide side icon when responsive -->
                <label for="hideSidebar" id="hideSidebarIcon">
                    <i class="fa-solid fa-xmark"></i>
                </label>
                <!-- sidebar profile -->
                <div class="profile">
                    <img src="./Docs/img/add-friend.png" alt="" srcset="">
                    <div class="profileTitle">
                        <span class="userName">Admin</span>
                        <span class="typeUser">Super Admin</span>
                    </div>
    
                </div>
                <li>
                    <a href="./index.php">
                        <i class="fa-solid fa-compass"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">    
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                        <span>Receipt</span>
                    </a>
                </li>   
                <li class="parentDrop">
                    <div class="classification">
                        <i class="fa-solid fa-bars"></i>
                        <span>Classification</span>
                        <i class="fa-solid fa-angle-left iconDown"></i>
                    </div>
                    <div class="childSub">
                        <ul class="sideDrop" id="sideDrop">
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Author</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Publisher</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Tag</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Comming soon</span>
                                </a>
                            </li>
        
                        </ul>
    
                    </div>
                </li>   
                <li class="parentDrop">
                    <div class="classification">
                        <i class="fa-solid fa-bars"></i>
                        <span id="library">Library</span>
                        <i class="fa-solid fa-angle-left iconDown"></i>
                    </div>
                    <div class="childSub">
                        <ul class="sideDrop">
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Add Book</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Mng Book</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Issue Book</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-regular fa-window-minimize"></i>
                                    <span>Issued Book</span>
                                </a>
                            </li>
        
                        </ul>
                    </div>
                </li>        
                <li>
                    <a href="#">
                        <i class="fa-solid fa-file-pen"></i>
                        <span>Notice</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-user-group"></i>
                        <span>User</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Permission</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span>Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        const classification = document.querySelectorAll(".classification");
        var i; 
        for(i = 0; i<classification.length ; i++){
            classification[i].addEventListener("click", (e)=>{
                let childSub = e.target.parentElement.parentElement;
                console.log(childSub);
                childSub.classList.toggle("showChild");
            });
        }
        
        // classification.forEach((item), () => {
        //     item.addEventListender("click", () => {
        //         let isActive = item.classList.contains("active");

        //         classification.forEach((el) => {
        //             el.classList.remove("active");
        //         });

        //         if(isActive) item.classList.remove("active");
        //         else item.classList.add("active");

        //     });
        // });


        // for (var i=0; i<tes)
        // test.addEventListener("click", function() {
        //     childDropdown.style.display
        // });


    </script>
<!-- </body>
</html> -->