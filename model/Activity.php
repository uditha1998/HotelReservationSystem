<?php

include_once 'DBConnection.php';

class Activity extends DBconnection {

    private $id;
    private $name;
    private $location;
    private $description;
    private $image;
    

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `activity` (name, description,location, image) VALUES  ('" . $this->name . "', '" . $this->description . "', '" . $this->location. "','" . $this->image. "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }


    
    public function update() {

        $sql = "UPDATE  `activity` SET "
                . "`name` ='" . $this->name . "', "
                . "`image` ='" . $this->image . "', "
                . "`location` ='" . $this->location . "', "
                . "`description` ='" . $this->description . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $query = mysqli_query($this->connection, $sql);


        if ($query) {

            return $this->id;
        } else {

            return FALSE;
        }
    }
  

    public function delete() {

        $sql = 'DELETE FROM `activity` WHERE id="' . $this->id . '"';



        return $query = mysqli_query($this->connection, $sql);
    }

    

    //Setters

    public function setId($id) {
        $this->id = $id;
    
    }

    public function setActivity($name,$image,$location,$description) {
       
        $this->name = $name;   
        $this->image = $image;
        $this->location = $location;
        $this->description = $description;
    
    }

    
    // Getters
    public function getName() {
        return $this->userName;
    }

    public function getterAllById($id) {

        if ($id) {

            $sql = "SELECT * FROM `activity` WHERE `id`=" . $id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();


            $this->id = $result['id'];
            $this->title = $result['name'];
            $this->image = $result['image'];
            $this->title = $result['location'];
            $this->description = $result['description'];
           




            return $result;
        }
    }

    public function getterAllByActivity() {



        $sql = "SELECT * FROM `activity` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

}

    

