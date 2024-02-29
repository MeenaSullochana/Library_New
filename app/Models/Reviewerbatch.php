<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Reviewerbatch extends Model
{
    use HasFactory;
    use UUID;
    protected $table = 'reviewerbatchs';
    protected $fillable = [
        'name',
       'status'
    ];
}
