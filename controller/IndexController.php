<?php 
	include 'ConnectDBController.php';
	$sql1 = "SELECT * FROM reviews rv JOIN books b ON rv.book_id = b.book_id JOIN reviews_users rvu ON rv.review_id = rvu.review_id JOIN users u ON u.user_id = rvu.user_id JOIN picture_reviews pr ON pr.picture_id = rv.picture_id ORDER BY countView LIMIT 3 ";
	$result1 = $dbh->query($sql1);

	$sql2 = "SELECT * FROM reviews rv JOIN books b ON rv.book_id = b.book_id JOIN reviews_users rvu ON rv.review_id = rvu.review_id JOIN users u ON u.user_id = rvu.user_id JOIN picture_reviews pr ON pr.picture_id = rv.picture_id WHERE rating >= 3 LIMIT 6 ";
	$result2 = $dbh->query($sql2);

?>