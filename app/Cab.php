<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Cab
 *
 * @property int $id
 * @property int|null $vehicle_id
 * @property string $name
 * @property int $phn
 * @property string $source
 * @property string $destination
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Vehicle[] $vehicle
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab wherePhn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cab whereVehicleId($value)
 * @mixin \Eloquent
 */
class Cab extends Model
{
    //
    protected $fillable =['name','phn','source','destination','vehicle_id'];
    public function vehicle(){
        return $this->hasMany(Vehicle::class,'vehicle_id');
    }
}
