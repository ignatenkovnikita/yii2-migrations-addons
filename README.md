### Yii2 migrations addons


[![Latest Stable Version](https://poser.pugx.org/ignatenkovnikita/yii2-migrations-addons/v/stable)](https://packagist.org/packages/ignatenkovnikita/yii2-migrations-addons) [![Total Downloads](https://poser.pugx.org/ignatenkovnikita/yii2-migrations-addons/downloads)](https://packagist.org/packages/ignatenkovnikita/yii2-migrations-addons) [![Latest Unstable Version](https://poser.pugx.org/ignatenkovnikita/yii2-migrations-addons/v/unstable)](https://packagist.org/packages/ignatenkovnikita/yii2-migrations-addons) [![License](https://poser.pugx.org/ignatenkovnikita/yii2-migrations-addons/license)](https://packagist.org/packages/ignatenkovnikita/yii2-migrations-addons)



This traits add column on migrations files

## Install
```bash
composer require ignatenkovnikita/yii2-migrations-addons:dev-master
```

#### List of traits
- AddAuthorUpdater - add columns `author_id` and `updater_id` for behavior `BlameableBehavior`
- AddCreatedUpdated - add columns `created_id` and `updated_at` for behavior TimestampBehavior
- ForeignKeyTrait - add FK 

### Usage
AddAuthorUpdater
```php
use \ignatenkovnikita\migrationsaddons\AddAuthorUpdater;

$this->addAllUser($tableName);
```

AddCreatedUpdated
```php
use \ignatenkovnikita\migrationsaddons\AddCreatedUpdated;

$this->addAllTime($tableName);
```

ForeignKeyTrait
```php
use \ignatenkovnikita\migrationsaddons\ForeignKeyTrait;

$this->addForeignKeys($tableName,[
    ['user_id', 'table_name', 'id']
]);
```
