<style>
    body {
        background-color: #010812;
        font-family: 'Poppins', sans-serif;
    }

    /* This design is for the Table */

    .table-container {
        display: flex;
        justify-content: center;
    }

    .box-container {
        /* Add border styling */
        border-radius: 10px;
        background-color: #DADFDE;

        margin: 20px;

        /* Set a fixed height */
        height: 70vh;
        /* flex: 1; */
        max-height: 70vh;

        overflow-y: auto;
        /* Add a vertical scrollbar if content overflows */
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }


    td {
        border: 1px solid #91A09D;
        padding: 8px;
        text-align: left;
    }

    th,
    .table_header {
        background-color: #70a8f7;
        position: sticky;
        top: 0;
        border-left: 1px solid #91A09D;
        border-right: 1px solid #91A09D;
        padding: 8px;
        text-align: center;
    }

    @media (max-width: 600px) {
        .box-container {
            margin: 10px;
        }

        th,
        td {
            font-size: 12px;
        }
    }

    .table_header {
        margin-bottom: 0;
    }

    /* End of Table Design */

    /* This design is for the Navbar */

    .nav-item a:hover .gthub-img {
        transform: scale(1.25);
    }

    .navbar-nav li.nav-item a.nav-link:hover {
        color: #497eff;
    }

    @media (min-width: 992px) {
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-item:hover {
            color: #497eff;
            background-color: white;
        }
    }

    /* End of Navbar Design */

    .btn-primary {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        border-radius: 50px;
        width: 50px;
        color: #000000;
        background-color: #004AAD;
    }

    .navbar-brand {
        font-weight: bold;
        /* Set the font weight to bold */
    }

    .flashdata {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
        padding: 0.75rem 1.25rem;
        position: relative;
        /* Change position to relative */
        z-index: 2;
        /* Set a higher z-index to ensure it appears above the table */
        top: 50px;
        left: 50%;
        transform: translateX(-50%);
        border: 1px solid transparent;
        border-radius: 0.25rem;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;

        /* Center the text horizontally */
        text-align: center;

        /* Set width to match the width of the table container */
        width: calc(100% - 40px);
        /* Adjust if necessary */
    }

    .table-container {
        display: flex;
        justify-content: center;
        position: relative;
        /* Change position to relative */
        z-index: 1;
        /* Set a lower z-index to ensure it appears below the flash data */
    }
</style>
<section id="navbar">
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="<?= site_url('dashboard/index') ?>">This is a NavBar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('dashboard/index') ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('users/index') ?>">User</a>
                </li>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Add
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= site_url('users/add') ?>">User</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</section>

<?php if ($this->session->flashdata('success')) : ?>
    <div class="flashdata">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>


<div class="table-container" id="user-table-container">
    <div class="box-container">
        <table class="table">
            <!-- Here's the table header -->
            <thead>
                <th colspan="8">

                    <h2 class="table_header">User's Table</h2>
                </th>
                <tr>

                    <th>ID</th>
                    <th>Employee Number</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>User Level</th>
                    <th>Options</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($users as $user) :
                ?>
                    <!-- Here's the table datas (td) -->
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->employee_no ?></td>
                        <td><?= $user->firstName ?></td>
                        <td><?= $user->middleName ?></td>
                        <td><?= $user->lastName ?></td>
                        <td><?= $user->userLevel ?></td>
                        <td><a href="<?php echo base_url('users/edit' . $user->id) ?>">Edit</a> | <a href="<?php echo base_url('users/delete' . $user->id) ?>">Delete</a></td>
                        <td><button type="button" class="btn btn-danger confirm-delete" value="<?= $user->id; ?>">Confirm
                                Delete</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>