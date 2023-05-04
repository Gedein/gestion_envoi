<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compte extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','created_at','montant',
    'debit_j','debit_h', 'debit_m','credit_j','credit_h','credit_m',
    'updated_at','date_credit','date_debit','curency','taux'
];
}
