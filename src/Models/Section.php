<?php

namespace Breuermarcel\Survey\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = "sections";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name"
    ];

    /**
     * Questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
