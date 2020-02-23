<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'option', 'value', 'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'value' => 'array',
        'user_id' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function option($option, $index = null, $default = '')
    {
        $settings = self::whereOption($option)->first();
        $settings = empty($settings) ? (object) ['value' => []] : $settings;

        if (is_array($index)) {
            if (isset($index[2])) {
                $single = isset(($settings->value)[$index[0]][$index[1]][$index[2]])
                    ? ($settings->value)[$index[0]][$index[1]][$index[2]] : $default;
            } elseif (isset($index[1])) {
                $single = isset(($settings->value)[$index[0]][$index[1]])
                    ? ($settings->value)[$index[0]][$index[1]] : $default;
            } else {
                $single = isset(($settings->value)[$index[0]])
                    ? ($settings->value)[$index[0]] : $default;
            }
        } else {
            $single = isset(($settings->value)[$index]) ? ($settings->value)[$index] : $default;
        }

        return is_null($index) ? (object) $settings->value : (object) $single;
    }


    public static function is_active($link, $status = ' active')
    {
        echo app('request')->is($link) ? $status : '';
    }
}
