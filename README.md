# Auth Module

The Auth module provides optional authentication and authorization adapters for Flexi applications. It includes HTTP Basic authentication, JWT authentication, role and permission checks, and a login handler.

## Components

- `BasicAuthMiddleware` verifies credentials through module interfaces and stores authenticated identity in `SessionStorageInterface`.
- `JWTAuthMiddleware` validates bearer tokens using `SecretProviderInterface`.
- `AuthorizationMiddleware` checks configured roles and permissions.
- `LoginController` provides the configured `/auth/login` endpoint.
- `ConfigurationCredentialsRepository` reads credentials from `Config/credentials.json`; replace sample credentials before use.

## Configuration and services

Service and route definitions are in `Config/services.json` and `Config/routes.json`. The module also reads `Config/credentials.json`. Configure `AUTH_SESSION_TIMEOUT` and the JWT secret through the application's environment/configuration provider. Never commit production credentials or JWT secrets.

This module requires the Session and Logging modules for its configured services. The Composer manifest declares those dependencies and supports Flexi Core `^3.2` and `flexi/contracts` `^5.2.1`.

## Install and activate

Install `cubadevops/flexi-module-auth` with Composer, then activate the `Auth` module using the core module manager. Modules are inactive until explicitly activated.

## Tests

Install the development dependencies with `composer install`, then run `vendor/bin/phpunit tests` from the module root.
