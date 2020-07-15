<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdoptionUpload extends Model
{
    //
    public function adoption()
    {
        return $this->belongsTo(Adoption::class);
    }
}
