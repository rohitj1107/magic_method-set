<?php
class abc{
    private $name = 'Hello';

    public function __set($property,$value){
        echo 'can not assessable '.$property.' in this class';
    }
}

$obj = new abc;
$obj->name = 'Hello world';

?>
