<?php

class m0002_add_password_column
{
    public function up()
    {
        $db = \hoangtu\phpmvc\core\Application::$app->db;
        $SQL = "ALTER TABLE users ADD password varchar(512) NOT NULL;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {

        $db = \hoangtu\phpmvc\core\Application::$app->db;
        $SQL = "ALTER TABLE users DROP COLUMN password";
        $db->pdo->exec($SQL);
    }
}
