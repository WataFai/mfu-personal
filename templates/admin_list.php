<?php
      include('h.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                //1. เชื่อมต่อ database:
                include('condbmb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_member:
                $query = "SELECT * FROM member ORDER BY UserID ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
                // $row_am = mysqli_fetch_assoc($result);

?>
      
<html>
  <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>admin list</title>
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
          <link rel = "stylesheet" href = "userinfo.css" type = "text/css" />
          <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
          <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script> 
          <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.4/fetch.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <style>
            .btn-default {
            background-color: #FFF;
            color: #8c1515;
            border: 1px solid #8c1515;
            border-radius: 5px;
            }.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open>.dropdown-toggle.btn-default {
            background: #8c1515;
            color: #FFF;
            border: 1px solid #FFF;
            border-radius: 5px;
            }
            body,  
            h1, h2, h3, h4, h5, h6,  
            .main-nav a,
            .subscribe-button,
            .page-title,
            .post-meta,
            .read-next-story .post:before,
            .pagination,
            .site-footer,
            [class^="icon-"]:before, [class*=" icon-"]:before {
                font-family:'Athiti', sans-serif;
            }
            html,body {
            width: 100%;
            margin: 0;
            padding: 0;
            height: auto;
            overflow-x: hidden;
            font-family: 1rem;
            }
            #header {
              /* padding-left: 2.5em;
              padding-top: 2.0em;
              padding-bottom: 2.5em; */
              color: white;
              /* box-shadow: 0px 2px 3px rgba(0,0,0,.2); */
              position: relative;
              z-index: 99;
            }
            #header h1 {
              font-size: 3.0em;
              letter-spacing: 5px;
              padding-left: 2em;
              padding-top: .5em
            }
            #header h2 {
              letter-spacing: 5px;
              font-size: 1.5em;
              padding-left: 4em;
            }
              #header img {
              float: left;
              width: 140px;
              height: 135px;
              padding-right: 1.0em;
            }
            a#btnLink {
              margin-top: 1em;
            }
            .nav-pills .nav-link.active {
              color: white;
              background-color: #262626;
            }
            .nav-link{
              color: white;
            }
            nav.nav a:hover {
              color: #8c1515 !important;
              background: white !important;
            }
            td {
             text-align: center;
             }
             th {
             text-align: center;
             }
    </style>
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



   </head>

   <body>
   <section class="hero is-small is-bold" style="background-color: #8c1515 " >
    <nav class="nav nav-pills nav justify-content-end" style="background-color: #8c1515">
      <a class="nav-link"href="admin.php">Home</a>
      <a class="nav-link"href="admin.php">admin page</a>
    </nav>

    <div class="hero-body">
    <div class="container-fluid" id="header">
      <header>
        <img src="../pic/Logo-23rd-MFU-768x768.png" alt="logo">
        <h1> Personnel Division MFU</h1>
        <h2>ส่วนการเจ้าหน้าที่ มหาวิทยาลัยแม่ฟ้าหลวง</h2>
      <!-- <h4 class="title has-text-white" style="padding-top: 1.5em">
        ค้นหารายการสั่งซื้อ / Search order
      </h4> -->
    </header>
    </div>
  </div>
</section>

      <div style="margin:15px; padding:15px; ">
      <table border="1" class="table is-fullwidth" id="employee_table" align="center" >
      <thead align="center" >
      <input type="text" name="search" id="search" class="form-control" placeholder="Search for..">
        <tr>    
        <!-- <th>UserID</th> -->
        <th>ID</th>
        <th>Password</th>
        <th>ชื่อ-สกุล</th>
        <th>สถานะ</th>
        <th>แก้ไขข้อมูลสมาชิก</th>
        <th>ลบข้อมูล</th>
        <!-- <th>show info</th> -->
        <!-- <th>start date</th> -->
      </tr>
      </thead>

  <?php while ($row =  mysqli_fetch_assoc($result)) { ?>
  
    <tr>
      <!-- <td><?php echo $row['UserID']; ?></td> -->
      <td><?php echo $row['ID']; ?></td>
      <td ><?php echo $row['Password']; ?></td>
      <td ><?php echo $row['Name']; ?></td>
      <td ><?php echo $row['Status']; ?></td>
      <td><a href="admin.php?act=edit&ID=<?php echo $row['ID']; ?>"> <img src="../pic/draw.png" width="32" height="32"></a> </td>
        <td><a href="admin_del_db.php?ID=<?php echo $row['ID']; ?>" class='btn btn-danger btn-xs'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
        <!-- <td><a href="admin_page.php?ID=<?php echo $row['ID']; ?>" class="btn btn-warning btn-xs"> show info</a> </td> -->
      <!-- <td ><?php echo $row['Startdate']; ?></td> -->
    </tr>

    <?php }  ?>
  
    </table> 
    <body>
  </div>
  </html>