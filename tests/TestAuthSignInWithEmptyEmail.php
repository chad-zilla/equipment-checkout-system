<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Services\AuthenticationService;

echo "Running TestAuthSignInWithEmptyEmail...\n";

$authService = AuthenticationService::getInstance();

try {
    $authService->signIn("", "password123");
    echo "TestAuthSignInWithEmptyEmail: Failed - No exception thrown\n";
} catch (\InvalidArgumentException $e) {
    echo "TestAuthSignInWithEmptyEmail: Passed - Exception thrown: " . $e->getMessage() . "\n";
}
