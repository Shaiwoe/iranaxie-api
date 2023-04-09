<?php

return [

    'default' => 'local',

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
    ],

    'links' => [
        public_path('identities') => storage_path('app/identities'),
    ],
];
