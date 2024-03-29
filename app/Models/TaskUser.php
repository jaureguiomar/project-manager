<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TaskUser extends Model {
   use HasFactory;
   protected $table = "task_user";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["task_id", "user_id"];

   public function task():HasOne {
      return $this->hasOne(Task::class, "id", "task_id");
   }

   public function user():HasOne {
      return $this->hasOne(User::class, "id", "user_id");
   }
}
