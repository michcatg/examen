<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $empleado_id
 * @property string $fecha_nacimiento
 * @property float $ingresos_anuales
 * @property Empleado $empleado
 */
class detalleEmpleado extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'detalle_empleado';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'empleado_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = [ 'ingresos_anuales'];
	protected $dates = ['fecha_nacimiento'];
	protected $dateFormat = 'd-m-Y';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empleado()
    {
        return $this->belongsTo('App\Empleado', null, 'empleado_id');
    }
}
