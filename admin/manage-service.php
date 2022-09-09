<?php
include_once(dirname(__FILE__) . '../../model/include.php');

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Service Manage</title>
        <link href="css/modern.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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
                                Manage Services
                            </h1>

                        </div>
                        <div class="col-xl-12 d-flex" style="flex-wrap: wrap">

                            <?php
                            $SERVICE = new Service();
                            foreach ($SERVICE->getterAllByServices() as $service){
                            ?>
                            <div class="col-md-3" id="div<?=$service['id']?>">
                                <div class="card" style="margin-right: 10px">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0 text-center">
                                                <h2 class="card-title" style="font-size: 1.1rem;"><?=$service['title']?></h2>
                                            </div>

                                        </div>
                                        <div class="col">
                                            <img class="img-responsive img-rounded mt-2 mb-4" src="./../upload/service/<?=$service['image'];?>"  style="width: 100%" width="400">

                                        </div>
                                        <div class="row" >

                                            <div class="col-6">
                                                <a href="./edit-service.php?id=<?=$service['id'];?>">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                                            <i class="align-middle" data-feather="edit"></i>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                         
                                            <div class="col-6" >
                                                <a  class="delete-service" data-id="<?=$service['id'];?>">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded-circle bg-primary-dark">
                                                            <i class="align-middle" data-feather="trash"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <?php } ?>

                        </div>




                    </div>
                </main>




            </div>



        </div>





        <script src="js/app.js"></script>
        <script src="validations/js/service.js" type="text/javascript"></script>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="delete/js/service.js" type="text/javascript"></script>
    </body>
</html>
