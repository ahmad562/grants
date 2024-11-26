<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }//
    
    public function role()
    {
        return $this->belongsTo(Role::class, 'role');
    }//
    
    public static function getAllUsers(){
        $result = self::select('users.*');
            if (request()->has('name') && request()->name != '') {
                $result->where('name', 'like', '%'.request()->name.'%');
            }
            if(request()->has('role') && request()->role != ''){
                $result->where('role', request()->role);
            }
            $result =  $result->where('status', '=', 'Active')->orderBy('id', 'asc')->paginate(10);

        return $result;
    }//
}