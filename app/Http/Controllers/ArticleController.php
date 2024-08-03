<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $article = Article::create($validatedData);
        return response()->json($article, 201);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return $article;
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $article->update($validatedData);
        return response()->json($article, 200);
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return response()->json(null, 204);
    }
}
