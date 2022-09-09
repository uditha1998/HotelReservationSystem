<?php

include_once(dirname(__FILE__) . '/DBconnection.php');

class Service extends DBconnection {

    private $id;
    private $title;
    private $image;
    private $description;

    public function __construct() {
        parent::__construct();
    }

    public function create() {

        $sql = "INSERT INTO `service` (title,image,description) VALUES  ('"
                . $this->title . "', '"
                . $this->image . "', '"
                . $this->description. "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `service` SET "
                . "`title` ='" . $this->title . "', "
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

        $sql = 'DELETE FROM `service` WHERE id="' . $this->id . '"';



        return $query = mysqli_query($this->connection, $sql);
    }

    //Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setAll($title, $image, $description) {
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
    }

    // Getters

    public function getName() {
        return $this->userName;
    }

    public function getterAllById($id) {

        if ($id) {

            $sql = "SELECT * FROM `service` WHERE `id`=" . $id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();


            $this->id = $result['id'];
            $this->title = $result['title'];
            $this->description = $result['description'];
            $this->image = $result['image'];




            return $result;
        }
    }

    public function getterAllByServices() {



        $sql = "SELECT * FROM `service` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

}
