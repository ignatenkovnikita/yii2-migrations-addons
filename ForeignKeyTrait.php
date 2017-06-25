<?php
namespace ignatenkovnikita\migrationsaddons;

/**
 * This trait must be used in migration files.
 *
 * Trait ForeignKeyTrait
 *
 * @package console\traits
 */
trait ForeignKeyTrait
{

    /**
     * Add foreign keys to $table
     *
     * @param string $table  table name
     * @param array  $fields , for example [
     *                       ['sale_point_id', 'sale_point', 'id],
     *                       ['employee_id', 'employee', 'id]
     *                       ]
     * @param string $delete
     * @param string $update
     */
    public function addForeignKeys($table, array $fields, $delete = 'CASCADE', $update = 'CASCADE')
    {

        foreach ($fields as $field) {
            $this->addForeignKey(
                $this->getKeyName($table, $field[0]),
                $table,
                $field[0],
                $field[1],
                $field[2],
                $delete,
                $update
            );
        }
    }

    /**
     * Drop fk from table
     * @param       $table
     * @param array $keys
     */
    public function dropForeignKeys($table, array $keys)
    {
        foreach ($keys as $key) {
            $value = is_array($key) ? $key[0] : $key;
            $this->dropForeignKey($this->getKeyName($table, $value), $table);
        }
    }

    /**
     * Get name by table and field names
     * @param $name
     * @param $field
     *
     * @return mixed
     */
    private function getKeyName($name, $field)
    {
        $name = str_replace('{{%', '', $name);
        $name = str_replace('}}', '', $name);
        return sprintf('fk_%s_%s', $name, $field);
    }

}