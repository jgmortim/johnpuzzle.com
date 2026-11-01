<?php

function getNavBarClass($currentTab, $navTab): string
{
    if ($currentTab === 'SECRETS') {
        return 'nav-bar-secrets';
    } elseif ($currentTab === $navTab) {
        return 'nav-bar-on';
    } else {
        return 'nav-bar-off';
    }
}

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
                    <div class="<?= getNavBarClass($currentTab, 'WORK'); ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/history/" class="site-nav-button">History</a>
                    <div class="<?= getNavBarClass($currentTab, 'HISTORY'); ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/blog/" class="site-nav-button">Blog</a>
                    <div class="<?= getNavBarClass($currentTab, 'BLOG'); ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/gallery/" class="site-nav-button">Gallery</a>
                    <div class="<?= getNavBarClass($currentTab, 'GALLERY'); ?>"></div>
                </div>
                <div class="site-nav-option">
                    <a href="/misc/" class="site-nav-button">Misc</a>
                    <div class="<?= getNavBarClass($currentTab, 'MISC'); ?>"></div>
                </div>
            </nav>
        </div>
        <img id="header-logo" src="/images/trilobyte.svg" alt="ASCII art Trilobyte logo"/>
    </header>
    <?php
}