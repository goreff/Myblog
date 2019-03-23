<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_post
 * @property int $id_author
 * @property int $id_reviewer
 * @property string $title_post
 * @property string $created_at
 * @property string $updated_at
 * @property string $content_post
 * @property User $author
 * @property User $reviewer
 */
class Post extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_post';

    /**
     * @var array
     */
    protected $fillable = ['id_author', 'id_reviewer', 'title_post', 'created_at', 'updated_at', 'content_post'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'id_author', 'id_user');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reviewer()
    {
        return $this->belongsTo('App\User', 'id_reviewer', 'id_user');
    }
}
