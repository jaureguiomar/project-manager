<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TaskChecklist extends Model {
   use HasFactory;
   protected $table = "task_checklist";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["task_id", "checklist_id"];

   public function task():HasOne {
      return $this->hasOne(Task::class, "id", "task_id");
   }

   public function checklist():HasOne {
      return $this->hasOne(Checklist::class, "id", "checklist_id");
   }
}
