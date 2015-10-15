<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Mautab\Manager\Setting\SettingTrait;

class Setting extends Model
{
    use SettingTrait;

    protected $table = 'settings';

    protected $fillable = [
        'name',
        'slug',
        'value',
    ];


}
