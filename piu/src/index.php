<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous" defer></script>
    
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    
    <link href="styles.css" rel="stylesheet">
    <link href="components/footer.css" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="img-nav-logo" src="images/tastebuds.png">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex mx-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search"></i>
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button type="button" class="btn btn-dark">Sign In</button>
                    </li>
                    <li class="nav-item ms-3">
                        <button type="button" class="btn btn-outline-dark">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section>
            <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade"  data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2500">
                        <img src="images/image10.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="images/image11.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2500">
                        <img src="images/image12.png" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column bd-highlight align-items-lg-end content-align">
                            <h2><strong>Find awesome new recipes</strong></h2>
                            <div class="bd-highlight">Impress your peers with your</div>
                            <div class="bd-highlight">awesome new dishes!</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/findRecipes.jpg" class="d-block w-75 h-100" alt="...">
                    </div>
                </div>
                <hr class="mt-5">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <img src="images/shareRecipes.jpg" class="d-block float-end w-75 h-100" alt="...">
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex flex-column bd-highlight content-align">
                            <h2><strong>Share your recipes</strong></h2>
                            <div class="bd-highlight">Share your favourite</div>
                            <div class="bd-highlight">recipes with the world!</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 text-center">
                <h1><strong>Find New Friends<strong></h3>
                <p>Connect with new people!</p>
            </div>
            <div class="row cards-homepage">
                <div class="card-group text-center">
                    <div class="col my-3 mx-3">
                        <div class="card h-100">
                            <img src="images/follow.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Follow</h5>
                                <p class="card-text">Follow people to get updates about them and the new recipes they publish!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col my-3 mx-3">
                        <div class="card h-100">
                            <img src="images/group.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Group</h5>
                                <p class="card-text">Create or join private or public groups!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col my-3 mx-3">
                        <div class="card h-100">
                            <img src="images/chat.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chat</h5>
                                <p class="card-text">Need more information? Want to know the person behind the recipe? Send them a message!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 content-red">
                <div class="col-lg-6">
                    <div class="d-flex flex-column bd-highlight align-items-lg-end p-4">
                            <strong class="fs-1">Sign Up</strong>
                            <div class="bd-highlight fs-4">Start connecting now</div>   
                    </div>
                </div>
                <div class="col-lg-6 content-align p-5">
                    <button type="button" class="btn btn-dark btn-dark-large d-block">Let's do it!</button>     
                </div>
        </section>
    </main>
    <?php include_once "components/footer.php"; ?>
</body>
</html>