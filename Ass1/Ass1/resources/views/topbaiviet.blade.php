@extends('layout')

@section('tieudetrang', 'Top 10 Bài Viết Được Xem Nhiều Nhất')

@section('noidung')

    <h1>Top 10 Bài Viết Được Xem Nhiều Nhất</h1>
    <ul>
        @foreach($baiVietTop as $baiViet)
            <li>
                <a href="{{ route('chitiet.chitiet', ['id' => $baiViet->id]) }}">{{ $baiViet->Tieude }}</a>
                <p>- {{ $baiViet->Tomtat }}</p>
                - Lượt xem: {{ $baiViet->Luotxem }}
            </li>
        @endforeach
    </ul>
@endsection
