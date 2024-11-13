<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'users_id'];

    // Relation avec les utilisateurs
    public function users() {
        return $this->hasMany(User::class);
    }

    // Relation avec les affectations de matériels
    public function affectationMateriels() {
        return $this->hasMany(AffectationMateriel::class);
    }
}
