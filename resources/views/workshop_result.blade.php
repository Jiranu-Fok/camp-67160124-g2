<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ผลลัพธ์ Workshop HTML FORM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<div class="container pt-5">
    <h2>✅ กรอกข้อมูลทั้งหมดครบ (Pass)</h2>

    <p><strong>ชื่อ-สกุล:</strong> {{ $data['fName'] }} {{ $data['lName'] }}</p>
    <p><strong>วันเกิด:</strong> {{ $data['birth'] }}</p>
    <p><strong>อายุ:</strong> {{ $data['age'] }}</p>
    <p><strong>เพศ:</strong> {{ $data['gender'] }}</p>
    <p><strong>ที่อยู่:</strong> {{ $data['address'] }}</p>
    <p><strong>สีที่ชอบ:</strong> {{ $data['color'] }}</p>
    <p><strong>แนวเพลงที่ชอบ:</strong> {{ $data['music'] }}</p>

    <a href="{{ url('/workshop') }}" class="btn btn-secondary">กลับหน้าฟอร์ม</a>
</div>
</body>
</html>
