<?php
function renderHeader(string $currentTab = ''): void
{
    ?>
    <a class="skip-link" href="#main-content">
        Skip to main content
    </a>
    <header id="site-header">
        <div id="site-nav">
            <h1><a href="/">John Puzzle</a></h1>
            <nav id="site-nav-option-row">
                <div class="site-nav-option">
                    <a href="/work/" class="site-nav-button">Work</a>
                    <div class="<?= $currentTab == 'WORK' ? 'nav-bar-on' : 'nav-bar-off'; ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/history/" class="site-nav-button">History</a>
                    <div class="<?= $currentTab == 'HISTORY' ? 'nav-bar-on' : 'nav-bar-off'; ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/blog/" class="site-nav-button">Blog</a>
                    <div class="<?= $currentTab == 'BLOG' ? 'nav-bar-on' : 'nav-bar-off'; ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/gallery/" class="site-nav-button">Gallery</a>
                    <div class="<?= $currentTab == 'GALLERY' ? 'nav-bar-on' : 'nav-bar-off'; ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/misc/" class="site-nav-button">Misc</a>
                    <div class="<?= $currentTab == 'MISC' ? 'nav-bar-on' : 'nav-bar-off'; ?>"></div>
                </div>
            </nav>
        </div>
        <img id="header-logo" src="/images/trilobyte.svg" alt="ASCII art Trilobyte logo"/>
    </header>
    <?php
}