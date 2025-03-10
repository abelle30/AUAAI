<?php


// 👇 check if session exists. returns true
if (session_status() == PHP_SESSION_ACTIVE) {
    print "session already exists";
}