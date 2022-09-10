
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Activity</title>
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
                                Customers manage
                            </h1>

                        </div>

                        <!--From start-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" style="margin-top: 20px;">

                                    
                                    <form method="POST">
                                        <?php
                                        $CUSTOMER = new Customer();
                                        $customer = $CUSTOMER->getterAllById($id);
                                        ?>
                                        <div class="form-group row">
                                            <label for="staticId" class="col-sm-2 col-form-label">ID</label>
                                            <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="customer's ID">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="email" value="<?= $customer['email'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName">Name</label>
                                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name" required value="<?= $customer['name'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName">Residance</label>
                                            <input type="text" class="form-control" id="residance" aria-describedby="emailHelp" placeholder="Residance" required value="<?= $customer['residance'] ?>">
                                        </div>

                                         <div class="form-group">
                                            <label for="exampleInputName">Contact Number</label>
                                            <input type="number" class="form-control" id="number" aria-describedby="emailHelp" placeholder="number" required value="<?= $customer['number'] ?>">
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticCreateTime" class="col-sm-2 col-form-label">Created At</label>
                                            <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="createdAt" value="<?= $customer['createdAt'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticStatus" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="status" value="<?= $customer['isActive'] ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="staticLastLogin" class="col-sm-2 col-form-label">Last Login</label>
                                            <div class="col-sm-10">
                                            <input type="text" readonly class="form-control-plaintext" id="lastLogin" value="<?= $customer['lastLogin'] ?>">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Update</button>
                                        </form>

                                </div>
                            </div>
                        </div>




                    </div>
                </main>




            </div>



        </div>





        <script src="js/app.js"></script>
        <script src="js/ajax/service.js" type="text/javascript"></script>
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
        <script type="text/javascript" src="validations/js/customerMng.js"></script>

    </body>
</html>
