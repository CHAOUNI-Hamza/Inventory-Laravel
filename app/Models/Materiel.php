<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'category_id',
        'bon_commande_id',
        'stock',
        'num_inventaire',
    ];

    // Relation avec la catégorie
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Relation avec le bon de commande
    public function bonCommande() {
        return $this->belongsTo(BonCommande::class);
    }

    // Relation avec l'affectation des matériels
    public function affectationMateriels() {
        return $this->hasMany(AffectationMateriel::class);
    }
}
