<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;
    protected $table='peminjaman';

    protected $fillable=['id','name_peminjam', 'ktp_peminjam',  'keperluan_pinjam', 'mulai', 'selesai', 'biaya', 'armada_id', 'komentar_peminjam', 'status_pinjam'];
}
