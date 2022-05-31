<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manga extends Model
{
    use HasFactory;

    public function getAll()
    {
        $mangas = DB::table('manga')->get();
        return $mangas;
    }
}
