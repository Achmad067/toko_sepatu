<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SepatuModel extends Model
{
    use HasFactory;
    
    protected $table = "sepatu_model"; 
    protected $fillable =[
        'nama', 'ukuran', 'deskripsi',
    ];
    
}
