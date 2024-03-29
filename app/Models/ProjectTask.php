<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProjectTask extends Model {
   use HasFactory;
   protected $table = "project_task";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["project_id", "task_id"];

   public function project():HasOne {
      return $this->hasOne(Project::class, "id", "project_id");
   }

   public function task():HasOne {
      return $this->hasOne(Task::class, "id", "task_id");
   }
}
