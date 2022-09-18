<?php
include_once '../model/Customer.php';
            $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

            $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

            $Customer = new Customer();

            $Customer->setLoginCredentials($email, $password);

            $result = $Customer->login();

            if ($result) {

                if($Customer->getStatus()==1){

                    $results = ["status" => 'success'];

                    echo json_encode($results);

                }
                else{

                    $results = ["status" => 'blocked'];

                    echo json_encode($results);

                }


            } 
            else{
                
                $results = ["status" => 'fail'];

                echo json_encode($results);

            }

        
?>