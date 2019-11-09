<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 *
 * @package App
 * @property string $nom
 * @property string $cin
 * @property string $tel
*/
class Client extends Model
{
    use SoftDeletes;

    
    protected $fillable = ['nom', 'cin', 'tel'];
    

    public static function storeValidation($request)
    {
        return [
            'nom' => 'max:191|required',
            'cin' => 'max:191|nullable',
            'tel' => 'max:191|nullable'
        ];
    }

    public static function updateValidation($request)
    {
        return [
            'nom' => 'max:191|required',
            'cin' => 'max:191|nullable',
            'tel' => 'max:191|nullable'
        ];
    }

    

    
    
    
}
