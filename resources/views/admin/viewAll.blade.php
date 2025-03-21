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

            <!-- Validation Errors -->
            @if (count($errors) > 0)
            <p class="text-red-600 mb-4">
                @foreach ($errors->all() as $error)
                {{ $error }}<br />
                @endforeach
            </p>
            @endif

            <!-- Search and Table -->
            <div class="container mx-auto">
                <div class="mb-4 flex justify-end">
                    <input type="text" class="px-4 py-2 border rounded-lg" placeholder="What are you looking for?">
                </div>

                <table class="min-w-full bg-white border rounded-lg overflow-hidden">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Short Description</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i = 0; $i < count($blogData); $i++) <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $i + 1 }}</td>
                            <td class="px-4 py-2">{{ $blogData[$i]['title'] }}</td>
                            <td class="px-4 py-2">
                                @if(preg_match("/(?:\w+(?:\W+|$)){0,5}/", strip_tags($blogData[$i]['description']), $matches))
                                {{ $matches[0] }}...
                                @endif
                            </td>
                            <td class="px-4 py-2 text-center capitalize
                                @if($blogData[$i]['status'] === 'publish') bg-green-200 text-green-800
                                @elseif($blogData[$i]['status'] === 'draft') bg-yellow-100 text-yellow-800
                                @endif">
                                {{ $blogData[$i]['status'] }}
                            </td>
                            <td class="px-4 py-2">
                                <a href="/admin/blog-delete/{{ $blogData[$i]['slug'] }}" class="text-red-600 hover:text-red-800 mr-2">
                                    <i class="fas fa-trash" title="Delete"></i>
                                </a>
                                <a href="/admin/blog-edit/{{ $blogData[$i]['slug'] }}" class="text-green-600 hover:text-green-800">
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