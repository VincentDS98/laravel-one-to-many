<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'thumb',
        'description',
        'type_id',
        'start_date',
        'last_update_date',
        'total_hours'
    ];
    //Relationships
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}