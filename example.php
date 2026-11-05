<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use mozartk\GetKeyFrames\GetKeyFrames;

$videoPath = $argv[1] ?? null;

if ($videoPath === null) {
    fwrite(STDERR, "Usage: php example.php <video-file>\n");
    exit(1);
}

if (!is_file($videoPath) || !is_readable($videoPath)) {
    fwrite(STDERR, "Error: video file does not exist or is not readable: {$videoPath}\n");
    exit(1);
}

try {
    $extractor = new GetKeyFrames();
    $result = $extractor->getVideoInfo($videoPath);

    echo json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES), PHP_EOL;
} catch (Throwable $exception) {
    fwrite(STDERR, "Keyframe extraction failed: {$exception->getMessage()}\n");
    exit(1);
}
