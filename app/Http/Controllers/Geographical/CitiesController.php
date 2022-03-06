<?php

namespace App\Http\Controllers\Geographical\Models;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domain\Geographical\Models\CitiesDb;
use App\Domain\Geographical\Models\StatesDb;

class CitiesController extends Controller {
    public function index(Request $request)
    {
        $cities = CitiesDb::query();

        $options = [
            'kind' => 'cities_serializer',
        ];

        return $this->renderList('cities', $cities, $request, $options);
    }

    public function byState(Request $request, $state) {

        //Caso não encontre, back retorna http 404
        $cities = StatesDb::query();
        $options = [
            'kind' => 'cities_serializer',
            'filters' => [
                'acronym:like',
                'name:like'
            ]
        ];
        return $this->renderShow($cities, $options);
    }

     public function byCity(Request $request)
    {
        $cities = CitiesDb::query();
        $options = [
            'kind' => 'cities_serializer',
            'filters' => [
                'name:like',
            ]
        ];
        return $this->renderShow($cities, $options);
    }
}
