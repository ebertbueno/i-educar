<?php
/**
 * Created by PhpStorm.
 * User: evertonmuniz
 * Date: 20/06/18
 * Time: 23:28
 */

namespace Tests\SuiteTestCase;


use PHPUnit\DbUnit\Operation\Insert;
use PHPUnit\DbUnit\DataSet\IDataSet;
use PHPUnit\DbUnit\Database\Connection;

class IeducarInsertTriggerEnable extends Insert
{
    public function execute(Connection $connection, IDataSet $dataSet): void
    {
        $sql = "SET session_replication_role = DEFAULT;";
        $connection->getConnection()->query($sql);

        parent::execute($connection, $dataSet);
    }
}