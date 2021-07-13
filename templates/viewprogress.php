<html>
<head>
    <?php
    error_reporting( error_reporting() & ~E_NOTICE );
    $con=mysqli_connect("localhost","root","12345","user-registration");
 
    $sql ="select * from adminpage";
    $result=$con->query($sql);
    
    $ID = mysqli_real_escape_string($con,$_GET['ID']);
    
   $sql = "SELECT * FROM adminpage WHERE ID ='$ID' ";
   $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

    ?>
      <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Progress</title>
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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.4/fetch.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <link rel = "stylesheet" href = "admin_page.css" type = "text/css" />
      <title>Member</title>

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
</head>

    <body background="https://www.flipnational.org/wp-content/uploads/2018/03/CAE-Website-Full-Background-Texture1902x1200-9.jpg" 
    width ="100vw" height ="100vh">
  <div id="app">
  <section class="hero is-small is-bold" style="background-color: #8c1515 " >
    <nav class="nav nav-pills nav justify-content-end" style="background-color: #8c1515">
      <a class="nav-link"href="login.html">Home</a>
      <a class="nav-link" href="user_page.php">information</a>
      <!-- <a class="nav-link " href="progress.php">Progress</a> -->
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
<br>      
    <section>
    <div class="col">
    <div class ="table-responsive">
    <table class border="1px solid black" align="CENTER" cellpadding=15 id = "info" > 
        <tbody align="CENTER" >
          <tr cellpadding=15>
            <!-- <th rowspan="2">ID</th> -->
            <!-- <th rowspan="2">ID</th> <th rowspan="2">ชื่อ-สกุล</th> <th rowspan="2">ยื่นขอตำแหน่ง</th> <th rowspan="2">ในสาขาวิชา</th>  -->
            <!-- <th rowspan="2">รหัสสาขาวิชา</th> <th rowspan="2">อนุสาขาวิชา</th> <th rowspan="2">รหัสอนุสาขาวิชา</th>  -->
            <th rowspan="2">ยื่นขอตำแหน่ง</th>
            <th rowspan="2" >วันที่คณะกรรมการ<br>สำนักวิชาอนุมัติ</th> <th rowspan="2">วันที่ประชุม<br>อนุกรรมการ</th> 
            <th colspan ="3" >สภาวิชาการ</th> <th colspan ="3" >คณะกรรมการพิจารณา <br>กำหนดตำแหน่งทางวิชาการ(ก.พ.ว.)</th>
            <th rowspan="2">วันที่ส่งเอกสาร<br>ให้reader<br>ประเมินผลงาน</th> <th colspan ="3">Reader ส่งผลการประเมินกลับมายังกจน.แล้ว</th>
            <th colspan ="3" >สภาวิชาการ</th>
            <th colspan ="3">สภามหาวิทยาลัย</th> <th colspan ="3">คำสั่งแต่งตั้ง</th>
          </tr>
          
          <tr cellpadding=15>
            <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
            <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
            <td> reader1 </td> <td> reader2 </td> <td> reader3</td>
            <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
            <td> Status </td> <td> ครั้งที่</td> <td> วันที่</td>
            <td> เลขที่ </td> <td> ลงวันที่</td> <td> มีผลตั้งแต่วันที่</td>
          </tr>
          <tr>
          <?php
            while ($rows=mysqli_fetch_array($result))
              {
          ?> 
                <tr>
                  <!-- <td><?php echo $rows['UserID']; ?></td> -->
                  <!-- <td><?php echo $rows['ID']; ?></td> -->
                  <!-- <td><?php echo $rows['Name']; ?></td> -->
                  <!-- <td><?php echo $rows['position']; ?></td> -->
                  <!-- <td><?php echo $rows['Subject']; ?></td> -->
                  <!-- <td><?php echo $rows['Codesubject']; ?></td> -->
                  <!-- <td><?php echo $rows['anu']; ?></td> -->
                  <!-- <td><?php echo $rows['codeanu']; ?></td> -->
                  <td><?php echo $rows['position']; ?></td>
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
                  <td><?php echo $rows['Passaca1']; ?></td>
                  <td><?php echo $rows['numaca1']; ?></td>
                  <td><?php echo $rows['dateaca1']; ?></td>
                  <td><?php echo $rows['Passuc']; ?></td>
                  <td><?php echo $rows['numuc']; ?></td>
                  <td><?php echo $rows['dateuc']; ?></td>
                  <td><?php echo $rows['numcm']; ?></td>
                  <td><?php echo $rows['datecm']; ?></td>
                  <td><?php echo $rows['usedatecm']; ?></td>

                </tr>
          <?php 
              }
          ?>  
        </tbody>
        </table>
        </div>
        </div>
    </section>
  </body>

  <!-- <footer align="center" > -->
        <!-- <div style="margin:10px; padding:10px; "> -->
            <!-- <div class="col-sm-12 text-center" > -->
                <!-- <a class="btn btn-default btn-sm" href="login.html" aria-disabled="true" id="btnLink" >log out</a> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </footer > -->
</html>

