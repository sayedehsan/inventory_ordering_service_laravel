<?php
namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

trait HasTenant
{
    protected static function booted()
    {
        static::addGlobalScope('tenant_id', function (Builder $builder){
            
            $builder->where('tenant_id', Auth::user()->tenant_id);
        });
    }
}