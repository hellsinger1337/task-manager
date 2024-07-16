<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *      schema="Task",
 *      type="object",
 *      title="Task",
 *      required={"title", "description", "status", "deadline"},
 *      @OA\Property(property="title", type="string"),
 *      @OA\Property(property="description", type="string"),
 *      @OA\Property(property="status", type="string"),
 *      @OA\Property(property="created_at", type="string", format="date-time"),
 *      @OA\Property(property="updated_at", type="string", format="date-time"),
 *      @OA\Property(property="deadline", type="string", format="date")
 * )
 */
class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status', 'deadline'];
}
