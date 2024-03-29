<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {
   use HasFactory;
   protected $table = "project";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = [
      "name", "description", "start_date", "due_date", "is_done",
      "done_date", "is_archive", "archive_date"
   ];
}
