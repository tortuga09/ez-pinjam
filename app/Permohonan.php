<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    // public $timestamps = false;

    protected $table ='permohonans';

    protected $fillable = [
      'ref',
      'apply_date',
      'nama',
      'jawatan',
      'bahagian',
      'unit',
      'notel',
      'email',
      'tujuan',
      'masa',
      'tarikh_pinjam',
      'tarikh_pulang',
      'location',
      'bil_nb',
      'bil_lcd',
      'bil_print',
      'bil_present',
      'user_id'
    ];
}
