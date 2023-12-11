<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $with = [
        'info',
    ];

    protected $appends = [
        'is_customer',
        'is_employee',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'model_id',
        'model_type',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function info()
    {
        if ($this->model_type == 'customer') {

            $relation = $this->hasOne(Customer::class, 'id', 'model_id');

            $relation->getQuery()
                ->join('users', 'customers.id', '=', 'users.model_id')
                ->where('users.model_type', 'customer')
                ->select('customers.*');

            return $relation;
        } else {
            $relation = $this->hasOne(Employee::class, 'id', 'model_id');

            $relation->getQuery()
                ->join('users', 'employees.id', '=', 'users.model_id')
                ->where('users.model_type', 'employee')
                ->select('employees.*');

            return $relation;
        }
    }

    public function hasRole($role)
    {
        return $this->model_type === $role;
    }

    public function getIsCustomerAttribute()
    {
        return $this->model_type === 'customer';
    }

    public function getIsEmployeeAttribute()
    {
        return $this->model_type === 'employee';
    }
}
