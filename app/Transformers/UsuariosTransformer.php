<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Usuarios;

/**
 * Class UsuariosTransformer.
 *
 * @package namespace App\Transformers;
 */
class UsuariosTransformer extends TransformerAbstract
{
    /**
     * Transform the Usuarios entity.
     *
     * @param \App\Entities\Usuarios $model
     *
     * @return array
     */
    public function transform(Usuarios $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
