<?php

$page_title = 'ユーザー詳細';
require_once '../template/head.php';
require_once '../template/header.php';
?>

<main class="main">
    <div class="container">
        <div class="link-wrap">
            <a href="index.php" class="link">戻る</a>
        </div>


        <!-- ユーザー情報 -->
        <div class="user-info">
            <a href="user_detail.php"><img src="" alt="プロフィール画像" class="user-info__profile-img"></a>
            <p class="user-info__name">@ユーザーネーム</p>
            <div class="user-info__follow">
                <a href="follow.php" class="user-info__link">フォロー</a>
                <a href="follow.php" class="user-info__link">フォロワー</a>
            </div>
            <form class="follow-form">
                <button type="submit" class="follow-btn">フォローする</button>
            </form>
            <div class="link-wrap">
                <p class="user-info__url">Github: <a href="user-info__link">url</a></p>
                <p class="user-info__url">Facebook: <a href="user-info__link">url</a></p>
                <p class="user-info__url">Twitter: <a href="user-info__link">url</a></p>
                <p class="user-info__url">Qiita: <a href="user-info__link">url</a></p>
                <p class="user-info__url">Blog: <a href="user-info__link">url</a></p>
            </div>
        </div>

        <section class="section">
            <div class="section__header">
                <ul class="tabs">
                    <li class="tab">メモ</li>
                    <li class="tab">お気に入り</li>
                </ul>
            </div>

            <div class="section_body">
                <div class="tab-menu">
                    <!-- ユーザーのメモ -->
                    <ul class="memo-list">
                        <li class="memo-list__item"><a href="memo_detail.php" class="memo-list__link">メモ</a></li>
                    </ul>
                </div>

                <div class="tab-menu">
                    <!-- ユーザーのお気に入りメモ -->
                    <ul class="">
                        <li class="memo-list__item">
                            <a href="memo_form.php" class="memo-list__link">自分のメモ</a>
                            <a href="memo_detail.php" class="memo-list__link">メモ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

</main>

<?php include '../template/footer.php' ?>
</body>

</html>