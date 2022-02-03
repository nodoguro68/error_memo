<?php 
$page_title = 'パスワード変更';
include '../template/head.php';
include '../template/header.php';
?>

<main class="main">
    <div class="container">

        <form method="post" class="form">
            <div class="form__header">
                <h2 class="form__title">パスワード変更</h2>
                <span class="err-msg"></span>
            </div>
            <div class="form__body">
                <div class="form__item">
                    <label for="old_pass" class="form__label">古いパスワード</label>
                    <input type="password" name="old_pass" class="form__input" id="old_pass" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="new_pass" class="form__label">新しいパスワード<span class="form__note">半角英数字8文字以上</span></label>
                    <input type="password" name="new_pass" class="form__input" id="new_pass" value="">
                    <span class="err-msg"></span>
                </div>
                <div class="form__item">
                    <label for="new_pass_re" class="form__label">新しいパスワード（確認）</label>
                    <input type="password" name="new_pass_re" class="form__input" id="new_pass_re" value="">
                    <span class="err-msg"></span>
                </div>
            </div>
            <div class="form__footer">
                <div class="btn-wrap">
                    <input type="submit" value="保存" class="btn">
                </div>
            </div>
        </form>
    </div>

</main>
<?php include '../template/footer.php' ?>

</body>

</html>