<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller {
   public function index($idTeam=-1, $idProject=-1):Response {
      return response()->json([], 200);
   }
}
