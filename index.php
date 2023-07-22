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
                                      <th scope="col">Email Address</th>
                                      <th scope="col">Phone No.</th>
                                      <th scope="col">Present Address</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>mdo</td>
                                      <td>mdo</td>
                                      <td>mdo</td>
                                    </tr>
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

                            <!-- START: FORM -->
            <form action="" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
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
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <select class="form-select" aria-label="">
                              <option value="1">Please Select the Status</option>
                              <option value="1">Active</option>
                              <option value="0">InActive</option>
                            </select>
                        </div>
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
    ?>
    

    
<?php include "footer.php";?>