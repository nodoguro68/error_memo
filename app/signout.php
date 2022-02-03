<?php 
$page_title = '退会';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <div class="link-wrap">
            <a href="mypage.php" class="link">戻る</a>
        </div>

        <form method="post" class="form">
            <div class="form__header">
                <h2 class="form__title">退会</h2>
                <p class="form__description">
                    退会するにはメールアドレスとパスワードが必要です。
                    退会すると全てのデータが削除されます。
                </p>
                <span class="err-msg"></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="email" class="form__label">メールアドレス</label>
                    <input type="text" name="email" class="form__input" id="email" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="password" class="form__label">パスワード</label>
                    <input type="password" name="password" class="form__input" id="password" value="">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-container">
                    <input type="submit" value="退会" class="btn">
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>