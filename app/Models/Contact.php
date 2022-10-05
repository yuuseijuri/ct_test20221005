<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'check_id',
        'email',
        'zip11',
        'addr11',
        'building_name',
        'opinion'
    ];

    public function checks() {
        return $this->belongsTo(Check::class);
    }
}
