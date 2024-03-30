<?php
namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;

class TaskController extends Controller {
   public function index():View {
      return view("task.index");
   }

   public function kanban():View {
      return view("task.kanban");
   }
}
