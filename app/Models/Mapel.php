<?php

namespace App\Models;

use App\Models\Gadik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mapel extends Model
{
    use HasFactory;

    protected $table = "mapel";

    protected $guarded = ['id'];

    protected $fillable = [
        'id_mapel', 'gadik_id','Pelajaran'
    ];
    


    public function Gadik()
    {
        return $this->belongsTo(Gadik::class);
    }
}
