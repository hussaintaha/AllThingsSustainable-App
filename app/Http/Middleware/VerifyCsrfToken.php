<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
      'SaveCategory',
      'Delete',
      'SaveVendorDetails',
      'SaveReview',
      'uploadPreview',
      'SendEmail',
      'get-vendors',
      'getServerSide',
      'SaveVendorDetails2',
      'Delete2',
      'state-vendors-filter',
      'AddInfluencerPost'
    ];
}
