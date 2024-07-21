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
    $returnId = isset($_GET['id']) ? $_GET['id'] : 0;
    $sql = 'UPDATE tasks SET finish_flag = 0 WHERE id = :id';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $returnId);
    $stmt->execute();
    header('Location:../index.php');
    exit(0);
} catch (PDOException $e) {
    echo "タスク完了失敗：" . $e->getMessage() . "\n";
    exit(1);
}
?>