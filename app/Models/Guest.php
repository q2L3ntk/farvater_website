<?php
    class Guest {
        public bool $newComer;
        public int $sessionNumber;
        
        public function sessionGuestData() {
            session_start();
            $_SESSION['data'] = ['guest', $this -> newComer, $this -> sessionNumber];

            return $_SESSION['data'];
        }
    }