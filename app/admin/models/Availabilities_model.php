<?php

namespace Admin\Models;

// use Admin\Traits\Locationable;
use Igniter\Flame\Database\Model;

/**
 * Availabilities Model Class
 */
class Availabilities_model extends Model
{
 


    /**
     * @var string The database availability name
     */
    protected $table = 'availabilities';

    /**
     * @var string The database availability primary key
     */
    protected $primaryKey = 'availability_id';

    protected $casts = [
        'min_capacity' => 'integer',
        'max_capacity' => 'integer',
        'extra_capacity' => 'integer',
        'priority' => 'integer',
        'is_joinable' => 'boolean',
        'availability_status' => 'boolean',
    ];

    // public $relation = [
    //     'morphOne' => [
    //         'tables' => ['Admin\Models\Tables_model', 'name' => 'tableable']
    //     ],
    // ];

    public $timestamps = true;

    public static function getDropdownOptions()
    {
        return self::selectRaw('availability_id, concat(availability_name, " (", min_capacity, " - ", max_capacity, ")") AS display_name')
            ->dropdown('display_name');
    }


    public function scopeWhereBetweenCapacity($query, $noOfGuests)
    {
        return $query->where('min_capacity', '<=', $noOfGuests)
            ->where('max_capacity', '>=', $noOfGuests);
    }
}
