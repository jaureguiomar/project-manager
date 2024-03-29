<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TaskActivity extends Model {
   use HasFactory;
   protected $table = "task_activity";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["task_id", "activity_id"];

   public function task():HasOne {
      return $this->hasOne(Task::class, "id", "task_id");
   }

   public function activity():HasOne {
      return $this->hasOne(Activity::class, "id", "activity_id");
   }
}
