<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Service;
use Exception;

class ServiceController extends Controller
{
    /**
     * @throws Exception
     */
    public function index()
    {
        $page = Page::find(5);
        $this->seoHelper->getSEO($page);

        $services = Service::activeAndOrderBy('order')->take(8)->get();
        $specialServices = Service::activeAndOrderBy('order')->where('special', true)->take(4)->get();

        return view('services.index', compact('services', 'page', 'specialServices'));
    }

    /**
     * @throws Exception
     */
    public function show(Service $service)
    {
        $this->seoHelper->getSEO($service);

        return view('services.detail.index', compact('service'));
    }
}
