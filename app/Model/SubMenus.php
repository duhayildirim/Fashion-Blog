<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubMenus extends Model
{
    protected $table='sub_menu';

    public $timestamps='true';

    protected $fillable=[
        'menu_id',
        'title',
        'content',
        'order',
    ];
    public function menu()
    {
        return $this->belongsTo(SubMenus::class, 'menu_id');
    }
}
