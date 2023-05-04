<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class his_op extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','curency_debit','taux_debit','montant_credit',
    'curency_credit','taux_credit','montan_debit','id'
];
}
