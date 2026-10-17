<?php

function assetVersion(): string {
    $versionFile = dirname(__DIR__) . '/version.txt';

    if (file_exists($versionFile)) {
        return trim(file_get_contents($versionFile));
    }

    // Local development fallback
    return (string) filemtime(dirname(__DIR__) . '/index.php');
}
