
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>ศูนย์พัฒนาการจัดสวัสดิการสังคมผู้สูงอายุ</title>
        <script>
        function myFunction() {
             var x = document.getElementById("m");
                if (x.className === "topnav") {
                    x.className += " responsive";/*ย่อหน้าต่างเว็ปจนถึงขนาดที่กำหนด*/
             } else {
                    x.className = "topnav";/*ให้กลับมาขนาดเท่าเดิม*/
                     }
         }/*ย่อขยายหน้าเว็ป*/
        
        
        </script>
    <style >
         
          .topnav {
          background-color: #333;
          overflow: hidden;
          }


      .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 16px;
         }


      .active {
      background-color: #4CAF50;
      color: white;
         }/*Admin*/


      .topnav .icon {
      display: none;
         }/*ไอคอนจะแสดงเวลาย่อหน้าเว็ป*/


      .dropdown {
      float: left;
      overflow: hidden;
         }/*ให้เรียงต่อกันจากด้านซ้าย*/


      .dropdown .dropbtn {
     
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: inherit;
      margin: 0;
      font-size: 16px;
         }/*กำหนดขนาดกล่อง*/


      .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      font-size: 25px;
          }/*กล่องย่อย*/


      .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
          }/*กล่องยอ่ยเรียงแนวตั่งเวลาย่อขนาดเว็ป*/


      .topnav a:hover, .dropdown:hover .dropbtn {
      background-color: #555;
      color: white;
       border-bottom: 5px solid red;
          }/*เวลาเม้าส์อยู่ที่กล่องบนสุด*//*hover คือการดักจับเหตุการณ์*/


      .dropdown-content a:hover {
      background-color: #ddd;/*กล่องข้อความย่อยเมื่อเม้าส์ไปโดน*/
      
          }


      .dropdown:hover .dropdown-content {
      display: block;
          }


       @media screen and (max-width: 600px) {
       .topnav a:not(:first-child) {display: none;}
       .topnav a.icon {
       float: right;
       display: block;
           }
       }/*ไอคอนเวลาย่อขนาดเว็ป*/


       @media screen and (max-width: 600px) {
       .topnav.responsive {position: relative;}
       .topnav.responsive a.icon {
       position: absolute;
       right: 0;/*กำหนดรูปแบบเมนูเวลาย่อขนาดเว็ปให้ย้ายไอคอนอยู่บนสุด*/
       top: 0;
         }
       .topnav.responsive a {
       float: none;
       display: block;
       text-align: left;/*ตำปหน่งกล่องย่อยเวลาย่อขนาด*/
          }
      .topnav.responsive .dropdown {float: none;}
      .topnav.responsive .dropdown-content {position: relative;}
      .topnav.responsive .dropdown .dropbtn {
       display: block;
       width: 100%;
       text-align: left;
        }/*กล่องย่อยเรียงกันเมื่อย่อเว็ป*/
}
             
        
             </style> 
       
        
    </head>
    <body style="background-image: url(img/bbb1.jpg); background-repeat:repeat;background-attachment:fixed;background-position: center"  >
        
    <div class="topnav" id="m">
                 <a href="#home" class="active">Admin</a>
  
    <div class="dropdown">
                  <button class="dropbtn">แก้ไขข้อมูล 
                  <i class="fa fa-caret-down"></i>
                  </button>
    <div class="dropdown-content">
                  <a href="EmpforAdminTable.php">จัดการข้อมูลพนักงาน</a>
                  <a href="TableforAdminOld.php">จัดการข้อมูลผู้สูงอายุ</a>
                  <a href="TableAdmin3PM.php">จัดการข้อมูลสิ่งของบริจาค</a>
                  <a href="TableAdmin3M.php">จัดการข้อมูลยา</a>
                  <a href="hotnewshow.php">จัดการข้อมูลข่าว</a>
    </div>
    </div> 
    <div class="dropdown">
                  <button class="dropbtn">เบิกสิ่งของบริจาคและยา 
                  <i class="fa fa-caret-down"></i>
                  </button>
    <div class="dropdown-content">
                  <a href="Medicine.php">เบิกยา</a>
                  <a href="Product.php">เบิกสิ่งของบริจาค</a>
        
    </div>
    </div> 
    <div class="dropdown">
                  <button class="dropbtn">ยืนยันกิจกรรม 
                  <i class="fa fa-caret-down"></i>
                  </button>
    <div class="dropdown-content">
                  <a href="forAdmin4.php">ยืนยันการจองคิวและบริจาค</a>
        
        
    </div>
    </div> 
    <div class="dropdown">
                  <button class="dropbtn">ตรวจสอบข้อมูลแพทย์นัดพบ
                  <i class="fa fa-caret-down"></i>
                  </button>
    <div class="dropdown-content">
                   <a href="forAdmin7.php">ข้อมูลแพทย์นัดพบ</a>
        
        
    </div>
    </div> 
    <div class="dropdown">
                  <button class="dropbtn">ค้นหาข้อมูลผู้สูงอายุ 
                  <i class="fa fa-caret-down"></i>
                  </button>
    <div class="dropdown-content">
                   <a href="forAdmin8.php">ข้อมูลผู้สูงอายุ</a>
        
        
    </div>
    </div> 
  
  
  
  
  
                    <a href="Homepage.php">กลับหน้าหลัก</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
        
        
        
        
        
        
        
        
    </body>
</html>
