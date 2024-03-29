<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProjectFile extends Model {
   use HasFactory;
   protected $table = "project_file";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["project_id", "file_id"];

   public function project():HasOne {
      return $this->hasOne(Project::class, "id", "project_id");
   }

   public function file():HasOne {
      return $this->hasOne(File::class, "id", "file_id");
   }
}
