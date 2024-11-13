<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBdc extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relation avec les bons de commande
    public function bonCommandes() {
        return $this->hasMany(BonCommande::class);
    }
}
