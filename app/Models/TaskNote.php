<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TaskNote extends Model {
   use HasFactory;
   protected $table = "task_note";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["task_id", "note_id"];

   public function task():HasOne {
      return $this->hasOne(Task::class, "id", "task_id");
   }

   public function note():HasOne {
      return $this->hasOne(Note::class, "id", "note_id");
   }
}
