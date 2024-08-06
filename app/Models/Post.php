<?php

namespace App\Models;

use QuicklistsOrmApi\OrmApiBaseModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends OrmApiBaseModel
{
    protected $table = 'posts';

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
            'tags' => []
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
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }

    protected $fillable = [
        'name' ,
        'created_at',
        'updated_at',
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
}
