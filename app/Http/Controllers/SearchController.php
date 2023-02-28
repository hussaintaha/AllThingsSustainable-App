<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use DB;
use App\User;
use App\Vendor;
use App\Review;
use App\Category;
use URL;
use Mail;

class SearchController extends Controller
{



      public function Test(Request $request)
      {

        $shop = $request->shop;
        $ShopifyApiClient =User::where('name',$shop)->first();
        $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
        $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
        dd($meta);
      }




}




?>
