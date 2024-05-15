<?php
    class Shop {
        public $product;
        public $type;
        public $category;
        public $description;
        public $image;
        public $price;

        public function __construct($_product, $_type, $_description, $_image, $_price, Categories $_category){
            $this->product = $_product;
            $this->type = $_type;
            $this->category = $_category;
            $this->description = $_description;
            $this->image = $_image;
            $this->price = $_price;
        }

    }
?>