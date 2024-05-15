<?php

namespace App\DTO;

use Illuminate\Support\Collection;

interface DTO
{
    /**
     * @return array
     */
    public function toArray(): array;

    /**
     * @return string
     */
    public function toJson(): string;

    /**
     * @return Collection
     */
    public function toCollection(): Collection;

    /**
     * @return string
     */
    public function __toString(): string;
}
