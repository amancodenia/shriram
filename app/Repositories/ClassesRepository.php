<?php

namespace App\Repositories;

use App\Models\Classes;
use InfyOm\Generator\Common\BaseRepository;

class ClassesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Classes::class;
    }
}
