<?php

namespace App\Builders\SEO\Meta;

use App\Builders\SEO\SEOSchema;

class SEOBuilder implements SEOBuilderInterface
{
    private SEO $seo;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->seo = new SEO();
    }

    public function setTitle(?string $title): SEOBuilder
    {
        $this->seo->setTitle($title);

        return $this;
    }

    public function setDescription(?string $description): SEOBuilder
    {
        $this->seo->setDescription($description);

        return $this;
    }

    public function setKeywords(?string $keywords): SEOBuilder
    {
        $this->seo->setKeywords($keywords);

        return $this;
    }

    public function setImage(?string $image): SEOBuilder
    {
        $this->seo->setImage($image);

        return $this;
    }

    public function setSchema(SEOSchema $schema): SEOBuilder
    {
        $this->seo->setSchema($schema);

        return $this;
    }

    public function getSEO(): SEO
    {
        return $this->seo;
    }
}
