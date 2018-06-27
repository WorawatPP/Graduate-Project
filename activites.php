<html>
<script>
    /* ขยายภาพเมื่อคลิกเม้า */
    var nW, nH, oH, oW;
    function zoomToggle(iWideSmall, iHighSmall, iWideLarge, iHighLarge, whichImage) {
        oW = whichImage.style.width;
        oH = whichImage.style.height;
        if ((oW == iWideLarge) || (oH == iHighLarge)) {
            nW = iWideSmall;
            nH = iHighSmall;
        } else {
            nW = iWideLarge;
            nH = iHighLarge;
        }
        whichImage.style.width = nW;
        whichImage.style.height = nH;
    }
</script>
</style>
<script type="text/javascript">
    /* ข้อความขึ้นเมื่อเลื่อนเม้าส์ไปชี้ */
    var theObj = "";
    function toolTip(text, me) 
    {
        theObj = me;
        theObj.onmousemove = updatePos;
        document.getElementById('toolTipBox').innerHTML = text;
        document.getElementById('toolTipBox').style.display = "block";
        window.onscroll = updatePos;
    }
    function updatePos() 
    {
        var ev = arguments[0] ? arguments[0] : event;
        var x = ev.clientX;
        var y = ev.clientY;
        diffX = 0;
        diffY = 0;
        document.getElementById('toolTipBox').style.top = y - 2 + diffY + document.body.scrollTop + "px";
        document.getElementById('toolTipBox').style.left = x - 2 + diffX + document.body.scrollLeft + "px";
        theObj.onmouseout = hideMe;
    }
    function hideMe() {
        document.getElementById('toolTipBox').style.display = "none";
    }
</script>
<style>
    th,
    td 
    {
        border: 1px solid black;
        border-collapse: collapse;
    }
    legend {
        font-weight: bold;
        font-size: 30px;
        color: #000000;
    }
    .detail 
    {
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
<body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center">
    <form class="detail">
        <meta charset="UTF-8"> <!-- กำหนดภาษาเว็บไซต์ -->
        <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title> <!-- กำหนดชื่อในส่วนหัวของเว็บไซต์ -->
        <div style="font-size: 30px;color: black;"> <!-- กำหนดขนาดฟอนต์และสีฟอนต์ -->
            <p style="text-indent: 20px; font-size: 40;text-align: center"> กิจกรรมและบริจาค
            </p>
            การรับบริจาคสิ่งของ
            <hr size="6" color="black" width="100%">สิ่งของที่ทางศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุต้องการรับบริจาค
            <br>
            <span id="toolTipBox" width="200"></span>
            <br>1.อาหารสำเร็จรูป
            <br>
            <img src="img/F.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);"> <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/F1.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);"> <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <span id="toolTipBox" width="200"></span>
            <br>2.ยาสามัญ
            <br>
            <img src="img/M.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);"> <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/me.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);"> <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <span id="toolTipBox" width="200"></span>
            <br>3.อุปกรณ์การแพทย์
            <br>
            <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/MM.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);">
            <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/MM1.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);">
            <span id="toolTipBox" width="200"></span>
            <br>4.หนังสือ
            <br>
            <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/B.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);">
            <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/B1.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);">
            <br>5.ของใช้ต่างๆ เช่น เสื้อผ้า อุปกรณ์ทำความสะอาด
            <br>
            <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/cl.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);">
            <!-- เรียกรูปและใช้ฟังก์ชันคลิ๊กเพื่อขยายภาพ -->
            <img src="img/Cleaning.jpg" style="border: solid 2px black; height: 180px;width: 200px" onclick="zoomToggle('200','180','300px','320px',this);"
                onmouseover="toolTip('คลิ๊กขยายภาพ',this);">
            <br>
            <br> การเข้าร่วมกิจกรรม
            <hr size="6" color="black" width="100%">การเข้าร่วมกิจกรรมกับศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สุงอายุสามารถทำกิจกรรมได้ดังนี้
            <br>
            <div style="text-align: center;background-position: center">
                <br>
                <img src="img/port.jpg" style="border: solid 2px black; height: 500px;width: 1200px">
                <img src="img/port1.jpg" style="border: solid 2px black; height: 500px;width: 1200px">
            </div>
            <br>1.เข้าร่วมกิจกรรมเลี้ยงอาหารกลางวัน
            <br>2.กิจกรรมการแสดงและสังสรรค์กับผู้สูงอายุ
            <br>3.อื่นๆ
            <br>
            <div style="text-align: center">
                <!-- กำหนดลิงค์เมื่อกดปุ่มบริจาคและเข้าร่วมกิจกรรม -->
                <a href="activites1.php">
                    <input type="button" value="บริจาคและเข้าร่วมกิจกรรม">
                </a>
                <!-- กำหนดลิงค์เมื่อกดปุ่มกลับหน้าหลัก -->
                <a href="Homepage.php">
                    <input type="button" value="กลับหน้าหลัก">
                </a>
            </div>
        </div>
    </form>
</body>
</html>