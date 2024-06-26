<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $id
 * @property $user_id
 * @property $nombre
 * @property $email
 * @property $telefono
 * @property $direccion
 * @property $ciudad
 * @property $departamento
 * @property $postal
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @property OrderDetail[] $orderDetails
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'email' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'ciudad' => 'required',
		'departamento' => 'required',
		'postal' => 'required',
		'total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','nombre','email','telefono','direccion','ciudad','departamento','estado','postal','total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
    public function estadoTexto()
    {
        switch ($this->estado) {
            case 0:
                return 'Pendiente';
            case 1:
                return 'Completado';
            // Otros casos si los hay...
            default:
                return 'Desconocido';
        }

        return $estados[$this->getAttribute('estado')] ?? 'Desconocido';
    }
    

}
