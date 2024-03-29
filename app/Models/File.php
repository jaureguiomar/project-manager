<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class File extends Model {
   use HasFactory;
   protected $table = "file";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = [
      "file_name", "file_path", "file_size", "file_size_formatted",
      "old_file_name", "file_extension", "user_id"
   ];

   public function user():HasOne {
      return $this->hasOne(User::class, "id", "user_id");
   }
}
