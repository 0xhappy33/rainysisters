<!doctype html>
<html lang="en">
    <?php include '../layout/layout.php'; ?>
<body>
<div id="wrapper">
    <?php include '../layout/header.php'; ?>
    <main class="main-categories">
        <div class="container">
            <div class="title-topics">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="explore-topics">Explore Topics</h1>
                    </div>
                </div>
            </div>
            <?php 
                include '../../Controller/CategoriesController.php';
                foreach ($resultSet as $row) {
             ?>
            <div class="field-book-body" >
                <section>
                    <div class="title-of-field" >
                        <span><?php echo $row['catName'];?></span>
                    </div>
                    <hr>
                       <?php 
                        // show list review about id cat
                            $cat_id = $row['cat_id'];
                            $sql = 'SELECT * from reviews rv join books b on rv.book_id = b.book_id join catagories cat on  cat.cat_id = b.cat_id  WHERE cat.cat_id ='. $cat_id;
                            $stmlist = $db->prepare($sql);
                        //Thiết lập kiểu dữ liệu trả về
                            $stmlist->setFetchMode(PDO::FETCH_ASSOC);
                            $stmlist->execute();
                            $resultSet2 = $stmlist->fetchAll();
                        ?>
                    <div class="container category-of-field">
                        <div class="line-of-categories">
                            <div class="row">
                        <?php 
                            foreach ($resultSet2 as $row) {
                        ?>
                                <div class="col-md-4">
                                    <article class="card card-inverse">
                                        <img class="img-responsive" src="https://cdn-images-1.medium.com/fit/c/280/180/1*H2blBoEmzkSusI_a4Bk0dg@2x.jpeg"
                                                 alt="art-and-entertainment">
                                        <div class="card-img-overlay">
                                            <h4 class="card-title"><?php echo $row['book_name'];?></h4>
                                            <p class="card-text">
                                                <?php echo $row['detail_review'];?>
                                            </p>
                                        </div>
                                    </article>
                                </div>
                         <?php } ?>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <?php } ?>
        </div>
    </main>
    <?php include '../layout/footer.php';?>
</div>
<?php include '../layout/script.php'; ?>
</body>
</html>