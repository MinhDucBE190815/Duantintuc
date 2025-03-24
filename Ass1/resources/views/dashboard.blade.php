@extends('layoutadmin')

@section('content')
<style>
    .dashboard-container {
        max-width: 1200px;
        margin: auto;
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .stat-box {
        display: flex;
        justify-content: space-between;
        background: linear-gradient(45deg, #007bff, #00c6ff);
        color: white;
        padding: 20px;
        border-radius: 10px;
        font-size: 20px;
        font-weight: bold;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    .table th, .table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }

    .table thead {
        background: #007bff;
        color: white;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }
</style>
<h1 class="text-3xl font-bold mb-4">Dashboard</h1>
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-xl font-bold">Tổng Tin</h3>
                    <p class="text-gray-600">{{ $totalTin }}</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-xl font-bold">Số Tác giả</h3>
                    <p class="text-gray-600">120</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="text-xl font-bold">Khách hàng </h3>
                    <p class="text-gray-600">50</p>
                </div>
            </div>
<br>
<div class="dashboard-container mt-4">

    <!-- Tổng số lượng tin -->

    <!-- Danh sách tin có nhiều lượt xem -->
    <h3 class="mt-4">Tin có nhiều lượt xem nhất</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Lượt xem</th>
                <th>Ngày đăng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topTin as $tin)
            <tr>
                <td>{{ $tin->id }}</td>
                <td>{{ $tin->Tieude }}</td>
                <td>{{ $tin->Luotxem }}</td>
                <td>{{ $tin->Ngaydang }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
