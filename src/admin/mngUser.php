<?php
ob_start();
require "./config.php";
?>

<head>
    <?php
    include "./configStyle.php";

    ?>
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
        .registerForm{
            -webkit-transition: 1s;
            transition: all 1s ease;
            transition-duration: 0.4s;
        }
        /* upload image preview */
        #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }
    </style>
</head>

<body>
    <?php
        include './admin-nav.php';
        include './config.php';
        if(isset($_POST["btnAddUser"])){
            $displayName = $_POST["displayName"];
            $userName    = $_POST["userName"];
            $email       = $_POST["email"];
            $password    = "111";
            $role        = $_POST["role"];
            $dob         = $_POST["dob"];
            $gender      = $_POST["gender"];
            $address     = $_POST["address"];

            $user_filename = $_FILES["imgFile"]["name"];
            $tempfile = $_FILES["imgFile"]["tmp_name"];
            $folder = "Docs/pfUpload/".$user_filename;

            $duplicate   = "SELECT * FROM tbl_user WHERE userName = '$userName'
                                                    OR   email    = '$email'";
            $result      = mysqli_query($link, $duplicate);
            $row         = mysqli_fetch_assoc($result);
            if($row>0){
                include '../message/duplicateMessage.php';
            }else{
                $sql = "INSERT INTO tbl_user VALUES('', '$displayName', '$userName', '$email', '$password', '$role', '$dob', '$gender', '$address', '$user_filename') ";            
                move_uploaded_file($tempfile, $folder);
                $query = mysqli_query($link, $sql);
                if($query>0){
                    include '../message/successMessage.php';
                }else{
                    include '../message/errorMessage.php';
                }
            }
        }
        if(isset($_POST["btnUpdate"])){
            $update_id = $_POST["ID"];
            $update_displayName = $_POST["displayName"];
            $update_userName    = $_POST["userName"];
            $update_email       = $_POST["email"];
            $update_type        = $_POST["type"];
            $update_dob         = $_POST["dob"];
            $update_gender      = $_POST["gender"];
            $update_address     = $_POST["address"];
            // echo
            // "<script> alert('$update_id');</script>";
            
            $sql = "UPDATE tbl_user SET displayName='$update_displayName', userType='$update_type', dob='$update_dob', gender='$update_gender', address='$update_address' 
                                        WHERE userID='$update_id' ";
            $query = mysqli_query($link, $sql);
            if($query>0){
                include '../message/successMessage.php';
            }else{
                include '../message/errorMessage.php';
            }
        }
    ?>
    <section style="margin-top:110px;">
        <div class="container">
            <div class="row" style="margin-bottom:10px">
                <div class="col-lg-12 text-center border-bottom">

                    <h2>User</h2>
                </div>
            </div>
            <!-- edit -->
            <?php
                if(isset($_POST["btnEdit"])){
                    $update_id = $_POST["ID"];
                    $update_displayName = $_POST["displayName"];
                    $update_userName    = $_POST["userName"];
                    $update_email       = $_POST["email"];
                    $update_type        = $_POST["type"];
                    $update_dob         = $_POST["dob"];
                    $update_gender      = $_POST["gender"];
                    $update_address     = $_POST["address"];
                    $update_user_filename = $_POST["user_filename"];
                    // echo
                    // "<script> alert('$update_id');</script>";
            ?>
            <div class="row registerForm mb-5 overflow-auto" >
                <div class="col-lg-3"></div>
                <div class="col-lg-6 p-4 rounded bg-warning border border-secondary overflow-auto">
                    <form class="needs-validation" novalidate action="./mngUser.php" method="POST">
                        <div class="form-row">
                            <div class="row">
                                <div class="col-lg-12 text-center my-2">
                                    <h2>Update User</h2>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Display name</label>
                                    <input type="hidden" name="ID" value="<?php echo $update_id;?>">
                                    <input type="text" name="displayName" value="<?php echo $update_displayName;?>" class="form-control" id="validationCustom01" placeholder="Display name" required>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername">Username</label>
                                    <input type="text" name="userName" readonly value="<?php echo $update_userName;?>"  class="form-control bg-secondary" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom02">Email</label>
                                    <input type="email" name="email" readonly value="<?php echo $update_email;?>"  class="form-control bg-secondary" id="validationCustom02" placeholder="Email" value="" required>
                                    <div class="invalid-feedback">
                                        Please choose a gmail.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Role</label>
                                        <select name="type" class="form-control" id="exampleFormControlSelect1" required>
                                            <option  value="<?php echo $update_type;?>"  hidden><?php echo $update_type;?></option>
                                            <option value="Admin">Admin</option>
                                            <option value="Librian">Librian</option>
                                            <option value="User">User</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please choose role.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Date of Birth</label>
                                        <input name="dob" value="<?php echo $update_dob;?>"  type="date" class="form-control" id="">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Gender</label>
                                    <select name="gender" class="form-control" id="exampleFormControlSelect1" required>
                                        <option  value="<?php echo $update_gender;?>"  hidden><?php echo $update_gender;?></option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose gender.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Address</label>
                                <input type="text" name="address" value="<?php echo $update_address;?>"  class="form-control" id="validationCustom03" placeholder="City">
                            </div>
                        </div>
                        
                        <!-- term conditions -->
                        <!-- <div class="form-group py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div> -->
                        <input type="submit" name="btnUpdate" class="btn btn-info hover mt-4"  value="Update User">
                        <button type="button" name="btnCancel" class="btn btn-danger mt-4" onclick="cancelForm()">Cancel</button>
                    </form>

                </div>
                <div class="col-lg-3"></div>

                
            </div>
            <?php
                }
                elseif(isset($_GET["deleteID"])){
                    $delete_userID = $_GET["deleteID"];
                    $delete_displayName = $_GET["displayName"];
                    $delete_userName = $_GET["userName"];
                    $delete_email    = $_GET["email"];
                    $delete_role     = $_GET["role"];

            ?>    
                    <div class="row">
                        <div class="col-md-8">
                            <h4 class="">
                                Are you sure want to delete : </span> 
                                <ul>
                                    <li>
                                        Display Name:<span class="text-danger">  <?php echo $delete_displayName;?></span>
                                    </li>
                                    <li>
                                        User Name:<span class="text-danger"> <?php echo $delete_userName;?></span>
                                    </li>
                                    <li>
                                        Email:<span class="text-danger"> <?php echo $delete_email;?></span>
                                    </li>
                                    <li>
                                        Role: <div class="btn btn-secondary text-warning fs-4"> <?php echo $delete_role;?> </div>
                                    </li>
                                </ul> 
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
                        <?php 
                            if(isset($_POST["btnDelete"])){
                                $sql = "DELETE FROM tbl_user WHERE userID='$delete_userID'";
                                $query = mysqli_query($link, $sql);
                                if($query>0){
                                    include '../message/successMessage.php';
                                    header("location: ./mngUser.php");
                                }else{
                                    include '../message/errorMessage.php';
                                }
                            }
                        ?>
                    </div>
            <?php 
                }
                
                // default
                else{
            ?>
            <div class="row col-lg-2">
                <div class="btnShowForm btn btn-success" id="btnShowForm" style="display: block;">
                    <i class="fa-solid fa-user-plus"></i> Add User 
                </div>
                <div class="btnShowForm btn btn-danger" id="btnHideForm" style="display: none;">
                    <i class="fa-solid fa-xmark"></i> CLose 
                </div>
            </div>
            <div class="row registerForm mb-5 overflow-auto" id="addUserForm" style="height:0; overflow:hidden;">
                <div class="col-lg-3"></div>
                <div class="col-lg-6 p-4 rounded border border-secondary overflow-auto">
                    <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="row">
                                <div class="col-lg-12 text-center my-2">
                                    <h2>Add User</h2>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Display name</label>
                                    <input type="text" name="displayName" class="form-control" id="validationCustom01" placeholder="Display name" required>
                                    
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername">Username</label>
                                    <input type="text" name="userName" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom02">Email</label>
                                    <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Email" value="" required>
                                    <div class="invalid-feedback">
                                        Please choose a gmail.
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Role</label>
                                        <select name="role" class="form-control" id="exampleFormControlSelect1" required>
                                            <option value="" hidden>Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Librian">Librian</option>
                                            <option value="User">User</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please choose role.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Date of Birth</label>
                                        <input name="dob" type="date" class="form-control" id="">
                                        <div class="invalid-feedback">
                                            Please choose role.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Gender</label>
                                    <select name="gender" class="form-control" id="exampleFormControlSelect1" required>
                                        <option value="" hidden>Gender</option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please choose role.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Address</label>
                                <input type="text" name="address" class="form-control" id="validationCustom03" placeholder="City">
                            </div>

                            <div class="col-md-6 mx-auto">

                                <!-- Upload image input-->
                                <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                                    <input id="upload" type="file" name="imgFile" onchange="readURL(this);" class="form-control border-0">
                                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                                    <div class="input-group-append">
                                        <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Choose file</small></label>
                                    </div>
                                </div>

                                <!-- Uploaded image area-->
                                <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                                <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>

                            </div>
                        </div>
                        <!-- term conditions -->
                        <!-- <div class="form-group py-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div> -->
                        <input type="submit" name="btnAddUser" class="btn btn-primary mt-4" value="Add User">
                    </form>

                </div>
                <div class="col-lg-3"></div>

                
            </div>
            <?php
                }
            ?>
            <div class="table-responsive-md">
                <table class="table table-hover">
                    <thead class="bg-secondary text-white ">
                        <tr class="fs-6">
                            <th scope="col">#</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" class="bg-primary">Role</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col" colspan="2" class="text-center">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM tbl_user";
                        $query = mysqli_query($link, $sql);
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($query)) {
                            $userID = $row["userID"];
                            $displayName = $row["displayName"];
                            $userName    = $row["userName"];
                            $email       = $row["email"];
                            $userType    = $row["userType"];
                            $dob         = $row["dob"];
                            $gender      = $row["gender"];
                            $address     = $row["address"];
                            $user_filename   = $row["userImage"];

                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td>
                                    <?php 
                                        if($user_filename == ""){
                                            echo '<img src="./Docs/modal_profile/profileImg.png" class="img-fluid" width=50px alt="">';
                                        }else{
                                    ?>
                                        <img src="./Docs/pfUpload/<?php echo $user_filename; ?>" width=50px height="60px" alt="">
                                    <?php
                                        }
                                    ?>
                                </td>
                                <td><?php echo $displayName?></td>
                                <td><?php echo $userName; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $userType; ?></td>
                                <td><?php echo $dob; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $address; ?></td>
                                <td class="text-center">
                                    <!-- edit btn -->
                                    <form action="./mngUser.php" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $userID;?>">
                                        <input type="hidden" name="displayName" value="<?php echo $displayName;?>">
                                        <input type="hidden" name="userName" value="<?php echo $userName;?>">
                                        <input type="hidden" name="email" value="<?php echo $email;?>">
                                        <input type="hidden" name="type" value="<?php echo $userType;?>">
                                        <input type="hidden" name="dob" value="<?php echo $dob;?>">
                                        <input type="hidden" name="gender" value="<?php echo $gender;?>">
                                        <input type="hidden" name="address" value="<?php echo $address;?>">
                                        <input type="hidden" name="user_filename" value="<?php echo $user_filename;?>">
                                        <input type="submit" value="Edit" name="btnEdit" class="btn btn-warning">
                                    </form>
                                </td>
                                <td class="text-left">
                                    <a href="./mngUser.php? deleteID=<?php echo $userID;?> && displayName=<?php echo $displayName;?> && userName=<?php echo $userName;?> && email=<?php echo $email;?> && role=<?php echo $userType;?>" class="btn btn-danger">
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
    </section>
    <script>
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
        //=======Btn show hide form
        var btnShowForm = document.getElementById("btnShowForm");
        var btnHideForm = document.getElementById("btnHideForm");
        var addUserForm = document.getElementById("addUserForm");
        
        // btnShowForm.addEventListener("click", function(){
        //     addUserForm.style.height = "max-content";
        //     btnShowForm.style.display = "none";
        // });
        // btnHideForm.addEventListener("click", function(){
        //     addUserForm.style.height = "0";
        //     btnShowForm.style.display = "block";
        // })

        $(document).ready(function() {
            $('#btnShowForm').click(function() {
                $("#addUserForm").animate({
                    height: '70%',
                });
                $("#btnShowForm").hide();
                $("#btnHideForm").show();
            });
            $("#btnHideForm").click(function() {
                $("#addUserForm").animate({
                    height: '0',
                });
                $("#btnHideForm").hide();
                $("#btnShowForm").show();
            });
        });
        // upload image preview
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imageResult')
                        .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $('#upload').on('change', function () {
                readURL(input);
            });
        });

        /*  ==========================================
            SHOW UPLOADED IMAGE NAME
        * ========================================== */
        var input = document.getElementById( 'upload' );
        var infoArea = document.getElementById( 'upload-label' );

        input.addEventListener( 'change', showFileName );
        function showFileName( event ) {
        var input = event.srcElement;
        var fileName = input.files[0].name;
        infoArea.textContent = 'File name: ' + fileName;
        }

        // btn cancel
        function cancelForm() {
            // prevent the form from submitting
            event.preventDefault();
            // redirect to another page or do any other action
            window.location.href = "mngUser.php";
        }
    </script>
    
</body>