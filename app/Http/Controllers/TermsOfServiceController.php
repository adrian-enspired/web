<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use League\CommonMark\CommonMarkConverter;

class TermsOfServiceController extends Controller
{
    /**
     * Show the terms of service for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $termsFile = file_exists(resource_path('md/terms.'.app()->getLocale().'.md'))
                            ? resource_path('md/terms.'.app()->getLocale().'.md')
                            : resource_path('md/terms.md');

        return view('terms', [
            'terms' => (new CommonMarkConverter())->convertToHtml(file_get_contents($termsFile)),
        ]);
    }
}
