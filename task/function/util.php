<?php
// ステータスのkeyをvalueに変換
function statusMap($status){
    if ($status == "1") {
        return "未対応";
    }elseif ($status == "2") {
        return "対応中";
    }elseif ($status == "3") {
        return "完了";
    }else {
        return "未設定";
    }
}

// カテゴリのkeyをvalueに変換
function categoryMap($category){
    if ($category == "1") {
        return "プロジェクトS";
    }elseif ($category == "2") {
        return "会社";
    }elseif ($category == "3") {
        return "プライベート";
    }else {
        return "未設定";
    }
}