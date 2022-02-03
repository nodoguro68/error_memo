<?php

$page_title = 'フォルダ';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">
        フォルダタイトル
        <section class="section">
            <div class="section__header">
                <h2 class="section__title">フォルダ</h2>
                <button class="section__delete-btn">削除</button>
            </div>
            <div class="section__body">
                <ul class="memo-list">
                    <ul class="memo-list">
                        <li class="memo-list__item">
                            <a href="memo_form.php" class="memo-list__link">
                                メモ
                                <span class="memo-list__date">2022/01/01</span>
                            </a>
                        </li>
                    </ul>
                </ul>
            </div>
        </section>

    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>