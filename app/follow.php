<?php

$page_title = 'フォロー';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">

    <div class="container">

        <div class="user-info">
            <img src="" alt="プロフィール画像" class="user-info__img">
            <p class="user-info__name">@ユーザーネーム</p>
        </div>

        <ul class="tabs">
            <li class="tab">フォロー</li>
            <li class="tab">フォロワー</li>
        </ul>

        <div class="tab-menu">
            <!-- フォロー -->
            <ul class="follow-list">
                <li class="follow-list__item">
                    <a href="user_detail.php" class="follow-list__link">ユーザー</a>
                    <form method="post" class="follow-form">
                        <input type="submit" value="フォロー" class="follow-btn">
                    </form>
                </li>
            </ul>
        </div>

        <div class="tab-menu">
            <!-- フォロワー -->
            <ul class="follow-list">
                <li class="follow-list__item">
                    <a href="user_detail.php" class="follow-list__link">ユーザー</a>
                    <form method="post" class="follow-form">
                        <input type="submit" value="フォロー" class="follow-btn">
                    </form>
                </li>
            </ul>
        </div>
    </div>
</main>

<?php include '../template/footer.php' ?>
</body>

</html>