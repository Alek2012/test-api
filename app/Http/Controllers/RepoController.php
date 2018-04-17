<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repo;

class RepoController extends Controller
{
    public function index()
    {
        return Repo::all();
    }

    public function show(Repo $repo)
    {
        return $repo;
    }

    public function store(Request $request)
    {
        $repo = Repo::create($request->all());

        return response()->json($repo, 201);
    }

    public function update(Request $request, Repo $repo)
    {
        $repo->update($request->all());

        return response()->json($repo, 200);
    }

    public function delete(Repo $repo)
    {
        $repo->delete();

        return response()->json(null, 204);
    }
}
