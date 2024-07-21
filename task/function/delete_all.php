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
    $deleteAllId = isset($_GET['id']) ? $_GET['id'] : 0;
    $sql = 'DELETE FROM tasks WHERE id = :id AND finish_flag = 1';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':id', $deleteAllId);
    $stmt->execute();
    header('Location:../complete.php');
    exit(0);
} catch (PDOException $e) {
    echo "タスク完全削除失敗：" . $e->getMessage() . "\n";
    exit(1);
}
?>