<?php
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController {
   use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function __construct(Request $request) {
      // Layout
      $cookie = $request->cookie("layout");
      if($cookie)
         $cookie = intval($cookie);
      $name = "";
      if($cookie == 1)
         $name = "layout.nav-side";
      else if($cookie == 2)
         $name = "layout.nav-top";
      else if($cookie == 3)
         $name = "layout.nav-top-sidebar";
      else
         $name = "layout.nav-side";

      // Sidebar
      $teams = Team::all();
      $projects = Project::all();
      $tasks = Task::all();

      View::share("layout", [
         "cookie" => $cookie,
         "name" => $name,
         "sidebar" => [
            "teams" => $teams,
            "projects" => $projects,
            "tasks" => $tasks
         ]
      ]);
   }
}
