<?php

interface SongIteratorInterface extends Iterator
{
    public function next(): void;

    public function shuffleNext(): void;

    public function nextInOrder(): void;
}

class ArrayIterator implements SongIteratorInterface
{
    private $songs = [];
    private $position = 0;

    public function __construct(array $songs)
    {
        $this->songs = $songs;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->songs[$this->position];
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next(): void
    {
        $this->position++;
    }

    public function valid(): bool
    {
        return isset($this->songs[$this->position]);
    }

    public function shuffleNext(): void
    {
        shuffle($this->songs);
        $this->rewind();
    }

    public function nextInOrder(): void
    {
        $this->next();
        if (!$this->valid()) {
            $this->rewind();
        }
    }
}

class MusicApp
{
    private $iterator;

    public function __construct(SongIteratorInterface $iterator)
    {
        $this->iterator = $iterator;
    }

    public function shuffleSongs()
    {
        $this->iterator->shuffleNext();
        foreach ($this->iterator as $song) {
            echo $song . "\n";
        }
    }

    public function __invoke()
    {
        foreach ($this->iterator as $song) {
            echo $song . "\n";
        }
    }
}

$musicApp = new MusicApp(new ArrayIterator(['Song 1', 'Song 2', 'Song 3']));
$musicApp->shuffleSongs();