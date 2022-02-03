<?php

$page_title = 'マイページ';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">

    <div class="container">

        <ul class="tab">
            <li class="tab__item">フォルダ</li>
            <li class="tab__item">未解決</li>
            <li class="tab__item">解決済み</li>
            <li class="tab__item">お気に入り</li>
            <li class="tab__item">設定</li>
        </ul>

        <div class="tab-menu">
            <!-- 設定 -->
            <div class="user-info">
                <img src="" alt="プロフィール画像" class="user-info__img">
                <p class="user-info__name">@ユーザーネーム</p>
                <p>登録日:<span class="user-info__regisration-date">2022/01/01</span></p>
                <div class="user-info__follow">
                    <a href="following.php" class="user-info__link">フォロー</a>
                    <a href="follower.php" class="user-info__link">フォロワー</a>
                </div>
                <div class="user-info__memo-count">50件</div>
            </div>
        </div>

        <ul class="mypage-nav">
            <li class="mypage-nav__item"><a href="profile.php" class="mypage-nav__link">プロフィール編集</a></li>
            <li class="mypage-nav__item"><a href="edit_pass.php" class="mypage-nav__link">パスワード変更</a></li>
            <li class="mypage-nav__item"><a href="signout.php" class="mypage-nav__link">退会</a></li>
        </ul>

        <!-- フォルダ -->
        <div class="tab-menu">
            <ul class="list">
                <li class="list__item"><a href="mypage.php" class="list__link">フォルダ<span class="list__delete-btn"></span></a></li>
            </ul>

            <form method="post" class="form">
                <input type="text" name="create_folder" class="form__input" placeholder="フォルダを作成">
                <input type="submit" value="＋" class="form__submit-btn" disabled>
                <span class="err-msg"></span>
            </form>
        </div>

        <div class="tab-menu">
            <!-- 未解決 -->
            <ul class="memo-list">
                <li class="memo-list__item">
                    <a href="memo_form.php" class="memo-list__link">
                        未解決メモ
                        <span class="memo-list__date">2022/01/01</span>
                    </a>
                </li>
            </ul>
        </div>


        <div class="tab-menu">
            <!-- 解決済み -->
            <ul class="memo-list">
                <li class="memo-list__item">
                    <a href="memo_form.php" class="memo-list__link">
                        解決済みメモ
                        <span class="memo-list__date">2022/01/01</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-menu">
            <!-- お気に入り -->
            <ul class="memo-list">
                <li class="memo-list__item">
                    <a href="memo_detail.php" class="memo-list__link">
                        お気に入りメモ
                        <span class="memo-list__date">2022/01/01</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>