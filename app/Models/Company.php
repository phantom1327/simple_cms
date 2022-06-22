<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'website', 'logo'];


    protected function logo(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => $value->store('public'),
            get: fn ($value) =>  route('dashboard')."/storage/".$this->getImageName($value)
        );
    }

    protected function getImageName($full_path){
        $link = explode('/', $full_path);
        return end($link);
    }

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
