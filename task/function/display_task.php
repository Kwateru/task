<?php
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
    $sql = 'SELECT * FROM tasks WHERE id = :id';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $displayId);
    $stmt->execute();
    $todoDisplay = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "タスク詳細失敗：" . $e->getMessage() . "\n";
    exit(1);
}
?>