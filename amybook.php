<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="index.php">My Book App</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page hire-me-page">
        <?php
            $BookID=$_GET['bookid'];
            $itemstock_doc = new DOMDocument();
            $itemstock_doc->preserveWhiteSpace = false;
            $itemstock_doc->load("datastore/mybooks.xml");
            $items = $itemstock_doc->documentElement;

            foreach (($itemstock_doc->childNodes)[0]->childNodes as $node)
            {
                if ($BookID == ($node->GetElementsByTagname("ID"))[0]->nodeValue){

                    $BookName = ($node->GetElementsByTagname("Title"))[0]->nodeValue;
                    $BookGenre = ($node->GetElementsByTagname("Genre"))[0]->nodeValue;
                    $BookDescription = ($node->GetElementsByTagname("Description"))[0]->nodeValue;
                    $BookReadStatus = ($node->GetElementsByTagname("ReadState"))[0]->nodeValue;
                    $BookFavStatus = ($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue;

                }

            }
            
        ?>
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading">
                    <h2>Hire Me</h2>
                </div>
                <form action="editBook.php?bookid=<?php echo $BookID; ?>" method="post" class="needs-validation">
                    <div class="mb-3"><label class="form-label" for="subject"  >Book Status</label><select class="form-select" id="subject" name="book_readstatus" value="<?php echo $BookReadStatus; ?>">
                            <option selected disabled hidden><?php echo $BookReadStatus; ?></option>
                            <option value="Read">Read</option>
                            <option value="Reading">Reading</option>
                            <option value="ToBeRead">To read</option>
                        </select></div>
                    <div class="mb-3"><label class="form-label" for="subject">Book favorite</label><select class="form-select" id="subject" name="book_favstatus" value="<?php echo $BookFavStatus; ?>">
                            <option selected disabled hidden><?php echo $BookFavStatus; ?></option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select></div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $BookName; ?></h4>
                                <h6 class="text-muted card-subtitle mb-2"><?php echo $BookGenre; ?></h6>
                                <p class="card-text"><?php echo $BookDescription; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6 button"><input class="btn btn-primary d-block w-100" name="add" value="SAVE" type="submit"></input></div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>