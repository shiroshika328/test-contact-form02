<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'example',
        'detail'
    ];

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'email' => 'required, email',
        'tel' => 'required',
        'address' => 'required',
        'building' => 'required',
        'detail' => 'required'
    );


 public function getDetail()
    {
        $txt = 'ID:' . $this->id . '' . $this->name . $this->gender . '' . $this->email . '' . $this->tel . '' . $this->address . '' . $this->building . '' . $this->example . '' . $this->detail;
        return $txt;
    }

    public function book()
    {
        return $this->hasOne('App\Models\Book');
    }
    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
