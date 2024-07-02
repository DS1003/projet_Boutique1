<?php
return [
    'database' => [
        'name' => 'mydatabase',
        'username' => 'username',
        'password' => 'password',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
