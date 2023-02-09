<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudad_Mexico;

class ZipController extends Controller
{

    //Recibimos el codigo postal => $zip_code y mostramos la informacion

    public function zip_code($zipCode)
    {
        try {

            $zip_codes=Ciudad_Mexico::where('d_codigo',$zipCode)->get();

            $result = [
                "zip_code" => $zipCode,
                "locality" => strtoupper($zip_codes[0]->d_estado),
                "federal_entity" => [
                    "key" => intval($zip_codes[0]->c_estado),
                    "name" => strtoupper($zip_codes[0]->d_ciudad),
                    "code" => $zip_codes[0]->c_CP
                ],
                "settlements" => [
                    [
                        "key" => intval($zip_codes[0]->id_asenta_cpcons),
                        "name" => $zip_codes[0]->d_asenta,
                        "zone_type" => strtoupper($zip_codes[0]->d_zona),
                        "settlement_type" =>[
                            "name" => $zip_codes[0]->d_tipo_asenta
                        ]

                    ]
                ],
                "municipality" => [
                    "key" => intval($zip_codes[0]->c_mnpio),
                    "name" => $zip_codes[0]->D_mnpio
                ]
            ];

            return response($result);

        } catch (\ErrorException $error) {

            $result = [
                'message' => 'No se encontro informacion o el Zip code es invalido',
                'Error' => $error
            ];
            return response($result);
        }
    }
}
