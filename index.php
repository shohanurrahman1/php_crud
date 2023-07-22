<?php include "header.php";?>
<?php include "topbar.php";?>

    <?php  
        $do = isset($_GET['do']) ? $_GET['do'] : "Manage";

        if ( $do == "Manage" ) { ?>
            
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-center py-5">Manage All Students</h1>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered">
                                  <thead class="table-dark">
                                    <tr>
                                      <th scope="col">#Sl.</th>
                                      <th scope="col">Full Name</th>
                                      <th scope="col">Fathers Name</th>
                                      <th scope="col">Mothers Name</th>
                                      <th scope="col">Email Address</th>
                                      <th scope="col">Phone No.</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Join Date</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>

                                  <tbody>

                                    <?php  
                                        $read_sql = "SELECT * FROM students";
                                        $read_data = mysqli_query($db, $read_sql);
                                        $i = 0;

                                        while ($row = mysqli_fetch_assoc($read_data)) {
                                            $id             = $row['id'];
                                            $fullname       = $row['fullname'];
                                            $father         = $row['father'];
                                            $mother         = $row['mother'];
                                            $email          = $row['email'];
                                            $phone          = $row['phone'];
                                            $status         = $row['status'];
                                            $address        = $row['address'];
                                            $join_date      = $row['join_date'];
                                            $i++;
                                            ?>
                                            <tr>
                                              <th scope="row"><?php echo $i; ?></th>
                                              <td><?php echo $fullname; ?></td>
                                              <td><?php echo $father; ?></td>
                                              <td><?php echo $mother; ?></td>
                                              <td><?php echo $email; ?></td>
                                              <td><?php echo $phone; ?></td>
                                              <td><?php echo $address; ?></td>
                                              <td><?php echo $status; ?></td>
                                              <td><?php echo $join_date; ?></td>
                                              <td>
                                                <div class="action-btn">
                                                    <ul>
                                                        <li>
                                                            <a href="index.php?do=Edit&e_id=<?php echo $id;?>"><i class="fa-regular fa-pen-to-square edit"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-trash-can trash"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- START: MODAL -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                                                <!-- END: MODAL -->
                                              </td>
                                            </tr>
                                        <?php }
                                    ?>
                                    
                                  </tbody>
                                </table>
                            </div>

                            <!-- START: TABLE -->
                            
                            <!-- END: TABLE -->
                        </div>
                    </div>
                </div>
            </section>

        <?php }

        else if ( $do == "Add" ) { ?>
            <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                            <h1 class="text-center pb-5">Register new Student Info</h1>

                            <!-- START: FORM -->
                            <form action="index.php?do=Store" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="name">Full Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required autocomplete="off" >
                                            <div class="invalid-feedback">
                                              Please enter full name.
                                            </div>
                                        </div>

                                       <div class="mb-3">
                                        <label for="fname">Fathers Name</label>
                                        <input type="text" name="father" id="fname" class="form-control" required autocomplete="off" >
                                        <div class="invalid-feedback">
                                          Please enter fathers name.
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="mname">Mothers Name</label>
                                        <input type="text" name="mother" id="mname" class="form-control" required autocomplete="off" >
                                        <div class="invalid-feedback">
                                          Please enter mothers name.
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="email">Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control" required autocomplete="off" >
                                        <div class="invalid-feedback">
                                          Please enter email address.
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="phone">Phone No.</label>
                                        <input type="tel" name="phone" id="phone" class="form-control" required autocomplete="off" >
                                        <div class="invalid-feedback">
                                          Please enter phone no.
                                        </div>
                                      </div>

                                      <div class="mb-3">
                                        <label for="">Status</label>
                                        <select class="form-select" name="status" aria-label="">
                                          <option value="1">Please Select the Status</option>
                                          <option value="1">Active</option>
                                          <option value="0">InActive</option>
                                        </select>
                                      </div>

                                    </div>

                                    <div class="col-lg-6">                                        
                                        <div class="mb-3">
                                            <label for="">Present Address</label>
                                            <textarea name="address" id="editor1" class="form-control" required autocomplete="off" cols="30" rows="3"></textarea>
                                            <div class="invalid-feedback">
                                              Please enter your address.
                                            </div>
                                        </div>                                          

                                        <div class="mb-3">
                                            <div class="d-grid gap-2">
                                              <input type="submit" name="add" class="btn btn-success" value="Register New Student">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END: FORM -->
                        </div>
                    </div>
                </div>
            </section>
        <?php }

        else if ( $do == "Store" ){
            if (isset($_POST['add'])) {

                $name       = mysqli_real_escape_string($db, $_POST['name']);     
                $father     = mysqli_real_escape_string($db, $_POST['father']);     
                $mother     = mysqli_real_escape_string($db, $_POST['mother']);     
                $email      = mysqli_real_escape_string($db, $_POST['email']);     
                $phone      = mysqli_real_escape_string($db, $_POST['phone']);     
                $status     = mysqli_real_escape_string($db, $_POST['status']);     
                $address    = mysqli_real_escape_string($db, $_POST['address']);   

                $add_sql = "INSERT INTO students (fullname, father, mother, email, phone, status, address, join_date) VALUES ( '$name', '$father', '$mother', '$email', '$phone', '$status', '$address', now() )";   
                $add_data = mysqli_query ( $db, $add_sql );

                if ($add_data) {
                    header("Location: index.php?do=Manage");
                }
                else {
                    die("mysqli_error" . mysqli_error($db));
                }

            } 
        }

        else if ( $do == "Edit" ){
            if (isset($_GET['e_id'])) {
                $edit_id = $_GET['e_id'];

                $edit_sql = "SELECT * FROM students WHERE id='$edit_id'";
                $edit_query = mysqli_query($db, $edit_sql);

                while ($row = mysqli_fetch_assoc($edit_query)) {
                    $id             = $row['id'];
                    $fullname       = $row['fullname'];
                    $father         = $row['father'];
                    $mother         = $row['mother'];
                    $email          = $row['email'];
                    $phone          = $row['phone'];
                    $status         = $row['status'];
                    $address        = $row['address'];
                    ?>
                    <section class="py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">

                                    <h2 class="text-center pb-5">Edit <span style="color: green;"><?php echo $fullname; ?></span> info <i class="fa-solid fa-user-pen"></i></h2>

                                    <!-- START: FORM -->
                                    <form action="index.php?do=Update" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="name">Full Name</label>
                                                    <input type="text" name="name" id="name" class="form-control" required autocomplete="off" value="<?php echo $fullname; ?>">
                                                    <div class="invalid-feedback">
                                                      Please enter full name.
                                                    </div>
                                                </div>

                                               <div class="mb-3">
                                                <label for="fname">Fathers Name</label>
                                                <input type="text" name="father" id="fname" class="form-control" required autocomplete="off" value="<?php echo $father; ?>">
                                                <div class="invalid-feedback">
                                                  Please enter fathers name.
                                                </div>
                                              </div>

                                              <div class="mb-3">
                                                <label for="mname">Mothers Name</label>
                                                <input type="text" name="mother" id="mname" class="form-control" required autocomplete="off" value="<?php echo $mother; ?>">
                                                <div class="invalid-feedback">
                                                  Please enter mothers name.
                                                </div>
                                              </div>

                                              <div class="mb-3">
                                                <label for="email">Email Address</label>
                                                <input type="email" name="email" id="email" class="form-control" required autocomplete="off" value="<?php echo $email; ?>">
                                                <div class="invalid-feedback" >
                                                  Please enter email address.
                                                </div>
                                              </div>

                                              <div class="mb-3">
                                                <label for="phone">Phone No.</label>
                                                <input type="tel" name="phone" id="phone" class="form-control" required autocomplete="off" value="<?php echo $phone; ?>">
                                                <div class="invalid-feedback">
                                                  Please enter phone no.
                                                </div>
                                              </div>

                                              <div class="mb-3">
                                                <label for="">Status</label>
                                                <select class="form-select" name="status" aria-label="">
                                                  <option>Please Select the Status</option>
                                                  <option value="1" <?php if ( $status ==1 ){echo "selected";} ?>>Active</option>
                                                  <option value="0" <?php if ( $status ==0 ){echo "selected";} ?>>InActive</option>
                                                </select>
                                              </div>
                                            </div>

                                            <div class="col-lg-6">                                        
                                                <div class="mb-3">
                                                    <label for="">Present Address</label>
                                                    <textarea name="address" id="editor1" class="form-control" required autocomplete="off" cols="30" rows="3"><?php echo $address; ?></textarea>
                                                    <div class="invalid-feedback">
                                                      Please enter your address.
                                                    </div>
                                                </div>                                          

                                                <div class="mb-3">
                                                    <div class="d-grid gap-2">
                                                      <input type="hidden" name="up_id" value="<?php echo $id; ?>">
                                                      <input type="submit" name="update" class="btn btn-success" value="Update Student">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END: FORM -->
                                </div>
                            </div>
                        </div>
                    </section>
                <?php }
            }
        }

        else if ( $do == "Update" ){
            if (isset($_POST['update'])) {
                $up_id      = mysqli_real_escape_string($db, $_POST['up_id']);     
                $name       = mysqli_real_escape_string($db, $_POST['name']);     
                $father     = mysqli_real_escape_string($db, $_POST['father']);     
                $mother     = mysqli_real_escape_string($db, $_POST['mother']);     
                $email      = mysqli_real_escape_string($db, $_POST['email']);     
                $phone      = mysqli_real_escape_string($db, $_POST['phone']);     
                $status     = mysqli_real_escape_string($db, $_POST['status']);     
                $address    = mysqli_real_escape_string($db, $_POST['address']); 

                $update_sql = "UPDATE students SET fullname='$name', father='$father', mother='$mother', email='$email', phone='$phone', status='$status', address='$address' WHERE id='$up_id' ";   
                $update_data = mysqli_query ( $db, $update_sql );

                if ($update_data) {
                    header("Location: index.php?do=Manage");
                }
                else {
                    die("mysqli_error" . mysqli_error($db));
                }
            }
        }

        else if ( $do == "Trash" ){
            
        }

        else if ( $do == "Delete" ){
            
        }
    ?>
    

    
<?php include "footer.php";?>