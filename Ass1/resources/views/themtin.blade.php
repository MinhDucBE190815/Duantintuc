@extends('layoutadmin')

@section('content')

    <style>
        .form-container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0px 0px 8px rgba(0, 123, 255, 0.3);
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            background: #007bff;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #0056b3;
        }
    </style>

    <div class="form-container">
        <h2>Thêm tin mới</h2>
        <form action="{{ route('tin.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" name="Tieude" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea name="Noidung" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <textarea name="Tomtat" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Ngày đăng</label>
                <input type="date" name="Ngaydang" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Loại ID</label>
                <input type="number" name="Loaiid" class="form-control" required>
            </div>
            <button type="submit">Thêm tin</button>
        </form>
    </div>

@endsection