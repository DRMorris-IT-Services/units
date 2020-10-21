<?php

namespace duncanrmorris\units\App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class units extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'unit_id', 'client', 'name', 'description', 'model', 'serial_no', 'barcode_no','manufactured_date', 'warranty_date', 'firmware_no', 'software_no', 'last_calibration_date',
        'next_calibration_date', 'notes', 'status'


        
    ];
}
