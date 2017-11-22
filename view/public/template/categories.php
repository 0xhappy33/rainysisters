<!doctype html>
<html lang="en">
<?php include 'layout.php'; ?>
<body>
	
	<div id="top">
		<?php include 'header.php'; ?>
	</div>
	<div class="container" id = "wrapper-cate">
		<div id = "content-top">
			<header class="u">
				<h1 class="topic">Explore topics</h1>
			</header>
		</div>
		<?php
		include '../../../controller/CatController.php';
		foreach ($resultSet as $row) {
		?>
		<header class="flex">
			<span class="title wow SlideInLeft">
			<?php echo $row['catName'];?>
			</span>
		</header>
		<?php 
		// show list review about id cat
		$cat_id = $row['cat_id'];
		$sql = 'SELECT * from reviews rv join books b on rv.book_id = b.book_id join catagories cat on  cat.cat_id = b.cat_id  WHERE cat.cat_id ='. $cat_id;
		$stmlist = $db->prepare($sql);
		//Thiết lập kiểu dữ liệu trả về
		$stmlist->setFetchMode(PDO::FETCH_ASSOC);
		$stmlist->execute();
		$resultSet2 = $stmlist->fetchAll();
		if ($resultSet2 == null) {
			echo "k co ";
		}
		 ?>
		<div id="content-main">
			<section class="list-cat container">
				<div class="row">
				<?php 
				foreach ($resultSet2 as $row) {
				 ?>
					<div class="col-sm-4 item-list-cat">
						<div class="item-top">
							<a href="#"><?php echo $row['book_name'] ?></a>
							<button class="detail">
								<i class="fa fa-plus-circle">
								</i>
							</button>
						</div>
						<a href="https://medium.com/topic/art" class="">
							<div class="item-pic" style = " background-image: url('../images/anh1.png'); background-position: 50% 50% !important; " >
							</div>
						 </a>	
					</div>
				<?php } ?>

				</div>
			</section>			
		

		</div>
		<?php } ?>

		<a href="#" style = "color: #ccc; font-size: 24px;"><i class="sc fa fa-angle-up" id = "cuon" aria-hidden="true"></i></a>

	</div>	
	<?php include 'footer.php'; ?>
	<?php include 'script.php'; ?>
</body>
</html>