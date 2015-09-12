<?php namespace Mautab\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Response;

abstract class Request extends FormRequest
{

    //


    /**
     * @return \Illuminate\Http\Response
     * Обработка ошибка 403 - Прав дотупа для Laravel
     * В Symfony она ведёт не в ту папку
     */
    public function forbiddenResponse()
    {
        return Response::make(view('errors.403'), 403);
    }

}
