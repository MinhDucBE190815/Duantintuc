@extends ('layout')

@section('tieudetrang')
    {{ $chitiet->Tieude }}
@endsection

@section('noidung')
    <h1>{{ $chitiet->Tieude }}</h1>
    <h3>{{ $chitiet->Tomtat }}</h3>
    <div id='noidung'>{{ $chitiet->Noidung }}</div>
    <hr>
    


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let baiVietId = "{{ $chitiet->id }}"; // ID kiểu VARCHAR nên cần để trong dấu nháy kép

            fetch(`/luotxem/${baiVietId}`, { method: "GET" })
                .then(response => response.json())
                .then(data => console.log(data.message))
                .catch(error => console.error("Lỗi:", error));
        });
    </script>
@endsection
