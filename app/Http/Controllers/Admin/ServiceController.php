<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index(Request $request)
   {
    $services= Service::filter($request)->get();
      // $services = $servicesQuery->paginate(5);
    return view('admin.services.index-services', compact('services'));
   }
}
