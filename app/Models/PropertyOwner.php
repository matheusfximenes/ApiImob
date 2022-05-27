<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyOwner extends Model
{
    use HasFactory;

    protected $table = 'property_owner';
    protected $guarded = ['id'];

    public function propertys() {
        return $this->belongsToMany(Property::class, 'owners_property');
    }

    public static function search($params) {

        $builder = PropertyOwner::with(['propertys']);

        if(isset($params['name'])) {
            $builder->whereRaw("name ilike '%".$params['name']."%'");
        }

        if(isset($params['cpf'])) {
            $builder->where("cpf", $params['cpf']);
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
