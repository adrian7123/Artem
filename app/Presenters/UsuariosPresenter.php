<?php

namespace App\Presenters;

use App\Transformers\UsuariosTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class UsuariosPresenter.
 *
 * @package namespace App\Presenters;
 */
class UsuariosPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UsuariosTransformer();
    }
}
