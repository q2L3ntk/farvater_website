<?php
    namespace Models;

    class Guest {
        public readonly bool $newComer = true;
        public readonly int $sessionNumber = -1;
        
        public function sessionGuestData($sessionName) {
            $sessionData = [$sessionName, $this -> newComer, $this -> sessionNumber];

            return $sessionData;
        }
    }