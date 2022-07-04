<?php


use app\core\Application;

class m0001_initial {

    public function up()
    {
        $db = Application::$app->db;

        $SQL = "CREATE TABLE IF NOT EXISTS `users` (
            `id` INT PRIMARY KEY AUTO_INCREMENT,
            `email` VARCHAR(255) NOT NULL UNIQUE,
            `first_name` VARCHAR(150),
            `last_name` VARCHAR(150),
            `status` TINYINT NOT NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL
        ) ENGINE=INNODB;";
        
        $db->pdo->exec($SQL);
    } 

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "DROP TABLE users;";
        $db->pdo->exec($SQL);
    }
}
?>