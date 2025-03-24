@extends('layout')

@section('tieudetrang')
    Tin {{ $tinloai->first()->tenloai ?? 'Không có dữ liệu' }}
@endsection

@section('noidung')
<h1> {{ $tinloai->first()->tenloai ?? 'Không có dữ liệu' }}</h1>

@if ($tinloai->isEmpty())
    <p>Không có bài viết nào trong loại này.</p>
@else
    @foreach ($tinloai as $t)
    <div class="row border-bottom pb-3 mb-3">
        <h1 class="text-success">
        <a href="{{ route('chitiet.chitiet', ['id' => $t->id]) }}" class="text-primary">
                {{ $t->Tieude }}
            </a>
        </h1>
        <h3 class="text-muted">{{ $t->Tomtat }}</h3>
        <p>{{ $t->Noidung }}</p>
    </div>
    @endforeach
@endif

@endsection
