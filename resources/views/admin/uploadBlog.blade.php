<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.head')
    <title>Admin - Upload Blog</title>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('components.sidebar')

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-6">Upload Blog</h1>
            <hr class="mb-6 border-gray-300" />

            <!-- Form Container -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                    @csrf

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

                    <!-- Slug Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Slug:</strong>
                        </label>
                        <input
                            type="text"
                            name="slug"
                            id="slug"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter title to get slug"
                            required />
                    </div>

                    <!-- Meta Description Field -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <strong>Meta Description:</strong>
                        </label>
                        <textarea
                            name="metaDescription"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                            rows="3"
                            placeholder="Enter blog meta description"
                            required></textarea>
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
                                    <option value="{{ $category[$i]['categoryName'] }}">
                                    {{ $category[$i]['categoryName'] }}
                                    </option>
                                    @endfor
                            </select>
                        </div>
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
                    <div class="text-center">
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
@include("components/bootstrapscript")

</html>
