<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Mentalome extends Model
{
    protected $fillable = [
        'gene_ids',
        'value',
        'SRA',
        'Abbreviation',
        'Expriment',
        'Disease'
    ];
};

