<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back page</title>
</head>
<body>



    <?php
	
		//if(isset( $_POST['save']))
		//{
			$BookID=$_GET['bookid'];
			$BookReadStatus =  $_POST["book_readstatus"];
            $BookFavStatus = $_POST["book_favstatus"];
            
			//if(! defined($_POST["book_favstatus"]) or ! defined($_POST["book_readstatus"])){
			//	echo "<script> location.href='index.php'; </script>";
    		//	exit;
			//}
			
			$itemstock_doc = new DOMDocument();
            $itemstock_doc->preserveWhiteSpace = false;
            $itemstock_doc->load("datastore/mybooks.xml");
            $items = $itemstock_doc->documentElement;

            foreach (($itemstock_doc->childNodes)[0]->childNodes as $node)
            {
                if ($BookID == ($node->GetElementsByTagname("ID"))[0]->nodeValue){

                    ($node->GetElementsByTagname("ReadState"))[0]->nodeValue = $BookReadStatus;
                    ($node->GetElementsByTagname("FavoriteState"))[0]->nodeValue = $BookFavStatus;

                }

            }
			
			$itemstock_doc->save("datastore/mybooks.xml");

			
		//}

		echo "<script> location.href='index.php'; </script>";
    	exit;
	
    ?>
</body>
</html>