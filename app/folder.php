<?php

$page_title = 'フォルダ';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">
        <section class="folder">
            <div class="folder__header">
                <h2 class="folder__title">フォルダ</h2>
                <button type="button" class="folder__delete-btn">削除</button>
            </div>
            <div class="folder__body">
                <ul class="memo-list">
                    <ul class="memo-list">
                        <li class="memo-list__item">
                            <a href="memo_form.php?memo_id=" class="memo-list__link">
                                <div class="memo-list__head">
                                    <span class="memo-list__label memo-list__label--unsolved">未解決</span>
                                    <span class="memo-list__date">2022/01/01</span>
                                </div>
                                <span class="memo-list__title">未解決メモ</span>
                            </a>
                        </li>
                        <li class="memo-list__item">
                            <a href="memo_form.php?memo_id=" class="memo-list__link">
                                <div class="memo-list__head">
                                    <span class="memo-list__label memo-list__label--solved">解決済</span>
                                    <span class="memo-list__date">2022/01/01</span>
                                </div>
                                <span class="memo-list__title">未解決メモ</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </section>

    </div>

    <div class="modal">
        <div class="modal__head">
            <p class="modal__text">フォルダ内の全てのメモも削除されますがよろしいですか？</p>
        </div>
        <div class="modal__body">
            <form method="post" class="modal__form">
                <div class="btn-wrap">
                    <button type="button" class="modal-btn modal-btn--cancel">キャンセル</button>
                    <input type="submit" name="delete_folder" value="削除" class="modal-btn modal-btn--delete">
                </div>
            </form>
        </div>
    </div>

    <div class="modal-bg"></div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>