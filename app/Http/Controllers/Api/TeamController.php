<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends Controller {
   public function index($idTeam=-1):Response {
      $team = Team::find($idTeam);
      return response()->json($team, 200);
   }

   public function users($idTeam=-1):Response {
      $users = [];
      $teamUsers = TeamUser::where("team_id", $idTeam)->get();
      for($i = 0; $i < sizeof($teamUsers); $i++) {
         $teamUser = $teamUsers[$i];
         $user = User::find($teamUser->user_id);
         array_push($users, $user);
      }
      return response()->json($users, 200);
   }
}
