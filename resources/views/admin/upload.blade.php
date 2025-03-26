<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-head />
    <title>Admin - Upload</title>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Upload News</h1>
            <hr class="mb-6 border-gray-300" />

            <!-- Form Container -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Image Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Image:</strong>
                        </label>
                        <input
                            type="file"
                            name="image"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Title Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Title:</strong>
                        </label>
                        <input
                            type="text"
                            name="title"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter blog title"
                            required />
                    </div>

                    <!-- Author Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Author:</strong>
                        </label>
                        <input
                            type="text"
                            name="author"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter author name"
                            required />
                    </div>

                    <!-- Status and Category Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Status Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                <strong>Status:</strong>
                            </label>
                            <select
                                name="status"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option disabled>Choose Status</option>
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>

                        <!-- Category Field -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                <strong>Category:</strong>
                            </label>
                            <select
                                name="category"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option disabled>Choose Category</option>
                                @for($i = 0; $i < count($category); $i++)
                                    @if($category[$i]['status']=='publish' )
                                    <option value="{{ $category[$i]['categoryName'] }}">
                                    {{ $category[$i]['categoryName'] }}
                                    </option>
                                    @endif
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <!-- Tag Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Tag:</strong>
                        </label>
                        <input
                            type="text"
                            name="tag"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter tags (comma separated)"
                            required />
                    </div>

                    <!-- Location Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Location:</strong>
                        </label>
                        <select
                            name="location"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                            <option disabled>Choose Location</option>
                            <option value="top">Top</option>
                            <option value="bottom">Bottom</option>
                            <option value="left">Left</option>
                            <option value="right">Right</option>
                            <option value="center">Center</option>
                        </select>
                    </div>

                    <!-- Description Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Description:</strong>
                        </label>
                        <textarea
                            name="description"
                            id="editor"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <a
                            href="/admin"
                            class="px-6 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 mr-4">
                            Cancel
                        </a>
                        <button
                            type="submit"
                            class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Initialize CKEditor -->
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>
<x-bootstrapscript />

</html>