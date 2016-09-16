<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
  protected $table ='crud';
  protected $primaryKey = 'id';
  protected $fillable = ['nama_buah', 'harga', 'jumlah'];
  public $timestamps = false;
}
