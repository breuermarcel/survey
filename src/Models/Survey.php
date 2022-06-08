<?php

namespace Breuermarcel\Survey\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = config("survey.database.tables.surveys");

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "settings"
    ];

    /**
     * The attributes that should be casted.
     *
     * @var array
     */
    protected $casts = [
        "settings" => "array",
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

    /**
     * Sections
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    /**
     * Entries
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entries()
    {
        return $this->hasMany(Entry::class);
    }
}
