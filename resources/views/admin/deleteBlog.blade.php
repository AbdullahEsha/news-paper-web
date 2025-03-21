<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Dashboard</title>
</head>

<body>
    <div class="admin-container">
        @include("components/sidebar")
        <div class="main-content">
            <h1 class="admin-blog-head">Delete Blog</h1>
            <hr />
            <div class="container">
                <h2>{{$findBlog->title}}</h2>
                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($findBlog->description), $matches))
                <h5>
                    {{$matches[0]}}...
                </h5>
                @endif
                <p>{!!$findBlog->description!!}</p>
                <p class="text-danger">Are you sure to delete it?</p>
                <form method='POST' action="" enctype=multipart/form-data>
                    @csrf
                    <input type="hidden" value="{{$findBlog->id}}" name="id" />
                    <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
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
    <title>Admin - Dashboard</title>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include("components/sidebar")

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-4">Delete Blog</h1>
            <hr class="mb-4" />

            <!-- Blog Details -->
            <div class="container mx-auto bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-2">{{ $findBlog->title }}</h2>

                <!-- Short Description -->
                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($findBlog->description), $matches))
                <h5 class="text-gray-700 mb-4">
                    {{ $matches[0] }}...
                </h5>
                @endif

                <!-- Full Description -->
                <p class="text-gray-700 mb-4">{!! $findBlog->description !!}</p>

                <!-- Confirmation Message -->
                <p class="text-red-600 font-bold mb-4">Are you sure you want to delete it?</p>

                <!-- Delete Form -->
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ $findBlog->id }}" name="id" />
                    <button type="submit"
                        class="px-4 py-2 border border-red-600 text-red-600 rounded-lg hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-500">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>