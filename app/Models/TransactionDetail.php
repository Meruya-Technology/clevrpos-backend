<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    
    /**
     * Remove comment to use variable bellow
     *
     * @var String
     */
    // protected $table = 'user_confirmation';
    // protected $connection = 'mysql';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        ///Write fillable table field here
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        ///Write hidden table field here
    ];
}