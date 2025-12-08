<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
<div class="container pt-5">
    <h1>Workshop #HTML – FORM</h1>
    <form>
        <div class="row mb-3">
            <div class="col-4">
                <label for="fName" class="col-form-label">ชื่อ</label>
            </div>
            <div class="col-6">
                <input type="text" id="fName" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="lName" class="col-form-label">สกุล</label>
            </div>
            <div class="col-6">
                <input type="text" id="lName" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
    <div class="col-4">
        <label for="birth" class="col-form-label">วัน/เดือน/ปีเกิด</label>
    </div>
    <div class="col-6">
        <input type="text" id="birth" class="form-control" placeholder="วัน/เดือน/ปี (dd/mm/yyyy)">
    </div>
</div>
        <div class="row mb-3">
            <div class="col-4">
                <label class="col-form-label">เพศ</label>
            </div>
            <div class="col-6">
                <select class="form-select">
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="other">อื่น ๆ</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="photo" class="col-form-label">รูป</label>
            </div>
            <div class="col-6">
                <input type="file" id="photo" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="address" class="col-form-label">ที่อยู่</label>
            </div>
            <div class="col-6">
                <textarea id="address" class="form-control" rows="3"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="color" class="col-form-label">สีที่ชอบ</label>
            </div>
            <div class="col-6">
                <input type="color" id="color" class="form-control form-control-color">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <label for="music" class="col-form-label">แนวเพลงที่ชอบ</label>
            </div>
            <div class="col-6">
                <select id="music" class="form-select">
                    <option>Pop</option>
                    <option>Rock</option>
                    <option>Hip-Hop</option>
                    <option>EDM</option>
                    <option>ลูกทุ่ง</option>
                    <option>เพื่อชีวิต</option>
                </select>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-4"></div>
            <div class="col-6">
                <input type="checkbox" id="agree">
                <label for="agree">ยินยอมตามเงื่อนไขการสมัคร</label>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4"></div>
            <div class="col-6">
                <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
