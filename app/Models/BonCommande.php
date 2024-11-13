<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BonCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'ref',
        'categorie_bdc_id',
        'date',
    ];

    // Relation avec la catégorie de bon de commande
    public function categorieBdc() {
        return $this->belongsTo(CategoryBdc::class, 'categorie_bdc_id');
    }

    // Relation avec les matériels
    public function materiels() {
        return $this->hasMany(Materiel::class);
    }
}
