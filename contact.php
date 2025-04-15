<?php
require_once './classes/Page.php';

$page = new Page("About Me - Lily Fitri Hasanah");
$page->renderHeader();
?>

<main>
    <h2>Tentang Saya</h2>
    <p>Saya adalah web developer yang berfokus pada pengembangan front-end dan UI/UX.</p>
</main>

<?php
$page->renderFooter();
?>
