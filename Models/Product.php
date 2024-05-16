<?php
    require_once __DIR__ . '/../Traits/Type.php';

    class Product {
        use Type;
        public $name;
        public $category;
        public $description;
        public $image;
        public $price;

        public function __construct($_name, $_description, $_image, $_price, Categories $_category){
            $this->name = $_name;
            $this->category = $_category;
            $this->description = $_description;
            $this->image = $_image;
            $this->price = $_price;
        }

    }
?>