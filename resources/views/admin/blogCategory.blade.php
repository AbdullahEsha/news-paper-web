<!-- <!DOCTYPE html>
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

</html> -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Upload Blog</title>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include("components/sidebar")

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-4">Blogs Category</h1>
            <hr class="mb-4" />

            <!-- Container -->
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Table Section -->
                    <div class="md:col-span-2">
                        <table class="min-w-full bg-white border rounded-lg overflow-hidden">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="px-4 py-2">#</th>
                                    <th class="px-4 py-2">Category Name</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < count($categorydata); $i++) <tr class="hover:bg-gray-50">
                                    <td class="px-4 py-2">{{ $i + 1 }}</td>
                                    <td class="px-4 py-2">{{ $categorydata[$i]['categoryName'] }}</td>
                                    <td class="px-4 py-2">
                                        <a href="/admin/category-delete/{{ $categorydata[$i]['id'] }}" class="text-red-600 hover:text-red-800 mr-2">
                                            <i class="fas fa-trash" title="Delete"></i>
                                        </a>
                                        <a href="/admin/category-edit/{{ $categorydata[$i]['id'] }}" class="text-green-600 hover:text-green-800">
                                            <i class="fas fa-edit" title="Edit"></i>
                                        </a>
                                    </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>

                    <!-- Form Section -->
                    <div class="md:col-span-1">
                        <form method="POST" action="" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                            @csrf
                            <!-- Category Name -->
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2"><strong>Category Name :</strong></label>
                                <input type="text" name="categoryName" placeholder="Enter category name."
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required />
                            </div>

                            <!-- Status -->
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2"><strong>Status :</strong></label>
                                <select name="status"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    required>
                                    <option disabled>Choose Status</option>
                                    <option value="draft">Draft</option>
                                    <option value="publish">Publish</option>
                                </select>
                            </div>

                            <!-- Meta Description -->
                            <div class="mb-4">
                                <label class="block text-gray-700 font-bold mb-2"><strong>Meta Description :</strong></label>
                                <textarea name="metaDescription" placeholder="Enter category meta description."
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    rows="5" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <input type="submit" value="Upload"
                                    class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500" />
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