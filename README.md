<img src="https://img.shields.io/badge/PHP-ccc.svg?logo=php&style=flat"> <img src="https://img.shields.io/badge/-CSS3-1572B6.svg?logo=css3&style=flat"> <img src="https://img.shields.io/badge/-HTML5-333.svg?logo=html5&style=flat">
<img src="https://img.shields.io/badge/-Windows-0078D6.svg?logo=windows&style=flat">
<img src="https://img.shields.io/badge/-MySQL-336791.svg?logo=mysql&style=flat">
<img src="https://img.shields.io/badge/-Visual%20Studio%20Code-007ACC.svg?logo=visual-studio-code&style=flat">
<img src="https://img.shields.io/badge/-GitHub-181717.svg?logo=github&style=flat">
<img src="https://img.shields.io/badge/-Docker-EEE.svg?logo=docker&style=flat">

![image](https://github.com/user-attachments/assets/41c44f86-9403-43ee-9e44-7503e1d56a8f)


## 1.概要
タスクを一覧形式で表示する。
<br><br>

## 2.機能要件
- レベル1：トップページ
  - タスクを一覧で表示する。
  - タスクには詳細項目が存在するため、タスク毎に詳細画面に遷移する仕組み（ボタン or リンク）を用意する。
  - タスクが終わったら画面から非表示にするための仕組み（ボタン or リンク）をタスク毎に用意する。

- レベル2：タスク追加ページ
  - タスクをデータベースに保存する。
  - 項目は「タイトル、カテゴリ、説明文」の3つ以上。

- レベル3：タスク詳細ページ
  - タスクの詳細をデータベースから取得する。
  - 詳細項目の構成は「タイトル、カテゴリ、説明文、タスク状況」の4つ以上。

- レベル4：カテゴリ絞り込み機能
  - トップページで一覧表示しているタスクをカテゴリで絞り込み出来る機能。

- レベル5：タスク編集機能
  - 追加したタスクを編集する。
  
- レベル6：タスク削除機能
  - タスクをテーブルから物理削除する（テーブルから完全に消し去る）。

- レベル7：タスク完了機能
  - タスクが終わったときにタスク一覧表示ページ上で非表示にするための仕組み。
  - タスクをテーブルから論理削除する（テーブルに「完了フラグ」などの項目を追加する）。

- レベル8：完了済みタスク一覧ページ
  - タスク一覧表示ページと同様に完了済みのタスクを一覧で表示する。
  - 復活ボタンを設置して完了済みのタスクを元に戻せるようにする。
  <br><br>

## 3.制作期間
 - 19日間
<br><br>

## 4.こだわったポイント
 - デザインやアイコンをFigmaでコーディング前に作成したこと
 - 物理削除の前に確認のダイアログを挟む
<br><br>

## 5.仕様動作のイメージ

## 6.機能一覧
| トップ画面 |　ログイン画面 |
| ---- | ---- |
| ![image](https://github.com/user-attachments/assets/41c44f86-9403-43ee-9e44-7503e1d56a8f) | ![ログイン画面]画像URL |
| すべてのタスクがTOPページに一覧で表示されるように実装しました。 | [ログイン画面]説明（例：●●実装しました。） |

| 事業者選択画面 |　請求書作成画面 |
| ---- | ---- |
| ![事業者選択画面] | ![請求書作成画面] |
| [事業者選択画面]説明 | [請求書作成画面]説明 |

| 請求書詳細画面 |　PDF出力画面 |
| ---- | ---- |
| ![請求書詳細画面] | ![PDF出力画面] |
| [請求書詳細画面]説明 | [PDF出力画面]説明 |

| 登録するマスタの選択画面 |　マスタの登録画面 |
| ---- | ---- |
| ![請求書詳細画面] | ![PDF出力画面] |
| [請求書詳細画面]説明 | [PDF出力画面]説明 |

## 7.使用技術
| Category          | Technology Stack    | 
| ----------------- | ------------------- | 
| Frontend          | HTML, CSS           | 
| Backend           | PHP                 | 
| Database          | phpMyAdmin          | 
| Environment setup | Docker              | 
| etc.              | Git, GitHub, vscode | 

## 8.今後の展望
 - 編集機能があるので、タスクの更新日を設ける。
 - 期日に合わせてアラートを表示させる
 - 表示の切り替え（カレンダーやガントチャートやカンバン等）
