<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $table = 'store';
    protected $primaryKey = 'store_id';

    protected $fillable = [
        'store_code',
        'store_name',
        'location_address',
        'manager_id'
    ];

    public function employee() {
        return $this->belongsTo(employee::class);
    }
}
