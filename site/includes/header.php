<?php
function renderHeader(string $currentTab = ''): void
{
    ?>
    <a class="skip-link" href="#main-content">
        Skip to main content
    </a>
    <header>
        <div id="site-header-text">
            <h1><a href="/">John Puzzle</a></h1>
            <nav id="nav-header">
                <div class="nav-option">
                    <a href="/work/" class="nav-btn">Work</a>
                    <div class="<?= $currentTab == 'WORK' ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
                </div>
                <div class="nav-option">
                    <a href="/history/" class="nav-btn">History</a>
                    <div class="<?= $currentTab == 'HISTORY' ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
                </div>
                <div class="nav-option">
                    <a href="/gallery/" class="nav-btn">Gallery</a>
                    <div class="<?= $currentTab == 'GALLERY' ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
                </div>
                <div class="nav-option">
                    <a href="/blog/" class="nav-btn">Blog</a>
                    <div class="<?= $currentTab == 'BLOG' ? 'nav-bar-active' : 'nav-bar'; ?>"></div>
                </div>
            </nav>
        </div>
        <img id="header-logo" src="/images/trilobyte.svg" alt="ASCII art Trilobyte logo"/>
    </header>
    <?php
}