<?php
include('../includes/header.php');
include('../includes/footer.php');
include('../includes/assets.php');
include('../includes/blogs.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>John Puzzle - Blog</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="John Puzzle, ARG, Puzzle, Blog">
    <meta name="description" content="John Puzzle's Blog">
    <meta name="author" content="John Mortimore">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/trilobyte.svg">
    <link rel="canonical" href="https://johnpuzzle.com/blog/">
    <link rel="stylesheet" href="<?= asset('/css/index.css') ?>">
    <link rel="alternate" type="application/rss+xml" title="John Puzzle's Blog" href="./rss.xml">
</head>
<body>
<?php renderHeader('BLOG'); ?>
<nav id="breadcrumbs">
    <a href="/">Home</a> > Blog
</nav>
<main id="main-content" tabindex="-1">
    <?php renderBlogs(); ?>
</main>
<?php renderFooter(); ?>
<script src="<?= asset('/js/index.js') ?>" defer></script>
</body>
</html>