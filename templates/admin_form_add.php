<?php include('h.php');?>
<form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3" align="right"> ID</div>
            <div class="col-sm-5" align="left">
              <input  name="ID" type="Varchar" required class="form-control" id="ID" placeholder="ID" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3" align="right"> Password  </div>
            <div class="col-sm-5" align="left">
              <input  name="Password" type="Varchar" required class="form-control" id="Password" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="right"> Name </div>
            <div class="col-sm-5" align="left">
              <input  name="Name" type="Varchar" required class="form-control" id="Name" placeholder="Name" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3" align="right"> Status </div>
            <div class="col-sm-5" align="left">
              <!-- <input  name="Status" type="enum" required class="form-control" id="Status" placeholder="Status" /> -->
              <select class="custom-select" style="width :300px" name="Status" id="Status" required>
              <option value="ADMIN">ADMIN</option>
              <option value="USER">USER</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-5" align="right">
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
        </form>