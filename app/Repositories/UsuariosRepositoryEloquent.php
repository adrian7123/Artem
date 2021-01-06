<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UsuariosRepository;
use App\Entities\Usuarios;
use App\Validators\UsuariosValidator;

/**
 * Class UsuariosRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UsuariosRepositoryEloquent extends BaseRepository implements UsuariosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Usuarios::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UsuariosValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
