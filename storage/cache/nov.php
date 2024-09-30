<?php
    setcookie('NOV', getNumberOfVisits());

    function getNumberOfVisits() {
        if (isset($_COOKIE['NOV'])) {
            $_COOKIE['NOV']++;
        } else {
            return $_COOKIE['NOV'];
        }
    }