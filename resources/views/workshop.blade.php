<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop HTML FORM</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <style>
        .form-wrap{ max-width:760px; margin:0 auto; }
        .label-col{ width:180px; }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="form-wrap">
        <h1 class="fw-bold mb-4">Workshop #HTML – FORM</h1>

        <form action="{{ url('/workshop') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">ชื่อ</label></div>
                <div class="col-12 col-md-9"><input type="text" class="form-control" name="fName" required></div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">สกุล</label></div>
                <div class="col-12 col-md-9"><input type="text" class="form-control" name="lName" required></div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">วัน/เดือน/ปีเกิด</label></div>
                <div class="col-12 col-md-9">
                    <input type="text" class="form-control" name="birth" placeholder="วัน/เดือน/ปี (dd/mm/yyyy)" required>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">อายุ</label></div>
                <div class="col-12 col-md-9">
                    <input type="number" class="form-control" name="age" min="1" placeholder="กรอกอายุ" required>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">เพศ</label></div>
                <div class="col-12 col-md-9">
                    <select class="form-select" name="gender" required>
                        <option value="">-- เลือกเพศ --</option>
                        <option value="ชาย">ชาย</option>
                        <option value="หญิง">หญิง</option>
                        <option value="อื่น ๆ">อื่น ๆ</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">รูป</label></div>
                <div class="col-12 col-md-9"><input type="file" class="form-control" name="photo" accept="image/*"></div>
            </div>
            <div class="row g-3 mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">ที่อยู่</label></div>
                <div class="col-12 col-md-9"><textarea class="form-control" name="address" rows="4" required></textarea></div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">สีที่ชอบ</label></div>
                <div class="col-12 col-md-9">
                    <input type="color" class="form-control form-control-color" name="color" value="#000000">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-2">
                <div class="col-12 col-md-3 label-col"><label class="form-label mb-0">แนวเพลงที่ชอบ</label></div>
                <div class="col-12 col-md-9">
                    <select class="form-select" name="music" required>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                        <option value="Hip-Hop">Hip-Hop</option>
                        <option value="EDM">EDM</option>
                    </select>
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-12 col-md-3 label-col"></div>
                <div class="col-12 col-md-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="agree" value="1" id="agree" required>
                        <label class="form-check-label" for="agree">ยินยอมตามเงื่อนไข</label>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-3 label-col"></div>
                <div class="col-12 col-md-9">
                    <button type="reset" class="btn btn-secondary me-2">ล้างข้อมูล</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
