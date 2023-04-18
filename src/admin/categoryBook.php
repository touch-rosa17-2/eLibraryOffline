<?php
    require "./config.php";
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "./configStyle.php";
    ?>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        include "./admin-nav.php";
        if(isset($_POST["btnAddCategory"])){
            $category = $_POST["category"];
            $categoryType = $_POST["categoryType"];
            
            $duplicate = "SELECT bookCategory FROM book_category WHERE bookCategory = '$category' ";
            $result = mysqli_query($link, $duplicate);
            $row = mysqli_fetch_assoc($result);
            if(empty($category) || empty($categoryType)){
                include '../message/requireInput.php';
            }else{
                if($row> 0){
                    include '../message/duplicateMessage.php';
                }else{
                    $sql = "INSERT INTO book_category VALUES('', '$category', '$categoryType', '')";
                    $query = mysqli_query($link, $sql);
                    if($query>0){
                        include '../message/successMessage.php';
                    }else{
                        include '../message/errorMessage.php';
                    }
                }
            }
        }
        if(isset($_POST["btnUpdateCategory"])){
            $updateCateID = $_POST["cateID_hidden"];
            $updateCateName = $_POST["updateCategory"];
            $updateCateType = $_POST["updateCategoryType"];

            $duplicate = "SELECT bookCategory FROM book_category WHERE bookCategory = '$updateCateName' ";
            $result = mysqli_query($link, $duplicate);
            $row = mysqli_fetch_assoc($result);
            if(empty($row)){
                $sql = "UPDATE book_category SET bookCategory='$updateCateName', categoryType='$updateCateType' WHERE categoryID='$updateCateID' ";
                $query = mysqli_query($link, $sql);
                if($query>0){
                    include "../message/successMessage.php";
                }else{
                    include "../message/errorMessage.php";
                }
            }else{
                include "../message/duplicateMessage.php";
            }
        }
        if(isset($_POST["btnDelete"])){
            $deleteCateID = $_GET["deleteCateID"];
            $sql = "DELETE FROM book_category WHERE categoryID='$deleteCateID'";
            $query = mysqli_query($link, $sql);
            if($query>0){
                include '../message/successMessage.php';
            }else{
                echo
                '<div class="alert alert-success alert-dismissible">
                    <strong>Success!</strong> This alert box could indicate a successful or positive action.
                    <a href="./categoryBook.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                </div>';
            }
            
        }
    ?>
    <div class="container-mng-part mt-5">
        <div class="container ">
            <div class="row" style="margin-top:90px">
                <div class="col-md-8 mx-auto">
                    <h2>Category</h2>
                </div>
            </div>
            <div class="row text-center mx-auto py-3">
                <div class="col-md-8 mx-auto">
                    <?php 
                        // edit form
                        if(isset($_GET["cateID"])){
                            $updateCateID   = $_GET["cateID"];
                            $updateCateName = $_GET["cateName"];
                            $updateCateType = $_GET["cateType"];
                    ?>
                        <form action="./categoryBook.php" method="POST" class="needs-validation" novalidate >
                            <div class="col-md-12 mx-auto text-center">
                                <div class="row mx-auto">
                                    <div class="col-md-5 my-2">
                                        
                                        <input type="hidden" name="cateID_hidden" value="<?php echo $updateCateID;?>">
                                        <input type="text" name="updateCategory" value="<?php echo $updateCateName;?>" class="form-control bg-warning" placeholder="Add Category"  aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please add new category.
                                        </div>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <input type="text" name="updateCategoryType" value="<?php echo $updateCateType;?>" class="form-control bg-warning" placeholder="Category Type" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="submit" value="Update" name="btnUpdateCategory" id="btnUpdateCategory" class="btn btn-warning" >
                                            </div>
                                            <div class="col-md-6">
                                                <button type="button" name="btnCancel" class="btn btn-danger" onclick="cancelForm()">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                        // delete
                        elseif(isset($_GET["deleteCateID"])){
                            $deleteCateID   = $_GET["deleteCateID"];
                            $CateName = $_GET["cateName"];
                            $updateCateType = $_GET["cateType"];
                    ?>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="text-danger">
                                    Are you sure want to delete <span class="border border-danger rounded "><?php echo $CateName; ?></span> ? 
                                </h4>
                            </div>
                            <div class="col-md-1">
                                <button type="button" onclick="cancelForm()" class="btn btn-primary">Cancel</button>
                            </div>
                            <div class="col-md-1">
                                <form action="" method="post">
                                    <!-- <input type="submit" value="Delete" class="form-control btn btn-danger"> -->
                                    <input type="submit" name="btnDelete" class="btn btn-danger" value="Delete">
                                </form>
                            </div>
                        </div>
                        <?php 
                            if(isset($_POST["btnDelete"])){
                                $sql = "DELETE FROM book_category WHERE categoryID='$deleteCateID'";
                                $query = mysqli_query($link, $sql);
                                if($query>0){
                                    include '../message/successMessage.php';
                                    header("refresh:1, url./categoryBook.php");
                                }else{
                                    include '../message/errorMessage.php';
                                }
                            }
                        ?>
                        
                    <?php

                        }
                        // default form
                        else{
                    ?>
                    <form action="./categoryBook.php" method="POST">
                        <div class="col-md-12 mx-auto text-center">
                            <div class="row mx-auto">
                                <div class="col-md-5 my-2">
                                    <input type="text" name="category" value="" class="form-control" placeholder="Add Category">
                                </div>
                                <div class="col-md-3 my-2">
                                    <input type="text" name="categoryType" value="" class="form-control" placeholder="Category Type">
                                </div>
                                <div class="col-md-2 my-2">
                                    <input type="submit" value="Add" name="btnAddCategory" id="btnUpdateCategory" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>

                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8 mx-auto table-responsive">

                    <table class="table bg-white rounded border table-hover">
                        <thead>
                            <tr class="bg-primary text-white ">
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Type</th>
                                <th scope="col" class="text-center" colspan="2">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT categoryID, bookCategory, categoryType FROM book_category";
                                $query = mysqli_query($link, $sql);
                                $i=0;
                                while($row = mysqli_fetch_assoc($query)){
                                    $categoryID = $row["categoryID"];
                                    $bookCategory = $row["bookCategory"];
                                    $bookCategoryType = $row["categoryType"];
                                    $i++;
                            ?>

                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $bookCategory;?></td>
                                <td><?php echo $bookCategoryType;?></td>
                                <td class="text-center" >
                                    <!-- <a href="#" name="btnEditCate" class="btn btn-warning"> -->
                                        <!-- <form action="./categoryBook.php" method="get">
                                            <input type="submit" value="Edit" name="btnEdit" id="btnEdit">
                                        </form> -->
                                    <!-- </a> -->
                                    <a href="./categoryBook.php? cateID= <?php echo $categoryID;?> && cateName=<?php echo $bookCategory;?> && cateType=<?php echo $bookCategoryType;?> " 
                                        class="btn btn-warning" name="btnEdit" id="btnEdit">
                                        Edit
                                    </a>
                                </td>
                                <td class="text-left">
                                    <a href="./categoryBook.php? deleteCateID= <?php echo $categoryID;?> && cateName=<?php echo $bookCategory;?> && cateType=<?php echo $bookCategoryType;?> " 
                                        class="btn btn-danger" name="btnDelete">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>

                </div>

            </div>


        </div>
    </div>

    <script type="text/javascript">
        // var btnEdit = document.getElementById("btnEdit");
        // btnEdit.addEventListener("click", function(){
        //     var btnUpdateCategory = document.getElementById("btnUpdateCategory");
        //     btnUpdateCategory.setAttribute("name", "btnUpdateCategory"),
        //     btnUpdateCategory.name = "btnUpdateCategory";
        // });
        function cancelForm() {
            // prevent the form from submitting
            event.preventDefault();
            // redirect to another page or do any other action
            window.location.href = "categoryBook.php";
        }


        // form validation
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
<?php
    ob_end_flush();
?>