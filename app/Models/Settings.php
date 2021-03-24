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
}
