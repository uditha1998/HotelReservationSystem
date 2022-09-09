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
                . "`description` ='" . $this->description . "', "
                . "`location` ='" . $this->location . "', "
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

    public function setActivity($name,$location,$description,$image) {
       
        $this->name = $name;
        $this->location = $location;
        $this->description = $description;
        $this->image = $image;
    }

  

  
    
    // Getters

    

}