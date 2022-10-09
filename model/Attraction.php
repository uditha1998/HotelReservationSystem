<?php

include_once 'DBConnection.php';

class Attraction extends DBconnection {

    private $id;
    private $name;
    private $description;
    private $image;
    

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `attraction` (name, image,description ) VALUES  ('" . $this->name . "', '" . $this->image . "','" . $this->description. "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `attraction` SET "
                . "`name` ='" . $this->name . "', "
                . "`image` ='" . $this->image . "', "
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

        $sql = 'DELETE FROM `attraction` WHERE id="' . $this->id . '"';



        return $query = mysqli_query($this->connection, $sql);
    }

    //Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setAttraction($name,$image,$description) {
       
        $this->name = $name; 
        $this->image = $image;
        $this->description = $description;
       
    }
    
    // Getters

        // Getters
        public function getName() {
            return $this->userName;
        }
    
        public function getterAllById($id) {
    
            if ($id) {
    
                $sql = "SELECT * FROM `attraction` WHERE `id`=" . $id;
    
                $query = mysqli_query($this->connection, $sql);
    
                $result = $query->fetch_assoc();
    
    
                $this->id = $result['id'];
                $this->name = $result['name'];  
                $this->image = $result['image'];
                $this->description = $result['description'];
              
    
    
    
    
                return $result;
            }
        }
    
        public function getterAllByAttraction() {
    
    
    
            $sql = "SELECT * FROM `attraction` ";
    
            $query = mysqli_query($this->connection, $sql);
    
            $array_res = array();
            while ($row = $query->fetch_assoc()) {
    
                array_push($array_res, $row);
            }
            return $array_res;
        }
    
    }
    

