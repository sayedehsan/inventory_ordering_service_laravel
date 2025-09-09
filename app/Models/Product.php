<?php
namespace App\Models;

use App\Models\Concerns\HasTenant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    use HasFactory, HasTenant;

    protected $guarded = [];
    protected $keyType = 'string';
    public $incrementing = false;

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}