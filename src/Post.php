<?php

namespace Korbeil\AutoMapperBenchmark;

class Post
{
    private int $id;
    private string $title;
    private string $summary;

    public function __construct(int $id, string $title, string $summary)
    {
        $this->id = $id;
        $this->title = $title;
        $this->summary = $summary;
    }
}
