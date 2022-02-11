<?php


$page_title = '404 Not Found';
require_once '../template/head.php';
require_once '../template/header.php';
?>

<main class="main">
    <div class="container">
        <div class="contents">
            <div class="contents__head">
                <div class="link-wrap">
                    <a href="index.php" class="link">＞ 戻る</a>
                </div>
            </div>
            <div class="contents__body">
                <section class="error">
                    <h2 class="error__title"><span class="error__code">404</span> Not Found</h2>
                    <p class="error__description">コンテンツが見つかりません</p>
                </section>
            </div>
            <div class="contents__foot">

            </div>
        </div>
    </div>
</main>

<?php require_once '../template/footer.php'; ?>
</body>

</html>