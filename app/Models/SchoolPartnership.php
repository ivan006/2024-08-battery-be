<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use QuicklistsOrmApi\OrmApiBaseModel;

class SchoolPartnership extends OrmApiBaseModel
{
    protected $table = 'school_partnerships';

    public $timestamps = false;

    protected $primaryKey = 'id';

    public function parentRelationships()
    {
        return [
            'user' => [],
            'school' => []
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
            'user_id' => 'required',
            'school_id' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'user_id',
        'school_id',
        'created_at',
        'updated_at'
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

        public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }




}
