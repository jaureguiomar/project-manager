<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Activity extends Model {
   use HasFactory;
   protected $table = "activity";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["text", "type", "user_id"];

   public function user():HasOne {
      return $this->hasOne(User::class, "id", "user_id");
   }
}
