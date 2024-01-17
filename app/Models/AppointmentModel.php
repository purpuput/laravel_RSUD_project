<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentModel extends Model
{
    use HasFactory;
    protected $table = "pasien";
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_identitas',
        'no_hp',
        'penyakit',
        'dokter', 
        'tanggal_janjitemu', 
        'biaya',
            
    ];
    public function saveData($data)
    {
        $this->fill($data);
        $this->save();
    }
}
