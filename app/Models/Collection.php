<?php

class Collection
{
    protected array $items;

    public function __constructor(array $items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));
        //return array_sum(array_map(fn($item) => $item->$key, $this->items));
        // return array(sum(array_map(function($item) use ($key) {
        //     return $item->$key;
        // }, $this->items))
    }
}

// Do we have an "is a " relationship with the parent class 
class VideosCollection extends Collection
{
    // Wrapping it in a more domain specific terminology
    public function length() {
        return $this->sum('length');
    }
}

class Videos
{
    public $title;
    public $length;

    public function __constructor($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('Some video 1', 120);
    new Video('Some video 2', 200);
    new Video('Some video 3', 300);
]);

var_dump($videos);
$videos->sum('length');
$videos->length();