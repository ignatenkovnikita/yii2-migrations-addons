<?php
namespace ignatenkovnikita\migrationsaddons;

/**
 * Class AddCreatedUpdated
 * @package console\traits
 */
trait AddCreatedUpdated
{
    /**
     * @param $tableName
     */
    public function addAllTime($tableName)
    {
        $this->addCreated($tableName);
        $this->addUpdated($tableName);
    }

    /**
     * @param $tableName
     * @param string $columnName
     */
    public function addCreated($tableName, $columnName = 'created_at')
    {
        $this->addColumn($tableName, $columnName, $this->bigInteger());
    }

    /**
     * @param $tableName
     * @param string $columnName
     */
    public function addUpdated($tableName, $columnName = 'updated_at')
    {
        $this->addColumn($tableName, $columnName, $this->bigInteger());
    }

}