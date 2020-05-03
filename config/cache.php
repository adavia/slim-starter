<?php  

return [
    'views' => [
        'enabled' => $enabled = env('VIEW_CACHE_DISABLED'),
        'path' => $enabled ? base_path('cache/views') : false
    ]
];