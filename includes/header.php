<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $page->getTitle(); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1><?= $page->getTitle(); ?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
