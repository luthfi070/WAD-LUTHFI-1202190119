<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'vaccine_id', 'name', 'nik', 'alamat', 'image_ktp', 'no_hp', 'crated_at', 'updated_at'
    ];

}
