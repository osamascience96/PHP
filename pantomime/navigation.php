<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/pantomime/assignment.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="/pantomime/allstars.php">All Stars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pantomime/allshows.php">All Shows</a>
            </li>
        </ul>
        <form class="d-flex" action="/pantomime/search.php" method="post">
            <input class="form-control me-2" name="search_star" type="search" placeholder="Search Star" aria-label="Search" required>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
</nav>