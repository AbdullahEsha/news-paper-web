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
            <h1 class="text-3xl font-bold text-gray-800">Welcome to Dashboard...</h1>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>
