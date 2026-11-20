<?php

return [
    'allowed_files' => ['apng', 'ico', 'jpg', 'jpeg', 'gif', 'png', 'pdf', 'webp'],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'system' => [
        'default' => [
            'payment' => [
                'payflowpro' => [
                    'partner' => null,
                    'user' => null,
                    'pwd' => null,
                    'sandbox_flag' => null,
                    'proxy_host' => null,
                    'proxy_port' => null,
                    'debug' => null
                ],
                'payflow_link' => [
                    'pwd' => null,
                    'sandbox_flag' => null,
                    'use_proxy' => null,
                    'proxy_host' => null,
                    'proxy_port' => null,
                    'debug' => null,
                    'url_method' => 'GET'
                ],
                'payflow_express' => [
                    'debug' => null
                ],
                'paypal_express_bml' => [
                    'publisher_id' => null
                ],
                'paypal_express' => [
                    'debug' => null,
                    'merchant_id' => null
                ],
                'hosted_pro' => [
                    'debug' => null
                ],
                'paypal_billing_agreement' => [
                    'debug' => null
                ],
                'quick_checkout' => [
                    'api_key' => null,
                    'publishable_key' => null,
                    'signing_secret' => null
                ],
                'braintree' => [
                    'merchant_id' => null,
                    'public_key' => null,
                    'private_key' => null,
                    'merchant_account_id' => null
                ],
                'braintree_paypal' => [
                    'merchant_name_override' => null
                ],
                'checkmo' => [
                    'mailing_address' => null
                ],
                'payflow_advanced' => [
                    'user' => null,
                    'pwd' => null,
                    'sandbox_flag' => null,
                    'proxy_host' => null,
                    'proxy_port' => null,
                    'debug' => null,
                    'url_method' => 'GET'
                ],
            ],
            'payment_all_paypal' => [
                'paypal_payflowpro' => [
                    'settings_paypal_payflow' => [
                        'heading_cc' => null,
                        'settings_paypal_payflow_advanced' => [
                            'paypal_payflow_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ],
                'payflow_link' => [
                    'settings_payflow_link' => [
                        'settings_payflow_link_advanced' => [
                            'payflow_link_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ],
                'payments_pro_hosted_solution' => [
                    'pphs_settings' => [
                        'pphs_settings_advanced' => [
                            'pphs_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ],
                'express_checkout' => [
                    'settings_ec' => [
                        'settings_ec_advanced' => [
                            'express_checkout_settlement_report' => [
                                'heading_sftp' => null
                            ]
                        ]
                    ]
                ]
            ],
            'paypal' => [
                'fetch_reports' => [
                    'ftp_login' => null,
                    'ftp_password' => null,
                    'ftp_sandbox' => null,
                    'ftp_ip' => null,
                    'ftp_path' => null
                ],
                'general' => [
                    'business_account' => null,
                    'merchant_country' => null
                ],
                'wpp' => [
                    'api_username' => null,
                    'api_password' => null,
                    'api_signature' => null,
                    'api_cert' => null,
                    'sandbox_flag' => null,
                    'proxy_host' => null,
                    'proxy_port' => null
                ]
            ],
            'admin' => [
                'url' => [
                    'custom' => null,
                    'custom_path' => null
                ],
                'security' => [
                    'session_lifetime' => 9000000,
                    'admin_account_sharing' => 1,
                    'password_lifetime' => '',
                    'password_is_forced' => 0
                ],
                'captcha' => [
                    'enable' => 0
                ]
            ],
            'web' => [
                'default' => [
                    'front' => 'cms'
                ],
                'cookie' => [
                    'cookie_path' => null,
                    'cookie_domain' => null
                ],
                'seo' => [
                    'use_rewrites' => '1',
                ],
                'url' => [
                    'use_store' => '1',
                    'redirect_to_base' => '301',
                    'catalog_media_url_format' => 'hash',
                ],
            ],
            'catalog' => [
                'productalert_cron' => [
                    'error_email' => null
                ],
                'product_video' => [
                    'youtube_api_key' => null
                ],
                'layered_navigation' => [
                    'display_category' => 0
                ],
                'magento_catalogpermissions' => [
                    'restricted_landing_page' => 'terms'
                ],
                'magento_catalogevent' => [
                    'enabled' => 0,
                    'lister_output' => 0,
                ],
            ],
            'cataloginventory' => [
                'source_selection_distance_based_google' => [
                    'api_key' => null
                ],
                'options' => [
                    'can_back_in_stock' => 0,
                    'can_subtract' => 0,
                    'show_out_of_stock' => 1
                ],
            ],
            'currency' => [
                'import' => [
                    'error_email' => null
                ],
                'options' => [
                    'base' => 'UAH',
                    'default' => 'UAH',
                    'allow' => 'UAH',
                ],
            ],
            'sitemap' => [
                'generate' => [
                    'error_email' => null
                ]
            ],
            'trans_email' => [
                'ident_general' => [
                    'name' => 'Owner',
                    'email' => 'owner@example.com'
                ],
                'ident_sales' => [
                    'name' => 'Sales',
                    'email' => 'sales@example.com'
                ],
                'ident_support' => [
                    'name' => 'CustomerSupport',
                    'email' => 'support@example.com'
                ],
                'ident_custom1' => [
                    'name' => 'Custom 1',
                    'email' => 'custom1@example.com'
                ],
                'ident_custom2' => [
                    'name' => 'Custom 2',
                    'email' => 'custom2@example.com'
                ]
            ],
            'contact' => [
                'email' => [
                    'recipient_email' => 'hello@example.com'
                ],
                'contact' => [
                    'enabled' => 0
                ],
            ],
            'sales_email' => [
                'order' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'order_comment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'invoice' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'invoice_comment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'shipment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'shipment_comment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'creditmemo' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'creditmemo_comment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'magento_rma' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'magento_rma_auth' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'magento_rma_comment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'magento_rma_customer_comment' => [
                    'copy_to' => null,
                    'enabled' => 0
                ],
                'rejected_order' => [
                    'enabled' => 0
                ],
                'order_ready_for_pickup' => [
                    'enabled' => 0
                ],
            ],
            'checkout' => [
                'payment_failed' => [
                    'copy_to' => null
                ]
            ],
            'carriers' => [
                'ups' => [
                    'is_account_live' => '0',
                    'access_license_number' => null,
                    'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
                    'password' => null,
                    'username' => null,
                    'gateway_url' => 'https://www.ups.com/using/services/rave/qcostcgi.cgi',
                    'shipper_number' => null,
                    'tracking_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Track',
                    'debug' => null
                ],
                'usps' => [
                    'gateway_url' => 'https://production.shippingapis.com/ShippingAPI.dll',
                    'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
                    'userid' => null,
                    'password' => null
                ],
                'fedex' => [
                    'account' => null,
                    'meter_number' => null,
                    'key' => null,
                    'password' => null,
                    'sandbox_mode' => '0',
                    'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
                    'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/',
                    'smartpost_hubid' => null
                ],
                'dhl' => [
                    'id' => null,
                    'password' => null,
                    'account' => null,
                    'debug' => null,
                    'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet'
                ],
                'instore' => [
                    'active' => 1,
                    'search_radius' => 0
                ],
            ],
            'google' => [
                'analytics' => [
                    'account' => null,
                    'container_id' => null
                ],
                'gtag' => [
                    'analytics4' => [
                        'measurement_id' => null,
                        'container_id' => null
                    ],
                    'adwords' => [
                        'conversion_id' => null
                    ]
                ]
            ],
            'promo' => [
                'magento_reminder' => [
                    'identity' => 'general',
                    'enabled' => 0
                ]
            ],
            'recaptcha_backend' => [
                'type_recaptcha' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_invisible' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_recaptcha_v3' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'recaptcha_frontend' => [
                'type_recaptcha' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_invisible' => [
                    'public_key' => null,
                    'private_key' => null
                ],
                'type_recaptcha_v3' => [
                    'public_key' => null,
                    'private_key' => null
                ]
            ],
            'system' => [
                'smtp' => [
                    'host' => 'localhost',
                    'port' => '25'
                ],
                'full_page_cache' => [
                    'varnish' => [
                        'access_list' => null,
                        'backend_host' => null,
                        'backend_port' => null
                    ]
                ],
                'magento_scheduled_import_export_log' => [
                    'error_email' => null
                ],
                'release_notification' => [
                    'content_url' => 'magento.com/release_notifications',
                    'use_https' => '1'
                ]
            ],
            'adobe_ims' => [
                'integration' => [
                    'api_key' => null,
                    'private_key' => null
                ]
            ],
            'dev' => [
                'restrict' => [
                    'allow_ips' => null
                ],
                'js' => [
                    'session_storage_key' => 'collected_errors'
                ]
            ],
            'newrelicreporting' => [
                'general' => [
                    'api_url' => 'https://api.newrelic.com/v2/applications/%s/deployments.json',
                    'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events',
                    'account_id' => null,
                    'app_id' => null,
                    'api' => null,
                    'insights_insert_key' => null
                ]
            ],
            'analytics' => [
                'general' => [
                    'token' => null
                ],
                'url' => [
                    'signup' => 'https://advancedreporting.rjmetrics.com/signup',
                    'update' => 'https://advancedreporting.rjmetrics.com/update',
                    'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
                    'otp' => 'https://advancedreporting.rjmetrics.com/otp',
                    'report' => 'https://advancedreporting.rjmetrics.com/report',
                    'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
                ],
                'subscription' => [
                    'enabled' => 0
                ],
            ],
            'crontab' => [
                'default' => [
                    'jobs' => [
                        'analytics_subscribe' => [
                            'schedule' => [
                                'cron_expr' => '0 * * * *'
                            ]
                        ],
                        'analytics_collect_data' => [
                            'schedule' => [
                                'cron_expr' => '00 02 * * *'
                            ]
                        ]
                    ]
                ]
            ],
            'bluewood' => [
                'configuration' => [
                    'url' => 'https://graphql.scue.pro/graphql',
                    'token' => 'OmHtuJtA2p3TaiS497fCqzAlGi1lg2rFRXnyYrXG',
                ],
            ],
            'esputnik' => [
                'general' => [
                     'login' => 'test',
                     'password' => '5FFBD6ACF999ADEEECB2C3EC44226AD9'
                ],
            ],                        
            'pim' => [
                'general' => [
                    'endpoint' => 'https://pim.magento.ua/pimcore-graphql-webservices/import',
                    'authorization_key' => '898d9cc767337b4b267187e42cf8e660',
                ],
            ],
            'mfcli' => [
                'general' => [
                    'version' => null,
                    'enabled' => '1',
                    'key' => 'HnPAIlmBDzE6IPRINJm36kk4oTTDmakQ',
                    'php' => null,
                    'commands' => 'indexer:reindex,cache:flush',
                    'non_admin_commands' => 'indexer:reindex,cache:flush',
                    'mfmodule' => 'Cli',
                    'mftype' => '1',
                ],
            ],
            'twofactorauth' => [
                'duo' => [
                    'application_key' => 'IqwTFb6NhrJ1A8huNjl4qjrmEuBYrm46r27lOuwUzLqSZDbdwLRzIb7TcRsg8Uwu',
                ],
            ],
            'general' => [
                'country' => [
                    'default' => 'UA',
                    'allow' => 'UA',
                ],
                'locale' => [
                    'timezone' => 'Europe/Kyiv',
                    'code' => 'uk_UA',
                    'weight_unit' => 'kgs',
                    'firstday' => '1',
                    'weekend' => '0,6'
                ],
                'store_information' => [
                    'merchant_vat_number' => 'None',
                    'street_line2' => 'None',
                    'street_line1' => 'None',
                    'city' => 'None',
                    'postcode' => 'None',
                    'region_id' => 'None',
                    'hours' => 'Телефон горячей линии. Ежедневно 9:00-21:00 Бесплатно по Украине',
                    'phone' => '0 (800) 306-063',
                    'name' => 'None'
                ],
            ],
            'cms' => [
                'hierarchy' => [
                    'metadata_enabled' => 0,
                    'enabled' => 0
                ],
                'pagebuilder' => [
                    'enable_content_preview' => 0,
                    'enabled' => 0
                ],
            ],
            'newsletter' => [
                'general' => [
                    'active' => 0
                ],
            ],
            'customer' => [
                'magento_customerbalance' => [
                    'is_enabled' => 0,
                    'show_history' => 0,
                    'refund_automatically' => 0
                ],
                'magento_customersegment' => [
                    'is_enabled' => 0,
                    'real_time_check_if_customer_is_matched_by_segment' => 0
                ],
            ],
            'wishlist' => [
                'general' => [
                    'active' => 0
                ],
            ],
            'magento_invitation' => [
                'general' => [
                    'enabled' => 0,
                    'enabled_on_front' => 0
                ],
            ],
            'magento_reward' => [
                'general' => [
                    'is_enabled' => 0,
                    'publish_history' => 0,
                    'is_enabled_on_front' => 0
                ],
            ],
            'magento_giftregistry' => [
                'general' => [
                    'enabled' => 0
                ],
            ],
            'sales' => [
                'gift_options' => [
                    'wrapping_allow_order' => 0,
                    'wrapping_allow_items' => 0,
                    'allow_gift_receipt' => 0,
                    'allow_printed_card' => 0
                ],
            ],
            'tax' => [
                'classes' => [
                    'wrapping_tax_class' => 0,
                    'default_product_tax_class' => 0
                ]
            ],
            'mageplaza' => [
                'general' => [
                    'menu' => 0,
                    'notice_enable' => 0
                ],
            ],
            'oauth' => [
                'access_token_lifetime' => [
                    'customer' => 8760
                ]
            ],
            'amasty_xsearch' => [
                'general' => [
                    'delay' => '0,2',
                    'seo_key' => 'search', // Search Result Page URL Key - “Search” (system value)
                    'enable_popup_index' => '1',
                    'show_related_terms' => '2',
                    'show_related_terms_results' => '1',
                    'enable_save_search_input_value' => '1', // Save Search Term - “Yes”
                    'enable_seo_url' => '1' // Custom URL Key for Default Search Results Page - “Yes”
                ],
                'product' => [
                    'desc_length' => 100,
                    'show_sku' => 1,
                    'reviews' => 1,
                    'add_to_cart' => 1
                ],
                'category' => [
                    'limit' => 5
                ]
            ],
            'amasty_elastic' => [
                'connection' => [
                    'engine' => 'amasty_elastic',
                ],
                'catalog' => [
                    'wildcard_symbols' => 2,
                    'long_tail' => 1,
                    'allow_further_query' => 0,
                ],
                'index' => [
                    'use_language_stopwords' => 1,
                    'stopwords_language' => 'russian',
                    'use_language_stemmed_words' => 1,
                    'stemmed_words_language' => 'russian'
                ]
            ]
        ],
    ],
];
