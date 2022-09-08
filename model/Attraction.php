<?php

include_once 'DBConnection.php';

class Attraction extends DBconnection {

    private $id
    private $name;
    private $description;
    private $image
    

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');

        $sql = "INSERT INTO `attraction` (name, description, image) VALUES  ('" . $name . "', '" . $description . "','" . $image. "')";

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
                . "`description` ='" . $this->description . "', "
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

  
    
    // Getters

    

}