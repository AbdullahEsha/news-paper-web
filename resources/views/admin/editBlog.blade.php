<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Edit Blog</title>
</head>

<body>
    <div class="admin-container">
        @include("components/sidebar")
        <div class="main-content">
            <h1 class="admin-blog-head">Edit Blog</h1>
            <hr />
            <div class="container">
                <form method='POST' action="" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label><strong>Title :</strong></label>
                        <input type="text" name="title" class="form-control" value="{{$editBlog->title}}"
                            required />
                    </div>
                    <div class="form-group">
                        <label><strong>Slug :</strong></label>
                        <input type="text" name="slug" class="form-control" value="{{$editBlog->slug}}" required />
                    </div>
                    <div class="form-group">
                        <label><strong>Meta Description :</strong></label>
                        <textarea class="form-control" rows="3" name="metaDescription"
                            required>{{$editBlog->metaDescription}}</textarea>
                    </div>
                    <div class="form-group">
                        <label><strong>Author :</strong></label>
                        <input name="author" type="text" class="form-control" placeholder="Enter author name"
                            value="{{$editBlog->author}}" required />
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label><strong>Status :</strong></label>
                            <select class="form-control" name="status" required>
                                <option disabled>Choose Status</option>
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label><strong>Category :</strong></label>
                            <select class="form-control" name="category" required>
                                <option disabled>Choose Category</option>
                                @for($i=0; $i < count($categoryEdit); $i++) <option
                                    value="{{$categoryEdit[$i]['categoryName']}}">{{$categoryEdit[$i]['categoryName']}}
                                    </option>
                                    @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong>Description :</strong></label>
                        <textarea class="ckeditor form-control" name="description" id="editor"
                            required>{{$editBlog->description}}</textarea>
                    </div>
                    <input type="hidden" value="{{$editBlog->id}}" name="id" />
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-info btn-block blog-upload-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</body>
@include("components/bootstrapscript")


</html>