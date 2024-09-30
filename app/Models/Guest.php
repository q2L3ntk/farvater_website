<?php
    namespace Models;

    session_start();

    class Guest {
        public bool $newComer = true;
        public int $sessionNumber = -1;
        
        public function sessionGuestData($sessionName) {
            $sessionData = [$sessionName, $this -> newComer, $this -> sessionNumber];

            return $sessionData;
        }

        public function logSession() {
            
        }
    }