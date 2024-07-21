<?php

// include('../db/connection.php');
$dsn = 'mysql:dbname=academy_db;host=docker_server_test-db-1';
$user = 's4LwPq';
$password = 'zXw8mVbL1';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "接続失敗：" . $e->getMessage() . "\n";
    exit(1);
}

try {
    if ($conditionCategory != 0) {
        $sql = 'SELECT * FROM tasks WHERE category = :category AND finish_flag = 0 ORDER BY date ASC';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':category', $conditionCategory);
    } else {
        $sql = 'SELECT * FROM tasks WHERE finish_flag = 0 ORDER BY date ASC';
        $stmt = $dbh->prepare($sql);
    }
    $stmt->execute();
    $todoList = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "タスク取得失敗：" . $e->getMessage() . "\n";
    exit(1);
}
