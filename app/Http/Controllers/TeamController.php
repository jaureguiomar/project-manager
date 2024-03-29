<?php
namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Contracts\View\View;

class TeamController extends Controller {
   public function index():View {
      $teams = Team::all();
      return view("team.index", [
         "teams" => $teams
      ]);
   }
}
