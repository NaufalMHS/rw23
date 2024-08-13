<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $table = 'organisasi';
    protected $primaryKey = 'id_struktur';
    protected $keyType = 'string';

    protected $fillable = [
        'id_struktur',
        'data_struktur'
    ];
    
    public $incrementing = false;
    public $timestamps = false;

    public static function deleteImage($id) {
        $id = Organisasi::where('id_struktur', $id)->get();

        $count = count($id);

        if ($count != null) {
            $img = (String) $id[0] -> data_struktur;
            $filepath = public_path('/img/organization/'.$img);
            if (file_exists($filepath)) {
                unlink($filepath);
            }
        }
    }

    public static function generateID() {
        $id = Organisasi::selectRaw('RIGHT (id_struktur, 3) AS id_struktur')->orderBy('id_struktur', 'desc')->limit(1)->get();

        $count = count($id);

        if ($count != null) {
            $idn = $id[0] -> id_struktur;

            $a = substr($idn, -3);

            $f = $a+1;

            $final = "ST-00".$f;
        } else {
            $final = "ST-001";
        }

        return $final;
    }
}
