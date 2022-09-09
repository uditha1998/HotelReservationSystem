
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

                                    <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Residance</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Last login</th>
                                                <th scope="col">Operations</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $serverName = "localhost";
                                                $userName = "root";
                                                $password = "";
                                                $databaseName = "willudainn";

                                                $connection = new mysqli($serverName,$userName,$password,$databaseName);

                                                if($connection->connect_error){
                                                    die("Connection failed".$connection->connect_error);
                                                }

                                                $sql = "SELECT * FROM customer";
                                                $result = $connection->query($sql);

                                                if(!$result){
                                                    die("Invalid query".$connection->error);
                                                }


                                                while($row = $result->fetch_assoc()){

                                                     $id = $row['id'];
                                                     $name = $row['name'];
                                                    // $email = $row['email'];
?>
                                                    
                                                        <td><?php echo $row['id'] ?></td>

                                                        <td><?php echo $row['name'] ?></td>

                                                        <td><?php echo $row['email'] ?></td>

                                                        <td><?php echo $row['residance'] ?></td>

                                                        <td><?php echo $row['number'] ?></td>

                                                        <td><?php echo $row['createdAt'] ?></td>

                                                        <td><?php echo $row['isActive'] ?></td>

                                                        <td><?php echo $row['lastLogin'] ?></td>

                                                        <td>
                                                        <a class='btn btn-danger' role='button' id='block'>Block</a>
                                                        <span>
                                                        <a class='btn btn-primary' role='button' href="edit-customer.php">Edit</a>
                                                        </span>
                                                        </td>
                                                        </tr>
                                                    <?php    
                                                }?>

                                            

                                            </tbody>
                                     </table>

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
        <script type="text/javascript" src="js/ajax/customerMng.js"></script>

    </body>
</html>
