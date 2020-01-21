<?php

namespace FlexPeak;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = [
        'name',
        'corporate_name',
        'cnpj',
        'user_id',
        'street',
        'number',
        'district',
        'city',
        'uf'
    ];
}
