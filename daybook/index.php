<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="bst/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 border-bottom">
                    <h4>DayBook</h4>
                </div>
            </div>
            <form method="post" action="process_registration.php">
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4 card mt-2">
                       <h5 class="text-center">Register Here</h5>
                       <div class="form-group mt-2">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                        
                       </div>
                       <div class="form-group mt-2">
                        <label>Mobile</label>
                        <input type="text" name="phone" class="form-control" placeholder="Mobile" required>
                        
                       </div>
                       <div class="form-group mt-2">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        
                       </div>
                       <div class="form-group">
                        <label for="reg_number">Registration Number</label>
                        <input type="text" id="reg_number" name="reg_number" required>
                        
                       </div>
                       <div class="form-group">
                        
                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        </select>
                        
                       </div> 
                       <div class="form-group">

                        <label for="course">Course:</label>
                        <input type="text" id="course" name="course" required>
                        </div>
                       <input  type="submit" class="btn btn-primary" value="Register"><br>
                       <a href="view.php" class="btn btn-primary">view</a>
                </div>
                <div class="col-4">

                </div>
            </div>
            </form>
        </div>
    </body>
</html>