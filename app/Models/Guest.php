<?php
    namespace Models;

    class Guest {
        public $newComer = true;
        public $sessionNumber = -1;
        
        public function sessionGuestData($sessionName) {
            $sessionData = [$sessionName, $this -> newComer, $this -> sessionNumber];

            return $sessionData;
        }
    }