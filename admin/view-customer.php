<?php
include_once(dirname(__FILE__) . '../../model/include.php');

?>
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
                                                    $CUSTOMER = new Customer();
                                                    foreach ($CUSTOMER->getAllCustomers() as $customer){

                                                        if($customer['isActive']==0){
                                                            $status='<span style="color:red">Blocked</span>';
                                                            $blockbtn="Unblock";
                                                        }else{
                                                            $status='<span style="color:green">Active</span>';
                                                            $blockbtn="Block";
                                                        }
                                                        
                                                ?>
                                                    
                                                        <td><?php echo $customer['id']?></td>

                                                        <td><?php echo $customer['name']?></td>

                                                        <td><?php echo $customer['email']?></td>

                                                        <td><?php echo $customer['residance']?></td>

                                                        <td><?php echo $customer['number']?></td>

                                                        <td><?php echo $customer['createdAt']?></td>

                                                        <td><?php echo $status?></td>

                                                        <td><?php echo $customer['lastLogin']?></td>

                                                        <td>
                                                        <a class='block-customer' role='button' data-id="<?=$customer['id'];?>"
                                                        status="<?=$customer['isActive'];?>">
                                                            <button type="button" class="btn btn-danger"><?php echo $blockbtn?></button>
                                                        </a>
                                                        <span>
                                                        <a class='btn btn-primary' role='button' href="edit-customer.php?id=<?=$customer['id'];?>">Edit</a>
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
