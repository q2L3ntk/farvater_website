<?php 
    namespace Database;

    use mysqli;

    class Harbour {
        public $databaseHost;
        public $databaseUser;
        public $databasePassword;
        public $databaseName;

        public function databaseConnect() {
            $config = require_once('database/config.php');

            return new mysqli(
            $this -> databaseHost = $config[0],
            $this -> databaseUser = $config[1],
            $this -> databasePassword = $config[2],
            $this -> databaseName = $config[3]
            );
        }
    }
