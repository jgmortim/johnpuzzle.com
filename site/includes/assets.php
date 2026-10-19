<?php

function asset(string $url): string {
    $file = rtrim($_SERVER['DOCUMENT_ROOT'], '/\\')
        . DIRECTORY_SEPARATOR
        . ltrim($url, '/');

    if (!file_exists($file)) {
        return $url;
    }

    return $url . '?v=' . filemtime($file);
}
