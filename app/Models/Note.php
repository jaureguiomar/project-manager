<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Note extends Model {
   use HasFactory;
   protected $table = "note";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["name", "description", "user_id"];

   public function user():HasOne {
      return $this->hasOne(User::class, "id", "user_id");
   }
}
