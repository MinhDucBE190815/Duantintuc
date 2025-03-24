@extends ('layout')
@section('tieudetrang')
{{ $chitiet->Tieude }}
@endsection
@section('noidung')
<h1>{{ $chitiet->Tieude }}</h1>
<h3>{{ $chitiet->Tomtat }}</h3>
<div id='noidung'>{{ $chitiet->Noidung }}</div>
@endsection