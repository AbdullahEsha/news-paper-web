<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Admin - Dashboard</title>
</head>

<body>
    <div class="admin-container">
        @include("components/sidebar")
        <div class="main-content">
            <h1 class="dashboard-title">Welcome to Super Equestrian Dashboard...</h1>
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>