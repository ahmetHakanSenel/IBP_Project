<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $table = 'routes';
    protected $fillable = ['route_name','route_distance'];
}
