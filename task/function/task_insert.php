<?php
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['title'])) {
    // POST情報を変数に格納
    $title = $_POST['title'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $status = $_POST['status'];
    $description = $_POST['description'];

    // DB保存
    try {
        $sql = 'INSERT INTO tasks (title, date, category, status, description) VALUES (:title, :date, :category, :status, :description)';
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        header('Location:../index.php');
        exit;
    } catch (PDOException $e) {
        echo "データベースに保存失敗：" . $e->getMessage() . "\n";
        exit(1);
    }
}
