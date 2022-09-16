<?php
include_once(dirname(__FILE__) . '../../model/include.php');



$id = $_GET['id'];
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Activity Manage</title>
        <link href="css/modern.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <div class="wrapper">

            <!-- Header Start  -->
            <?php
            include './include/admin_side_nav.php';
            ?>
            <!-- Header End -->

            <div class="main">

                <?php
                include './include/admin_top_nav.php';
                ?>

                <main class="content">
                    <div class="container-fluid">

                        <div class="header">
                            <h1 class="header-title">
                                Edit Activity
                            </h1>

                        </div>

                        <!--From start-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" style="margin-top: 20px;">


                                    <form enctype="multipart/form-data" id="form-data" method="post">


                                        <?php
                                        $Activity = new Activity();
                                        $Activity = $Activity->getterAllById($id);
                                        ?>
                                        <input type="hidden" class="form-control"  name="update">


                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label for="inputEmail4">Name</label>
                                                <input type="text" class="form-control" value="<?= $Activity['name'] ?>" id="name" name="name" >
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="inputPassword4">Image</label>
                                                <input type="file" class="form-control"  value="<?= $Activity['image'] ?>" id="image" name="image">
                                                <img class="mt-3" src="./../upload/Activity/<?= $Activity['image'] ?>" width="200">
                                            </div>

                                            <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label for="inputEmail4">Location</label>
                                                <input type="text" class="form-control" value="<?= $Activity['location'] ?>" id="location" name="location" >
                                            </div>
         
                                            <div class="mb-3 col-md-12">
                                                <label for="inputPassword4">Description</label>
                                                <textarea  class="form-control" name="description" id="description"><?= $Activity['description'] ?></textarea>
                                            </div>

                                        </div>
                                        <input type="hidden" id="oldImageName" value="<?= $Activity['image'] ?>" name="oldImageName"/>



                                        <input type="hidden" id="id" value="<?= $id ?>" name="id"/>

                                        <button type="submit" id="update" class="btn btn-primary">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>




                    </div>
                </main>




            </div>



        </div>





        <script src="js/app.js"></script>
        <script src="validations/js/activity.js" type="text/javascript"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Datatables basic
                $('#datatables-basic').DataTable({
                    responsive: true
                });
                // Datatables with Buttons
                var datatablesButtons = $('#datatables-buttons').DataTable({
                    lengthChange: !1,
                    buttons: ["copy", "print"],
                    responsive: true
                });
                datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
            });
        </script>
        <script src="tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script>
        <script>

            tinymce.init({

                selector: "#description",

                // ===========================================

                // INCLUDE THE PLUGIN

                // ===========================================



                plugins: [

                    "advlist autolink lists link image charmap print preview anchor",

                    "searchreplace visualblocks code fullscreen",

                    "insertdatetime media table contextmenu paste"

                ],

                // ===========================================

                // PUT PLUGIN'S BUTTON on the toolbar

                // ===========================================



                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

                // ===========================================

                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)

                // ===========================================



                relative_urls: false



            });





        </script>
        <script>

            tinymce.init({

                selector: "#description_sin",

                // ===========================================

                // INCLUDE THE PLUGIN

                // ===========================================



                plugins: [

                    "advlist autolink lists link image charmap print preview anchor",

                    "searchreplace visualblocks code fullscreen",

                    "insertdatetime media table contextmenu paste"

                ],

                // ===========================================

                // PUT PLUGIN'S BUTTON on the toolbar

                // ===========================================



                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",

                // ===========================================

                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)

                // ===========================================



                relative_urls: false



            });





        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>
</html>