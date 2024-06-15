<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false; // because 'id' is not auto-incrementing
    protected $keyType = 'string'; // because 'id' is char

    protected $fillable = [
        'id', 'province_id', 'name',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}
