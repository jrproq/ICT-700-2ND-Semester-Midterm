<link rel="icon" href="application/assets/image/favicon.ico">


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #d7dee6;
        overflow: hidden;
    }

    ::selection {
        background: rgba(26, 188, 156, 0.3);
    }

    .container {
        max-width: 440px;
        padding: 0 20px;
        margin: 170px auto;
    }

    .wrapper {
        width: 100%;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
    }

    .wrapper .title {
        height: 90px;
        /* Adjusted gradient for a darker, more dynamic background */
        background: linear-gradient(135deg, #017ca5, #015d75);
        border-radius: 5px 5px 0 0;
        color: #fff;
        font-size: 34px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        text-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
    }

    /* Adjusted hover effect for the title to align with the darker theme */
    .wrapper .title:hover {
        background: #015276;
    }

    .wrapper form {
        padding: 30px 25px 25px 25px;
    }

    .wrapper form .row {
        height: 45px;
        margin-bottom: 20px;
        position: relative;
    }

    .wrapper form .row input {
        height: 100%;
        width: 100%;
        outline: none;
        padding-left: 60px;
        border-radius: 5px;
        border: 1px solid lightgrey;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    form .row input:focus {
        border-color: #016d9c;
        box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
    }

    form .row input::placeholder {
        color: #999;
    }

    .wrapper form .row i {
        position: absolute;
        width: 47px;
        height: 100%;
        color: #fff;
        font-size: 18px;
        background: #016d9c;
        border: 1px solid #016d9c;
        border-radius: 5px 0 0 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .wrapper form .pass {
        margin: px 0 20px 0;
    }

    .wrapper form .pass a {
        color: #016d9c;
        font-size: 17px;
        text-decoration: none;
    }

    .wrapper form .pass a:hover {
        text-decoration: underline;
    }

    .wrapper form .button input {
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        padding-left: 0px;
        background: #016d9c;
        border: 1px solid #016d9c;
        cursor: pointer;
        margin-top: 10px;
    }

    form .button input:hover {
        background: #015276;

    }

    .wrapper form .signup-link {
        text-align: center;
        margin-top: 20px;
        font-size: 17px;
    }

    .wrapper form .signup-link a {
        color: #016d9c;
        text-decoration: none;
    }

    form .signup-link a:hover {
        text-decoration: underline;
    }

    .warning {
        color: red;
        display: block;
        /* Ensure it's displayed as a block-level element */
    }

    .error-message {
        color: #D8000C;
        background-color: #FFD2D2;
        border: 1px solid #D8000C;
        padding: 10px 20px;
        margin: 20px 0;
        width: 365px;
        max-width: 440px;

        border-radius: 5px;
        font-size: 16px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        position: fixed;
        /* Use fixed positioning */
        top: 45%;
        /* Adjusted to move up towards the middle between username and password */
        left: 50%;
        /* Center horizontally */
        transform: translate(-50%, -50%);
        /* Adjust to perfectly center */
        z-index: 1000;
        /* Ensure it's above other content */
        animation: fadeOut 5s forwards;
        /* Animation named fadeOut, lasts 5 seconds */
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            visibility: hidden;
        }
    }
</style>
<title>Icontrack</title>
<link rel="icon" href="application/assets/image/favicon.ico">
<script src="<?= base_url('application/assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('application/assets/js/popper.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.bundle.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.bundle.js.map') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.bundle.min.js.map') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.js.map') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.min.js.map') ?>"></script>
<script>
    // Function to show the error message and hide it after 5 seconds
    function showError(message) {
        const errorMessage = document.querySelector('.error-message');
        errorMessage.textContent = message; // Set the error message text
        errorMessage.style.display = 'block'; // Make the error message visible

        // Wait for 5 seconds, then hide the error message
        setTimeout(() => {
            errorMessage.style.display = 'none';
        }, 5000); // Matches the animation duration
    }

    // Example usage
    showError('An error occurred, please try again.');
</script>
<script>
    showError('An error occurred, please try again.');
</script>