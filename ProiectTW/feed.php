<?php
$db = new mysqli('localhost', 'root', '', 'auctiox');
$query = $db ->query("
	SELECT `name`,
			`start_price`,
			`enddate`,
			`category`,
			`description`
	FROM 	`products`
	ORDER BY `start_price`
	DESC
	LIMIT 100
	");


if($db->affected_rows >= 1){


echo '<?xml version="1.0" encoding="UTF-8" ?>'?>


<rss version = "2.0">
<channel>
      <title>AuctioX</title>
      <description>Atom Feed</description>
      <link>http://phpmyacademy.org</link>
	<?php
	while ($row = $query->fetch_assoc()) {
	?>
    <item>
        <title><?php echo $row['name'];?></title>
        <description><?php echo $row['description']; ?>.
		Price: <?php echo $row['start_price']; ?>$</description>
        <link>http://localhost/ProiectTW/MVC/public/</link>
    </item>
	<?php
	}
	?>
</channel>
</rss>
<?php
}
?>
