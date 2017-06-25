<?php
namespace ignatenkovnikita\migrationsaddons;


/**
 * Class AddAuthorUpdater
 * @package console\traits
 */
trait AddAuthorUpdater
{
    /**
     * @param $tableName
     */
    public function addAllUser($tableName)
    {
        $this->addAuthor($tableName);
        $this->addUpdater($tableName);
    }

    /**
     * @param $tableName
     * @param string $columnName
     */
    public function addAuthor($tableName, $columnName = 'created_by')
    {
        $this->addColumn($tableName, $columnName, $this->integer());
    }

    /**
     * @param $tableName
     * @param string $columnName
     */
    public function addUpdater($tableName, $columnName = 'updated_by')
    {
        $this->addColumn($tableName, $columnName, $this->integer());
    }
}