<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-6014421001</title>
</head>
<body>
    <h1>ระบบนำเสนอหัวข้อโครงงาน</h1>
    <form action = "project_data.php" method = "get">
       
      <fieldset id = "sect1">
       <legend>ส่วนที่1 ข้อมูลผู้จัดทำโครงงาน</legend>
        <label for = "sid">รหัสนักศึกษา</label><input type = "text" name = "sid">
        <label for = "fname">ชื่อ</label><input type = "text" name = "fname">
        <label for = "lname">นามสกุล</label><input type = "text" name = "lname">
        <br>
        <br>
        <label for = "programe">สาขาวิชา</label>
        <select name = "programe">
            <option value = "1">วิทยาการคอมพิวเตอร์</option>
            <option value = "2">เทคโนโลยีสารสนเทศ</option>
            <option value = "3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
            <option value = "4">ภูมิสารสนเทศ</option>
            <option value = "5">คอมพิวเตอร์ศึกษา</option>
        </select>
        <label for = "faculty">คณะ</label>
        <select name = "faculty">
            <option value = "1">วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>
            <option value = "2">ครุศาสตร์</option>
        </select>
        <label for = "std_year">ชั้นปี</label>
        <input type = "radio" name = "std_year" value = "1"><label>ปี 1</label>
        <input type = "radio" name = "std_year" value = "2"><label>ปี 2</label>
        <input type = "radio" name = "std_year" value = "3"><label>ปี 3</label>
        <input type = "radio" name = "std_year" value = "4"><label>ปี 4</label>
        <input type = "radio" name = "std_year" value = "5"><label>ปี 5</label>
       </fieldset>
       
       <fieldset id = "sect2">
        <legend>ส่วนที่2 ข้อมูลโครงงาน</legend>
         <label for = "prj_name_th" >ชือโครงงาน(ภาษาไทย)</label><input type = "textarea" name = "prj_name_th"> <br>
         <label for = "prj_name_en" >ชือโครงงาน(ภาษาอังกฤษ)</label><input type = "textarea" name = "prj_name_en"><br>
         <label for = "prj_type">ประเภทโครงงาน</label>
         <select name = "prj_type">
             <option value = "1">เกมส์</option>
             <option value = "2">โปรแกรมเดสก์ทอป</option>
             <option value = "3">โปรแกรมมือถือ</option>
         </select><br>
         <label for = "prj_tool">เครื่องมือที่ใช้ในการพัฒนา</label>
         <input type = "checkbox" name = "prj_tool[]" value = "1"><label>HTML</label>
         <input type = "checkbox" name = "prj_tool[]" value = "2"><label>CSS</label>
         <input type = "checkbox" name = "prj_tool[]" value = "3"><label>JavaScript</label>
         <input type = "checkbox" name = "prj_tool[]" value = "4" ><label>Bootstrap</label>
         <input type = "checkbox" name = "prj_tool[]" value = "5"><label>Material_Design</label>
         <input type = "checkbox" name = "prj_tool[]" value = "6"><label>Angular</label>
         <input type = "checkbox" name = "prj_tool[]" value = "7"><label>React</label>
         <input type = "checkbox" name = "prj_tool[]" value = "8"><label>PHP</label>
         <input type = "checkbox" name = "prj_tool[]" value = "9"><label>MySQL</label>
         <input type = "checkbox" name = "prj_tool[]" value = "10"><label>ChartJS</label><br>
         <label name = "prj_advisor" >อาจารย์ที่ปรึกษา</label>
         <select name = "prj_advisor">
                <option value = "1">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
                <option value = "2">ผศ.ทิพย์วรรณ ฟู่เฟื่อง</option>
         </select>
    </fieldset>
    <input type = "submit" value = "Go...">
    </form>
</body>
</html>
