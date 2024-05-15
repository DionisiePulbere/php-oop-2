<?php

    class Categories {
        public $category;
        public $icon;

        public function __construct($_category ) {
            $this->category = $_category;
        }

        public function setIcon() {
            if($this->category === "cane") {
                $icon = '<i class="fa-solid fa-dog"></i>';
            } else if ($this->category === "gatto") {
                $icon = '<i class="fa-solid fa-cat"></i>';
            } else {
                $icon = '<i class="fa-regular fa-file-image"></i>';
            };
            return $icon;
        } 

    } 
?>