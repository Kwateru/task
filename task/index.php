<?php
include('function/util.php');

// カテゴリ絞り込みをGETパラメーターで変数に格納
$conditionCategory = (isset($_GET['category'])) ? $_GET['category'] : 0;

// データベースからタスク情報取得
include('function/get_task.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/uikit.css">
    <title>はじめてのタスク管理</title>
</head>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small">はじめてのタスク管理</h1>

        <!-- カテゴリ -->
        <div class="uk-container uk-flex">
            <a class="uk-button uk-margin-small-right <?php echo $conditionCategory == 0 ? 'uk-button-primary' : 'uk-button-default'; ?>" href="index.php?category=0">すべて</a>
            <a class="uk-button uk-margin-small-right <?php echo $conditionCategory == 1 ? 'uk-button-primary' : 'uk-button-default'; ?>" href="index.php?category=1">プロジェクトS</a>
            <a class="uk-button uk-margin-small-right <?php echo $conditionCategory == 2 ? 'uk-button-primary' : 'uk-button-default'; ?>" href="index.php?category=2">会社</a>
            <a class="uk-button uk-margin-small-right <?php echo $conditionCategory == 3 ? 'uk-button-primary' : 'uk-button-default'; ?>" href="index.php?category=3">プライベート</a>
            <a class="uk-button uk-button-default uk-margin-small-right" href="complete.php"><i class="fa-solid fa-trash" style="color: #333;"></i> ゴミ箱</a>
            <div class="uk-flex-auto"></div>
            <a class="uk-button uk-button-default" href="insert.php"><i class="fa-solid fa-plus fa-xl" style="color: #17a67b;"></i> タスク追加</a>
        </div>

        <!-- 取得したデータをテーブルに展開 -->
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
                foreach ($todoList as $todo) {
                    // Heredoc構文の中で関数呼び出しを直接使用できない
                    $statusMap = statusMap($todo['status']);
                    echo <<<EOM
                    <tr>
                    <td>{$todo['title']}</td>
                    <td>{$statusMap}</td>
                    <td>{$todo['date']}</td>
                    <td><a class="uk-button uk-button-default" href="display.php?id={$todo['id']}"><i class="fa-solid fa-display" style="color: #74C0FC;"></i> 表示</a></td>
                    <td><a class="uk-button uk-button-default" href="edit.php?id={$todo['id']}"><i class="fa-solid fa-pen-to-square" style="color: #11df1f;"></i> 編集</a></td>
                    <td><a class="uk-button uk-button-default" href="function/delete_task.php?id={$todo['id']}"><i class="fa-solid fa-check" style="color: #e60a0a;"></i> 完了</a></td>
                    </tr>
                    EOM;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://kit.fontawesome.com/7b558a82c5.js" crossorigin="anonymous"></script>
</body>

</html>