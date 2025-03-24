@extends ('layout')
@section('tieudetrang')
    Trang Chu Tin Tuc
@endsection
@section('noidung')
    @foreach($baivietmoi as $bvm)
                <div>
                    <h2> <a href="{{ route( 'chitiet.chitiet', ['id' => $bvm->id]) }}">{{ $bvm->Tieude }}</a>
                    </h2>
                    <p>{{ $bvm->Tomtat }}</p>
                    <p><small>Ngày đăng: {{ $bvm->Ngaydang }}</small></p>
                    <hr>
                </div>
            @endforeach

@endsection