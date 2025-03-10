<?php
// 👇 enable PHP session
session_start();

// 👇 check if session exists. returns true
if (session_status() == PHP_SESSION_ACTIVE) {
    print "session already exists";
}