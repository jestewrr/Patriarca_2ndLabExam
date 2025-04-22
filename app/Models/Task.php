<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\TasksController;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'is_completed'];
}
