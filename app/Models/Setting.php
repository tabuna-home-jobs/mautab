<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Mautab\Manager\Setting\SettingTrait;

class Options extends Model
{
    use SettingTrait;

    protected $table = 'settings';

    protected $fillable = [
        'name',
        'slug',
        'value',
    ];


}
