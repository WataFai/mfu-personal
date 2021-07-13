<?php 
error_reporting( error_reporting() & ~E_NOTICE );
$con=mysqli_connect("localhost","root","12345","user-registration");

// $sql ="select * from member";
// $result=$con->query($sql);

$ID = mysqli_real_escape_string($con,$_GET['ID']);

$sql = "SELECT * FROM member WHERE ID ='$ID' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);

// extract($row);


?>


<form  name="admin" action="admin_form_edit_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3" align="right"> ID</div>
            <div class="col-sm-5" align="left">
              <input name="ID" type="varchar" required class="form-control" id="ID" placeholder="ID" value="<?php echo $row['ID']; ?>" />
              <input type="hidden" name="hID" value="<?php echo ID; ?>" />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"> Password  </div>
            <div class="col-sm-5" align="left">
              <input  name="Password" type="varchar" required class="form-control" id="Password" placeholder="password" value="<?php echo $row['Password']; ?>"/>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="right"> Name </div>
            <div class="col-sm-5" align="left">
              <input  name="Name" type="varchar" required class="form-control" id="Name" placeholder="Name" value="<?php echo $row['Name']; ?>" />
            </div>
          </div>

          <!-- <div class="form-group"> -->
            <!-- <div class="col-sm-3" align="right"> Status </div> -->
            <!-- <div class="col-sm-5" align="left"> -->
              <!-- <select class="custom-select" style="width :300px" name="Status" id="Status" required> -->
              <!-- <option value="ADMIN">ADMIN</option> -->
              <!-- <option value="USER">USER</option> -->
              <!-- </select> -->
            <!-- </div> -->
          <!-- </div> -->
          
          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-5" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
        </form>