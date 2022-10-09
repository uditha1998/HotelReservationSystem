<?php
include_once 'DBConnection.php';

class Gallery extends DBconnection {

    private $id;
    private $name;
    private $image;
    private $description;


    public function __construct() {
        parent::__construct();
    }

    public function create() {



                 $sql = "INSERT INTO `gallery` (name,image,description) VALUES  ('" . $this->name . "', '" . $this->image . "','" . $this->description. "')";

        if (mysqli_query($this->connection, $sql)) {

            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function update() {

        $sql = "UPDATE  `gallery` SET "
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

        $sql = 'DELETE FROM `gallery` WHERE id="' . $this->id . '"';



        return $query = mysqli_query($this->connection, $sql);
    }

    //Setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setAll($title,  $image, $description) {
        $this->name = $title;
        $this->image = $image;
        $this->description = $description;
    }

    // Getters

    public function getName() {
        return $this->userName;
    }

    public function getterAll($id) {

        if ($id) {

            $sql = "SELECT * FROM `gallery` WHERE `id`=" . $id;

            $query = mysqli_query($this->connection, $sql);

            $result = $query->fetch_assoc();


            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->description = $result['description'];
            $this->image = $result['image'];




            return $result;
        }
    }

    public function getAll() {



        $sql = "SELECT * FROM `gallery` ";

        $query = mysqli_query($this->connection, $sql);

        $array_res = array();
        while ($row = $query->fetch_assoc()) {

            array_push($array_res, $row);
        }
        return $array_res;
    }

}
