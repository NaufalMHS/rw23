<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    use HasFactory;

    protected $table = 'tentang';
    protected $primaryKey = null;
    
    public $incrementing = false;
    public $timestamps = false;

    public static function deleteImage($data) {
        $filepath = public_path('/main/img/'.$data);
        if (file_exists($filepath)) {
            unlink($filepath);
        }
    }
}
