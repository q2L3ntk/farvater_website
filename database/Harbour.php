<?php
    class Harbour {
        public readonly string $databaseHost;
        public readonly string $databaseUser;
        public readonly string $databasePassword;
        public readonly string $databaseName;

        public function databaseConnect($dbHost, $dbUser, $dbPass, $dbName) {
            return new mysqli(
            $this -> databaseHost = $dbHost,
            $this -> databaseUser = $dbUser,
            $this -> databasePassword = $dbPass,
            $this -> databaseName = $dbName
            );
        }
    }
