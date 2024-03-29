<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model {
   use HasFactory;
   protected $table = "checklist";
   protected $primaryKey = "id";
   public const CREATED_AT = "created";
   public const UPDATED_AT = "updated";
   protected $fillable = ["text", "is_done", "no_task"];
}
