<?php
class Foo {
   
    private $name;
    private $link;

    public function __construct($name) {
        $this->name = $name;
    }

    public function setLink(Foo $link){
        $this->link = $link;
    }

    public function __destruct() {
        echo 'Destroying: ', $this->name, PHP_EOL;
    }
}

$foo = new Foo('Kondalarao');

?>