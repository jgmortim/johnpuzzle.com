<?php
if (!isset($currentPage)) {
    $currentPage = "";
}
?>
<div id="site-header">
    <div id="site-header-text">
        <h1><a href="/">John Puzzle</a></h1>
        <nav id="nav-header">
            <div class="nav-option">
                <a href="/history/" class="nav-btn">ARG History</a>
                <div class="<?php echo $currentPage == "HISTORY" ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
            </div>
            <div class="nav-option">
                <a href="/gallery/" class="nav-btn">Photo Gallery</a>
                <div class="<?php echo $currentPage == "GALLERY" ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
            </div>
            <div class="nav-option">
                <a href="/blog/" class="nav-btn">Blog</a>
                <div class="<?php echo $currentPage == "BLOG" ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
            </div>
        </nav>
    </div>
    <img src="/images/trilobyte.svg" height="100" width="100" alt="ASCII art Trilobyte logo"/>
</div>
