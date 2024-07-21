<?php
include('../db/connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['title'])) {
    // POST情報を変数に格納
    $idEdit = $_POST['id'];
    $titleEdit = $_POST['title'];
    $dateEdit = $_POST['date'];
    $categoryEdit = $_POST['category'];
    $statusEdit = $_POST['status'];
    $descriptionEdit = $_POST['description'];

    // DB保存
    try {
        $sql = 'UPDATE tasks SET title = :titleEdit, date = :dateEdit, category = :categoryEdit, status = :statusEdit, description = :descriptionEdit WHERE id = :idEdit';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':idEdit', $idEdit);
        $stmt->bindValue(':titleEdit', $titleEdit);
        $stmt->bindValue(':dateEdit', $dateEdit);
        $stmt->bindValue(':categoryEdit', $categoryEdit);
        $stmt->bindValue(':statusEdit', $statusEdit);
        $stmt->bindValue(':descriptionEdit', $descriptionEdit);
        $stmt->execute(); 

        header('Location:../index.php');
        exit;
    } catch (PDOException $e) {
        echo "タスク情報の更新失敗：" . $e->getMessage() . "\n";
        exit(1);
    }
}
