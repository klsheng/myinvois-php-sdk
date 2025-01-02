Upgrade Guides for MyInvois SDK for PHP
============================================

This file contains the upgrade notes for MyInvois SDK for PHP. These notes highlight changes that
could break your application when you upgrade from one version to another.

Upgrade process is as simple as updating your dependency in your composer.json by
running `composer update`. After upgrade, you may need to check whether your application still works as expected and no tests are broken.

See the following notes on which changes to consider when upgrade from one version to another.

> Note: If you want to upgrade from version A to version C and there is
version B between A and C, you need to follow the guides
for both A and B.

Upgrade to 1.0.6
-----------------------
- The `getNotifications()` function in `Klsheng\Myinvois\Service\Notification\NotificationService` has been updated, and the `channel` parameter has been removed.
- The `searchDocuments()` function in `Klsheng\Myinvois\Service\Document\DocumentService` has removed the `continuationToken` parameter and introduced the `pageNo` parameter.