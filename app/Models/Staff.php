<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Staff extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function companies(): HasMany
    {
        return $this->hasMany(Company::class, 'company_id', 'id');
    }

    public function region(): HasOne
    {
        return $this->hasOne(Region::class, 'region_id', 'id');
    }
}
