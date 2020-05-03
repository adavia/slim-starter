<?php 

return [
    'sqlite' => [
        'driver' => env('DB_DRIVER'),
        'database' => base_path('storage/database/database.db'),
        'prefix' => '',
    ]
];