Keycloak guard for laravel:
https://github.com/robsontenorio/laravel-keycloak-guard/commits?author=robsontenorio

User authenticates her/him on the keycloak server and retrieves an access token.
Because the access token is signed by the keycloak server, we can use the public key to verify its signature.

This verification is done by the laravel keycloak guard.


