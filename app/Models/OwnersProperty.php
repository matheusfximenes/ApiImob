<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnersProperty extends Model
{
    use HasFactory;

    protected $table = 'owners_property';

    protected $guarded = ['id'];
}
