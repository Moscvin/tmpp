<?php

namespace App\DTO;

use Illuminate\Support\Collection;

class ContactDTO implements DTO
{
    public function __construct(
        public string $name,
        public string $email,
        public string $message
    )
    {
    }


    public
    function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];
    }

    public
    function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public
    function toCollection(): Collection
    {
        return new Collection($this->toArray());
    }

    public
    function __toString(): string
    {
        return $this->toJson();
    }
}
