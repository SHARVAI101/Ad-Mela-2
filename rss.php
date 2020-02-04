<?php
/*
    include 'dbh.php';

    // header("Content-Type: application/rss+xml; charset=ISO-8859-1");
    header("Content-Type: text/xml");
     
    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>My RSS feed</title>';
    $rssfeed .= '<link>http://www.mywebsite.com</link>';
    $rssfeed .= '<description>This is an RSS feed</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2020 Ad-Mela</copyright>';
  
    $query = "SELECT * FROM ads ORDER BY aid DESC";
    $result = mysqli_query($conn, $query);
 
    while($row = mysqli_fetch_assoc($result)) {

        $websiteId=$row['websiteId'];
        $sqlw="SELECT websiteName FROM websites WHERE wid='$websiteId'";
        $resultw=mysqli_query($conn, $sqlw);
        $roww=mysqli_fetch_assoc($resultw);
        $websiteName=$roww['websiteName'];


        $websiteTypenum=$row['websiteType'];
        $sqlw="SELECT wbtype FROM website_type WHERE wtid='$websiteTypenum'";
        $resultw=mysqli_query($conn, $sqlw);
        $roww=mysqli_fetch_assoc($resultw);
        $websiteType=$roww['wbtype'];

        $width=$row['width'];
        $height=$row['height'];
        $cost=$row['cost'];
        $favourites=$row['favourites'];

        $adtypenum=$row['type'];
        $sqla="SELECT adtype FROM ad_type WHERE tid='$adtypenum'";
        $resulta=mysqli_query($conn, $sqla);
        $rowa=mysqli_fetch_assoc($resulta);
        $adtype=$rowa['adtype'];
         
        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $websiteName . '</title>';
        $rssfeed .= '<description>This is an advertisement</description>';
        $rssfeed .= '<websiteType>' . $websiteType . '</websiteType>';
        $rssfeed .= '<adtype>' . $adtype . '</adtype>';
        $rssfeed .= '<width>' . $width . '</width>';
        $rssfeed .= '<height>' . $height . '</height>';
        $rssfeed .= '<cost>' . $cost . '</cost>';
        $rssfeed .= '<favourites>' . $favourites . '</favourites>';
        $rssfeed .= '<link>adlisting.php?ad_Id=' . $row['aid'] . '</link>';
        $rssfeed .= '</item>';
    }
 
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
 
    echo $rssfeed;
*/

$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>

<html>
    <head>
        <title>RSS Feed Reader</title>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
        <?php
        //Feed URLs
        $feeds = array(
            "https://rss.nytimes.com/services/xml/rss/nyt/World.xml"
        );
        
        //Read each feed's items
        $entries = array();
        foreach($feeds as $feed) {
            $xml = simplexml_load_file($feed);
            $entries = array_merge($entries, $xml->xpath("//item"));
        }
        
        //Sort feed entries by pubDate
        usort($entries, function ($feed1, $feed2) {
            return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
        });
        
        ?>
        
        <ul><?php
        //Print all the entries
        foreach($entries as $entry){
            ?>
            <li><a href="<?= $entry->link ?>"><?= $entry->title ?></a> (<?= parse_url($entry->link)['host'] ?>)
            <p><?= strftime('%m/%d/%Y %I:%M %p', strtotime($entry->pubDate)) ?></p>
            <p><?= $entry->description ?></p></li>
            <?php
        }
        ?>
        </ul>
    </body>
</html>