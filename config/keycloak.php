<?php

return [
  'realm_public_key' => env('KEYCLOAK_REALM_PUBLIC_KEY', 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAtTWhnYUvohB5uOPW5dylcOEsUGd5TC/GXTscuMpNUAiRzySkVr5qWH/F1OcvHoCWIkbpCAeUUNC0Io5pWreqeCr3SsTHcI98QwV3V4z5FIasoz0At8tj5w8r5MQNJTASiu2Kdx11N8KA09kk67XA5Vc5gAbEdjv/mJ6hP0NBXd7No8VYgWaXzWQxcsxvBtrPZiH11DG3EZOtZQ6b8b4nvEBrTZqM1iR330z+b6fQyWSU3JOiOWY7T8jPLL4ik6i02ERx38DPg71X7rWg37x5bKkJ2G/aWcjiEavIF/smtQC2PB+XQI1WzKJAMHT145eHABOCtccKYK/Mwa3K6bwp0QIDAQAB'),

  'load_user_from_database' => env('KEYCLOAK_LOAD_USER_FROM_DATABASE', true),

  'user_provider_credential' => env('KEYCLOAK_USER_PROVIDER_CREDENTIAL', 'username'),

  'token_principal_attribute' => env('KEYCLOAK_TOKEN_PRINCIPAL_ATTRIBUTE', 'preferred_username'),

  'append_decoded_token' => env('KEYCLOAK_APPEND_DECODED_TOKEN', false),

  'allowed_resources' => env('KEYCLOAK_ALLOWED_RESOURCES', 'test')
];
