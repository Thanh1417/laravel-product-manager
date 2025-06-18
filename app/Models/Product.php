<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Store;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $primaryKey = 'id';

    public function store()
    {
        return $this->belongsTo(Store::class, 'store_id', 'id');
    }
    protected $fillable = [
        'store_id',
        'name',
        'description',
        'price',
    ];
}
