<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">My Book App</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarNav"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item"></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>My book app</h2>
                </div>
                <h2>Book's I'm Reading</h2>
                <div class="row">
                    <?php
                        $itemstock_doc = new DOMDocument();
                        $itemstock_doc->preserveWhiteSpace = false;
                        $itemstock_doc->load("datastore/mybooks.xml");
                        $items = $itemstock_doc->documentElement;

                        $books = array();
                        foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
                            $books[] = array(
                                'id'             => (string)($node->GetElementsByTagname("ID"))[0]->nodeValue,
                                'title'          => (string)($node->GetElementsByTagname("Title"))[0]->nodeValue,
                                'genre'          => (string)($node->GetElementsByTagname("Genre"))[0]->nodeValue,
                                'description'    => (string)($node->GetElementsByTagname("Description"))[0]->nodeValue,
                                'readstatus'     => (string)($node->GetElementsByTagname("ReadState"))[0]->nodeValue,
                                'favstatus'      => (string)($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue
                               );
                        }

                        array_multisort(array_column($books, 'genre'), SORT_ASC, $books);

                        foreach ($books as $node)
                            {
                                $BID = $node['id'];
                                $BName = $node['title'];
                                $BGenre = $node['genre'];
                                $BDescription = $node['description'];
                                $BReadStatus = $node['readstatus'];
                                $BFavStatus = $node['favstatus'];

                                if ( $BReadStatus == "Reading"){

                                    echo "<div class=\"col\">\n";
                                    echo "<div class=\"card\">\n";        
                                    echo "<div class=\"card-body\">\n";
                                    echo "<h4 class=\"card-title\">{$BName}</h4>\n";
                                    echo "<h6 class=\"text-muted card-subtitle mb-2\">{$BGenre}</h6>\n";
                                    echo "<p class=\"card-text\">{$BDescription}</p><a class=\"card-link\" href=\"amybook.php?bookid={$BID}\">Link</a>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";

                                }
                                
                            }
                    ?>
                </div>
            </div>
            <div class="container">
                <div class="heading"></div>
                <h2>Books to read</h2>
                <div class="row">
                <?php
                        $itemstock_doc = new DOMDocument();
                        $itemstock_doc->preserveWhiteSpace = false;
                        $itemstock_doc->load("datastore/mybooks.xml");
                        $items = $itemstock_doc->documentElement;
                        
                        $books = array();
                        foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
                            $books[] = array(
                                'id'             => (string)($node->GetElementsByTagname("ID"))[0]->nodeValue,
                                'title'          => (string)($node->GetElementsByTagname("Title"))[0]->nodeValue,
                                'genre'          => (string)($node->GetElementsByTagname("Genre"))[0]->nodeValue,
                                'description'    => (string)($node->GetElementsByTagname("Description"))[0]->nodeValue,
                                'readstatus'     => (string)($node->GetElementsByTagname("ReadState"))[0]->nodeValue,
                                'favstatus'      => (string)($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue
                               );
                        }

                        array_multisort(array_column($books, 'genre'), SORT_ASC, $books);

                        foreach ($books as $node)
                            {
                                $BID = $node['id'];
                                $BName = $node['title'];
                                $BGenre = $node['genre'];
                                $BDescription = $node['description'];
                                $BReadStatus = $node['readstatus'];
                                $BFavStatus = $node['favstatus'];

                                if ( $BReadStatus == "ToBeRead"){

                                    echo "<div class=\"col\">\n";
                                    echo "<div class=\"card\">\n";        
                                    echo "<div class=\"card-body\">\n";
                                    echo "<h4 class=\"card-title\">{$BName}</h4>\n";
                                    echo "<h6 class=\"text-muted card-subtitle mb-2\">{$BGenre}</h6>\n";
                                    echo "<p class=\"card-text\">{$BDescription}</p><a class=\"card-link\" href=\"amybook.php?bookid={$BID}\">Link</a>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";

                                }
                                
                            }
                    ?>
                </div>
            </div>
            <div class="container">
                <div class="heading"></div>
                <h2>Books Read</h2>
                <div class="row">
                <?php
                        $itemstock_doc = new DOMDocument();
                        $itemstock_doc->preserveWhiteSpace = false;
                        $itemstock_doc->load("datastore/mybooks.xml");
                        $items = $itemstock_doc->documentElement;

                        $books = array();
                        foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
                            $books[] = array(
                                'id'             => (string)($node->GetElementsByTagname("ID"))[0]->nodeValue,
                                'title'          => (string)($node->GetElementsByTagname("Title"))[0]->nodeValue,
                                'genre'          => (string)($node->GetElementsByTagname("Genre"))[0]->nodeValue,
                                'description'    => (string)($node->GetElementsByTagname("Description"))[0]->nodeValue,
                                'readstatus'     => (string)($node->GetElementsByTagname("ReadState"))[0]->nodeValue,
                                'favstatus'      => (string)($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue
                               );
                        }

                        array_multisort(array_column($books, 'genre'), SORT_ASC, $books);

                        foreach ($books as $node)
                            {
                                $BID = $node['id'];
                                $BName = $node['title'];
                                $BGenre = $node['genre'];
                                $BDescription = $node['description'];
                                $BReadStatus = $node['readstatus'];
                                $BFavStatus = $node['favstatus'];

                                if ( $BReadStatus == "Read"){

                                    echo "<div class=\"col\">\n";
                                    echo "<div class=\"card\">\n";        
                                    echo "<div class=\"card-body\">\n";
                                    echo "<h4 class=\"card-title\">{$BName}</h4>\n";
                                    echo "<h6 class=\"text-muted card-subtitle mb-2\">{$BGenre}</h6>\n";
                                    echo "<p class=\"card-text\">{$BDescription}</p><a class=\"card-link\" href=\"amybook.php?bookid={$BID}\">Link</a>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";

                                }
                                
                            }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <section class="portfolio-block website gradient">
        <div class="container">
            <div class="heading"></div>
            <h2>My favorite books</h2>
            <div class="row">
                <?php
                        $itemstock_doc = new DOMDocument();
                        $itemstock_doc->preserveWhiteSpace = false;
                        $itemstock_doc->load("datastore/mybooks.xml");
                        $items = $itemstock_doc->documentElement;

                        $books = array();
                        foreach (($itemstock_doc->childNodes)[0]->childNodes as $node){
                            $books[] = array(
                                'id'             => (string)($node->GetElementsByTagname("ID"))[0]->nodeValue,
                                'title'          => (string)($node->GetElementsByTagname("Title"))[0]->nodeValue,
                                'genre'          => (string)($node->GetElementsByTagname("Genre"))[0]->nodeValue,
                                'description'    => (string)($node->GetElementsByTagname("Description"))[0]->nodeValue,
                                'readstatus'     => (string)($node->GetElementsByTagname("ReadState"))[0]->nodeValue,
                                'favstatus'      => (string)($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue
                               );
                        }

                        array_multisort(array_column($books, 'genre'), SORT_ASC, $books);

                        foreach ($books as $node)
                            {
                                $BID = $node['id'];
                                $BName = $node['title'];
                                $BGenre = $node['genre'];
                                $BDescription = $node['description'];
                                $BReadStatus = $node['readstatus'];
                                $BFavStatus = $node['favstatus'];


                                if ( $BFavStatus == "yes"){

                                    echo "<div class=\"col\">\n";
                                    echo "<div class=\"card\">\n";        
                                    echo "<div class=\"card-body\">\n";
                                    echo "<h4 class=\"card-title\" style=\"color: var(--bs-gray-dark);\">{$BName}</h4>\n";
                                    echo "<h6 class=\"text-muted card-subtitle mb-2\" style=\"color: var(--bs-gray-dark);\">{$BGenre}</h6>\n";
                                    echo "<p class=\"card-text\" style=\"color: var(--bs-gray-dark);\">{$BDescription}</p><a class=\"card-link\" href=\"#\">Link</a>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";

                                }
                                
                            }
                    ?>
            </div>
        </div>
        <div class="container">
            <div class="heading"></div>
            <h2>My recommended books</h2>
            <div class="row">
            <?php
                        $itemstock_doc = new DOMDocument();
                        $itemstock_doc->preserveWhiteSpace = false;
                        $itemstock_doc->load("datastore/mybooks.xml");
                        $items = $itemstock_doc->documentElement;
                        $genreList= array();
                        

                        foreach (($itemstock_doc->childNodes)[0]->childNodes as $node)
                            {

                                $BGenre = ($node->GetElementsByTagname("Genre"))[0]->nodeValue;
                                $BFavStatus = ($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue;

                                
                                if ( $BFavStatus == "yes"){

                                    array_push($genreList,$BGenre);

                                }
                                
                                
                            }

                        $counter=array_count_values($genreList);
                        foreach(array_unique($genreList) as $au)
                            {
                                $counter[$au]=round(($counter[$au]/count($genreList))*5);
                            }
                        

                        $itembacklog_doc = new DOMDocument();
                        $itembacklog_doc->preserveWhiteSpace = false;
                        $itembacklog_doc->load("datastore/librarybook.xml");
                        $itemsback = $itembacklog_doc->documentElement;
                        
                        $referenceBooks = ($itembacklog_doc->childNodes)[0]->childNodes;
                        $referenceBooksLength=count($referenceBooks);
                        $randomStartBrowsingIndex=rand(0,$referenceBooksLength-1);
                        $chosenAmount=0;
                        $books = array();
                        
                        foreach(array_unique($genreList) as $au)
                            {
                                
                                        $exploredAmount=0;
                                        $thisChosenAmount=0;
                                        while($exploredAmount < $referenceBooksLength and $chosenAmount <= 5 and $thisChosenAmount <= $counter[$au]){
                                           
                                            $BGenre = ($referenceBooks[($randomStartBrowsingIndex+$exploredAmount)%$referenceBooksLength]->GetElementsByTagname("Genre"))[0]->nodeValue;
                                            $exploredAmount += 1;

                                            $trace=($randomStartBrowsingIndex+$exploredAmount)%$referenceBooksLength;

                                            

                                            if( $BGenre == $au )
                                            {
                                                $BName = ($referenceBooks[($randomStartBrowsingIndex+$exploredAmount)%$referenceBooksLength]->GetElementsByTagname("Title"))[0]->nodeValue;
                                                $BDescription = ($referenceBooks[($randomStartBrowsingIndex+$exploredAmount)%$referenceBooksLength]->GetElementsByTagname("Description"))[0]->nodeValue;
                                                $chosenAmount += 1;
                                                $thisChosenAmount += 1;

                                                $books[] = array(
                                                    'title'          => (string)$BName,
                                                    'genre'          => (string)$BGenre,
                                                    'description'    => (string)$BDescription,
                                                   );

                                                

                                            }
                                        }
                                    
                            }
                        
                        array_multisort(array_column($books, 'genre'), SORT_ASC, $books);
                        foreach ($books as $node)
                            {
                                
                                $BName = $node['title'];
                                $BGenre = $node['genre'];
                                $BDescription = $node['description'];
                                


                                

                                    echo "<div class=\"col\">\n";
                                    echo "<div class=\"card\">\n";        
                                    echo "<div class=\"card-body\">\n";
                                    echo "<h4 class=\"card-title\" style=\"color: var(--bs-gray-dark);\">{$BName}</h4>\n";
                                    echo "<h6 class=\"text-muted card-subtitle mb-2\" style=\"color: var(--bs-gray-dark);\">{$BGenre}</h6>\n";
                                    echo "<p class=\"card-text\" style=\"color: var(--bs-gray-dark);\">{$BDescription}</p>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";
                                    echo "</div>\n";

                                
                                
                            }
                        
                    ?>
            </div>
        </div>
    </section>
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