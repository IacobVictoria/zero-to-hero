<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    //cu ajutorul controllerului trimitem/ procesam datele catre frontend

    public function index()
    {
        // prin Blog model ne referim la blogs table din bd si asa e la toate modelele si tabelele zuzu..
        $blogs = Blog::all();
        //trimitem printr-o proprietate props array ul de inregistrari $blogs
        //inertia- between fe and be, render pagina din vue
        return Inertia::render('Blogs/Index', [
            'blogs' => $blogs,
        ]);
    }

    public function create()
    {
        return Inertia::render('Blogs/Create');
    }

    public function store(Request $request)
    {
       //dd($request->all()); // all() -> ce trimite userul din FE

        Blog::create([]);
        
    }
}
