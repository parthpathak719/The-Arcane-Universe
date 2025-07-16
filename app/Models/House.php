<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable=['name','founder','crest','discription'];

    public function wizard(){
        return $this->hasMany(Wizard::class);
    }
}
