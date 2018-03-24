<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BeninChannels extends MyModel
{
    //
    public function timeFrequency(){
        return $this->hasMany(BeninTimeFrequency::class);
    }
}
