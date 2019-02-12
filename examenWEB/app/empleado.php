<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $empleado_id
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property DetalleEmpleado $detalleEmpleado
 */
class empleado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'empleado';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'empleado_id';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleEmpleado()
    {
        return $this->hasOne('App\DetalleEmpleado', 'empleado_id', 'empleado_id');
    }
	
	public function setUpdatedAt($value)
    {
        
    }
	public function setCreatedAt($value)
    {
        
    }
}
