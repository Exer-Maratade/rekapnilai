<?php

namespace App\Models;

use App\Models\Mapel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gadik extends Model
{
    use HasFactory;

    protected $table = 'gadik';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_gadik', 'mapel_id','Name', 'Pelajaran','Nrp','Pangkat','Jabatan','Pelajaran'
    ];


    public function Mapel()
    {
        return $this->hasMany(Mapel::class);
    }
}
