<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateModel extends Model
{
    use HasFactory;
    protected $table = 'corporate';

    protected $fillable = [
        'name',
        'address1',
        'address2',
        'city',
        'zip_code',
        'state',
        'phone',
        'fax',
        'website',
        'email',
        'status',
        'created_by',
        'updated_by'
    ];

    //created by and updated by
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public static function getAllCoporates($all = '')
    {
        $result = self::select('corporate.*');
            if (request()->has('name') && request()->name != '') {
                $result = $result->where('name', 'like', '%' . request()->name . '%');
            }
            if (request()->has('email') && request()->email != '') {
                $result = $result->where('email', 'like', '%' . request()->email . '%');
            }
            if (request()->has('city') && request()->city != '') {
                $result = $result->where('city', 'like', '%' . request()->city . '%');
            }
            if($all == 'all')
                $result = $result->where('status', 'Active')->orderBy('id', 'desc')->get();
            else{
                $result = $result->where('status', 'Active')->orderBy('id', 'desc')->paginate(10);
            };

        return $result;
    }//
}
