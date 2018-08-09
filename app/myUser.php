<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myUser extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'my_users';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'email', 'phone', 'status'];

    public function getstatus()
    {
        return $this->belongsTo('App\Status', 'status');
    }
    
}
