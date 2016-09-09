<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */
return [
    'dms-conf' => [
        'size_allowed' => [
            ['width' => 300, 'height' => 200],
            ['width' => 300, 'height' => 300],
            ['width' => 150, 'height' => 100],
            ['width' => 80, 'height' => 80],
            ['width' => 300],
        ],
        'check_size_allowed' => false,
        'default_path' => 'upload/',
        'adapter' => 'http-adapter',
        'convert' => [
        	'tmp' => '/tmp/',
        ],
        'headers'=> [
            'Access-Control-Allow-Origin'=>'http://local.wow.in',
            'Access-Control-Allow-Credentials'=>'true'
        ],
        'storage' => [
        	'name' => 's3',
        	'bucket' => 'NAME-BUCKET',
        	'options' => [
        		'version' => 'latest',
            	'region' => '',
            	'credentials' => [
                	'key'    => '',
                	'secret' => '',
            	]
        	]
        ]
    ],
    'http-adapter' => [
        'adapter' => 'Zend\Http\Client\Adapter\Curl',
        'maxredirects' => 5,
        'sslverifypeer' => false,
        'timeout' => 10,
    ],
];
