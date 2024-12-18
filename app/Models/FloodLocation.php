<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FloodLocation extends Model
{
    use HasFactory;

    protected $table = 'flood_locations';

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'flood_count',
    ];

    public function cityDetails(){
        return $this->hasMany(CityDetail::class, 'flood_location_id');
    }
}
