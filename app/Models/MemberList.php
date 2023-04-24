<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MemberList extends Model
{
    use HasFactory;
    protected $fillable = [];

    //データ取得(ツアーIDから)
    public function get_data_from_tour_code($tour_code)
    {
        $bbs_data = DB::table('bbs')->where('tour_code', '=', $tour_code)->get();

        return $bbs_data;
    }

    public function insert($data = array())
    {
        return DB::table('members')->insert($data);
    }

    public function updateById($id, $data = array())
    {
        return DB::table('members')->where('id', '=', $id)->update($data);
    }
}
