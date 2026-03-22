<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LevelModel extends Model
{
    protected $table = 'm_level';
    protected $primaryKey = 'level_id';

    public $timestamps = false;

    public function user(): HasOne
    {
        return $this->hasOne(UserModel::class);
    }
}