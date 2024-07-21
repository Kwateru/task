function clickEvent(event) {
    if (!window.confirm('タスクを完全に削除します。\n宜しいでしょうか？')) {
        event.preventDefault();
    }
}