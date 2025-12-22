<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML FORM</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script>
        function submitForm() {
            let fName   = document.getElementById("fName").value.trim();
            let lName   = document.getElementById("lName").value.trim();
            let birth   = document.getElementById("birth").value.trim();
            let age     = document.getElementById("age").value.trim();
            let gender  = document.getElementById("gender").value;
            let photo   = document.getElementById("photo").value;
            let address = document.getElementById("address").value.trim();
            let color   = document.getElementById("color").value;
            let music   = document.getElementById("music").value;
            let agree   = document.getElementById("agree").checked;
            let result = document.getElementById("result");
            if (
                fName === "" || lName === "" || birth === "" || age === "" ||
                gender === "" || photo === "" || address === "" ||
                music === "" || !agree
            ) {
                result.innerHTML = `
                    <div class="alert alert-danger mt-4">
                        ❌ ข้อมูลไม่ครบ (Error)
                    </div>
                `;
                return false;
            }
            document.getElementById("formSection").style.display = "none";
            document.getElementById("resultSection").style.display = "block";
            document.getElementById("rName").innerText = fName + " " + lName;
            document.getElementById("rBirth").innerText = birth;
            document.getElementById("rAge").innerText = age;
            document.getElementById("rGender").innerText = gender;
            document.getElementById("rAddress").innerText = address;
            document.getElementById("rColor").innerText = color;
            document.getElementById("rMusic").innerText = music;
            return false;
        }
    </script>
</head>
<body>
<div class="container pt-5">
<div id="formSection">
    <h1>Workshop #HTML – FORM</h1>

    <form onsubmit="return submitForm();">

        <input class="form-control mb-2" id="fName" placeholder="ชื่อ">
        <input class="form-control mb-2" id="lName" placeholder="สกุล">
        <input class="form-control mb-2" id="birth" placeholder="วัน/เดือน/ปีเกิด">
        <input class="form-control mb-2" id="age" type="number" placeholder="อายุ">

        <select class="form-select mb-2" id="gender">
            <option value="">-- เลือกเพศ --</option>
            <option>ชาย</option>
            <option>หญิง</option>
            <option>อื่น ๆ</option>
        </select>

        <input type="file" id="photo" class="form-control mb-2">
        <textarea class="form-control mb-2" id="address" placeholder="ที่อยู่"></textarea>
        <input type="color" id="color" class="form-control form-control-color mb-2">

        <select class="form-select mb-2" id="music">
            <option value="">-- แนวเพลงที่ชอบ --</option>
            <option>Pop</option>
            <option>Rock</option>
            <option>Hip-Hop</option>
            <option>EDM</option>
        </select>

        <div class="mb-3">
            <input type="checkbox" id="agree"> ยินยอมตามเงื่อนไข
        </div>

        <button type="submit" class="btn btn-primary">บันทึก</button>
        <div id="result"></div>
    </form>
</div>
<div id="resultSection" style="display:none;">
    <h2>✅ กรอกข้อมูลทั้งหมดครบ (Pass)</h2>
    <p><strong>ชื่อ-สกุล:</strong> <span id="rName"></span></p>
    <p><strong>วันเกิด:</strong> <span id="rBirth"></span></p>
    <p><strong>อายุ:</strong> <span id="rAge"></span></p>
    <p><strong>เพศ:</strong> <span id="rGender"></span></p>
    <p><strong>ที่อยู่:</strong> <span id="rAddress"></span></p>
    <p><strong>สีที่ชอบ:</strong> <span id="rColor"></span></p>
    <p><strong>แนวเพลงที่ชอบ:</strong> <span id="rMusic"></span></p>

    <button class="btn btn-secondary" onclick="location.reload()">กลับหน้าฟอร์ม</button>
</div>

</div>
</body>
</html>
