<?php

$page_title = 'ユーザー詳細';
require_once '../template/head.php';
require_once '../template/header.php';
?>

<main class="main">
    <div class="container">
        <div class="contents user-contents">
            <div class="contents__head">
                <div class="user-info">
                    <a href="user_detail.php"><img src="../public/images/no-image.jpeg" alt="プロフィール画像" class="user-info__profile-img"></a>
                    <p class="user-info__name">@ユーザーネーム</p>
                    <p>登録日:<span class="user-info__regisration-date">2022/01/01</span></p>
                    <div class="user-info__count-area">
                        <div class="user-info__count-item">
                            全<span class="user-info__count">50</span>件
                        </div>
                    </div>
                </div>
            </div>

            <div class="contents__body">
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

                <div class="user-detail-tab">
                    <ul class="tab">
                        <li class="tab__item tab__item--active">メモ</li>
                        <li class="tab__item">お気に入り</li>
                    </ul>
                </div>

                <div class="tab-menu-wrap">
                    <div class="tab-menu tab-menu--active">
                        <ul class="memo-list">
                            <li class="memo-list__item">
                                <a href="memo_detail.php" class="memo-list__link">
                                    <div class="memo-list__head">
                                        <span class="memo-list__category">カテゴリー</span>
                                        <span class="memo-list__date">2022/01/01</span>
                                    </div>
                                    <div class="memo-list__body">
                                        <span class="memo-list__title">未解決メモ</span>
                                    </div>
                                    <div class="memo-list__foot">
                                        <div class="memo-list__favor">
                                            <span class="memo-list__favor-icon"><i class="far fa-heart"></i></span>
                                            <span class="memo-list__favor-count">1</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-menu">
                        <ul class="memo-list">
                            <li class="memo-list__item">
                                <a href="memo_detail.php" class="memo-list__link">
                                    <div class="memo-list__head">
                                        <span class="memo-list__category">カテゴリー</span>
                                        <span class="memo-list__date">2022/01/01</span>
                                    </div>
                                    <div class="memo-list__body">
                                        <span class="memo-list__title">お気に入りメモ</span>
                                    </div>
                                    <div class="memo-list__foot">
                                        <div class="memo-list__user-info">
                                            <img src="../public/images/no-image.jpeg" alt="" class="memo-list__profile-img">
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
                </div>
            </div>

        </div>

</main>

<?php include '../template/footer.php' ?>

<script src="../resource/js/tab_menu.js"></script>
</body>

</html>