<?php

namespace App\Domain\Geographical\Models;

use Illuminate\Database\Eloquent\Model;

class StatesDb extends Model {
    protected $fillable = [
        'acronym',
        'name'
    ];
}
