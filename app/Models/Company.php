<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $guarded = ['id'];

    public static function search($params) {

        $builder = Company::whereRaw('1=1');

        if(isset($params['name'])) {
            $builder->whereRaw("name ilike '%".$params['name']."%'");
        }

        if(isset($params['cnpj'])) {
            $builder->where('cnpj', $params['cnpj']);
        }

        if(isset($params['orderBy'])) {
            $builder->orderBy($params['orderBy']);
        }

        if(isset($params['pg'])) {
            $builder->paginate($params['pg']);
        }
        

        return $builder->get();
    }
}
