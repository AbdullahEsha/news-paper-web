<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-head />
    <title>Admin - Blog</title>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include("components/sidebar")

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-4">All Blog</h1>
            <hr class="mb-4" />

            <!-- Success Message -->
            @if(session('msg'))
            <p class="text-green-600 mb-4">
                {{ session('msg') }}
            </p>
            @endif

            <!-- Error Message -->
            @if(session('error'))
            <p class="text-red-600 mb-4">
                {{ session('error') }}
            </p>
            @endif

            <!-- Search and Table -->
            <div class="container mx-auto">
                <div class="mb-4 flex items-center justify-between">
                    <a href="/admin/blog-create" class="bg-blue-500 text-white px-4 py-2 rounded-md">Create Blog</a>
                    <form action="/admin/blog-search" method="POST">
                        @csrf
                        <input type="text" name="search" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search blog by title" required />
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md ml-2">Search</button>
                    </form>
                </div>

                <table class="min-w-full bg-white border rounded-lg overflow-hidden">
                    <thead class="bg-gray-200 text-left">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Short Description</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($newsData); $i++) <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $i + 1 }}</td>
                            <td class="px-4 py-2">{{ $newsData[$i]['title'] }}</td>
                            <td class="px-4 py-2">
                                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($newsData[$i]['description']), $matches))
                                {{ $matches[0] }}...
                                @endif
                            </td>
                            <td class="px-4 py-2 capitalize">
                                @if($newsData[$i]['status'] == 'draft')
                                <span class="bg-yellow-400 text-white px-2 py-1 rounded-full">Draft</span>
                                @else
                                <span class="bg-green-400 text-white px-2 py-1 rounded-full">Publish</span>
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                <a href="/admin/blog-delete/{{ $newsData[$i]['slug'] }}" class="text-red-600 hover:text-red-800 mr-2">
                                    <i class="fas fa-trash" title="Delete"></i>
                                </a>
                                <a href="/admin/blog-edit/{{ $newsData[$i]['slug'] }}" class="text-green-600 hover:text-green-800">
                                    <i class="fas fa-edit" title="Edit"></i>
                                </a>
                            </td>
                            </tr>
                            @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>
