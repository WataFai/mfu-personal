<html>
    <head>
        <?php
          error_reporting( error_reporting() & ~E_NOTICE );
          session_start();
          if($_SESSION['UserID'] == "")
          {
            echo "Please Login!";
            exit();
          }

          if($_SESSION['Status'] != "ADMIN")
          {
            echo "This page for Admin only!";
            exit();
          }	
          
          $con=mysqli_connect("localhost","root","12345","user-registration");
          
          $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
          $objQuery = mysqli_query($con,$strSQL);
          $objResult = mysqli_fetch_array($objQuery);
          
          $sql ="SELECT * from adminpage WHERE UserID = '".$objResult['UserID']."' ";
          $result=$con->query($sql);

        ?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>ADMIN</title>

    </head>

  <body background="https://www.flipnational.org/wp-content/uploads/2018/03/CAE-Website-Full-Background-Texture1902x1200-9.jpg" width ="100vw" height ="100vh">
        <!-- <div class="jumbotron jumbotron-fluid text-center">
          <div class="container-fluid">
          <h2>Administrator</h2>
          </div>
        </div> -->

    <link rel = "stylesheet" href = "admin_page.css" type = "text/css" />
    <img src="../pic/Administrator.png">
  

  <div class="col">
  <div class ="table-responsive">
  <table class border="1" align="CENTER" cellpadding=1 id = "info" >
    <tbody align="CENTER" id = "info" >
      <tr id = "info">
        <th rowspan="2">ID</th><th rowspan="2">ชื่อ-สกุล</th> <th rowspan="2">ยื่นขอตำแหน่ง</th> <th rowspan="2">ในสาขาวิชา</th> 
        <th rowspan="2">รหัสสาขาวิชา</th> <th rowspan="2">อนุสาขาวิชา</th> <th rowspan="2">รหัสอนุสาขาวิชา</th> 
        <th rowspan="2">วันที่คณะกรรมการ<br>สำนักวิชาอนุมัติ</th> <th rowspan="2">วันที่ประชุม<br>อนุกรรมการ</th> 
        <th colspan ="3">สภาวิชาการ</th> <th colspan ="3" >คณะกรรมการพิจารณา <br>กำหนดตำแหน่งทางวิชาการ(ก.พ.ว.)</th>
        <th rowspan="2">วันที่ส่งเอกสาร<br>ให้reader<br>ประเมินผลงาน</th> <th colspan ="3">Reader ส่งผลการประเมินกลับมายังกจน.แล้ว</th>
        <th colspan ="3">สภามหาวิทยาลัย</th> <th colspan ="3">คำสั่งแต่งตั้ง</th><th rowspan="2">start date</th> <th rowspan ="2">EDIT</th>
      </tr>

      <tr id = "info">
        <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
        <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
        <td> reader1 </td> <td> reader2 </td> <td> reader3</td>
        <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
        <td> เลขที่ </td> <td> ลงวันที่</td> <td> มีผลตั้งแต่วันที่</td>
      </tr>

      <?php
        while ($rows=mysqli_fetch_array($result))
          {
      ?> 
            <tr>
              <td><?php echo $rows['UserID']; ?></td>
              <td><?php echo $rows['ID']; ?></td>
              <td><?php echo $rows['position']; ?></td>
              <td><?php echo $rows['Subject']; ?></td>
              <td><?php echo $rows['Codesubject']; ?></td>
              <td><?php echo $rows['anu']; ?></td>
              <td><?php echo $rows['codeanu']; ?></td>
              <td><?php echo $rows['approvebyaca']; ?></td>
              <td><?php echo $rows['anumeeting']; ?></td>
              <td><?php echo $rows['Passaca']; ?></td>
              <td><?php echo $rows['numaca']; ?></td>
              <td><?php echo $rows['dateaca']; ?></td>
              <td><?php echo $rows['Passboard']; ?></td>
              <td><?php echo $rows['numboard']; ?></td>
              <td><?php echo $rows['dateboard']; ?></td>
              <td><?php echo $rows['senddoc']; ?></td>
              <td><?php echo $rows['Passreader1']; ?></td>
              <td><?php echo $rows['Passreader2']; ?></td>
              <td><?php echo $rows['Passreader3']; ?></td>
              <td><?php echo $rows['Passuc']; ?></td>
              <td><?php echo $rows['numuc']; ?></td>
              <td><?php echo $rows['dateuc']; ?></td>
              <td><?php echo $rows['numcm']; ?></td>
              <td><?php echo $rows['datecm']; ?></td>
              <td><?php echo $rows['usedatecm']; ?></td>
              <td><?php echo $rows['Startdate']; ?></td>

              <td><a href='admin_form.php?UserID=<?php echo $rows['UserID']; ?>'>edit</a></td>

            </tr>
      <?php 
          }
      ?>  
    </tbody>
  </table>
  </div>
  </div>
  
</body>
</html>


