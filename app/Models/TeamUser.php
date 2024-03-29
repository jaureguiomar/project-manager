<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TeamUser extends Model {
   use HasFactory;
   protected $table = "team_user";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["team_id", "user_id", "is_owner", "atributes"];

   public function team():HasOne {
      return $this->hasOne(Team::class, "id", "team_id");
   }

   public function user():HasOne {
      return $this->hasOne(User::class, "id", "user_id");
   }
}
