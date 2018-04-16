<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repo extends Model
{
    protected $fillable = ['title', 'github_user', 'repo_url'];
}
