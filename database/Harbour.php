<?php
    namespace Database;

    use mysqli;

    class Harbour {
        public readonly string $databaseHost;
        public readonly string $databaseUser;
        public readonly string $databasePassword;
        public readonly string $databaseName;

        public function databaseConnect() {
            $config = require_once('database/config');

            return new mysqli(
            $this -> databaseHost = $config['localhost'],
            $this -> databaseUser = $config['root'],
            $this -> databasePassword = $config[''],
            $this -> databaseName = $config['harbour']
            );
        }
    }
