<?php
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\ProjectTask;
use App\Models\ProjectUser;
use App\Models\Task;
use App\Models\TaskUser;
use App\Models\Team;
use App\Models\TeamProject;
use App\Models\TeamUser;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
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

      // Session
      Session::put("idUser", 1);
      $idUser = Session::get("idUser");

      // #############
      // ## Sidebar ##
      // ## Teams
      $teams = [];
      $teamUsers = TeamUser::where("user_id", $idUser)->get();
      foreach($teamUsers as $teamUser) {
         $team = Team::find($teamUser->team_id);
         if($team)
            array_push($teams, $team);
      }
      // ## Projects
      $projects = [];
      $projectUsers = ProjectUser::where("user_id", $idUser)->get();
      foreach($projectUsers as $projectUser) {
         $project = Project::find($projectUser->project_id);
         if($project) {
            $project->team_id = $this->getTeamId($project->id);
            array_push($projects, $project);
         }
      }
      // ## Tasks
      $tasks = [];
      $taskUsers = TaskUser::where("user_id", $idUser)
         ->take(5)
         ->orderByDesc("id")
         ->get();
      foreach($taskUsers as $taskUser) {
         $task = Task::find($taskUser->task_id);
         if($task) {
            $task->project_id = $this->getProjectId($task->id);
            $task->team_id = $this->getTeamId($task->project_id);
            array_push($tasks, $task);
         }
      }

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

   public function getTeamId($idProject) {
      $idTeam = -1;
      $teamProjects = TeamProject::where("project_id", $idProject)->get();
      foreach($teamProjects as $teamProject) {
         $teamTemp = Team::find($teamProject->team_id);
         if($teamTemp->id > 0) {
            $idTeam = $teamTemp->id;
            break;
         }
      }
      return $idTeam;
   }

   public function getProjectId($idTask) {
      $idProject = -1;
      $projectTasks = ProjectTask::where("task_id", $idTask)->get();
      foreach($projectTasks as $projectTask) {
         $projectTemp = Project::find($projectTask->project_id);
         if($projectTemp->id > 0) {
            $idProject = $projectTemp->id;
            break;
         }
      }
      return $idProject;
   }
}
