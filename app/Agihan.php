<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agihan extends Model
{
  protected $table ='agihans';

  protected $fillable = [
    'id_permohonan',
    'nb1',
    'nb2',
    'nb3',
    'nb4',
    'nb5',
    'nb6',
    'nb7',
    'lcd1',
    'lcd2',
    'lcd3',
    'lcd4',
    'lcd5',
    'print1',
    'print2',
    'print3',
    'print4',
    'present1',
    'present2',

  ];
}
