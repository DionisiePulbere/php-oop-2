<?php
    trait Type {
        protected $nameType;
    
        public function getNameType() {
            return $this->nameType;
        }
        public function setNameType($newNameType) {
            $this->nameType = $newNameType;
        }
    }
?>