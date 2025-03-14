<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Blog;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        try {
            $categorydata = Category::orderBy('id', 'desc')->get();
            return view('admin.blogCategory')->with('categorydata', $categorydata);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function individualCategory(Request $req, $slug)
    {
        try {
            $categoryone = Blog::orderBy('id', 'desc')->get();
            $categoryall = Category::all();
            return view('category')->with('categoryone', $categoryone)->with('categoryall', $categoryall);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $categoryUpload = new Category();
        try {
            $categoryUpload->categoryName = $req->categoryName;
            $categoryUpload->metaDescription = $req->metaDescription;
            $categoryUpload->status = $req->status;

            $categoryUpload->save();

            $req->session(['msg', 'Category was successfully uploaded!!']);
            return redirect('/admin/blog');
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
