<!-- use tailwind css -->

<!DOCTYPE html>
<html lang="en">

<head>
    @include("components/head")
    <title>Login</title>
</head>

<body>
    <div class="h-screen flex items-center justify-center">
        <div class="w-full max-w-md p-4 bg-white rounded-lg shadow-md">
            @csrf
            <h2>Errors</h2>
            <p class="text-green-500">
                {{session('msg')}}
            </p>
            <p class="text-red-500">
                {{session('error')}}
            </p>
            @if (count($errors) > 0)
            <p class="text-red-500">
                @foreach ($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
            </p>
            @endif
        </div>
    </div>
</body>
@include("components/bootstrapscript")

</html>
