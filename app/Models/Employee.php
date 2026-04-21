<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'emp_id';
 
    protected $fillable = [
        'first_name', 
        'last_name',
        'emp_email',
        'store_id',
        'age',
        'date_hired' 
        ];

    public function store() {
        return $this->belongsTo(store::class, 'store_id', 'store_id');
    }
}


