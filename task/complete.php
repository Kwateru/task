<?php
include('function/complete_task.php');

include('function/util.php');

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/uikit.css">
    <title>タスク完了ページ</title>
</head>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small">はじめてのタスク管理</h1>
        <table class="uk-table uk-table-justify uk-table-divider">
            <thead>
                <tr>
                    <th>タスク名</th>
                    <th>対応状況</th>
                    <th>期日</th>
                    <th class="uk-width-small"></th>
                    <th class="uk-width-small"></th>
                    <th class="uk-width-small"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($todoComplete as $todo) {
                    // Heredoc構文の中で関数呼び出しを直接使用できない
                    $statusMap = statusMap($todo['status']);
                    echo <<<EOM
                    <tr>
                    <td>{$todo['title']}</td>
                    <td>{$statusMap}</td>
                    <td>{$todo['date']}</td>
                    <td><a class="uk-button uk-button-default" href="display.php?id={$todo['id']}"><i class="fa-solid fa-display" style="color: #74C0FC;"></i> 表示</a></td>
                    <td><a class="uk-button uk-button-default" href="function/return_task.php?id={$todo['id']}"><i class="fa-solid fa-arrow-rotate-left" style="color: #11df1f;"></i> 復活</a></td>
                    <td><a onclick="clickEvent()" class="uk-button uk-button-default" href="function/delete_all.php?id={$todo['id']}"><i class="fa-solid fa-trash" style="color: #e60a0a;"></i> 完全削除</a></td>
                    </tr>
                    EOM;
                }
                ?>
            </tbody>
        </table>
        <a class="uk-button uk-button-default" href="index.php">タスク一覧へ</a>
    </div>
    <script src="https://kit.fontawesome.com/7b558a82c5.js" crossorigin="anonymous"></script>
    <script src="./js/util.js"></script>
</body>

</html>