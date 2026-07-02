# Changelog

All notable changes to `mjharris/procore-php-sdk` will be documented in this file.

## v0.1.1 - 2026-07-02

- Allow `symfony/deprecation-contracts` 3.x alongside 2.x. The package is a one-function shim (`trigger_deprecation()`); the old `^2.1`-only constraint pinned consuming apps to 2.x and blocked unrelated dependency updates.

## v0.1.0 - 2026-04-21

Initial release under the MJ Harris fork.

- Mirrors the working copy of `moab-tech/procore-php-sdk` at its final `dev-master` commit (`d9db38b8`); the upstream GitHub repo is no longer reachable.
- Renamed the composer package to `mjharris/procore-php-sdk` and the PSR-4 namespace to `MJHarris\Procore` (was `MoabTech\Procore`).
- Published to [Packagist](https://packagist.org/packages/mjharris/procore-php-sdk).
- No behavior changes vs. upstream — same API surface, same dependencies, same MIT license.
