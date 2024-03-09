<link rel="stylesheet" href="<?= base_url('application/assets/css/bootstrap.css') ?>">

<style>
.navbar-brand {
    font-family: "poppins";
    font-weight: bold;
}
</style>
<section id = 'content'>

  <div class= "container-fluid mt-5">
    <div class="container shadow-lg p-4">
        <h3>List of Students</h3>
        <a class= "btn btn-primary" href="<?= site_url('students/add') ?>">Add New Students</a>

        <div class= "mt-2">
          <table class="table">
            <thead>
              <tr>
                    <th>Student Number</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Final Grade</th>
                    <th>Midterm Grade</th>


                    <th>Education Level</th>
              </tr>
            </thead>

            <tbody>
                <?php
                 foreach($students as $user):
                
                ?>
                <tr>
                    <td><?= $user->student_no ?></td>
                    <td><?= $user->last_name ?></td>
                    <td><?= $user->first_name ?></td>
                    <td><?= $user->middle_name ?></td>
                    <td><?= $user->final_grade ?></td>
                    <td><?= $user->midterm_grade ?></td>
                    <td><?= $user->education_level?></td>

                    <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
                </tr>
                 <?php endforeach; ?>
            </tbody>
          </table>
        </div>
    
   
    </div>
  </div> 
</section>



<script src="<?= base_url('application/assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('application/assets/js/popper.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.js') ?>"></script>