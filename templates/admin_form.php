<meta charset="UTF-8">
<?php

error_reporting( error_reporting() & ~E_NOTICE );
 $con=mysqli_connect("localhost","root","12345","user-registration");
 
 $sql ="select * from adminpage";
 $result=$con->query($sql);
 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
 
$sql = "SELECT * FROM adminpage WHERE ID ='$ID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);


?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>USER</title>
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

<body background="https://www.flipnational.org/wp-content/uploads/2018/03/CAE-Website-Full-Background-Texture1902x1200-9.jpg" width ="100vw" height ="100vh">
<div id="app">
  <section class="hero is-small is-bold" style="background-color: #8c1515 " >
    <nav class="nav nav-pills nav justify-content-end" style="background-color: #8c1515">
      <a class="nav-link"href="login.html">Home</a>
      <a class="nav-link" href="admin.php">admin page</a>
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
<form action="admin_edit.php" method="post" name="updateuser" id="updateuser">
  <!-- <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" id= "info"> -->
    <!-- <tr> -->
      <!-- <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>แก้ไขข้อมูล</b></td> -->
    <!-- </tr> -->
    <div class="container"  style="padding-top:2em">
    <main class="col" id="mainbody">
        <div class="content">

        <div class="row mt-3" style="font-weight:bold;">
            <div class="form-group col-10 col-sm-6 ">   
                <div class="row mt-2">
                    <div>
        <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
        <label for="ID">ID </label>
        <label class="space"> : </label>
        <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="ID" 
         name="ID" value="<?php echo $row['ID']; ?>">
        <input type="hidden" name="hID" value="<?php echo ID; ?>" />
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="Startdate">วันเริ่มทำงาน </label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="Startdate" 
                 name="Startdate" value="<?php echo $row['Startdate']; ?>">
                <input type="hidden" name="hStartdate" value="<?php echo Startdate; ?>" />
                            </div>
                        </div>
                    </div>

              <div class="form-group col-10 col-sm-6 ">   
                      <div class="row mt-2">
                          <div>
              <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                      <label for="Nameschool">สำนักวิชา </label>
                      <label class="space"> : </label>
                      <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Nameschool" 
                       name="Nameschool" value="<?php echo $row['Nameschool']; ?>">
                      <input type="hidden" name="hNameschool" value="<?php echo Nameschool; ?>" />
                      </div>
                  </div>
              </div>
        </div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="position">ยื่นขอตำแหน่ง </label>
                <label class="space"> : </label>
                <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="position" 
                 name="position" value="<?php echo $row['position']; ?>">
                <input type="hidden" name="hposition" value="<?php echo position; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="Subject">ในสาขาวิชา </label>
               <label class="space"> : </label>
               <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Subject" 
                name="Subject" value="<?php echo $row['Subject']; ?>">
                <input type="hidden" name="hSubject" value="<?php echo Subject; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="Codesubject">รหัสสาขาวิชา </label>
                <label class="space"> : </label>
                <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Codesubject" 
                 name="Codesubject" value="<?php echo $row['Codesubject']; ?>">
                <input type="hidden" name="hCodesubject" value="<?php echo Codesubject; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="anu">อนุสาขาวิชา</label>
               <label class="space"> : </label>
               <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="anu" 
                name="anu" value="<?php echo $row['anu']; ?>">
                <input type="hidden" name="hanu" value="<?php echo anu; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="codeanu">รหัสอนุสาขาวิชา </label>
                <label class="space"> : </label>
                <input type="int" class="form-control col-10 col-md-8" style="max-width: 450px" id="codeanu" 
                 name="codeanu" value="<?php echo $row['codeanu']; ?>">
                <input type="hidden" name="hcodeanu" value="<?php echo codeanu; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="approvebyaca">วันที่คณะกรรมการสำนักวิชาอนุมัติ</label>
               <label class="space"> : </label>
               <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="approvebyaca" 
                name="approvebyaca" value="<?php echo $row['approvebyaca']; ?>">
                <input type="hidden" name="happrovebyaca" value="<?php echo approvebyaca; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="anumeeting">วันที่ประชุมอนุกรรมการ</label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="anumeeting" 
                 name="anumeeting" value="<?php echo $row['anumeeting']; ?>">
                <input type="hidden" name="hanumeeting" value="<?php echo anumeeting; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="Passaca">สภาวิชาการ Status</label>
               <label class="space"> : </label>
               <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Passaca" 
                name="Passaca" value="<?php echo $row['Passaca']; ?>">
                <input type="hidden" name="hPassaca" value="<?php echo Passaca; ?>" />

              </div>
          </div>
      </div>
</div>


<!-- <div class="row mt-3" style="font-weight:bold;"> -->
                    <!-- <div class="form-group col-10 col-sm-6 ">    -->
                        <!-- <div class="row mt-2"> -->
                            <!-- <div> -->
<!--                  -->
                <!-- <label for="Passreader1">reader 1  </label> -->
                <!-- <label class="space"> : </label> -->
                <!-- <input type="radio" style="max-width: 450px" id="Passreader1"  -->
                 <!-- name="Passreader1" value="YES"> YES -->
                 <!-- <input type="radio" style="max-width: 450px" id="Passreader1"  -->
                  <!-- name="Passreader1" value="NO"> NO -->
                <!-- <input type="hidden" name="hPassreader1" value="<?php echo Passreader1; ?>" /> -->
                <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
              <!-- <div class="form-group col-10 col-sm-6 ">    -->
                       <!-- <div class="row mt-2"> -->
                           <!-- <div> -->
<!--                 -->
               <!-- <label for="Passreader2">reader 2</label> -->
               <!-- <label class="space"> : </label> -->
               <!-- <input type="radio" style="max-width: 450px" id="Passreader2"  -->
                <!-- name="Passreader2" value="YES"> YES -->
                <!-- <input type="radio" style="max-width: 450px" id="Passreader2"  -->
                 <!-- name="Passreader2" value="NO"> NO -->
<!--  -->
                <!-- <input type="hidden" name="hPassreader2" value="<?php echo Passreader2; ?>" /> -->
<!--  -->
              <!-- </div> -->
          <!-- </div> -->
      <!-- </div> -->
<!-- </div> -->
<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="numaca">สภาวิชาการ ครั้งที่</label>
                <label class="space"> : </label>
                <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="numaca" 
                 name="numaca" value="<?php echo $row['numaca']; ?>">
                <input type="hidden" name="hnumaca" value="<?php echo numaca; ?>" />
                </div>
    </div>
</div>
                    <div class="form-group col-10 col-sm-6 ">   
                                           <div class="row mt-2">
                                               <div>
                                   <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                                   <label for="dateaca">สภาวิชาการ วันที่</label>
                                   <label class="space"> : </label>
                                   <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="dateaca" 
                                    name="dateaca" value="<?php echo $row['dateaca']; ?>">
                                    <input type="hidden" name="hdateaca" value="<?php echo dateaca; ?>" />

                                  </div>
                              </div>
                          </div>
                    </div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="Passboard">คณะกรรมการพิจารณา กำหนดตำแหน่งทางวิชาการ(ก.พ.ว.) Status </label>
                <label class="space"> : </label>
                <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Passboard" 
                 name="Passboard" value="<?php echo $row['Passboard']; ?>">
                <input type="hidden" name="hPassboard" value="<?php echo Passboard; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="numboard">คณะกรรมการพิจารณา กำหนดตำแหน่งทางวิชาการ(ก.พ.ว.) ครั้งที่</label>
               <label class="space"> : </label>
               <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="numboard" 
                name="numboard" value="<?php echo $row['numboard']; ?>">
                <input type="hidden" name="hnumboard" value="<?php echo numboard; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="dateboard">คณะกรรมการพิจารณา กำหนดตำแหน่งทางวิชาการ(ก.พ.ว.) วันที่</label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="dateboard" 
                 name="dateboard" value="<?php echo $row['dateboard']; ?>">
                 <input type="hidden" name="hdateboard" value="<?php echo dateboard; ?>" />

                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="senddoc">วันที่ส่งเอกสารให้readerประเมินผลงาน </label>
              <label class="space"> : </label>
              <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="senddoc" 
               name="senddoc" value="<?php echo $row['senddoc']; ?>">
              <input type="hidden" name="hsenddoc" value="<?php echo senddoc; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                
                <label for="Passreader1">reader 1  </label>
                <label class="space"> : </label>
                <input type="radio" style="max-width: 450px" id="Passreader1" 
                 name="Passreader1" value="YES"> YES
                 <input type="radio" style="max-width: 450px" id="Passreader1" 
                  name="Passreader1" value="NO"> NO
                <input type="hidden" name="hPassreader1" value="<?php echo Passreader1; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               
               <label for="Passreader2">reader 2</label>
               <label class="space"> : </label>
               <input type="radio" style="max-width: 450px" id="Passreader2" 
                name="Passreader2" value="YES"> YES
                <input type="radio" style="max-width: 450px" id="Passreader2" 
                 name="Passreader2" value="NO"> NO

                <input type="hidden" name="hPassreader2" value="<?php echo Passreader2; ?>" />

                /

                <label for="Passreader3">reader 3</label>
                <label class="space"> : </label>
                <input type="radio" style="max-width: 450px" id="Passreader3" 
                 name="Passreader3" value="YES"> YES
                 <input type="radio" style="max-width: 450px" id="Passreader3" 
                  name="Passreader3" value="NO"> NO
                 <input type="hidden" name="hPassreader3" value="<?php echo Passreader3; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="Passaca1">สภาวิชาการ Status</label>
                <label class="space"> : </label>
                <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Passaca1" 
                 name="Passaca1" value="<?php echo $row['Passaca1']; ?>">
                <input type="hidden" name="hPassaca1" value="<?php echo Passaca1; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="numaca1">สภาวิชาการ ครั้งที่</label>
               <label class="space"> : </label>
               <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="numaca1" 
                name="numaca1" value="<?php echo $row['numaca1']; ?>">
                <input type="hidden" name="hnumaca1" value="<?php echo numaca1; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="dateaca1">สภาวิชาการ วันที่</label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="dateaca1" 
                 name="dateaca1" value="<?php echo $row['dateaca1']; ?>">
                <input type="hidden" name="hdateaca1" value="<?php echo dateaca1; ?>" />
                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="Passuc">สภามหาวิทยาลัย Status</label>
               <label class="space"> : </label>
               <input type="varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="Passuc" 
                name="Passuc" value="<?php echo $row['Passuc']; ?>">
                <input type="hidden" name="hPassuc" value="<?php echo Passuc; ?>" />

              </div>
          </div>
      </div>
</div>


<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->

                <label for="numuc">สภามหาวิทยาลัย ครั้งที่</label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="numuc" 
                 name="numuc" value="<?php echo $row['numuc']; ?>">
                 <input type="hidden" name="hnumuc" value="<?php echo numuc; ?>" />

                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="dateuc">สภามหาวิทยาลัย วันที่</label>
              <label class="space"> : </label>
              <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="dateuc" 
               name="dateuc" value="<?php echo $row['dateuc']; ?>">
               <input type="hidden" name="hdateuc" value="<?php echo dateuc; ?>" />

              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="numcm">คำสั่งแต่งตั้ง เลขที่ </label>
                <label class="space"> : </label>
                <input type="Varchar" class="form-control col-10 col-md-8" style="max-width: 450px" id="numcm" 
                 name="numcm" value="<?php echo $row['numcm']; ?>">
                <input type="hidden" name="hnumcm" value="<?php echo numcm; ?>" />


                </div>
    </div>
</div>
              <div class="form-group col-10 col-sm-6 ">   
                       <div class="row mt-2">
                           <div>
               <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
               <label for="datecm">คำสั่งแต่งตั้ง ลงวันที่</label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="datecm" 
                 name="datecm" value="<?php echo $row['datecm']; ?>">
                 <input type="hidden" name="hdatecm" value="<?php echo datecm; ?>" />


              </div>
          </div>
      </div>
</div>

<div class="row mt-3" style="font-weight:bold;">
                    <div class="form-group col-10 col-sm-6 ">   
                        <div class="row mt-2">
                            <div>
                <!-- <label for="txtName" class="col-10 col-sm-3">ชื่อ </label> -->
                <label for="usedatecm">คำสั่งแต่งตั้ง มีผล </label>
                <label class="space"> : </label>
                <input type="date" class="form-control col-10 col-md-8" style="max-width: 450px" id="usedatecm" 
                 name="usedatecm" value="<?php echo $row['usedatecm']; ?>">
                <input type="hidden" name="husedatecm" value="<?php echo usedatecm; ?>" />

                </div>
    </div>
</div>
</div>
<br>
      <div style="margin:10px; padding:10px; " >
      <div class="col-sm-12 text-center" >
        <input class="btn btn-default btn-sm" type="button" value="Cancel" onclick="window.location='admin.php' " /> 
        &nbsp;
        <input class="btn btn-default btn-sm" type="submit" name="Update" id="Update" value="Update" />
        </div> 
    </div>
</form>
</body>


 