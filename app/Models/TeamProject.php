<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TeamProject extends Model {
   use HasFactory;
   protected $table = "team_project";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["team_id", "project_id"];

   public function team():HasOne {
      return $this->hasOne(Team::class, "id", "team_id");
   }

   public function project():HasOne {
      return $this->hasOne(Project::class, "id", "project_id");
   }
}
