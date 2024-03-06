<?php

$users = [
    ['id' => 1, 'firstName' => 'Sama', 'lastName' => 'Mohammed', 'salary' => 4500, 'email' => 'sama.mohammed@gmail.com', 'isActive' => 0],
    ['id' => 2, 'firstName' => 'Tasnim', 'lastName' => 'Ali', 'salary' => 7500, 'email' => 'Tasnim.Ali@gmail.com', 'isActive' => 1],
    ['id' => 3, 'firstName' => 'Rofyda', 'lastName' => 'Khaled', 'salary' => 11000, 'email' => 'Rofyda.Khaled@gmail.com', 'isActive' => 1],
    ['id' => 4, 'firstName' => 'Omar', 'lastName' => 'Yasser', 'salary' => 3000, 'email' => 'Omar.Yasser@gmail.com', 'isActive' => 0],
    ['id' => 5, 'firstName' => 'Mohammed', 'lastName' => 'Omar', 'salary' => 8500, 'email' => 'Mohammed.Omar@gmail.com', 'isActive' => 1],
    ['id' => 6, 'firstName' => 'Ahmed', 'lastName' => 'Maged', 'salary' => 7000, 'email' => 'Ahmed.Maged@gmail.com', 'isActive' => 0],
    ['id' => 7, 'firstName' => 'Yasser', 'lastName' => 'Omar', 'salary' => 5000, 'email' => 'Yasser.Omar@gmail.com', 'isActive' => 1],
    ['id' => 8, 'firstName' => 'Ali', 'lastName' => 'Mohammed', 'salary' => 9500, 'email' => 'Ali.Mohammed@gmail.com', 'isActive' => 0],
    ['id' => 9, 'firstName' => 'Ashraf', 'lastName' => 'Ahmed', 'salary' => 8000, 'email' => 'Ashraf.Ahmed@gmail.com', 'isActive' => 1],
    ['id' => 10, 'firstName' => 'Khaled', 'lastName' => 'Sherif', 'salary' => 12000, 'email' => 'Khaled.Sherif@gmail.com', 'isActive' => 1],
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
