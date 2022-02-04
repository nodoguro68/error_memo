<?php

$page_title = 'メモ詳細ページ';
require_once '../template/head.php';
require_once '../template/header.php';
?>

<main class="main">
    <div class="container">
        <div class="link-wrap">
            <a href="index.php" class="link">戻る</a>
        </div>

        <section class="user-info">
            <a href="user_detail.php"><img src="" alt="プロフィール画像" class="user-info__profile-img"></a>
            <p class="user-info__name">ユーザーネーム</p>
        </section>

        <section class="memo">
            <div class="memo__header">
                <h2 class="memo__title">エラータイトル</h2>
                <span class="memo__date">2022/01/01</span>
                <span class="memo__category">カテゴリータイトル</span>
            </div>

            <div class="memo__body">
                <p class="memo__content">エラー内容</p>
                <p class="memo__content">やりたいこと</p>
                <p class="memo__content">試したこと</p>
                <p class="memo__content">解決方法</p>
                <p class="memo__content">原因</p>
                <p class="memo__content">参考</p>
                <p class="memo__content">etc</p>
            </div>

            <div class="memo__footer">
                <button type="button" class="favorite-btn">いいね</button>
                <div class="count-area">
                    <span class="count">1</span>
                </div>
            </div>
        </section>

        <section class="comments">
            <div class="comment">
                <div class="comment__user-info">
                    <img src="" alt="プロフィール画像" class="comment__profile-img">
                    <p class="comment_name">ユーザーネーム</p>
                </div>
                <p class="comment__date">2022/01/01</p>
                <p class="comment__text">コメント</p>
            </div>
        </section>

        <form method="post" class="comment-form">
            <input type="text" name="comment" class="form__input" placeholder="コメントを入力">
            <input type="submit" value="送信" class="submit-btn">
        </form>
    </div>

</main>

<?php include '../template/footer.php' ?>

</body>

</html>