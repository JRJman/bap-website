<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['titel','kleine_beschrijving','grote_beschrijving','prijs','aantal','image'];
}
