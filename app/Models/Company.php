<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
    ];

    // many to many
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function role()
    {
        return $this->hasMany(Role::class);
    }

    // one to many
    public function teams()
    {
        return $this->hasMany(Team::class);
        // return $this->hasMany(Team::class, 'company_id', 'id');

    }

}
