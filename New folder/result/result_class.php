<?php
class std{

    public $id;
    public $file;
    public function __construct($file) {
        $this->file = $file;

    }
    function result($id){
        $data = file($this->file);
    }
   



}




?>