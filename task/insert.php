<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/uikit.css">
    <title>新規のタスク追加のページ</title>
</head>

<body>
    <div class="uk-container uk-container-small">
        <h1 class="uk-heading-small">はじめてのタスク管理</h1>

        <form action="function/task_insert.php" method="post">
            <fieldset class="uk-fieldset">
                <legend class="uk-legend">タスクの追加</legend>

                <div class="uk-margin">
                    <input type="text" placeholder="タイトル*" name="title" class="uk-input" required>
                </div>

                <div class="uk-margin">
                    <input type="date" name="date" class="uk-input">
                </div>

                <div class="uk-margin">
                    <select name="category" class="uk-select">
                        <option value="">Please select a category...</option>
                        <option value="1">プロジェクトS</option>
                        <option value="2">会社</option>
                        <option value="3">プライベート</option>
                    </select>
                </div>

                <div class="uk-margin">
                    <select name="status" class="uk-select">
                        <option value="">Please select the response status....</option>
                        <option value="1">未対応</option>
                        <option value="2">対応中</option>
                        <option value="3">完了</option>
                    </select>
                </div>

                <div class="ul-margin">
                    <textarea class="uk-textarea" rows="5" placeholder="説明" name="description"></textarea>
                </div>

                <div class="uk-margin">
                    <input type="submit" value="追加">
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>