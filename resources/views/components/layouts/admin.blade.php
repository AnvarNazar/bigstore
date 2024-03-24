<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Dashboard' }}</title>
</head>
<body>
<header>
    <nav>
        <a href="{{ route('admin.index') }}" wire:navigate>Dashboard</a>
        <a href="{{ route('admin.products.index') }}" wire:navigate>Products</a>
    </nav>
</header>
{{ $slot }}
</body>
</html>
