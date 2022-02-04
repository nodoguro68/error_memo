<?php

$page_title = 'カテゴリー';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <section class="section">
            <h2 class="title">カテゴリー</h2>

            <form method="post" class="category-form">
                <input type="text" name="category" class="form__input">
                <input type="submit" value="保存" class="submit-btn">
            </form>

            <ul class="category-list">
                <li class="category-list__item">
                    <span class="category-list__name">カテゴリー</span>
                    <form method="post" class="category-form">
                        <button class="delete-btn">削除</button>
                    </form>
                </li>
            </ul>
        </section>

    </div>

</main>
<?php include '../template/footer.php' ?>
</body>

</html>