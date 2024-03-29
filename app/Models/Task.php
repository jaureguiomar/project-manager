<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {
   use HasFactory;
   protected $table = "task";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = [
      "name", "description", "start_date", "due_date", "section",
      "section_board", "is_done", "done_date", "is_archive",
      "archive_date"
   ];
}
