<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'inven_name',
        'inven_price',
        'quantity',
        'status',
        'category',
        'image'
    ];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
