<?php
      include('h.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('condbmb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_member:
                $query = "SELECT *
                FROM adminpage
                -- RIGHT JOIN member
                -- ON member.ID = adminpage.ID;
                " 
                or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                //$row_am = mysqli_fetch_assoc($result);
                // print_r($row_am)
                ?>

<html>
    
        <head>
            <title>Userinfo_list</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <!-- <link rel="stylesheet" href="/static/styles/bootstrap.min.css"> -->
            <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet"> -->
            <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
            <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
            <!-- <link rel="stylesheet" href="/static/styles/style.css">
            <script src="/static/scripts/jquery-3.3.1.min.js"></script>
            <script src="/static/scripts/bootstrap.min.js"></script>
            <script src="/static/scripts/bootbox.min.js"></script> -->
            <!-- Automatically provides/replaces `Promise` if missing or broken. -->
            <link rel = "stylesheet" href = "userinfo.CSS" type = "text/css" />
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
            <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script> 
            <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.4/fetch.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            
        <script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#employee_table tbody tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                        });  
                   }  
              });  
        </script>  
        <style>
            #myInput {
                    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
                    background-position: 10px 12px; /* Position the search icon */
                    background-repeat: no-repeat; /* Do not repeat the icon image */
                    width: 100%; /* Full-width */
                    font-size: 16px; /* Increase font-size */
                    padding: 12px 20px 12px 40px; /* Add some padding */
                    border: 1px solid #ddd; /* Add a grey border */
                    margin-bottom: 12px; /* Add some space below the input */
                    }
            </style>     
        </head>

        

    <body>
        <!-- <div class ="table-responsive"> -->
        
        <table border="1" class="table is-fullwidth" id="employee_table" align="center" >
        
        <thead id="employee_table" align="center" >
        <input type="text" name="search" id="search" class="form-control" placeholder="Search for..">
            <tr>
            <!-- <th rowspan="2">UserID</th> -->
            <th rowspan="2">ID</th><th rowspan="2">ชื่อ-สกุล</th> 
            <th rowspan="2">สำนักวิชา</th> <th rowspan="2">ขอตำแหน่ง</th> 
            <!-- <th rowspan="2">ยื่นขอตำแหน่ง</th> <th rowspan="2">ในสาขาวิชา</th>  -->
            <!-- <th rowspan="2">รหัสสาขาวิชา</th> <th rowspan="2">อนุสาขาวิชา</th> <th rowspan="2">รหัสอนุสาขาวิชา</th>  -->
            <!-- <th rowspan="2">วันที่คณะกรรมการ<br>สำนักวิชาอนุมัติ</th> <th rowspan="2">วันที่ประชุม<br>อนุกรรมการ</th>  -->
            <!-- <th colspan ="3">สภาวิชาการ</th> <th colspan ="3" >คณะกรรมการพิจารณา <br>กำหนดตำแหน่งทางวิชาการ(ก.พ.ว.)</th> -->
            <!-- <th rowspan="2">วันที่ส่งเอกสาร<br>ให้reader<br>ประเมินผลงาน</th> <th colspan ="3">Reader ส่งผลการประเมินกลับมายังกจน.แล้ว</th> -->
            <!-- <th colspan ="3">สภามหาวิทยาลัย</th> <th colspan ="3">คำสั่งแต่งตั้ง</th> -->
            <th>วันเริ่มทำงาน</th>
            <!-- <th>วันปัจจุบัน</th> -->
            <th>จำนวนวันที่ปฏิบัติงาน</th>
            <th>จำนวนวันที่ดำเนินการ</th>
            <th>view</th>
            <th rowspan="2">แก้ไข</th>
          </tr>

          <!-- <tr cellpadding=2> -->
            <!-- <th> Status </th> <th> ครั้งที่</th> <th> วันที่</th> -->
            <!-- <th> Status </th> <th> ครั้งที่</th> <th> วันที่</th> -->
            <!-- <th> reader1 </th> <th> reader2 </th> <th> reader3</th> -->
            <!-- <th> Status </th> <th> ครั้งที่</th> <th> วันที่</th> -->
            <!-- <th> เลขที่ </th> <th> ลงวันที่</th> <th> มีผลตั้งแต่วันที่</t> -->
<!--              -->
          <!-- </tr> -->
            
  </thead>
  <?php while ($row =  mysqli_fetch_assoc($result)) { 
    ?>
  
  <tr>
    <!-- <td><?php echo $row['UserID']; ?></td> -->
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Nameschool']; ?></td>
    <td ><?php echo $row['position']; ?></td>
    <!-- <td ><?php echo $row['Subject']; ?></td> -->
    <!-- <td ><?php echo $row['Codesubject']; ?></td> -->
    <!-- <td ><?php echo $row['anu']; ?></td> -->
    <!-- <td ><?php echo $row['codeanu']; ?></td> -->
    <!-- <td ><?php echo $row['approvebyaca']; ?></td> -->
    <!-- <td ><?php echo $row['anumeeting']; ?></td> -->
    <!-- <td ><?php echo $row['Passaca']; ?></td> -->
    <!-- <td ><?php echo $row['numaca']; ?></td> -->
    <!-- <td ><?php echo $row['dateaca']; ?></td> -->
    <!-- <td ><?php echo $row['Passboard']; ?></td> -->
    <!-- <td ><?php echo $row['numboard']; ?></td> -->
    <!-- <td ><?php echo $row['dateboard']; ?></td> -->
    <!-- <td ><?php echo $row['senddoc']; ?></td> -->
    <!-- <td ><?php echo $row['Passreader1']; ?></td> -->
    <!-- <td ><?php echo $row['Passreader2']; ?></td> -->
    <!-- <td ><?php echo $row['Passreader3']; ?></td> -->
    <!-- <td ><?php echo $row['Passuc']; ?></td> -->
    <!-- <td ><?php echo $row['numuc']; ?></td> -->
    <!-- <td ><?php echo $row['dateuc']; ?></td> -->
    <!-- <td ><?php echo $row['numcm']; ?></td> -->
    <!-- <td ><?php echo $row['datecm']; ?></td> -->
    <!-- <td ><?php echo $row['usedatecm']; ?></td> -->
    <td><?php echo $row['Startdate']; ?></td>
    <td><?php 
    $datetime1 = date_create($row['Startdate']);
    $datetime2 = date_create($row['currentdate']);
      
    // calculates the difference between DateTime objects
    $interval = date_diff($datetime1, $datetime2);
      
    // printing result in days format
    echo $interval->format('%y ปี %m เดือน %d วัน' );
    ?></td>
      <td><?php 
      $datetime1 = date_create($row['Startdate']);
      $datetime2 = date_create($row['approvebyaca']);
        
      // calculates the difference between DateTime object
      $interval = date_diff($datetime1, $datetime2);
        
      // printing result in days format
      echo $interval->format('%y ปี %m เดือน %d วัน' );
      ?></td>
          <td> 
          <a href="view.php?act=edit&ID=<?php echo $row["ID"]; ?>">
          <img src="../pic/draw.png" width="32" height="32">
          </a>
          </td>
    <td>
          <a href="admin_form.php?act=edit&ID=<?php echo $row["ID"]; ?>">
          <img src="../pic/draw.png" width="32" height="32">
          </a>
    </td>
  </tr>
      
    
  <?php }  ?>
    </table> 
  </body>
  </html>