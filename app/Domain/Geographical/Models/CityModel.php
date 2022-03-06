<?php

namespace App\Domain\Geographical\Models;

use Carbon\Traits\Serialization;
use Illuminate\Database\Eloquent\Model;

class CitiesDb extends Model {

    use Serialization;
        const SERIALIZER = CitiesSerializer::class;

    protected $fillable = [
        'name',
        'state_id'
    ];
}
