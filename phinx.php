<?php 

return [
    'paths' => [
        'migrations' => base_path('storage/database/migrations')
    ],
    'migration_base_class' => 'App\Database\Migrations\Migration',
    'templates' => [
        'file' => base_path('app/Database/Migrations/MigrationStub.php')
    ],
    'environments' => [
        'default_migration_database' => 'migrations',
        'default' => [
            'adapter' => env('DB_DRIVER'),
            'name' => base_path('storage/database/database.db'),
            'suffix' => ''
        ]
    ]
];