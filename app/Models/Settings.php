<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;
    public $fillable = ['name', 'title', 'desc'];


    public static function getValue(String $type, String $name)
    {
        $opt = Settings::where('type', $type)->where('name', $name)->first();
        if ($opt) {
            return $opt->value ?? '';
        }
        return '';
    }

    public function getConfig(String $type, String $name)
    {
        return Settings::where('type', $type)->where('name', $name)->first();
    }

    public function setConfig(String $type, String $name, String $value = '')
    {
        $flight = Settings::firstOrNew([
            'type' => $type,
            'name' => $name
        ]);

        $flight->value = $value;
        $flight->save();

        return $flight;
    }
}
