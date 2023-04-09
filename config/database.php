<?php

return [

    /**
     * Documentation for this.
     */
    'default' => 'mysql',

    /**
     * Documentation for this.
     */
    'migrations' => 'migrations',

    /**
     * Documentation for this.
     */
    'connections' => [

        /**
         * Documentation for this.
         */
        'mysql' => [

            /**
             * Documentation for this.
             */
            'driver' => 'mysql',

            /**
             * Documentation for this.
             */
            'host' => env('DB_HOST'),

            /**
             * Documentation for this.
             */
            'port' => env('DB_PORT'),

            /**
             * Documentation for this.
             */
            'database' => env('DB_DATABASE'),

            /**
             * Documentation for this.
             */
            'username' => env('DB_USERNAME'),

            /**
             * Documentation for this.
             */
            'password' => env('DB_PASSWORD'),

            /**
             * Documentation for this.
             */
            'charset' => 'utf8mb4',

            /**
             * Documentation for this.
             */
            'collation' => 'utf8mb4_general_ci',

            /**
             * Documentation for this.
             */
            'strict' => true,
        ],
    ],
];
