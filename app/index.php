<?php

$page_title = 'トップページ';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <section class="contents contents--index">
            <div class="contents__head">
                <form method="get" name="search" class="search-form">
                    <input type="search" name="q" value="" class="search-form__input" placeholder="メモを検索">
                    <input type="submit" value="検索" class="search-form__submit-btn">
                </form>

                <div class="err-msg__area">
                    <span class="err-msg"></span>
                </div>

            </div>

            <div class="contents__body">
                <ul class="memo-list">
                    <ul class="memo-list">
                        <li class="memo-list__item">
                            <a href="memo_form.php" class="memo-list__link">
                                <div class="memo-list__head">
                                    <span class="memo-list__category">カテゴリー</span>
                                    <span class="memo-list__date">2022/01/01</span>
                                </div>
                                <div class="memo-list__body">
                                    <span class="memo-list__title">エラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラー</span>
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
                        <li class="memo-list__item">
                            <a href="memo_form.php" class="memo-list__link">
                                <div class="memo-list__head">
                                    <span class="memo-list__category">カテゴリー</span>
                                    <span class="memo-list__date">2022/01/01</span>
                                </div>
                                <div class="memo-list__body">
                                    <span class="memo-list__title">エラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラーエラー</span>
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
                </ul>
            </div>
            <div class="contents__foot">
                <ul class="pagination">
                    <!-- <li class="pagination__item"><a href="" class="pagination__link pagination__link--arrow">&lt;&lt;</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link pagination__link--arrow">&lt;</a></li> -->
                    <li class="pagination__item"><a href="" class="pagination__link pagination__link--active">1</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link">2</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link">3</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link">4</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link">5</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link pagination__link--arrow">&gt;</a></li>
                    <li class="pagination__item"><a href="" class="pagination__link pagination__link--arrow">&gt;&gt;</a></li>
                </ul>
            </div>
        </section>

    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>