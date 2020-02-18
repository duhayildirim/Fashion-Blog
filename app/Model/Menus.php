<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table='menu';

    public $timestamps='true';

    protected $fillable=[
        'title',
        'content',
        'order',
    ];

    public function subMenu()
    {
        return $this->hasMany('App\Model\SubMenus','menu_id','id')->orderBy('order');
    }

}
