<?php

// Real world example

interface Downloader {
    public function downloadVideo(string $url): string;
}

class VideoDownloader implements Downloader {
    public function downloadVideo(string $url): string {
        // Simulate a long download process
        sleep(1);
        return "Downloaded video from $url";
    }
}

class CachingVideoDownloader implements Downloader {
    private $downloader;

    public function __construct(Downloader $downloader) {
        $this->downloader = $downloader;
    }

    public function downloadVideo(string $url): string {
        $cache = new Cache();
        if ($cache->has($url)) {
            return $cache->get($url);
        }
        $content = $this->downloader->downloadVideo($url);
        $cache->put($url, $content);
        return $content;
    }
}

class Cache {
    private $data = [];

    public function has(string $key): bool {
        return array_key_exists($key, $this->data);
    }

    public function get(string $key) {
        return $this->data[$key];
    }

    public function put(string $key, string $value) {
        $this->data[$key] = $value;
    }
}

$downloader = new VideoDownloader();
$proxy = new CachingVideoDownloader($downloader);

echo $proxy->downloadVideo('https://example.com/video1'); // Outputs: Downloaded video from https://example.com/video1
echo "\n";
echo $proxy->downloadVideo('https://example.com/video2'); // Outputs: Downloaded video from https://example.com/video2
echo "\n";
echo $proxy->downloadVideo('https://example.com/video1'); // Outputs: Downloaded video from https://example.com/video1 (from cache)

