<?php

namespace App\Builders\SEO\Meta;

interface SEOBuilderInterface
{
    public function setTitle(?string $title): SEOBuilder;
    public function setDescription(?string $description): SEOBuilder;
    public function setKeywords(?string $keywords): SEOBuilder;
    public function setImage(?string $image): SEOBuilder;
}
