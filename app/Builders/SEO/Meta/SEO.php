<?php

namespace App\Builders\SEO\Meta;

use App\Builders\SEO\SEOSchema;

class SEO
{
    private ?string $title;
    private ?string $description;
    private ?string $keywords;
    private ?string $image;
    private SEOSchema $schema;

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function setKeywords(?string $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function setSchema(SEOSchema $schema): void
    {
        $this->schema = $schema;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function getSchema(): SEOSchema
    {
        return $this->schema;
    }
}
