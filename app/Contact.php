<?php

namespace FlexPeak;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'photo',
        'cpf',
        'phone',
        'user_id',
        'street',
        'number',
        'district',
        'city',
        'uf',
        'company_id',
        'role_id'
    ];
}
