<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController {
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function __construct(Request $request) {
      $layoutCookie = $request->cookie("layout");
      if($layoutCookie)
         $layoutCookie = intval($layoutCookie);

      $layoutName = "";
      if($layoutCookie == 1)
         $layoutName = "layout.nav-side";
      else if($layoutCookie == 2)
         $layoutName = "layout.nav-top";
      else if($layoutCookie == 3)
         $layoutName = "layout.nav-top-sidebar";
      else
         $layoutName = "layout.nav-side";

      View::share("layoutCookie", [
         "layoutCookie" => $layoutCookie,
         "layoutName" => $layoutName
      ]);
   }
}
