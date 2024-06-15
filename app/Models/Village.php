<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false; // Since 'id' is char type and not auto-incrementing

    protected $fillable = [
        'id', 'district_id', 'name'
    ];

    // Relationships
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }
}
