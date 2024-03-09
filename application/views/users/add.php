<link rel="stylesheet" href="<?= base_url('application/assets/css/bootstrap.css') ?>">

<style>
    :root {
        /*===== Colores =====*/
        --first-color: #1A73E8;
        --input-color: #80868B;
        --border-color: #DADCE0;
        /*===== Fonts configuration =====*/
        --body-font: 'Poppins', sans-serif;
        --normal-font-size: 1rem;
        --small-font-size: .75rem;
    }

    body {
        font-family: var(--body-font);
        font-size: var(--normal-font-size);
        background-color: #010812;
    }


    /* Start of the Design of Forms */

    /*===== BASE =====*/
    *,
    ::before,
    ::after {
        box-sizing: border-box;
    }


    /*===== FORM =====*/
    .l-form {
        display: flex;
        justify-content: center;
        align-items: center;

    }

    .form {
        width: 360px;
        padding: 2rem 2rem;
        border-radius: 10px;
        background-color: whitesmoke;
        margin-top: 20px;
    }

    .form__title {
        font-weight: bold;
        margin-bottom: 2rem;
    }

    .form__div {
        position: relative;
        height: 52px;
        margin: .5rem 0;
    }

    .form__input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: var(--normal-font-size);
        border: 2px solid var(--border-color);
        border-radius: 0.5rem;
        outline: none;
        padding: 1rem;
        background: none;
        z-index: 1;
    }

    .form__label {
        position: absolute;
        left: 1rem;
        top: 1rem;
        padding: 0 0.25rem;
        background-color: whitesmoke;
        color: var(--input-color);
        font-size: var(--normal-font-size);
        transition: 0.3s;
    }

    .form__button {
        display: block;
        margin-left: auto;
        padding: 0.75rem 2rem;
        outline: none;
        border: none;
        background-color: var(--first-color);
        color: #fff;
        font-size: var(--normal-font-size);
        border-radius: 0.25rem;
        cursor: pointer;
        transition: 0.3s;
    }

    .form__button:hover {
        background-color: #104D9D;
    }

    /*Input focus move up label*/
    .form__input:focus+.form__label {
        top: -0.5rem;
        left: 0.8rem;
        color: var(--first-color);
        font-size: var(--small-font-size);
        font-weight: 500;
        z-index: 10;
    }

    /*Input focus sticky top label*/
    .form__input:not(:placeholder-shown).form__input:not(:focus)+.form__label {
        top: -0.5rem;
        left: 0.8rem;
        z-index: 10;
        font-size: var(--small-font-size);
        font-weight: 500;
    }

    /*Input focus*/
    .form__input:focus {
        border: 2px solid var(--first-color);
    }

    .error {
        color: red;
        font-size: .7em;
    }

    .flashdata {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    /* End of Forms Design */
</style>

<!-- warning/ form validation, error checker -->

<!-- Actual Formr -->



<div class="l-form">
    <form action="<?= site_url('users/add') ?>" class="form" method="post">


        <h5 class="form__title" style="text-align: center;">User's Information</h5>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">User Level</label>
            </div>
            <select name="user_level" class="custom-select" id="inputGroupSelect01">
                <option value="">Choose...</option>
                <option value="admin">Admin</option>
                <option value="it_admin">IT Admin</option>
                <option value="teacher">Teacher</option>
            </select>
        </div>
        <div class="error">
            <?php echo form_error('user_level'); ?>
        </div>
        <!-- Employee Number -->
        <div class="form__div">
            <input type="text" name="employee_no" class="form__input" placeholder=" ">
            <label for="" class="form__label">Employee Number</label>
        </div>
        <div class="error">
            <?php echo form_error('employee_no'); ?>
        </div>

        <!-- First Name -->

        <div class="form__div">
            <input type="text" name="first_name" class="form__input" placeholder=" ">
            <label for="" class="form__label">First Name</label>
        </div>
        <div class="error">
            <?php echo form_error('first_name'); ?>
        </div>
        <!-- Middle Name -->
        <div class="form__div">
            <input type="text" name="middle_name" class="form__input" placeholder=" ">
            <label for="" class="form__label">Middle Name</label>
        </div>
        <div class="error">
            <?php echo form_error('middle_name'); ?>
        </div>
        <!-- Last Name -->
        <div class="form__div">
            <input type="text" name="last_name" class="form__input" placeholder=" ">
            <label for="" class="form__label">Last Name</label>
        </div>
        <div class="error">
            <?php echo form_error('last_name'); ?>
        </div>
        <input type="submit" class="btn btn-primary" value="Register">
    </form>
</div>


<script src="<?= base_url('application/assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('application/assets/js/popper.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.js') ?>"></script>