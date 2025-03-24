@extends('layoutadmin')

@section('content')
    <style>
        /* Định dạng chung */
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Nút bấm */
        .btn-custom {
            padding: 10px 15px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
            display: inline-block;
            text-align: center;
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-custom:hover {
            opacity: 0.8;
            transform: translateY(-2px);
        }

        /* Bảng tin */
        .table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #007bff;
            /* Viền ngoài bảng */
        }

        .table thead {
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
            text-transform: uppercase;
        }

        .table th,
        .table td {
            text-align: center;
            padding: 12px;
            vertical-align: middle;
            border: 1px solid #ddd;
            /* Viền từng ô */
        }

        .table tbody tr:nth-child(even) {
            background: #f8f9fa;
        }

        .table tbody tr:hover {
            background: #e9ecef;
            transition: 0.3s;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }

            .btn-custom {
                width: 100%;
                display: block;
                margin-bottom: 5px;
            }
        }
    </style>

    <div class="container mt-4">
        <h1>Quản lý Tin Tức</h1>

        <div class="text-end mb-3">
            <a href="{{ route('tin.create') }}" class="btn btn-success btn-custom"><i class="fas fa-plus"></i> Thêm Tin
                Mới</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Tóm tắt</th>
                        <th>Ngày đăng</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tinList as $tin)
                        <tr>
                            <td>{{ $tin->id }}</td>
                            <td>{{ $tin->Tieude }}</td>
                            <td>{{ $tin->Tomtat }}</td>
                            <td>{{ $tin->Ngaydang }}</td>
                            <td>
                                <a href="{{ route('tin.edit', $tin->id) }}" class="btn btn-primary btn-custom">
                                    <i class="fas fa-edit"></i> Sửa
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('tin.destroy', $tin->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-custom"
                                        onclick="return confirm('Bạn có chắc muốn xóa?')">
                                        <i class="fas fa-trash"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection