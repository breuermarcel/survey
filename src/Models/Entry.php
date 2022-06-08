

<?php

namespace Breuermarcel\Survey\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = config("survey.database.tables.entries");

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "survey_id",
        "participant_id"
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function participant()
    {
        return $this->belongsTo(User::class, "participant_id");
    }
}
