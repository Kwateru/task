<?php
$displayId = isset($_GET['id']) ? $_GET['id'] : 0;

include('function/display_task.php');

include('function/util.php');

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/uikit.css">
    <title>詳細なタスクページ</title>
</head>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small">はじめてのタスク管理</h1>
        <table class="uk-table uk-table-justify uk-table-divider">
            <thead>
                <tr>
                    <th>種類</th>
                    <th>詳細</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($todoDisplay as $todo) {
                    $statusMap = statusMap($todo['status']);
                    $categoryMap = categoryMap($todo['category']);
                    // nl2br関数で改行を<br>に変換
                    $description = nl2br($todo['description']);
                    echo <<<EOM
                <tr>
                    <td>No.</td>
                    <td>{$todo['id']}</td>
                </tr>
                <tr>
                    <td>タイトル</td>
                    <td>{$todo['title']}</td>
                </tr>
                <tr>
                    <td>期日</td>
                    <td>{$todo['date']}</td>
                </tr>
                <tr>
                    <td>カテゴリ</td>
                    <td>{$categoryMap}</td>
                </tr>
                <tr>
                    <td>ステータス</td>
                    <td>{$statusMap}</td>
                </tr>
                <tr>
                    <td>内容</td>
                    <td>{$description}</td>
                </tr>
                <tr>
                    <td>作成日</td>
                    <td>{$todo['create_at']}</td>
                </tr>
                EOM;
                }
                ?>
            </tbody>
        </table>
        <a class="uk-button uk-button-default" href="index.php">タスク一覧へ</a>
        <a class="uk-button uk-button-default" href="edit.php?id=<?php echo $todo['id']; ?>"><i class="fa-solid fa-pen-to-square" style="color: #11df1f;"></i> 編集</a>
        <a class="uk-button uk-button-default" href="function/delete_task.php?id=<?php echo $todo['id']; ?>"><i class="fa-solid fa-check" style="color: #e60a0a;"></i> 完了</a>
    </div>
    <script src="https://kit.fontawesome.com/7b558a82c5.js" crossorigin="anonymous"></script>
</body>

</html>