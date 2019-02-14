<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
     $get_sid = $_GET["sid"]; echo " รหัสนักศึกษา : $get_sid <br>"; 
     $get_fname = $_GET["fname"]; echo "ชื่อ : $get_fname <br> "; 
     $get_lname = $_GET["lname"]; echo "นามสกุล : $get_lname <br>"; 
     $get_programe = $_GET["programe"]; echo "สาขาวิชา : $get_programe <br>";
     $get_faculty = $_GET["faculty"]; echo "คณะ : $get_faculty <br>";
     $get_std_year = $_GET["std_year"]; echo "ชั้นปี : $get_std_year <br>";
     $get_prj_name_th = $_GET["prj_name_th"]; echo "ชื่อโครงการ(ภาษาไทย) : $get_prj_name_th <br>";
     $get_prj_name_en = $_GET["prj_name_en"]; echo "ชื่อโครงการ(ภาษาอังกฤษ) : $get_prj_name_en <br>";
     $get_prj_type = $_GET["prj_type"]; echo "ประเภทโครงการ : $get_prj_type <br>";
     $get_prj_tool = $_GET["prj_tool"]; 
     $get_prj_tool_list = implode(",",$get_prj_tool);
     echo "เครื่องมือที่ใช้ในการพัฒนา : $get_prj_tool_list <br>";
     $get_prj_advisor = $_GET["prj_advisor"]; echo "อาจารย์ที่ปรึกษา : $get_prj_advisor";
     
    ?>
</body>
</html>