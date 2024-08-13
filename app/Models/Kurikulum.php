<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;

    protected $table = 'kurikulum';
    protected $primaryKey = 'kode_matkul';
    protected $keyType = 'string';

    protected $fillable = [
        'kode_matkul',
        'nama',
        'sks',
        'semester',
        'tipe',
        'keterangan', 
        'slug'
    ];
    
    public $incrementing = false;
    public $timestamps = false;

    public static function generateID() {
        $id = Kurikulum::selectRaw('RIGHT (id_kurikulum, 3) AS id_kurikulum')->orderBy('id_kurikulum', 'desc')->limit(1)->get();

        $count = count($id);

        if ($count != null) {
            $idn = $id[0] -> id_kurikulum;

            $a = substr($idn, -3);

            $f = $a+1;

            $final = "KK-00".$f;
        } else {
            $final = "KK-001";
        }

        return $final;
    }

    //Create Slug URL
    public static function generateSlug($param) {
        $list_delete = array(',', '<', '>', '?', '/', ';', ':', '"', '{', '[', '}', ']', '_', '=', '+', ')', '(', '*', '&', '^', '%', '$', '#', '@', '!', '~', '`', '.');
        $list = array(' ');
        $url_slug = str_replace($list, '-', strtolower($param));
        $url_slug_final = str_replace($list_delete, '', strtolower($url_slug));

        return $url_slug_final;
    }
}
