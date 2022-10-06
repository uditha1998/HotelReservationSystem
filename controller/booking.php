<?php
include_once '../model/Booking.php';

if($_POST['option']=='bookAccommodation'){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $numberOfPersons = $_POST['numberOfPersons'];
            $checkin = $_POST['checkin'];
            $checkout = $_POST['checkout'];
            $customerId = $_POST['customerId'];
            $serviceType = $_POST['serviceType'];
            $Total = $_POST['invoTotal'];

            $Booking = new Booking();

            $Booking->setServiceType($serviceType);
            $Booking->setCheckIn($checkin);
            $Booking->setCheckOut($checkout);
            $Booking->setQuantity($numberOfPersons);
            $Booking->setCustomerId($customerId);
            $Booking->setCustomerName($name);
            $Booking->setCustomerEmail($email);
            $Booking->setCustomerTelephone($number);
            $Booking->setTotal($Total);

            if($Booking->create()){

                $result = ["status" => 'success'];

                echo json_encode($result);
                
            }
            else{

                $result = ["status" => 'fail'];

                echo json_encode($result);
            }
    }

    if($_POST['option']=='bookRestaurant'){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $numberOfPersons = $_POST['numberOfPersons'];
            $date = $_POST['date'];
            $mealDescription = $_POST['mealDescription'];
            $customerId = $_POST['customerId'];
            $serviceType = $_POST['serviceType'];
            $Total = $_POST['InvoTotal'];


            $Booking = new Booking();

            $Booking->setServiceType($serviceType);
            $Booking->setCheckIn($date);
            $Booking->setDescription($mealDescription);
            $Booking->setQuantity($numberOfPersons);
            $Booking->setCustomerId($customerId);
            $Booking->setCustomerName($name);
            $Booking->setCustomerEmail($email);
            $Booking->setCustomerTelephone($number);
            $Booking->setTotal($Total);

            if($Booking->create()){

                $result = ["status" => 'success'];

                echo json_encode($result);
                
            }
            else{

                $result = ["status" => 'fail'];

                echo json_encode($result);
            }
    }

    if($_POST['option']=='bookTour'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $numberOfPersons = $_POST['numberOfPersons'];
            $package = $_POST['package'];
            $date = $_POST['date'];
            $tourDescription = $_POST['tourDescription'];
            $customerId = $_POST['customerId'];
            $serviceType = $_POST['serviceType'];
            $Total = $_POST['invoTotal'];

            $Booking = new Booking();

            $Booking->setServiceType($serviceType);
            $Booking->setCheckIn($date);
            $Booking->setDescription($tourDescription);
            $Booking->setPackage($package);
            $Booking->setQuantity($numberOfPersons);
            $Booking->setCustomerId($customerId);
            $Booking->setCustomerName($name);
            $Booking->setCustomerEmail($email);
            $Booking->setCustomerTelephone($number);
            $Booking->setTotal($Total);


            if($Booking->create()){

                $result = ["status" => 'success'];

                echo json_encode($result);
                
            }
            else{

                $result = ["status" => 'fail'];

                echo json_encode($result);
            }

    }

    if($_POST['option']=='bookEvent'){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $numberOfPersons = $_POST['numberOfPersons'];
            $date = $_POST['date'];
            $eventDescription = $_POST['eventDescription'];
            $customerId = $_POST['customerId'];
            $serviceType = $_POST['serviceType'];
            $Total = $_POST['invoTotal'];
            


            $Booking = new Booking();

            $Booking->setServiceType($serviceType);
            $Booking->setCheckIn($date);
            $Booking->setDescription($eventDescription);
            $Booking->setQuantity($numberOfPersons);
            $Booking->setCustomerId($customerId);
            $Booking->setCustomerName($name);
            $Booking->setCustomerEmail($email);
            $Booking->setCustomerTelephone($number);
            $Booking->setTotal($Total);


            if($Booking->create()){

                $result = ["status" => 'success'];

                echo json_encode($result);
                
            }
            else{

                $result = ["status" => 'faillll'];

                echo json_encode($result);
            }
    }
?>