<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProjectUser extends Model {
   use HasFactory;
   protected $table = "project_user";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["project_id", "user_id"];

   public function project():HasOne {
      return $this->hasOne(Project::class, "id", "project_id");
   }

   public function user():HasOne {
      return $this->hasOne(User::class, "id", "user_id");
   }
}
