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
    ?>
    <div class="container-mng-part mt-5">
        <div class="container mt-5">
            <div class="row" style="margin-top:100px">
                <div class="col-md-8 mx-auto">
                    <h1>Category</h1>
                </div>
            </div>
            <div class="row text-center mx-auto py-5">
                <div class="col-md-8 mx-auto">
                    <form action="" method="post">
                        <div class="col-md-12 mx-auto text-center">
                            <div class="row mx-auto">
                                <div class="col-md-5">
                                    <input type="text" name="category" class="form-control" placeholder="Add Category">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="category-type" class="form-control" placeholder="Category Type">
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" value="Add" name="btnAddCategory" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">

                <div class="col-md-8 mx-auto table-responsive">

                    <table class="table bg-white rounded border table-hover">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">#</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Type</th>
                                <th scope="col" class="text-center" colspan="2">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                for($i=0; $i<10; $i++){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $i+1;?></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-warning">
                                        Edit
                                    </a>
                                </td>
                                <td class="text-left">
                                    <a href="#" class="btn btn-danger">
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
</body>