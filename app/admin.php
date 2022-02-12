<?php

$page_title = '管理画面';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container container--2column">
        <aside class="sidebar">
            <div class="sidebar__inner">
                <div class="admin-info">
                    <h2 class="admin-info__title">管理画面</h2>
                    <p class="admin-info__name">@ユーザー</p>
                </div>
                <ul class="link-list">
                    <li class="link-list__item"><a href="admin.php" class="link-list__link">HOME</a></li>
                    <li class="link-list__item"><a href="category.php" class="link-list__link">カテゴリー</a></li>
                </ul>
            </div>
        </aside>

        <section class="contents contents--2column">
            <div class="contents__inner">
                <div class="contents__head">
                    <h2 class="contents__title">カテゴリー一覧</h2>

                    <div class="err-msg__area">
                        <span class="err-msg">エラー</span>
                    </div>
                </div>

                <div class="contents__body">
                    <form method="post" class="category-form">
                        <input type="text" name="category" class="category-form__input" id="categoryInput" placeholder="カテゴリーを入力">
                        <input type="submit" value="保存" class="category-form__submit-btn" id="categorySubmitBtn" disabled>
                    </form>

                    <ul class="category-list">
                        <li class="category-list__item">
                            <span class="category-list__name">カテゴリー</span>
                            <button type="button" class="category-list__btn js-open-modal-btn">削除</button>
                        </li>
                    </ul>
                </div>

            </div>
        </section>
    </div>

    <div class="modal" id="modal">
        <div class="modal__head">
            <p class="modal__text">本当に削除してよろしいですか？</p>
            <button class="modal__close-btn"><i class="fas fa-times"></i></button>
        </div>
        <div class="modal__body">
            <form method="post" class="modal__form">
                <div class="btn-wrap">
                    <button type="button" class="modal-btn modal-btn--cancel" id="cancelBtn">キャンセル</button>
                    <input type="submit" name="delete_category" value="削除" class="modal-btn modal-btn--delete">
                </div>
            </form>
        </div>
    </div>

    <div class="modal-bg" id="modalBg"></div>
</main>
<?php include '../template/footer.php' ?>
<script src="../resource/js/btn_disabled.js"></script>
<script src="../resource/js/modal.js"></script>

</body>

</html>