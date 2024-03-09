<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        /* Use Roboto font */
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
</style>

<section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="<?= site_url('dashboard/index') ?>"> NavBar</a>
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
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('students/index') ?>">Students</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
<section id="jumbotron">
    <div class="jumbotron">
        <h1 class="display-4">Hello, iCONS!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
            to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</section>