<?php
return [
    'backend' => [
        'frontName' => 'admin_m2magento'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'WfsAs1WeKSalNdgt4BFp0RvRO0jC0Qtq'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'dce_'
            ],
            'page_cache' => [
                'id_prefix' => 'dce_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'checkout' => [
        'async' => 0,
        'deferred_total_calculating' => 0
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'db' => [
        'connection' => [
            'indexer' => [
                'host' => 'devops-rds-mysql-instance-1.cdsqbpnsoc7h.eu-central-1.rds.amazonaws.com',
                'dbname' => 'm2_live_master',
                'username' => 'magentodb',
                'password' => 'BJBb6zWjJ2G28FfB',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'persistent' => null
            ],
            'default' => [
                'host' => 'devops-rds-mysql-instance-1.cdsqbpnsoc7h.eu-central-1.rds.amazonaws.com',
                'dbname' => 'm2_live_master',
                'username' => 'magentodb',
                'password' => 'BJBb6zWjJ2G28FfB',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ],
        'table_prefix' => ''
    ],
    'crypt' => [
        'key' => 'e73216cebc056270731ec8e2eae48d07'
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'redis',
        'redis' => [
            'host' => 'clustercfg.devops-redis.yn9ulo.euc1.cache.amazonaws.com',
            'port' => '6379',
            'password' => '',
            'timeout' => '2.5',
            'persistent_identifier' => '',
            'database' => '0',
            'compression_threshold' => '2048',
            'compression_library' => 'gzip',
            'log_level' => '4',
            'max_concurrency' => '6',
            'break_after_frontend' => '5',
            'break_after_adminhtml' => '30',
            'first_lifetime' => '600',
            'bot_first_lifetime' => '60',
            'bot_lifetime' => '7200',
            'disable_locking' => '0',
            'min_lifetime' => '60',
            'max_lifetime' => '2592000',
            'sentinel_master' => '',
            'sentinel_servers' => '',
            'sentinel_connect_retries' => '5',
            'sentinel_verify_master' => '0'
        ]
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => 'm2_live_prod_001_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'clustercfg.devops-redis.yn9ulo.euc1.cache.amazonaws.com',
                    'database' => '1',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '1',
                    'compression_lib' => ''
                ]
            ],
            'page_cache' => [
                'id_prefix' => 'm2_live_prod_001_',
                'backend' => 'Magento\\Framework\\Cache\\Backend\\Redis',
                'backend_options' => [
                    'server' => 'clustercfg.devops-redis.yn9ulo.euc1.cache.amazonaws.com',
                    'database' => '2',
                    'port' => '6379',
                    'password' => '',
                    'compress_data' => '0',
                    'compression_lib' => ''
                ]
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'target_rule' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'm2.magento.ua'
    ],
    'install' => [
        'date' => 'Tue, 01 Jan 2019 01:01:01 +0000'
    ]
];
