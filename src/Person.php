<?php

namespace Korbeil\AutoMapperBenchmark;

class Person
{
    private ?int $id = null;
    private ?string $name = null;
    private ?Person $mother = null;
    private ?bool $married = null;
    private array $favoriteColors = [];

    public function __construct(?int $id = null, ?string $name = null, ?bool $married = false, array $favoriteColors = [], ?Person $mother = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->mother = $mother;
        $this->favoriteColors = $favoriteColors;
        $this->married = $married;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Person
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Person
    {
        $this->name = $name;
        return $this;
    }

    public function getMother(): ?Person
    {
        return $this->mother;
    }

    public function setMother(?Person $mother): Person
    {
        $this->mother = $mother;
        return $this;
    }

    public function isMarried(): bool
    {
        return $this->married;
    }

    public function getMarried(): bool
    {
        return $this->married;
    }

    public function setMarried(bool $married): Person
    {
        $this->married = $married;
        return $this;
    }

    public function getFavoriteColors(): array
    {
        return $this->favoriteColors;
    }

    public function setFavoriteColors(array $favoriteColors): Person
    {
        $this->favoriteColors = $favoriteColors;
        return $this;
    }
}
