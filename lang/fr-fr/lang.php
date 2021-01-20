<?php

return [
    'plugin' => [
        'name' => "CORS",
        'description' => "Cross-Origin Resource Sharing.",
    ],
    'permissions' => [
        'settings' => "Gestion de CORS",
    ],
    'settings' => [
        'menu_label' => "CORS",
        'menu_description' => "Configuration de CORS",
        'fields' => [
            'supportsCredentials' => [
                'label' => "Support de credentials",
                'comment' => "A activer pour supporter des credentials entre domaines."
            ],
            'allowedOrigins' => [
                'label' => "Sources autorisées",
                'comment' => "Les domaines autorisés à faire des requêtes sur votre site (mettre * pour tous les domaines)."
            ],
            'allowedHeaders' => [
                'label' => "Headers autorisés",
                'comment' => "Les en-têtes qui sont supportées."
            ],
            'allowedMethods' => [
                'label' => "Méthodes autorisées",
                'comment' => "Les méthodes HTTP qui sont requêtables (mettre * pour toutes les méthodes)."
            ],
            'exposedHeaders' => [
                'label' => "Headers exposés",
                'comment' => "Les en-têtes qui peuvent être exposés."
            ],
            'maxAge' => [
                'label' => "Age Max",
                'comment' => "Valeur du Access-Control-Max-Age."
            ]
        ]
    ]
];
