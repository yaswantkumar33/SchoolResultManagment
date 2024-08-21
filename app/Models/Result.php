<?php

// app/Models/Result.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'result'; // Use 'result' as the table name

    protected $fillable = ['user_id', 'results', 'semester'];

    // protected $casts = [
    //     'results' => 'array', // Automatically cast the results field to an array
    // ];
    // app/Models/Result.php
public function user()
{
    return $this->belongsTo(User::class);
}


}