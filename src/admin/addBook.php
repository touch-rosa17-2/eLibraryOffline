<?php
require "./config.php";
ob_start();
?>

<head>
    <?php
    include "./configStyle.php";
    ?>
    <link rel="stylesheet" href="../../node_modules/mdbootstrap/css/mdb.min.css">
    <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom-2 {
            /* fallback for old browsers */
            background: #a1c4fd;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
        }

        .bg-indigo {
            background-color: #4835d4;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>

</head>

<body class="h-custom gradient-custom-2">
    <?php
        include './admin-nav.php';
        
        if(isset($_POST["btnAddBook"])){
            $fileName = $_FILES["bookFile"]["name"];
            $tempFile = $_FILES["bookFile"]["tmp_name"];
            $folder   = "Docs/fileUpload/".$fileName;

            $bookTitle = $_POST ["bookTite"];

            $bookImgName   = $_FILES["bookImg"]["name"];
            $bookImgTemp   = $_FILES["bookImg"]["tmp_name"];
            $bookImgFolder = "Docs/bookImg/".$bookImgName;

            $bookDescription = $_POST["bookDescription"];
            $bookCategory    = $_POST["category"];
            $bookAuthor      = $_POST["author"];
            $bookPublisher   = $_POST["publisher"];
            $bookPrice       = $_POST["price"];
            $bookQty         = $_POST["qty"];
            $bookAddedOn     = date("d/m/y");
            $bookAddedBy     = $_POST["addedBy"];

            $sql = "INSERT INTO tbl_book(bookTitle, bookDescription, bookCategory, bookAuthor, bookPublisher, bookLocation, bookPrice, bookQty, bookAddedOn, bookAddedBy) 
                                VALUES('$bookTitle', '$bookDescription', '$bookCategory', '$bookAuthor', '$bookPublisher', '$bookImgName', '$bookPrice', '$bookQty', '$bookAddedOn', '$bookAddedBy')  ";
            
            $query = mysqli_query($link, $sql);
            if($query>0){
                move_uploaded_file($tempFile, $folder);
                move_uploaded_file($bookImgTemp, $bookImgFolder);
                include "../message/successMessage.php";
            }else{
                include "../message/errorMessage.php";
            }
            // echo
            // "<script> alert('$cate');</script>";
        }
    ?>
    <section class="mt-5">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class=" card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6 bg-indigo text-white">
                                    <form action="" enctype="multipart/form-data" method="post">
                                        <div class="p-5">
                                            <h3 class="fw-normal mb-5">Add Book</h3>
                                            <div class="mb-4 pb-1">
                                                <div class="form-outline form-white">
                                                    <input class="form-control form-control-lg" name="bookFile" type="file" value="" placeholder="File" id="formFileLg"  required/>
                                                    <label class="form-label" for="formFileLg">Book File</label>
                                                </div>
                                            </div>          
                                            <div class="mb-4 pb-1">
                                                <div class="form-outline form-white">
                                                    <input type="text" name="bookTite" id="form3Examplea3" class="form-control form-control-lg" value="" required />
                                                    <label class="form-label" for="form3Examplea3"> Book Title</label>
                                                </div>
                                            </div>      
                                            <div class="form-outline form-white">
                                                <input class="form-control form-control-lg" name="bookImg" type="file" value="" placeholder="File" id="formFileLg"  required/>
                                                <label class="form-label" for="formFileLg">Book Image</label>
                                            </div>
                                            <div class="mb-4 pb-1">
                                                <div class="form-outline form-white">
                                                    <textarea name="bookDescription" class="form-control form-control-lg" id="" cols="30" rows="2"></textarea>
                                                    <label class="form-label" for="form3Examplea2">Book Description</label>
                                                </div>
                                            </div>                                            
                                            <!-- select section -->
                                            <div class="row">
                                                <div class="col-md-4 mb-4 pb-1">
                                                    <select name="category" class="form-select">
                                                        <option value="" hidden>Category</option>
                                                        <?php
                                                            $sql = "SELECT bookCategory From book_category";
                                                            $query = mysqli_query($link, $sql);
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                $cateItem = $row["bookCategory"];
                                                        ?>
                                                            <option value="<?php echo $cateItem;?>"><?php echo $cateItem;?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-4 pb-1">
                                                    <select name="author" class="form-select">
                                                        <option value="" hidden>Author</option>
                                                        <?php
                                                            $sql = "SELECT bookAuthor From book_author";
                                                            $query = mysqli_query($link, $sql);
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                $cateItem = $row["bookAuthor"];
                                                        ?>
                                                            <option value="<?php echo $cateItem;?>"><?php echo $cateItem;?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 mb-4 pb-1">
                                                    <select name="publisher" class="form-select">
                                                        <option value="" hidden>Publisher</option>
                                                        <?php
                                                            $sql = "SELECT bookPublisher From book_publisher";
                                                            $query = mysqli_query($link, $sql);
                                                            while($row = mysqli_fetch_assoc($query)){
                                                                $cateItem = $row["bookPublisher"];
                                                        ?>
                                                            <option value="<?php echo $cateItem;?>"><?php echo $cateItem;?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7 mb-4 pb-1">
                                                    <div class="form-outline form-white">
                                                        <input type="number" name="price" id="form3Examplea4" placeholder="$"  class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Examplea4">Price</label>
                                                    </div>
    
                                                </div>
                                                <div class="col-md-5 mb-4 pb-1">
    
                                                    <div class="form-outline form-white">
                                                        <input type="number" name="qty" id="form3Examplea5" class="form-control form-control-lg" />
                                                        <label class="form-label" for="form3Examplea5">QTY</label>
                                                    </div>
    
                                                </div>
                                            </div>
    
                                            <div class="mb-4 pb-1">
                                                <div class="form-outline form-white">
                                                    <input type="text" name="addedBy" id="form3Examplea6" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Examplea6">Added by</label>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex justify-content-start mb-4 pb-3">
                                                <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                                                <label class="form-check-label text-white" for="form2Example3">
                                                    I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                                                    site.
                                                </label>
                                            </div>
                                            <input type="submit" name="btnAddBook" value="ADD BOOK" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>