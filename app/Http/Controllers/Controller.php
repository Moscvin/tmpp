<?php

namespace App\Http\Controllers;

use App\Builders\SEO\SEOHelper;
use App\Models\Vars;
use Illuminate\Support\Facades\View;

abstract class Controller
{
    protected array $vars = [];
    protected SEOHelper $seoHelper;

    public function __construct()
    {
        $this->vars = Vars::getList();
        $this->seoHelper = new SEOHelper();

        View::share('vars', $this->vars);
    }
}
