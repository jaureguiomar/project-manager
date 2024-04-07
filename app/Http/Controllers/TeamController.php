<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TeamController extends Controller {
   public function index(Request $request):View {
      $idTeam = intval($request->get("idTeam"));
      if($idTeam <= 0)
         return abort(404);
      return view("team.index");
   }
}
