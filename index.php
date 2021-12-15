<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: purple;">
    <div class="container "
        style="margin-top: 60px; width: 500px; margin-bottom: 40px;  background-color: #f37321; color: black; height: 1470px ">
        <center>
            <br>
            <h1>แบบฟอร์ม</h1>
        </center>
        <div class="form-group ml-4">
            <label for="usr"> เลขบัตรประชาชน :</label>
            <input type="number" class="form-control" id="perid" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="sel1">คำนำหน้านาม :</label>
            <select class="form-control" id="sex" style="width : 420px;">
                <option value="male">นาย</option>
                <option value="female">นาง</option>
                <option value="female"> นางสาว</option>
                <option value="unknow">ไม่ระบุ</option>
            </select>
        </div>

        <div class="form-group ml-4">
            <label for="usr"> ชื่อ :</label>
            <input type="text" class="form-control" id="name" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> นามสกุล :</label>
            <input type="text" class="form-control" id="lname" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="sel1">คำนำหน้านาม :</label>
            <select class="form-control" id="reg" style="width : 420px;">
                <option value="buddhist">พุทธ</option>
                <option value="christian">คริสต์</option>
                <option value="muslim">อิสลาม</option>
                <option value="other">อื่นๆ</option>
            </select>
        </div>

        <div class="form-group ml-4">
            <label for="usr"> บ้านเลขที่ :</label>
            <input type="number" class="form-control" id="homeid" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> หมู่ที่ :</label>
            <input type="number" class="form-control" id="villid" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> ถนน :</label>
            <input type="text" class="form-control" id="road" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> ตำบล/แขวง :</label>
            <input type="text" class="form-control" id="tum" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> อำเภอ/แขวง :</label>
            <input type="text" class="form-control" id="aum" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="sel1">จังหวัด :</label>
            <select class="form-control" id="pro" style="width : 420px;">
                <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                <option value="กระบี่">กระบี่ </option>
                <option value="กาญจนบุรี">กาญจนบุรี </option>
                <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                <option value="กำแพงเพชร">กำแพงเพชร </option>
                <option value="ขอนแก่น">ขอนแก่น</option>
                <option value="จันทบุรี">จันทบุรี</option>
                <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                <option value="ชัยนาท">ชัยนาท </option>
                <option value="ชัยภูมิ">ชัยภูมิ </option>
                <option value="ชุมพร">ชุมพร </option>
                <option value="ชลบุรี">ชลบุรี </option>
                <option value="เชียงใหม่">เชียงใหม่ </option>
                <option value="เชียงราย">เชียงราย </option>
                <option value="ตรัง">ตรัง </option>
                <option value="ตราด">ตราด </option>
                <option value="ตาก">ตาก </option>
                <option value="นครนายก">นครนายก </option>
                <option value="นครปฐม">นครปฐม </option>
                <option value="นครพนม">นครพนม </option>
                <option value="นครราชสีมา">นครราชสีมา </option>
                <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                <option value="นครสวรรค์">นครสวรรค์ </option>
                <option value="นราธิวาส">นราธิวาส </option>
                <option value="น่าน">น่าน </option>
                <option value="นนทบุรี">นนทบุรี </option>
                <option value="บึงกาฬ">บึงกาฬ</option>
                <option value="บุรีรัมย์">บุรีรัมย์</option>
                <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                <option value="ปทุมธานี">ปทุมธานี </option>
                <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                <option value="ปัตตานี">ปัตตานี </option>
                <option value="พะเยา">พะเยา </option>
                <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                <option value="พังงา">พังงา </option>
                <option value="พิจิตร">พิจิตร </option>
                <option value="พิษณุโลก">พิษณุโลก </option>
                <option value="เพชรบุรี">เพชรบุรี </option>
                <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                <option value="แพร่">แพร่ </option>
                <option value="พัทลุง">พัทลุง </option>
                <option value="ภูเก็ต">ภูเก็ต </option>
                <option value="มหาสารคาม">มหาสารคาม </option>
                <option value="มุกดาหาร">มุกดาหาร </option>
                <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                <option value="ยโสธร">ยโสธร </option>
                <option value="ยะลา">ยะลา </option>
                <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                <option value="ระนอง">ระนอง </option>
                <option value="ระยอง">ระยอง </option>
                <option value="ราชบุรี">ราชบุรี</option>
                <option value="ลพบุรี">ลพบุรี </option>
                <option value="ลำปาง">ลำปาง </option>
                <option value="ลำพูน">ลำพูน </option>
                <option value="เลย">เลย </option>
                <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                <option value="สกลนคร">สกลนคร</option>
                <option value="สงขลา">สงขลา </option>
                <option value="สมุทรสาคร">สมุทรสาคร </option>
                <option value="สมุทรปราการ">สมุทรปราการ </option>
                <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                <option value="สระแก้ว">สระแก้ว </option>
                <option value="สระบุรี">สระบุรี </option>
                <option value="สิงห์บุรี">สิงห์บุรี </option>
                <option value="สุโขทัย">สุโขทัย </option>
                <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                <option value="สุรินทร์">สุรินทร์ </option>
                <option value="สตูล">สตูล </option>
                <option value="หนองคาย">หนองคาย </option>
                <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                <option value="อุดรธานี">อุดรธานี </option>
                <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                <option value="อุทัยธานี">อุทัยธานี </option>
                <option value="อุบลราชธานี">อุบลราชธานี</option>
                <option value="อ่างทอง">อ่างทอง </option>
                <option value="อื่นๆ">อื่นๆ</option>
            </select>
        </div>

        <div class="form-group ml-4">
            <label for="usr"> รหัสไปรษณีย์ :</label>
            <input type="number" class="form-control" id="postid" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> โทรศัพท์บ้าน :</label>
            <input type="number" class="form-control" id="hphone" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="usr"> โทรศัพท์มือถือ :</label>
            <input type="number" class="form-control" id="yphone" style="width : 420px;">
        </div>

        <div class="form-group ml-4">
            <label for="sel1">สาขาวิชาที่สนใจ :</label>
            <select class="form-control" id="favm" style="width : 420px;">
                <option value="ITD">หลักสูตรเทคโนโลยีสารสนเทศและนวัตกรรมดิจิทัล</option>
                <option value="IMI">หลักสูตรนวัตกรรมสารสนเทศทางการแพทย์</option>
                <option value="MTA">หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาเทคโนโลยีมัลติมีเดีย แอนิเมชัน และเกม</option>
                <option value="DCM">หลักสูตรสารสนเทศศาสตรบัณฑิต สาขาวิชาดิจิทัลคอนเทนต์และสื่อ</option>
                <option value="DIM">หลักสูตรการจัดการสารสนเทศและสื่อดิจิทัล</option>
            </select>

        </div>
        <center>
            <button type="button" class="btn btn-success mt-4 " id="submbutt"> Summit </button>
        </center>

    </div>
</body>

<script>

$(() => {
    $("#submbutt").click(() => {
        var psid = $("#perid").val();
        var hsex = $("#sex").val();
        var fsname = $("#name").val();
        var lsname = $("#lname").val();
        var relg = $("#reg").val();
        var homeid = $("#homeid").val();
        var villid = $("#villid").val();
        var road = $("#road").val();
        var tumbon = $("#tum").val();
        var aumpor = $("#aum").val();
        var province = $("#pro").val();
        var postid = $("#postid").val();
        var homephone = $("#hphone").val();
        var smartphone = $("#yphone").val();
        var favmajor = $("#favm").val();
        showdetail(psid , hsex , fsname , lsname , relg , homeid , villid , road , tumbon , aumpor , province , postid , homephone , smartphone , favmajor);
    })
})

function showdetail(psid , hsex , fsname , lsname , relg , homeid , villid , road , tumbon , aumpor , province , postid , homephone , smartphone , favmajor) {
    var info = "{";
    info += '"citizenid":"' + $("#perid").val()+'",';
    info += '"sex":"' + $("#sex").val()+'",';
    info += '"fristname":"' + $("#name").val()+'",';
    info += '"lastname":"' + $("#lname").val()+'",';
    info += '"religion":"' + $("#reg").val()+'",';
    info += '"address":"' + $("#homeid").val()+'",';
    info += '"villageid":"' + $("#villid").val()+'",';
    info += '"roadname":"' + $("#road").val()+'",';
    info += '"district":"' + $("#tum").val()+'",';
    info += '"county":"' + $("#aum").val()+'",';
    info += '"province":"' + $("#pro").val()+'",';
    info += '"zipcode":"' + $("#postid").val()+'",';
    info += '"homephone":"' + $("#hphone").val()+'",';
    info += '"smartphone":"' + $("#yphone").val()+'",';
    info += '"favoritemajor":"' + $("#favm").val()+'"';
    info += "}";
    console.log(JSON.parse(info));
}

</script>

</html>
