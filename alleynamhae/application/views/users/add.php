<form action="<?= site_url('users/add')?>" method="post">

    <div class="container mt-5">
        <div class="card shadow - lg p-3">

            <div class= "text-danger">
                <?php if(validation_errors()): ?>
                    <p><?= validation_errors()?></p>
                <?php endif?>
            </div>

                 <div class="form">
        
                <div class="form-group">
                    <label for="">Employee Number</label> 
                    <input class="form-control" type="text" name="emp_no" id="">
                </div>

                <div class="form-group">
                    <label for="">Last Name</label> 
                    <input class="form-control" type="text" name="last_name" id="">
                </div>

                <div class="form-group">
                    <label for="">First Name</label> 
                    <input class="form-control" type="text" name="first_name" id="">
                </div>
                    
                <div class="form-group">
                    <label for="">Middle Name</label> 
                    <input class="form-control" type="text" name="middle_name" id="">
                </div>
                
                <div class="form-group">
                    User level
                    <select name="form-control" name="user_level" id="">
                        <option value="">User Level</option>
                        <option value="1">IT Admin</option>
                        <option value="2">Admin</option>
                        <option value="3">User</option>
                    </select>
                </div>
           
            </div>
             <input class="btn btn-primary" type="submit" value="Register">
        </div>
    </div>


      
  
    
</form> 