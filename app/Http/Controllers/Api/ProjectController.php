<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\File;
use App\Models\Project;
use App\Models\ProjectActivity;
use App\Models\ProjectFile;
use App\Models\ProjectTask;
use App\Models\ProjectUser;
use App\Models\Task;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends Controller {
   public function index($idTeam=-1):Response {
      $projects = Project::where("id", $idTeam)->get();
      for($i = 0; $i < sizeof($projects); $i++) {
         $users = [];
         $projectUsers = ProjectUser::where("project_id", $projects[$i]->id)->get();
         for($j = 0; $j < sizeof($projectUsers); $j++) {
            $projectUser = $projectUsers[$j];
            $tmpUser = User::where("id", $projectUser->user_id)->first();
            array_push($users, $tmpUser);
         }
         $projects[$i]->users = $users;
      }
      return response()->json($projects, 200);
   }

   public function all($idTeam=-1):Response {
      $project = Project::find($idTeam);
      $tasks = [];
      $files = [];
      $activities = [];
      $users = [];

      // Setup tasks
      $tasks = [];
      $projectTasks = ProjectTask::where("project_id", $project->id)->get();
      for($i = 0; $i < sizeof($projectTasks); $i++) {
         $projectTask = $projectTasks[$i];
         $task = Task::where("id", $projectTask->task_id)->first();
         array_push($tasks, $task);
      }

      // Order tasks
      $taskModules = [];
      for($i = 0; $i < sizeof($tasks); $i++) {
         $task = $tasks[$i]->section;
         $added = false;
         for($j = 0; $j < sizeof($taskModules); $j++) {
            $taskSection = $taskModules[$j];
            if($task == $taskSection) {
               $added = true;
               break;
            }
         }
         if(!$added)
            array_push($taskModules, $task);
      }
      // $project->task_modules = $taskModules;

      /////////////////////
      // Configure tasks //
      $tasksOrdered = [];
      for($i = 0; $i < sizeof($taskModules); $i++) {
         $alreadyAdded = false;
         $taskSection = $taskModules[$i];
         array_push($tasksOrdered, []);
         for($j = 0; $j < sizeof($tasks); $j++) {
            $task = $tasks[$j];
            if($taskSection == $task->section) {
               if(!$alreadyAdded) {
                  $tasksOrdered[$i]["name"] = $task->section;
                  // $tasksOrdered[$i]["slug"] = $this->convertToSlug($taskSection);
                  $tasksOrdered[$i]["tasks"] = [];
                  $alreadyAdded = true;
               } else {
                  $users = [];
                  $projectUsers = ProjectUser::where("project_id", $project->id)->get();
                  for($k = 0; $k < sizeof($projectUsers); $k++)
                     array_push($users, User::find($projectUsers[$k]->user_id));

                  $taskModified = $task;
                  $taskModified->users = $users;
                  array_push($tasksOrdered[$i]["tasks"], $taskModified);
               }
            }
         }
      }
      $project->tasks = $tasksOrdered;

      // Setup files
      $projectFiles = ProjectFile::where("project_id", $project->id)->get();
      for($i = 0; $i < sizeof($projectFiles); $i++) {
         $projectFile = $projectFiles[$i];
         $file = File::where("id", $projectFile->file_id)->first();
         array_push($files, $file);
      }
      $project->files = $files;

      // Setup activities
      $projectActivities = ProjectActivity::where("project_id", $project->id)->get();
      for($i = 0; $i < sizeof($projectActivities); $i++) {
         $projectActivity = $projectActivities[$i];
         $activity = Activity::where("id", $projectActivity->activity_id)->first();
         array_push($activities, $activity);
      }
      $project->activities = $activities;

      // Setup users
      $projectUsers = ProjectUser::where("project_id", $project->id)->get();
      for($i = 0; $i < sizeof($projectUsers); $i++) {
         $projectUser = $projectUsers[$i];
         $user = User::where("id", $projectUser->user_id)->first();
         array_push($users, $user);
      }
      $project->users = $users;

      return response()->json($project, 200);
   }

   public function users($idTeam=-1):Response {
      $projectUsers = ProjectUser::all();
      return response()->json($projectUsers, 200);
   }

   // public function convertToSlug($text) {
   //    $textConverted = "";
   //    $text = strtolower($text);
   //    for($i = 0; $i < strlen($text); $i++) {
   //       $char = substr($text, $i, 1);
   //       if($char == " ") {
   //          $textConverted .= "_";
   //       } else {
   //          $textConverted .= $char;
   //       }
   //    }
   //    return $textConverted;
   // }
}
