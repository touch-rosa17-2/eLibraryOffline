<?php 
    ob_start();
    require './config.php';
?>
<head>
    <?php
        include "./configStyle.php";
    ?>
</head>

<body>
    <?php
        $successVariable = 0;
        include "./admin-nav.php";
        if(isset($_POST["btnAddPublisher"])){
            $publisher = $_POST["publisher"];
            $publisherGender = $_POST["publisherGender"];
            $publisherType   = $_POST["publisherType"];

            if(!$publisher){
                include "../message/requireInput.php";
            }else{
                $duplicate = "SELECT * FROM book_publisher WHERE bookPublisher = '$publisher'";
                $result = mysqli_query($link, $duplicate);
                $row = mysqli_fetch_assoc($result);
                if($row>0){
                    include '../message/errorMessage.php';
                }else{
                    $sql = "INSERT INTO book_publisher VALUES('', '$publisher', '$publisherGender', '$publisherType') ";
                    $query = mysqli_query($link, $sql);
                    if($query>0){
                        include '../message/successMessage.php';
                        $successVariable = 1;
                    }else{
                        include '../message/errorMessage.php';
                    }
                }
            }
        }
        if(isset($_POST["btnUpdate"])){
            $updateID = $_POST["ID_hidden"];
            $updateName = $_POST["updateName"];
            $updateGender = $_POST["updateGender"];
            $updateType = $_POST["updateType"];
    
            $duplicate = "SELECT bookPublisher FROM book_publisher WHERE bookPublisher = '$updateName' ";
            $result = mysqli_query($link, $duplicate);
            $row = mysqli_fetch_assoc($result);
            if(empty($row)){
                $sql = "UPDATE book_publisher SET bookPublisher='$updateName',publisherGender='$updateGender', publisherType='$updateType' WHERE publisherID='$updateID' ";
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
    ?>
    <div class="container-mng-part mt-5">
        <div class="container mt-5">
            <div class="row" style="margin-top:90px">
                <div class="col-md-8 mx-auto">
                    <h2>Publisher</h2>
                </div>
            </div>
            <div class="row text-center mx-auto py-3">
                <div class="col-md-8 mx-auto">
                <?php 
                        // edit form
                        if(isset($_GET["ID"])){
                            $updateID   = $_GET["ID"];
                            $updateName = $_GET["Name"];
                            $updateGender = $_GET["Gender"];
                            $updateType = $_GET["Type"];
                    ?>
                        <form action="./publisher.php" method="POST" class="needs-validation" novalidate >
                            <div class="col-md-12 mx-auto text-center">
                                <div class="row mx-auto">
                                    <div class="col-md-3 my-2">
                                        
                                        <input type="hidden" name="ID_hidden" value="<?php echo $updateID;?>">
                                        <input type="text" name="updateName" value="<?php echo $updateName;?>" class="form-control bg-warning" placeholder="Add Category"  aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please add new publisher.
                                        </div>
                                    </div>
                                    <div class="col-md-2 my-2">
                                        <select name="updateGender" class="form-select bg-warning" aria-label="Default select example" >
                                            <option selected value="<?php echo $updateGender;?>" hidden><?php echo $updateGender;?></option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <input type="text" name="updateType" value="<?php echo $updateType;?>" class="form-control bg-warning" placeholder="Category Type" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                    <div class="col-md-3 my-2">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="submit" value="Update" name="btnUpdate" id="btnUpdate" class="btn btn-warning" >
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
                        elseif(isset($_GET["deleteID"])){
                            $deleteID   = $_GET["deleteID"];
                            $deleteName = $_GET["Name"];
                    ?>
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="text-danger">
                                    Are you sure want to delete <span class="border border-danger rounded "><?php echo $deleteName; ?></span> ? 
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
                                $sql = "DELETE FROM book_publisher WHERE publisherID='$deleteID'";
                                $query = mysqli_query($link, $sql);
                                if($query>0){
                                    include '../message/successMessage.php';
                                    header("location: ./publisher.php");
                                }else{
                                    include '../message/errorMessage.php';
                                }
                            }
                        ?>
                        
                    <?php
                        }
                        else{
                    ?>
                    <form action="" method="post">
                        <div class="col-md-12 mx-auto text-center">
                            <div class="row mx-auto">
                                <div class="col-md-5 my-2">
                                    <input type="text" name="publisher" 
                                        value="<?php if(isset($_POST["btnAddPublisher"])){ 
                                                if($successVariable>0){
                                                    echo "";
                                                }else{
                                                    echo $_POST["publisher"];
                                                }
                                            }?>" 
                                        class="form-control" placeholder="Add Publisher">
                                </div>
                                <div class="col-md-2 my-2">
                                   <select name="publisherGender" class="form-select" aria-label="Default select example">
                                        <option selected value="" hidden>Gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-3 my-2">
                                    <input type="text" name="publisherType" 
                                        value="<?php if(isset($_POST["btnAddPublisher"])){ 
                                                if($successVariable>0){
                                                    echo "";
                                                }else{
                                                    echo $_POST["publisherType"];
                                                }
                                            }?>" 
                                        class="form-control" placeholder="Publisher Type">
                                </div>
                                <div class="col-md-2 my-2">
                                    <input type="submit" value="Add" name="btnAddPublisher" class="btn btn-primary">
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
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Publisher Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Type</th>
                                <th scope="col" class="text-center" colspan="2">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM book_publisher";
                                $query = mysqli_query($link, $sql);
                                $i=0;
                                while($row = mysqli_fetch_assoc($query)){
                                    $publisherID = $row["publisherID"];
                                    $bookPublisher = $row["bookPublisher"];
                                    $publisherGender = $row["publisherGender"];
                                    $publisherType = $row["publisherType"];
                                    $i++;
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i;?></th>
                                <td><?php echo $bookPublisher;?></td>
                                <td><?php echo $publisherGender;?></td>
                                <td><?php echo $publisherType;?></td>
                                <td class="text-center">
                                    <a href="publisher.php? ID= <?php echo $publisherID;?> && Name=<?php echo $bookPublisher;?> && Gender=<?php echo $publisherGender;?> && Type=<?php echo $publisherType;?>"" class="btn btn-warning">
                                        Edit
                                    </a>
                                </td>
                                <td class="text-left">
                                    <a href="publisher.php? deleteID= <?php echo $publisherID;?> && Name=<?php echo $bookPublisher;?>" class="btn btn-danger">
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
        function cancelForm() {
            // prevent the form from submitting
            event.preventDefault();
            // redirect to another page or do any other action
            window.location.href = "publisher.php";
        }
    </script>
</body>













