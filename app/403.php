<?php


$page_title = '403 Forbidden';
require_once '../../template/head.php';
require_once '../../template/header.php';
?>

<main class="main">
    <div class="container">
        <section class="error">
            <h2 class="error__title">403 Forbidden</h2>
            <p class="error__description">アクセスしようとしたページは表示できません</p>
        </section>

        <div class="link-wrap">
            <a href="index.php" class="link">戻る</a>
        </div>
    </div>

</main>

<?php require_once '../../template/footer.php'; ?>
</body>

</html>