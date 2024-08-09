<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Event extends OrmApiBaseModel
{
    protected $table = 'events';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            
        ];
    }

    public function spouseRelationships()
    {
        return [
            
        ];
    }

    public function childRelationships()
    {
        return [
            
        ];
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'start_datetime' => 'required',
            'end_datetime' => 'required',
            'school_id' => 'required',
            'created_by' => 'nullable',
            'updated_by' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name',
        'start_datetime',
        'end_datetime',
        'school_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    

    

    
}