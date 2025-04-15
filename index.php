<?php
require_once './classes/Page.php';

$page = new Page("Home - Lily Fitri Hasanah");
$page->renderHeader();
?>

<main>
    <h2>Welcome to My Portfolio</h2>
    <p>Ini adalah halaman utama.</p>
</main>

<?php
$page->renderFooter();
?>
