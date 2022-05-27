<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'property';
    protected $guarded = ['id', 'property_owners_id'];

    public function owners() {
        return $this->belongsToMany(PropertyOwner::class, 'owners_property');
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public static function search($params) {

        $builder = Property::with(['owners', 'company']);

        if(isset($params['name'])) {
            $builder->whereRaw("name ilike '%".$params['name']."%'");
        }

        if(isset($params['district'])) {
            $builder->whereRaw("district ilike '%".$params['district']."%'");
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
