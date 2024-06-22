<?php

namespace App\Services;

class AuthenticationService {
    private static $instance = null;

    private function __construct() {
        // Private constructor to prevent instantiation
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new AuthenticationService();
        }
        return self::$instance;
    }

    public function signIn($email, $password) {
        if (empty($email) || empty($password)) {
            throw new \InvalidArgumentException("Email and password must not be empty.");
        }
        
        // temporary authentication logic
        if ($email === "user@example.com" && $password === "password123") {
            return true;
        }
        return false;
    }

    public function signOut() {
        // Sign out logic here
        return true;
    }
}