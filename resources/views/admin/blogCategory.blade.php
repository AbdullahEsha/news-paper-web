<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Upload Blog</title>
</head>

<body>
    <div class="admin-container">
        @include("components/sidebar")
        <div class="main-content">
            <h1 class="admin-blog-head">Blogs Category</h1>
            <hr />
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <table class="table table-hover table-bordered results">
                            <thead>
                                <tr>
                                    <th class="col-md-1 col-xs-1">#</th>
                                    <th class="col-md-5 col-xs-5">Category Name</th>
                                    <th class="col-md-1 col-xs-1">Action</th>
                                </tr>
                                <tr class="warning no-result">
                                    <td colspan="4"><i class="fa fa-warning"></i> No result</td>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i < count($categorydata); $i++) <tr>
                                    <th scope="row">{{$i+1}}</th>
                                    <td>{{$categorydata[$i]['categoryName']}}</td>
                                    <td>
                                        <a href="/admin/category-delete/{{$categorydata[$i]['id']}}"
                                            style="color: red"><i class="fa-solid fa-trash" title="Delete"></i></a> <a
                                            href="/admin/category-edit/{{$categorydata[$i]['id']}}"
                                            style="color: green"><i class="fa-regular fa-pen-to-square"
                                                title="Edit"></i></a>
                                    </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <form method='POST' action="" enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <label><strong>Category Name :</strong></label>
                                <input type="text" name="categoryName" class="form-control slugdata" placeholder="Enter category name." required />
                            </div>
                            <div class="form-group">
                                <label><strong>Status :</strong></label>
                                <select class="form-control" name="status" required>
                                    <option disabled>Choose Status</option>
                                    <option value="draft">Draft</option>
                                    <option value="publish">Publish</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><strong>Meta Description :</strong></label>
                                <textarea name="metaDescription" class="form-control" placeholder="Enter category meta description." rows="5" required></textarea>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" value="Upload" class="btn btn-info btn-block blog-upload-btn" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>