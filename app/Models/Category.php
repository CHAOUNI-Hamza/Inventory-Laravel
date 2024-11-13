<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relation avec les matériels
    public function materiels() {
        return $this->hasMany(Materiel::class);
    }
}
