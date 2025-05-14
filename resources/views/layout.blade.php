<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Tai+Heritage+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Tai+Heritage+Pro:wght@400;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/style.css', 'resources/js/app.js'])

    <title>@yield('title', 'My Site')</title>
</head>
<body>

  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')

</body>
</html>
