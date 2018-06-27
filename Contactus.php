<html>
<style>
    th,
    td 
    {
        border: 1px solid black;
        border-collapse: collapse;
    }
    legend 
    {
        font-weight: bold;
        font-size: 30px;
        color: #000000;
    }
    .detail {
        padding: 25px;
        border: 25px solid navy;
        margin: 5px;
        left: 50%;
        transform: translate(-50%);
        border: #999 3px solid;
        padding: 35px 10px 10px 10px;
        width: 1400px;
        height: auto;
        position: absolute;
        word-spacing: 5px; /*ระยะห่างข้อความ*/
        background-color: #ffffcc;
        color: black;
        -webkit-border-radius: 15px; /*ส่วนโค้ง*/
        -moz-border-radius: 15px; /*ส่วนโค้ง*/
        border-radius: 15px; /*ส่วนโค้ง*/
        border-color: black;
    }
    input[type=button],
    input[type=submit],
    input[type=reset] 
    {
        background-color: #ff6600;
        border: none;
        color: white;
        font-size: 25px;
        padding: 15px 25px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-border-radius: 15px; /*ส่วนโค้ง*/
        -moz-border-radius: 15px; /*ส่วนโค้ง*/
        border-radius: 15px; /*ส่วนโค้ง*/
        border: #000000 3px solid;
    }
</style>
<head>
<meta charset="UTF-8"> <!-- กำหนดภาษาของเว็บไซต์ -->
</head>
<!-- กำหนดพื้นหลังในส่วนของ body -->
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
    <form class="detail">
        <div style="font-size: 40px;color: black; text-align: center">ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</div>
        <br>
        <div style="font-size: 30px; color: black; text-align: center;background-position: center">แผนที่ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุปทุมธานี
            <br></br>
            <img src="img/Map.jpg" style="border: solid 3px black; width: 1200px; height: 500px">
            <br></br>
            .ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุจังหวัดปทุมธานี (ศพส.ปทุมธานี)
            <br>
            .บ้านผู้สูงอายุ (ปทุมธานี)
            <br>
            .มูลนิธิผู้สูงอายุบ้านปทุมธานี (ม.ผ.ส.)
            <br>
            .เลขที่ 9/1 หมู่ 2 ถนนรังสิต - นครนายก ตำบลรังสิต อำเภอธัญบุรี จังหวัดปทุมธานี 12110
            <br>
            .โทรศัพท์ : 0-2577-1958 โทรสาร : 0-2577-1815
            <br>
            .อีเมล์ : banpathum05@hotmail.com
        </div>
        <br>
        <div style="text-align: center">
            <a href="Homepage.php">
                <input type="button" value="กลับหน้าหลัก">
            </a>
        </div>
    </form>
</body>
</html>