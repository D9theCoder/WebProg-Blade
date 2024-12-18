<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityDetail extends Model
{
    use HasFactory;

    protected $table = 'city_details';

    protected $fillable = [
        'flood_location_id',
        'kelurahan',
        'latitude',
        'longitude',
        'indeksBanjir',
        'kategori',
    ];

    public function floodLocations()
    {
        return $this->belongsTo(FloodLocation::class, 'flood_location_id');
    }
}
