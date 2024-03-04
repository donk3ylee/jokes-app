<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title> {{  $title ?? config('app.name') }}</title>
</head>
<body>
    <x-page-wrapper>
        {{ $slot }}
    </x-page-wrapper>
</body>
</html>
