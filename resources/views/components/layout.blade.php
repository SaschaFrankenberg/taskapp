@props(['title' => 'TaskApp'])

<!DOCTYPE html>
<html lang="en" data-theme="garden">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - TaskApp</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-nav />

    <main>
        {{ $slot }}
    </main>
    {{-- footer --}}
</body>
</html>