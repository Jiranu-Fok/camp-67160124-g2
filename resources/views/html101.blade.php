<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>
    <link rel="stylesheet" href="css/bootstrap.css" />

    <script>
        function validateForm() {

            let fName   = document.getElementById("fName").value.trim();
            let lName   = document.getElementById("lName").value.trim();
            let birth   = document.getElementById("birth").value.trim();
            let age     = document.getElementById("age").value.trim();
            let gender  = document.getElementById("gender").value;
            let photo   = document.getElementById("photo").value;
            let address = document.getElementById("address").value.trim();
            let music   = document.getElementById("music").value;
            let agree   = document.getElementById("agree").checked;

            let result = document.getElementById("result");

            if (fName === "" || lName === "" || birth === "" || age === "" ||
                gender === "" || photo === "" || address === "" ||
                music === "" || !agree) {

                result.innerHTML = "❌ ไม่กรอกข้อมูล (Error)";
                result.className = "alert alert-danger mt-4";
                return false;
            }

            result.innerHTML = "✅ กรอกข้อมูลทั้งหมดครบ (Pass)";
            result.className = "alert alert-success mt-4";
            return false;
        }
    </script>
</head>

<body>
<div class="container pt-5">
    <h1>Workshop #HTML – FORM</h1>

    <form onsubmit="return validateForm();">

        <div class="row mb-3">
            <div class="col-4">ชื่อ</div>
            <div class="col-6">
                <input type="text" id="fName" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">สกุล</div>
            <div class="col-6">
                <input type="text" id="lName" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">วัน/เดือน/ปีเกิด</div>
            <div class="col-6">
                <input type="text" id="birth" class="form-control" placeholder="dd/mm/yyyy">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">อายุ</div>
            <div class="col-6">
                <input type="number" id="age" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">เพศ</div>
            <div class="col-6">
                <select id="gender" class="form-select">
                    <option value="">-- เลือกเพศ --</option>
                    <option value="male">ชาย</option>
                    <option value="female">หญิง</option>
                    <option value="other">อื่น ๆ</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">รูป</div>
            <div class="col-6">
                <input type="file" id="photo" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">ที่อยู่</div>
            <div class="col-6">
                <textarea id="address" class="form-control"></textarea>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">สีที่ชอบ</div>
            <div class="col-6">
                <input type="color" id="color" class="form-control form-control-color">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-4">แนวเพลงที่ชอบ</div>
            <div class="col-6">
                <select id="music" class="form-select">
                    <option value="">-- เลือกแนวเพลง --</option>
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

        <div class="row mb-3">
            <div class="col-4"></div>
            <div class="col-6">
                <button type="reset" class="btn btn-secondary">ล้างข้อมูล</button>
                <button type="submit" class="btn btn-primary">บันทึก</button>
            </div>
        </div>

        <!-- แสดงผล Error / Pass -->
        <div id="result"></div>

    </form>
</div>
</body>
</html>
