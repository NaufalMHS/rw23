<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaPrestasi extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa_prestasi';
    protected $primaryKey = 'nrp_mhs';
    protected $keyType = 'string';

    protected $fillable = [
        'nrp_mhs',
        'nama',
        'prestasi',
        'name_slug'
    ];
    
    public $incrementing = false;
    public $timestamps = false;

    public static function deleteImage($id) {
        $id = MahasiswaPrestasi::where('nrp_mhs', $id)->get();

        $count = count($id);

        if ($count != null) {
            $img = (String) $id[0] -> pict;
            $filepath = public_path('/img/mhs/'.$img);
            if (file_exists($filepath) && $img != 'default.png') {
                unlink($filepath);
            }
        }
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
