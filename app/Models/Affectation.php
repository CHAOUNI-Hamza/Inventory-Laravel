<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;

    protected $fillable = [
        'materiel_id',
        'service_id',
        'assigned_by',
        'quantity',
        'date',
    ];

    // Relation avec le matériel
    public function materiel() {
        return $this->belongsTo(Materiel::class);
    }

    // Relation avec le service
    public function service() {
        return $this->belongsTo(Service::class);
    }

    // Relation avec l'utilisateur qui a assigné
    public function assignedBy() {
        return $this->belongsTo(User::class, 'assigned_by');
    }
}
