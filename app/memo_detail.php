<?php

$page_title = 'メモ詳細ページ';
require_once '../template/head.php';
require_once '../template/header.php';
?>

<main class="main">
    <div class="container">
        <div class="contents memo-contents">

            <div class="contents__body">
                <div class="memo">
                    <div class="memo__head">
                        <div class="memo__info">
                            <span class="memo__category">カテゴリー</span>
                            <span class="memo__date">2022/01/01</span>
                        </div>
                        <h2 class="memo__title">エラータイトルエラータイトルエラータイトル</h2>

                    </div>

                    <div class="memo__body">
                        <div class="memo__group">
                            <h3 class="memo__content-title">エラー内容</h3>
                            <p class="memo__content">エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容エラー内容</p>
                        </div>
                        <div class="memo__group">
                            <h3 class="memo__content-title">やりたいこと</h3>
                            <p class="memo__content">やりたいことやりたいことやりたいことやりたいことやりたいことやりたいことやりたいことやりたいことやりたいこと</p>
                        </div>
                        <div class="memo__group">
                            <h3 class="memo__content-title">試したこと</h3>
                            <p class="memo__content">試したこと試したこと試したこと試したこと試したこと試したこと試したこと試したこと試したこと試したこと試したこと</p>
                        </div>
                        <div class="memo__group">
                            <h3 class="memo__content-title memo__content-title--solution">解決方法</h3>
                            <p class="memo__content">解決方法解決方法解決方法解決方法解決方法解決方法解決方法解決方法解決方法解決方法解決方法解決方法解決方法</p>
                        </div>
                        <div class="memo__group">
                            <h3 class="memo__content-title">原因</h3>
                            <p class="memo__content">原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因原因</p>
                        </div>
                        <div class="memo__group">
                            <h3 class="memo__content-title">参考</h3>
                            <ul class="reference-list">
                                <li class="reference-list__item">
                                    <a href="" class="reference-list__link">url</a>
                                </li>
                                <li class="reference-list__item">
                                    <a href="" class="reference-list__link">url</a>
                                </li>
                                <li class="reference-list__item">
                                    <a href="" class="reference-list__link">url</a>
                                </li>
                            </ul>
                        </div>
                        <div class="memo__group">
                            <h3 class="memo__content-title">その他</h3>
                            <p class="memo__content">その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他その他</p>
                        </div>
                    </div>

                    <div class="memo__foot">
                        <div class="user-info">
                            <a href="user_detail.php"><img src="../public/images/no-image.jpeg" alt="プロフィール画像" class="user-info__profile-img"></a>
                            <span class="user-info__name">@ユーザーネーム</span>
                        </div>
                        <div class="memo__favor">
                            <button type="button" class="memo__favor-btn"><i class="far fa-heart"></i></button>
                            <span class="memo__favor-count">1</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>

<?php include '../template/footer.php' ?>

</body>

</html>