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
        
        {{-- Nhúng menu --}}
        @include('menu')

        <main>
            <article class="col-9 bg-light">
                @yield('noidung')
                <!-- @foreach($baivietmoi as $bvm)
            <div>
                <h2> <a href="{{ route( 'chitiet.chitiet', ['id' => $bvm->id]) }}">{{ $bvm->Tieude }}</a>
                </h2>
                <p>{{ $bvm->Tomtat }}</p>
                <p><small>Ngày đăng: {{ $bvm->Ngaydang }}</small></p>
                <hr>
            </div>
        @endforeach -->
            </article>
            <aside class="col-3 bg-info">
                <p>Top bài viết được xem nhiều nhất</p>
                @foreach($baiVietTop as $baiViet)
            <li>
                <a href="{{ route('chitiet.chitiet', ['id' => $baiViet->id]) }}">{{ $baiViet->Tieude }}</a>
                <p>- {{ $baiViet->Tomtat }}</p>
                - Lượt xem: {{ $baiViet->Luotxem }}
            </li>
        @endforeach
            </aside>
        </main>

       @include('footer')
    </div>
</body>
</html>
