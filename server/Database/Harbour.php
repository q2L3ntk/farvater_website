<?php 
    namespace Server\Database;

    use mysqli;

    class Harbour {
        public string $databaseHost;
        public string $databaseUser;
        public string $databasePassword;
        public string $databaseName;

        public function databaseConnect() {
            $config = require_once('database/config.php');

            return new mysqli(
                $this -> databaseHost = $config['host'],
                $this -> databaseUser = $config['user'],
                $this -> databasePassword = $config['password'],
                $this -> databaseName = $config['name']
            );
        }
    }
