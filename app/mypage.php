<?php

$page_title = 'マイページ';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="tab">
        <ul class="tab__inner">
            <li class="tab__item tab__item--active">フォルダ</li>
            <li class="tab__item">未解決</li>
            <li class="tab__item">解決済</li>
            <li class="tab__item">いいね</li>
            <li class="tab__item">設定</li>
        </ul>
    </div>

    <div class="container">

        <div class="tab-menu">
            <form method="post" class="folder-form">
                <input type="text" name="create_folder" class="folder-form__input" placeholder="フォルダを作成">
                <input type="submit" value="＋" class="folder-form__submit-btn" disabled>
                <span class="err-msg"></span>
            </form>

            <ul class="folder-list">
                <li class="folder-list__item">
                    <a href="folder.php?folder_id=" class="folder-list__link">
                        <i class="far fa-folder"></i>
                        フォルダ
                        <span class="folder-list__count">1</span>
                    </a>
                </li>
                <li class="folder-list__item">
                    <a href="folder.php?folder_id=" class="folder-list__link">
                        フォルダ
                        <span class="folder-list__count">0</span>
                    </a>
                </li>
                <li class="folder-list__item">
                    <a href="folder.php?folder_id=" class="folder-list__link">
                        フォルダ
                        <span class="folder-list__count">17</span>
                    </a>
                </li>
                <li class="folder-list__item">
                    <a href="folder.php?folder_id=" class="folder-list__link">
                        フォルダ
                        <span class="folder-list__count">100</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-menu">
            <ul class="memo-list">
                <li class="memo-list__item">
                    <a href="memo_form.php" class="memo-list__link">
                        <div class="memo-list__head">
                            <span class="memo-list__category">カテゴリー</span>
                            <span class="memo-list__date">2022/01/01</span>
                        </div>
                        <div class="memo-list__body">
                            <span class="memo-list__title">未解決メモ</span>
                        </div>
                        <div class="memo-list__foot">
                            <span class="memo-list__folder"><i class="far fa-folder"></i>フォルダ</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>


        <div class="tab-menu">
            <ul class="memo-list">
                <li class="memo-list__item">
                    <a href="" class="memo-list__link">
                        <div class="memo-list__head">
                            <span class="memo-list__label memo-list__label--public">公開済</span>
                            <span class="memo-list__category">カテゴリー</span>
                            <span class="memo-list__date">2022/01/01</span>
                        </div>
                        <div class="memo-list__body">
                            <span class="memo-list__title">解決済メモ</span>
                        </div>
                        <div class="memo-list__foot">
                            <span class="memo-list__folder"><i class="far fa-folder"></i>フォルダ</span>
                        </div>
                    </a>
                </li>
                <li class="memo-list__item">
                    <a href="" class="memo-list__link">
                        <div class="memo-list__head">
                            <span class="memo-list__label memo-list__label--private">非公開</span>
                            <span class="memo-list__category">カテゴリー</span>
                            <span class="memo-list__date">2022/01/01</span>
                        </div>
                        <div class="memo-list__body">
                            <span class="memo-list__title">解決済メモ</span>
                        </div>
                        <div class="memo-list__foot">
                            <span class="memo-list__folder"><i class="far fa-folder"></i>フォルダ</span>
                        </div>
                    </a>
                </li>
            </ul>
            </section>
        </div>

        <div class="tab-menu tab-menu--active">
            <ul class="memo-list">
                <li class="memo-list__item">
                    <a href="" class="memo-list__link">
                        <div class="memo-list__head">
                            <span class="memo-list__category">カテゴリー</span>
                            <span class="memo-list__date">2022/01/01</span>
                        </div>
                        <div class="memo-list__body">
                            <span class="memo-list__title">お気に入りメモ</span>
                        </div>
                        <div class="memo-list__foot">
                            <div class="memo-list__user-info">
                                <img src="../public/images/tsutsuiayame_prof.jpeg" alt="" class="memo-list__profile-img">
                                <span class="memo-list__username">@ユーザー</span>
                            </div>
                            <div class="memo-list__favor">
                                <span class="memo-list__favor-icon"><i class="far fa-heart"></i></span>
                                <span class="memo-list__favor-count">1</span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-menu tab-menu--active">
            <div class="mypage-contents">
                <div class="user-info">
                    <div class="img-wrap">
                        <img src="../public/images/no-image.jpeg" alt="プロフィール画像" class="user-info__img">
                    </div>
                    <p class="user-info__name">@ユーザーネーム</p>
                    <p>登録日:<span class="user-info__regisration-date">2022/01/01</span></p>
                    <!-- <div class="user-info__follow">
                        <a href="follow.php" class="user-info__link">0フォロー</a>
                        <a href="follow.php" class="user-info__link">0フォロワー</a>
                    </div> -->
                    <div class="user-info__count-area">
                        <div class="user-info__count-item">
                            未解決<span class="user-info__count">50</span>件
                        </div>
                        <div class="user-info__count-item">
                            解決済<span class="user-info__count">50</span>件
                        </div>
                        <div class="user-info__count-item">
                            全<span class="user-info__count">50</span>件
                        </div>
                    </div>
                </div>
            </div>

            <div class="mypage-contents">
                <ul class="url-list">
                    <li class="url-list__item">
                        <span class="url-list__title">Github</span>
                        <a href="" class="url-list__link">Github</a>
                    </li>
                    <li class="url-list__item">
                        <span class="url-list__title">Facebook</span>
                        <a href="" class="url-list__link">Facebook</a>
                    </li>
                    <li class="url-list__item">
                        <span class="url-list__title">Twitter</span>
                        <a href="" class="url-list__link">Twitter</a>
                    </li>
                    <li class="url-list__item">
                        <span class="url-list__title">Qitta</span>
                        <a href="" class="url-list__link">Qitta</a>
                    </li>
                    <li class="url-list__item">
                        <span class="url-list__title">Blog</span>
                        <a href="" class="url-list__link">Blog</a>
                    </li>
                </ul>
            </div>

            <div class="mypage-contents">
                <ul class="mypage-menu">
                    <li class="mypage-menu__item">
                        <a href="profile.php" class="mypage-menu__link">プロフィール編集</a>
                    </li>
                    <li class="mypage-menu__item">
                        <a href="pass_edit.php" class="mypage-menu__link">パスワード変更</a>
                    </li>
                    <li class="mypage-menu__item">
                        <a href="signout.php" class="mypage-menu__link">退会</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>