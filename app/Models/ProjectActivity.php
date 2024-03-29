<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProjectActivity extends Model {
   use HasFactory;
   protected $table = "project_activity";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["project_id", "activity_id"];

   public function project():HasOne {
      return $this->hasOne(Project::class, "id", "project_id");
   }

   public function activity():HasOne {
      return $this->hasOne(Activity::class, "id", "activity_id");
   }
}
