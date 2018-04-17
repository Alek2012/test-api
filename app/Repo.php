<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Repo
 *
 * @mixin \Eloquent
 * @property int $id
 * @property string $github_user
 * @property string $title
 * @property string $repo_url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repo whereGithubUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repo whereRepoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Repo whereUpdatedAt($value)
 */
class Repo extends Model
{
    protected $fillable = ['title', 'github_user', 'repo_url'];
}
