<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\TaskActivity;
use App\Models\TaskChecklist;
use App\Models\TaskFile;
use App\Models\TaskNote;
use App\Models\TaskUser;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller {
   // public function index($idTeam=-1, $idProject=-1):Response { // Old process?
   //    return response()->json([], 200);
   // }

   public function index($idTeam=-1, $idProject=-1, $idTask=-1):Response {
      $task = Task::where("id", $idTask)->first();
      $taskUsers = TaskUser::where("task_id", $idTask)->get();
      $taskChecklists = TaskChecklist::where("task_id", $idTask)->get();
      $taskNotes = TaskNote::where("task_id", $idTask)->get();
      $taskFiles = TaskFile::where("task_id", $idTask)->get();
      $taskActivities = TaskActivity::where("task_id", $idTask)->get();

      $task->users = $taskUsers;
      $task->checklists = $taskChecklists;
      $task->notes = $taskNotes;
      $task->files = $taskFiles;
      $task->activities = $taskActivities;

      return response()->json($task, 200);
   }
}
