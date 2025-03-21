<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Edit Blog</title>
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include("components/sidebar")

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-2xl font-bold mb-4">Edit Blog</h1>
            <hr class="mb-4" />

            <!-- Form Container -->
            <div class="container mx-auto">
                <form method="POST" action="" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md">
                    @csrf
                    <!-- Title -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2"><strong>Title :</strong></label>
                        <input type="text" name="title" value="{{ $editBlog->title }}"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Slug -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2"><strong>Slug :</strong></label>
                        <input type="text" name="slug" value="{{ $editBlog->slug }}"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required />
                    </div>

                    <!-- Meta Description -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2"><strong>Meta Description :</strong></label>
                        <textarea name="metaDescription"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            rows="3" required>{{ $editBlog->metaDescription }}</textarea>
                    </div>

                    <!-- Author -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2"><strong>Author :</strong></label>
                        <input type="text" name="author" value="{{ $editBlog->author }}"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Enter author name" required />
                    </div>

                    <!-- Status and Category -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <!-- Status -->
                        <div>
                            <label class="block text-gray-700 font-bold mb-2"><strong>Status :</strong></label>
                            <select name="status"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option disabled>Choose Status</option>
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>

                        <!-- Category -->
                        <div>
                            <label class="block text-gray-700 font-bold mb-2"><strong>Category :</strong></label>
                            <select name="category"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                required>
                                <option disabled>Choose Category</option>
                                @for($i = 0; $i < count($categoryEdit); $i++) <option
                                    value="{{ $categoryEdit[$i]['categoryName'] }}">
                                    {{ $categoryEdit[$i]['categoryName'] }}
                                    </option>
                                    @endfor
                            </select>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2"><strong>Description :</strong></label>
                        <textarea name="description" id="editor"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>{{ $editBlog->description }}</textarea>
                    </div>

                    <!-- Hidden ID Field -->
                    <input type="hidden" value="{{ $editBlog->id }}" name="id" />

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>