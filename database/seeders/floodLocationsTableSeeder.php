<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\FloodLocation;
use App\Models\CityDetail;

class floodLocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            ['name' => 'Jakarta Utara',
            'latitude' => -6.138414, 
            'longitude' => 106.863956, 
            'flood_count' => 8, 
            'city_details' => [
                ['kelurahan' => 'SEMPER BARAT', 'latitude' => -6.12292, 'longitude' => 106.92662, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'SEMPER TIMUR', 'latitude' => -6.12093, 'longitude' => 106.93517, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'SUKAPURA', 'latitude' => -6.15233, 'longitude' => 106.92796, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'PEGANGSAAN DUA', 'latitude' => -6.1626344, 'longitude' => 106.9158465, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'LAGOA', 'latitude' => -6.1140999, 'longitude' => 106.9116460, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'TUGU UTARA', 'latitude' => -6.1224924, 'longitude' => 106.9121406, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'PEJAGALAN', 'latitude' => -6.13550, 'longitude' => 106.78545, 'indeksBanjir' => 2.2, 'kategori' => 'Tinggi'],
                ['kelurahan' => 'PENJARINGAN', 'latitude' => -6.125643, 'longitude' => 106.800759, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang']

                // data rendah
                // { lnglat: [106.947666, -6.121428], kelurahan: "CILINCING", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.915202, -6.104635], kelurahan: "KALIBARU", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.962424, -6.113306], kelurahan: "MARUNDA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.897496, -6.156198], kelurahan: "KELAPA GADING BARAT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.903398, -6.166211], kelurahan: "KELAPA GADING TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.898972, -6.131923], kelurahan: "RAWA BADAK SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.844935, -6.128151], kelurahan: "ANCOL", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.837012, -6.133919], kelurahan: "PADEMANGAN BARAT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.850288, -6.147520], kelurahan: "PADEMANGAN TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.741156,-6.112755], kelurahan: "KAMAL MUARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.890119, -6.119461], kelurahan: "KEBON BAWANG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.885693, -6.136176], kelurahan: "SUNGAI BAMBU", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.871485, -6.132055], kelurahan: "TANJUNG PRIOK", indeksBanjir: 1.4, Kategori: "Rendah" }

            ]], 
            ['name' => 'Jakarta Barat', 
            'latitude' => -6.1615, 
            'longitude' => 106.7570, 
            'flood_count' => 15, 
            'city_details' => [
                ['kelurahan' => 'CENGKARENG BARAT', 'latitude' => -6.140227, 'longitude' => 106.7235353, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'CENGKARENG TIMUR', 'latitude' => -6.1416616, 'longitude' => 106.7328601, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'DURI KOSAMBI', 'latitude' => -6.16888, 'longitude' => 106.71605, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'KAPUK', 'latitude' => -6.13983, 'longitude' => 106.75331, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'KEDAUNG KALI ANGKE', 'latitude' => -6.1511336, 'longitude' => 106.7575653, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'RAWA BUAYA', 'latitude' => -6.16122, 'longitude' => 106.73901, 'indeksBanjir' => 2.2, 'kategori' => 'Tinggi'],
                ['kelurahan' => 'JELAMBAR BARU', 'latitude' => -6.1489448, 'longitude' => 106.7823051, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'TANJUNG DUREN UTARA', 'latitude' => -6.17116, 'longitude' => 106.78476, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'SEMANAN', 'latitude' => -6.16684, 'longitude' => 106.70250, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'TEGAL ALUR', 'latitude' => -6.1198254, 'longitude' => 106.718693, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'KEDOYA SELATAN', 'latitude' => -6.18190, 'longitude' => 106.75909, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'KEDOYA UTARA', 'latitude' => -6.16781, 'longitude' => 106.76152, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'JOGLO', 'latitude' => -6.21895, 'longitude' => 106.73918, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],
                ['kelurahan' => 'KEMBANGAN SELATAN', 'latitude' => -6.18999, 'longitude' => 106.73647, 'indeksBanjir' => 2.0, 'kategori' => 'Tinggi'],
                ['kelurahan' => 'KEMBANGAN UTARA', 'latitude' => -6.17179, 'longitude' => 106.74394, 'indeksBanjir' => 2.0, 'kategori' => 'Tinggi']
                
                // data rendah
                // { lnglat: [106.792766, -6.160856], kelurahan: "GROGOL", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.786805, -6.166598], kelurahan: "JELAMBAR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.789816, -6.178820], kelurahan: "TANJUNG DUREN SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.797150, -6.182335], kelurahan: "TOMANG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.696928, -6.101406], kelurahan: "KAMAL", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.774860, -6.169185], kelurahan: "DURI KEPA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.773595, -6.195942], kelurahan: "KEBON JERUK", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.778019, -6.209847], kelurahan: "SUKABUMI UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.733784, -6.208725], kelurahan: "MERUYA SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.738207, -6.197085], kelurahan: "MERUYA UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.804564, -6.178344], kelurahan: "JATI PULO", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.798665, -6.183640], kelurahan: "KOTA BAMBU UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.826872, -6.149043], kelurahan: "MANGGA BESAR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.800725, -6.144409], kelurahan: "ANGKE", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.803827, -6.149655], kelurahan: "KERENDANG", indeksBanjir: 1.4, Kategori: "Rendah" }

            ]],
            ['name' => 'Jakarta Selatan', 'latitude' => -6.261493, 'longitude' => 106.810600, 'flood_count' => 4, 'city_details' => [
                ['kelurahan' => 'KUNINGAN BARAT', 'latitude' => -6.23404, 'longitude' => 106.82440, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'MAMPANG PRAPATAN', 'latitude' => -6.25085, 'longitude' => 106.82211, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'PELA MAMPANG', 'latitude' => -6.24694, 'longitude' => 106.81625, 'indeksBanjir' => 1.8, 'kategori' => 'Sedang'],
                ['kelurahan' => 'RAWAJATI', 'latitude' => -6.25884, 'longitude' => 106.85500, 'indeksBanjir' => 2.0, 'kategori' => 'Tinggi']

                // data rendah
                // { lnglat: [106.798408, -6.292053], kelurahan: "CILANDAK BARAT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.803089, -6.271645], kelurahan: "CIPETE SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.795715, -6.270608], kelurahan: "GANDARIA SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.808988, -6.337966], kelurahan: "CIGANJUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.800140, -6.356180], kelurahan: "CIPEDAK", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.834110, -6.325503], kelurahan: "LENTENG AGUNG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.838877, -6.308036], kelurahan: "TANJUNG BARAT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.808083, -6.259663], kelurahan: "CIPETE UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.789816, -6.258018], kelurahan: "GANDARIA UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.801614, -6.244852], kelurahan: "MELAWAI", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.810463, -6.242007], kelurahan: "PETOGOGAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.798665, -6.255172], kelurahan: "PULO", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.773595, -6.236820], kelurahan: "CIPULIR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.779881, -6.230043], kelurahan: "GROGOL SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.785392, -6.215995], kelurahan: "GROGOL UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.778019, -6.245621], kelurahan: "KEBAYORAN LAMA UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.820787, -6.260838], kelurahan: "BANGKA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.832587, -6.255340], kelurahan: "DUREN TIGA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.837012, -6.264141], kelurahan: "KALIBATA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.847338, -6.252300], kelurahan: "PANCORAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.815297, -6.279168], kelurahan: "CILANDAK TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.832587, -6.286018], kelurahan: "JATI PADANG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.850288, -6.270095], kelurahan: "PEJATEN TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.761798, -6.267882], kelurahan: "BINTARO", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.755900, -6.242508], kelurahan: "PETUKANGAN SELATAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.750002, -6.227364], kelurahan: "PETUKANGAN UTARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.763273, -6.240990], kelurahan: "ULUJAMI", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.826687, -6.219761], kelurahan: "KARET KUNINGAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.816363, -6.221374], kelurahan: "KARET SEMANGGI", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.826687, -6.229979], kelurahan: "KUNINGAN TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.832587, -6.219569], kelurahan: "SETIA BUDI", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.860614, -6.232703], kelurahan: "KEBON BARU", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.858386, -6.226214], kelurahan: "TEBET BARAT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.854713, -6.232896], kelurahan: "TEBET TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" }

            ]], 
            ['name' => 'Jakarta Timur', 'latitude' => -6.225014, 'longitude' => 106.900447, 'flood_count' => 3, 'city_details' => [
                ['kelurahan' => 'BIDARA CINA', 'latitude' => -6.23471, 'longitude' => 106.86651, 'indeksBanjir' => 2.4, 'kategori' => 'Tinggi'],
                ['kelurahan' => 'KAMPUNG MELAYU', 'latitude' => -6.21850, 'longitude' => 106.86132, 'indeksBanjir' => 2.2, 'kategori' => 'Tinggi'],
                ['kelurahan' => 'JATINEGARA KAUM', 'latitude' => -6.19978, 'longitude' => 106.90110, 'indeksBanjir' => 1.6, 'kategori' => 'Sedang'],

                // data rendah
                // { lnglat: [106.932909, -6.175457], kelurahan: "CAKUNG BARAT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.953569, -6.177334], kelurahan: "CAKUNG TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.882743, -6.230702], kelurahan: "JATINEGARA", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.953569, -6.207955], kelurahan: "PULO GEBANG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.903398, -6.309249], kelurahan: "BAMBU APUS", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.879792, -6.356087], kelurahan: "CIBUBUR", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.870940, -6.323116], kelurahan: "CIRACAS", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.873891, -6.305112], kelurahan: "RAMBUTAN", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.915202, -6.232191], kelurahan: "DUREN SAWIT", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.903398, -6.232579], kelurahan: "PONDOK BAMBU", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.849617, -6.278394], kelurahan: "BALE KAMBANG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.858621, -6.241976], kelurahan: "CAWANG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.878317, -6.296016], kelurahan: "DUKUH", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.859139, -6.282586], kelurahan: "KRAMAT JATI", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.909300, -6.252820], kelurahan: "CIPINANG MELAYU", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.884218, -6.290707], kelurahan: "PINANG RANTI", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.864543, -6.318611], kelurahan: "CIJANTUNG", indeksBanjir: 1.4, Kategori: "Rendah" },
                // { lnglat: [106.879792, -6.207814], kelurahan: "PISANGAN TIMUR", indeksBanjir: 1.4, Kategori: "Rendah" }

            ]],
            ['name' => 'Jakarta Pusat', 'latitude' => -6.186486, 'longitude' => 106.834091, 'flood_count' => 6, 'city_details' => [ # udah
                ['kelurahan' => 'CEMPAKA BARU', 'latitude' => -6.157916, 'longitude' => 106.844387, 'indeksBanjir' => 1.4, 'kategori' => 'Rendah'],
                ['kelurahan' => 'GUNUNG SAHARI', 'latitude' => -6.168778, 'longitude' => 106.863564, 'indeksBanjir' => 1.4, 'kategori' => 'Rendah'],
                ['kelurahan' => 'KEBON SIRIH', 'latitude' => -6.185143, 'longitude' => 106.831112, 'indeksBanjir' => 1.4, 'kategori' => 'Rendah'],
                ['kelurahan' => 'MANGGA DUA SELATAN', 'latitude' => -6.141856, 'longitude' => 106.828162, 'indeksBanjir' => 1.4, 'kategori' => 'Rendah'],
                ['kelurahan' => 'SENEN', 'latitude' => -6.193456, 'longitude' => 106.850288, 'indeksBanjir' => 1.4, 'kategori' => 'Rendah'],
                ['kelurahan' => 'PETAMBURAN', 'latitude' => -6.192006, 'longitude' => 106.809018, 'indeksBanjir' => 1.4, 'kategori' => 'Rendah']
            ]], 
        ];

        foreach ($locations as $location) {
            $floodLocation = FloodLocation::create([
                'name' => $location['name'],
                'latitude' => $location['latitude'],
                'longitude' => $location['longitude'],
                'flood_count' => $location['flood_count'],
            ]);

            // Insert the related city details
            foreach ($location['city_details'] as $cityDetail) {
                CityDetail::create([
                    'flood_location_id' => $floodLocation->id,  // Foreign key reference
                    'kelurahan' => $cityDetail['kelurahan'],
                    'latitude' => $cityDetail['latitude'],
                    'longitude' => $cityDetail['longitude'],
                    'indeksBanjir' => $cityDetail['indeksBanjir'],
                    'kategori' => $cityDetail['kategori'],
                ]);
            }
        }
    }
}
