<?php
include_once(dirname(__FILE__) . '../../model/include.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Inquiry</title>
    <link href="css/modern.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="wrapper">
        <?php
        include './include/admin_side_nav.php';
        ?>
        <div class="main">
            <?php
            include './include/admin_top_nav.php';
            ?>
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                            Manage Inquiries
                        </h1>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body" style="margin-top: 20px;">

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $Inquiries = new Inquiries();
                                        foreach ($Inquiries->getAllInquiries() as $inquiries) {

                                            if($inquiries['status']==0){
                                                $operation = "<span style='color:red;'>Mark as Responded</span>";

                                            }
                                            else{
                                                $operation = "<span style='color:green;'>Responded</span>";
                                            }
                                        ?>
                                            <tr>
                                            <td><?= $inquiries['id'] ?></td>
                                            <td><?= $inquiries['name'] ?></td>
                                            <td><?= $inquiries['email'] ?></td>
                                            <td><?= $inquiries['number'] ?></td>
                                            <td><?= $inquiries['subject'] ?></td>
                                            <td><?= $inquiries['message'] ?></td>
                                            <td><?= $inquiries['created_at'] ?></td>                                            
                                            <td>                                            
                                            <a class='btn btn-light respond-inquiry' inquiry-id-update="<?=$inquiries['id'];?>" role='button' id='block'><?php echo $operation?></a>
                                            </td>
                                            </tr>
                                            

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/lib/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/bootstrap-select.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=true"></script>
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/lib/owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/lib/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/lib/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="include/plugin/sweetalert/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="validations/js/inquiry.js"></script>


</body>

</html>