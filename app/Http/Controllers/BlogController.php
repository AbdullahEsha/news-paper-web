<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Blog;
use App\Models\Category;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        try {
            $category = Category::orderBy('id', 'desc')->get();
            return view('admin.uploadBlog')->with('category', $category);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $blogUpload = new Blog();
        try {
            $blogUpload->title = $req->title;
            $blogUpload->slug = $req->slug;
            $blogUpload->description = $req->description;
            $blogUpload->metaDescription = $req->metaDescription;
            $blogUpload->author = $req->author;
            $blogUpload->status = $req->status;
            $blogUpload->category = $req->category;

            $blogUpload->save();

            $req->session(['msg', 'Blog was successfully uploaded!!']);
            return redirect('/admin/blog');
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $req)
    {
        try {
            $blogData = Blog::orderBy('id', 'desc')->get();
            return view('admin.viewAllBlog')->with('blogData', $blogData);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function viewAllBlog(Request $req)
    {
        try {
            $allblog = Blog::orderBy('id', 'desc')->get();
            return view('blog')->with('allblog', $allblog);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function viewAllBlogHome(Request $req)
    {
        try {
            $blogDataView = Blog::orderBy('id', 'desc')->get();
            $blogCategoryView = Blog::groupBy('category')->get();
            $blogAllCategory = Category::all();

            return view('home')->with('blogDataView', $blogDataView)->with('blogCategoryView', $blogCategoryView)->with('blogAllCategory', $blogAllCategory);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Display the specified Blog
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function individualBlog(Request $req, $slug)
    {
        try {
            $individual = Blog::whereIn('slug', [$slug])->first();
            $allBlogData = Blog::orderBy('id', 'desc')->get();
            return view('blogIndividual')->with('individual', $individual)->with("allBlogData", $allBlogData);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Display the specified Blog for delete.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function showBlogDestroy(Request $req, $slug)
    {
        try {
            $findBlog = Blog::whereIn('slug', [$slug])->first();
            return view('admin.deleteBlog')->with('findBlog', $findBlog);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function showBlogEdit(Request $req, $slug)
    {
        try {
            $editBlog = Blog::whereIn('slug', [$slug])->first();
            $categoryEdit = Category::orderBy('id', 'desc')->get();
            return view('admin.editBlog')->with('editBlog', $editBlog)->with("categoryEdit", $categoryEdit);
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        $update = Blog::find($req->id);
        try {
            $update->title = $req->title;
            $update->slug = $req->slug;
            $update->metaDescription = $req->metaDescription;
            $update->author = $req->author;
            $update->status = $req->status;
            $update->category = $req->category;
            $update->description = $req->description;

            $update->update();

            $req->session(['msg', 'Blog was successfully updated!!']);
            return redirect('/admin/blog');
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
            return redirect('/error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req)
    {
        $deleteBlog = Blog::find($req->id);
        try {
            $deleteBlog->delete();
            $req->session(['msg', 'Blog was successfully deleted!!']);
            return redirect('/admin/blog');
        } catch (\Exception $e) {
            $req->session(['error', $e->getMessage()]);
        }
    }
}
