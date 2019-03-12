<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Tarif
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tarif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tarif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tarif query()
 * @mixin \Eloquent
 */
class Tarif extends Model
{
    protected $fillable=['class','sub_text','distance','image'];
}
