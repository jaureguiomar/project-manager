<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model {
   use HasFactory;
   protected $table = "country";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = [
      "name", "country_code", "code_2_alpha",
      "code_3_alpha", "code_numeric", "image"
   ];
}
