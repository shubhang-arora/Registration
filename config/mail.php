<?php

return array(
    'driver' => 'smtp',
    'host' => 'smtp.sendgrid.net',
    'port' => 587,
    'from' => array('address' => 'admin@eekota.com', 'name' => 'Admin'),
    'encryption' => null,
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
);
