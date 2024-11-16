# Pure PHP Examples
This is step by step example to setup SDK and related packages without using PHP framework (E.g: Laravel, Yii, etc).

## Dependencies
Composer tool must be installed.

## Steps
1. Create an empty folder, all steps will be perform inside this folder.
2. Create composer.json and use the content from Composer Samples.
3. Run following command and the composer tool will create vendor folder and install dependencies in the vendor folder.
```zsh
$ composer install
```
4. Create index.php and use the content from PHP Samples.
5. Run following command and the sample code will login to MyInvois gateway.
```zsh
$ php index.php
```

#### Composer Samples
```json
{
    "minimum-stability": "stable",
    "require": {
        "klsheng/myinvois-php-sdk": "*"
    },
    "repositories": [
        {
            "type": "composer",
            "url": "https://asset-packagist.org"
        }
    ]
}
```

#### PHP Samples
```php
require_once __DIR__ . '/vendor/autoload.php';

use Klsheng\Myinvois\MyInvoisClient;

$prodMode = false;
$client = new MyInvoisClient('client_id', 'client_secret', $prodMode);
$client->login();
$access_token = $client->getAccessToken();

echo $access_token;
```