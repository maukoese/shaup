<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'avatar', 'email', 'phone', 'details', 'billing', 'verified', 'email_verified_at', 'provider', 'provider_id', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'billing' => 'array',
        'verified_at' => 'datetime',
        'verified' => 'boolean'
    ];

    public function getPhoneAttribute($phone)
    {
        $phone     = (substr($phone, 0, 1) == '+') ? str_replace('+', '', $phone) : $phone;
        return (substr($phone, 0, 1) == '0') ? preg_replace('/^0/', '254', $phone) : $phone;
    }

    public function setPhoneAttribute($phone)
    {
        $phone     = (substr($phone, 0, 1) == '+') ? str_replace('+', '', $phone) : $phone;
        $this->attributes['phone'] = (substr($phone, 0, 1) == '0') ? preg_replace('/^0/', '254', $phone) : $phone;
    }

    public function has_role($role)
    {
        return ($this->role == $role);
    }

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }

    public function setting($option, $key = null, $default = null)
    {
        $setting = Setting::whereUserId($this->id)->whereOption($option)->first();

        $setting = $setting ? (object) $setting->value : $default;
        return (!is_null($key) && is_object($setting)) ? $setting->$key : $setting;
    }
}
