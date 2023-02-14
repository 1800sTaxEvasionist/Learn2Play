<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $title = '';
        $search = request('search');

        if(request('search') == '') {
            $title = 'All Games';
        } else {
            $title = 'Games with "' . $search . '"';
        }

        return view('categories', [
            'title' => $title,
            'active' => 'categories',
            'categories' => Category::orderBy('name')->filter(request(['search']))->paginate(12)->withQueryString()
        ]);
    }
}
