<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('/favicon.ico')}}" />
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/nav.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/footer.css')}}" />
<!-- // add tailwindcss -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
<!-- add tailwind script -->
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

<script>
    tailwind.config = {
        plugins: [
            require('@tailwindcss/line-clamp'),
        ],
    }
</script>