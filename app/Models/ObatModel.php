<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObatModel extends Model
{
    use HasFactory;
    protected $table = "obat";
    protected $fillable = [
        'nama_pembeli',
        'obat1',
        'jumlah1',
        'obat2',
        'jumlah2',
        'biaya'
    ];

    public function saveData($data)
    {
        $this->fill($data);
        $this->save();
    }
}
