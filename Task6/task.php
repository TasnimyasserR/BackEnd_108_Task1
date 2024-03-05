<?php

$users = [
    ['id' => 1, 'firstName' => 'John', 'lastName' => 'Doe', 'salary' => 4500, 'email' => 'john.doe@example.com', 'isActive' => 0],
    ['id' => 2, 'firstName' => 'Jane', 'lastName' => 'Smith', 'salary' => 7500, 'email' => 'jane.smith@example.com', 'isActive' => 1],
    ['id' => 3, 'firstName' => 'Alice', 'lastName' => 'Johnson', 'salary' => 11000, 'email' => 'alice.johnson@example.com', 'isActive' => 1],
    ['id' => 4, 'firstName' => 'Bob', 'lastName' => 'Brown', 'salary' => 3000, 'email' => 'bob.brown@example.com', 'isActive' => 0],
    ['id' => 5, 'firstName' => 'Eve', 'lastName' => 'Williams', 'salary' => 8500, 'email' => 'eve.williams@example.com', 'isActive' => 1],
    ['id' => 6, 'firstName' => 'Charlie', 'lastName' => 'Davis', 'salary' => 7000, 'email' => 'charlie.davis@example.com', 'isActive' => 0],
    ['id' => 7, 'firstName' => 'David', 'lastName' => 'Wilson', 'salary' => 5000, 'email' => 'david.wilson@example.com', 'isActive' => 1],
    ['id' => 8, 'firstName' => 'Grace', 'lastName' => 'Martinez', 'salary' => 9500, 'email' => 'grace.martinez@example.com', 'isActive' => 0],
    ['id' => 9, 'firstName' => 'Frank', 'lastName' => 'Anderson', 'salary' => 8000, 'email' => 'frank.anderson@example.com', 'isActive' => 1],
    ['id' => 10, 'firstName' => 'Helen', 'lastName' => 'White', 'salary' => 12000, 'email' => 'helen.white@example.com', 'isActive' => 1],
];


foreach ($users as $user) {
    echo implode(', ', $user) . PHP_EOL ."<br>";
}

echo "<br>";
foreach ($users as $user) {
    if ($user['salary'] < 5000) {
        echo "{$user['firstName']} {$user['lastName']} - Junior" . PHP_EOL  ."<br>";
    } elseif ($user['salary'] >= 5000 && $user['salary'] <= 10000) {
        echo "{$user['firstName']} {$user['lastName']} - Senior" . PHP_EOL  ."<br>";
    } else {
        echo "{$user['firstName']} {$user['lastName']} - Tech Lead" . PHP_EOL  ."<br>";
    }
}

echo "<br>";
session_start();
foreach ($users as $user) {
    if ($user['isActive'] == 1) {
        $_SESSION['active_user_ids'][] = $user['id'];
    }
}

echo "<br>";
foreach ($users as $user) {
    if ($user['isActive'] == 1) {
        echo "{$user['firstName']} {$user['lastName']} Active" . PHP_EOL  ."<br>";
    }
}
