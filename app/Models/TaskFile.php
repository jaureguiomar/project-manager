<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TaskFile extends Model {
   use HasFactory;
   protected $table = "task_file";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["task_id", "file_id"];

   public function task():HasOne {
      return $this->hasOne(Task::class, "id", "task_id");
   }

   public function file():HasOne {
      return $this->hasOne(File::class, "id", "file_id");
   }
}
