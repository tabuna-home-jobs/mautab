<?php

namespace Mautab\Http\Requests\Hosting;

use Auth;
use Mautab\Http\Requests\Request;
use Mautab\Models\Package;
use Vesta;

class PackageRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Проверяем есть ли тариф на которй пользователь хочет перейти на его сервере.
        $PackageVesta = Vesta::listUserPackages();
        $PackageLaravel = Package::select('name')->findOrFail($this->package);

        return array_key_exists($PackageLaravel->name, $PackageVesta) && Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Проверка может ли человек сменить тариф на доступный  и вообще есть ли он
            'package' => 'required|integer|exists:packages,id,Hidden, 0'
        ];
    }
}
