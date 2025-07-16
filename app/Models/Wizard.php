<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wizard extends Model
{
    protected $fillable=['name','type','house_id','wand','specialisation','patronus','title',
    'bio','quote','image','background_image','theme_song'];

    public function house(){
        return $this->belongsTo(House::class);
    }
}
