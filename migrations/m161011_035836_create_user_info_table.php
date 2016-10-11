<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_info`.
 */
class m161011_035836_create_user_info_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_info', [
            'id' => $this->primaryKey(),
            'user_name' => $this->string(50),
            'first_name' => $this->string(50),
            'last_name' => $this->string(50),
            'email' => $this->string(100),
            'avatar' => $this->string(255),
            'gender' => $this->string(10),
            'create_date' => $this->date(),
            'company' => $this->string(255),
            'user_agent' => $this->string(255),
        ], "ENGINE=InnoDB");
        $this->importData();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_info');
    }

    private function importData()
    {
        $folder = 'data';
        $path = Yii::getAlias('@app') . DIRECTORY_SEPARATOR . "migrations" . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR;
        $listFiles = scandir($path);
        if(is_array($listFiles) && count($listFiles) > 0) {
            foreach ($listFiles as $key => $file) {
                if($file !== '.' && $file !== "..") {
                    echo "... execute file: " . $file . "\n";
                    $sql = file_get_contents($path . $file);
                    $this->execute($sql);
                }
            }
        }
    }
}
