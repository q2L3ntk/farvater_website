<?php
    namespace Database;

    use mysqli;

    class Harbour {
        public readonly string $databaseHost;
        public readonly string $databaseUser;
        public readonly string $databasePassword;
        public readonly string $databaseName;

        public function databaseConnect(string $dbHost, string $dbUser, string $dbPass, string $dbName) {
            return new mysqli(
            $this -> databaseHost = $dbHost,
            $this -> databaseUser = $dbUser,
            $this -> databasePassword = $dbPass,
            $this -> databaseName = $dbName
            );
        }
    }
