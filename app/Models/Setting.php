<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Mautab\Manager\Setting\SettingTrait;

class Setting extends Model
{
    use SettingTrait, Sortable;

    protected $table = 'settings';

    protected $fillable = [
        'name',
        'slug',
        'value',
    ];


}
