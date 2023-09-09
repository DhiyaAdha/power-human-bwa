<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'company_id',
    ];

    // one to many
    public function responsibilities()
    {
        return $this->hasMany(Responsibility::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    // many to many
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
