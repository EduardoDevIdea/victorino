<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['telefone1',
                            'telefone2',
                            'wpp',
                            'email',
                            'facebook',
                            'instagram',
                            'twitter',
                            'endereco'
                        ];
}
