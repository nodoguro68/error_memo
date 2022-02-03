<?php

$page_title = 'トップページ';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <section class="section">
            <div class="section__header">
                <form method="get" name="search" class="search-form">
                    <input type="search" name="q" value="" class="search-form__input" placeholder="メモを検索">
                    <select name="category_id" class="search-form__selectbox">
                        <option value="0">未選択</option>
                    </select>
                    <select name="sort" class="search-form__selectbox">
                        <option value="0">未選択</option>
                        <option value="new">新しい順</option>
                        <option value="old">古い順</option>
                    </select>
                    <input type="submit" value="検索" class="search-form__submit-btn">
                </form>

            </div>
            <div class="section__body">
                <div class="err-msg-area">
                    <span class="err-msg"></span>
                </div>

                <div class="count-area">
                    <span class="count">
                    </span>件
                </div>

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
            <div class="section__footer">
                <ul class="pagination">
                    <li class="pagination__item"><a href="" class="pagination__link"></a></li>
                </ul>
            </div>
        </section>

    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>