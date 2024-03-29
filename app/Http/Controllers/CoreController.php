<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

class CoreController extends Controller {
   public function index():View {
      return view("core.index");
   }
}
