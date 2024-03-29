<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model {
   use HasFactory;
   protected $table = "users";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = [
      "last_login", "is_google", "username", "email", "password",
      "first_name", "last_name", "biography", "image", "country_id",
      "key1", "key2", "key3", "key4"
   ];

   public function country():HasOne {
      return $this->hasOne(Country::class, "id", "country_id");
   }
}
