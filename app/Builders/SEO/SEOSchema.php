<?php

namespace App\Builders\SEO;

use App\Builders\SEO\Schemas\SchemaBlogPosting;
use App\Builders\SEO\Schemas\SchemaOrganization;
use App\Builders\SEO\Schemas\SchemaProduct;
use App\Models\Blog;
use App\Models\Service;
use Exception;

class SEOSchema
{
    private string $schemaOrganization;
    private ?string $schemaModel = null;

    public function __construct()
    {
        $this->initSchemaOrganization();
    }

    /**
     * @throws Exception
     */
    public function setModel($model): self
    {
        switch (true) {
            case $model instanceof Blog:
                $this->initSchemaBlogPosting($model);
                break;
            case $model instanceof Service:
                $this->initSchemaProduct($model);
                break;
            default:
                throw new Exception('Model not found');
                break;
        }

        return $this;
    }

    public function resolve(): string
    {
        return $this->getSchemaOrganization() . $this->getSchemaModel();
    }

    private function getSchemaOrganization(): string
    {
        return $this->wrapSchema($this->schemaOrganization);
    }

    private function getSchemaModel(): string
    {
        if ($this->schemaModel == null) {
            return '';
        }

        return $this->wrapSchema($this->schemaModel);
    }

    private function initSchemaOrganization(): void
    {
        $this->schemaOrganization = SchemaOrganization::get();
    }

    private function initSchemaBlogPosting($model): void
    {
        $this->schemaModel = SchemaBlogPosting::get($model);
    }

    private function initSchemaProduct($model): void
    {
        $this->schemaModel = SchemaProduct::get($model);
    }

    private function wrapSchema($schema): string
    {
        return "<script type='application/ld+json'>$schema</script>";
    }
}
