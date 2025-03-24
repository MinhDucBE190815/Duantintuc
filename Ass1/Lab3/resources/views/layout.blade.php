<!DOCTYPE html>
<html lang="vi">
<head>
    <title>@yield('tieudetrang')</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .container > header { height: 220px; }
        .container > nav { height: 60px; }
        .container > footer { height: 90px; }
        .container > main { display: flex; min-height: 500px; }
    </style>
</head>
<body>
    <div class="container">
        <header class="bg-primary"></header>
        
        {{-- Nhúng menu --}}
        @include('menu')

        <main>
            <article class="col-9 bg-light">
                @yield('noidung')
            </article>
            <aside class="col-3 bg-info">
                THÔNG TIN BỔ SUNG
            </aside>
        </main>

        <footer class="bg-dark text-white text-center py-3">
            PHÁT TRIỂN BỞI XYZ
        </footer>
    </div>
</body>
</html>
