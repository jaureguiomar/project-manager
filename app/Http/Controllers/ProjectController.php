<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

class ProjectController extends Controller {
   public function index():View {
      return view("project.index");
   }
}
