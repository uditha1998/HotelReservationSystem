<?php

include_once 'DBConnection.php';

class Customer extends DBconnection {

    private $id;
    private $name;
    private $email;
    private $residance;
    private $number;
    private $createdAt;
    private $isActive;
    private $authToken;
    private $lastLogin;
    private $password;
    private $resetcode;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');
        $sql = "INSERT INTO `customer` (name,email,residance,number,createdAt,isActive,password)  VALUES  ('" .$this->name. "', '" .$this->email. "','" .$this->residance. "','" .$this->number. "', '" .$this->createdAt. "', '" . 1 . "', '" .$this->password. "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function Login() {


        $sql = "SELECT id FROM customer WHERE email = '$this->email' AND password = '$this->password'";
        $query = mysqli_query($this->connection, $sql);
        $result = $query->fetch_assoc();

        //  echo $id;
        if (mysqli_num_rows($query) > 0) {

            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $user = $this->getterAllById($this->id);
            $this->setUserSession($user);
            return $user;
        } else {

            return FALSE;
        }
    }

    private function setAuthToken($id) {



        $authToken = md5(uniqid(rand(), true));



        $sql = "UPDATE `customer` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";



        $result = mysqli_query($this->connection, $sql);



        if ($result) {



            return $authToken;
        } else {

            return FALSE;
        }
    }

    private function setLastLogin($id) {



        date_default_timezone_set('Asia/Colombo');



        $now = date('Y-m-d H:i:s');



        $sql = "UPDATE `customer` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";



        $result = mysqli_query($this->connection, $sql);



        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    private function setUserSession($user) {



        if (!isset($_SESSION)) {

            session_start();
        }



        $_SESSION["id"] = $user['id'];

        $_SESSION["name"] = $user['name'];

        $_SESSION["email"] = $user['email'];

        $_SESSION["residance"] = $user['residance'];

        $_SESSION["number"] = $user['number'];

        $_SESSION["isActive"] = $user['isActive'];

        $_SESSION["authToken"] = $user['authToken'];

        $_SESSION["lastLogin"] = $user['lastLogin'];
    }

    public function authenticate() {



        if (!isset($_SESSION)) {

            session_start();
        }



        $id = NULL;

        $authToken = NULL;



        if (isset($_SESSION["id"])) {

            $id = $_SESSION["id"];
        }



        if (isset($_SESSION["authToken"])) {

            $authToken = $_SESSION["authToken"];
        }


        $sql = "SELECT `id` FROM `user` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";


        $query = mysqli_query($this->connection, $sql);
        $result = $query->fetch_assoc();

        if (!$result) {

            return FALSE;
        } else {

            return TRUE;
        }
    }

    public function logOut() {



        if (!isset($_SESSION)) {

            session_start();
        }



        unset($_SESSION["id"]);

        unset($_SESSION["name"]);

        unset($_SESSION["email"]);

        unset($_SESSION["isActive"]);

        unset($_SESSION["authToken"]);

        unset($_SESSION["lastLogin"]);

        unset($_SESSION["username"]);



        return TRUE;
    }

    //Setters

    public function setId($id) {
        $this->id = $id;
    }

  
    function setLoginCredentials($email, $password) {
        $this->email = $email;
        $this->password = $password;

    
    }
    
       public function setSigninDetails($name,$email,$residance,$number,$password){

        $this->name = $name;
       
        $this->email = $email;
        $this->residance = $residance;
        $this->number = $number;
        $this->password = $password;
    }

    // Getters

    public function getName() {
        return $this->userName;
    }

    public function getterAllById($id) {

        if ($id) {

            $sql = "SELECT * FROM `customer` WHERE `id`=" . $id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();


            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
            $this->residance = $result['residance'];
            $this->number = $result['number'];
            $this->createdAt = $result['createdAt'];
            $this->isActive = $result['isActive'];
            $this->lastLogin = $result['lastLogin'];
            $this->authToken = $result['authToken'];
            $this->resetCode = $result['resetcode'];

            return $result;
        }
    }

 

}

?>