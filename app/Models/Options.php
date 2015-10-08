<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = 'options';


    protected $fillable = [
        'name',
        'value',
    ];

    public function get($name)
    {
        return $this->where('name', $name)->first();
    }

    public function getSerialize($name)
    {
        $options = $this->where('name', $name)->first();
        return $options ? json_decode($options, true) : [];
    }


}
