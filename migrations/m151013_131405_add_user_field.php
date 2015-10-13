<?php
/**
 * @link http://mikhailmikhalev.ru
 * @author Mikhail Mikhalev
 */

use yii\db\Migration;
use nhkey\arh\managers\DBManager;


/**
 * Add user_id field in DB
 *
 */
class m151013_131405_add_user_field extends Migration
{
    public function up()
    {
        $this->addColumn(DBManager::$tableName, 'user_id', $this->string()->notNull());
        $this->createIndex('idx-user_id', DBManager::$tableName, 'user_id');
    }

    public function down()
    {
        $this->dropColumn(DBManager::$tableName, 'user_id');
    }
}
