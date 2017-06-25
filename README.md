### Yii2 migrations addons

This traits add column on migrations files

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
