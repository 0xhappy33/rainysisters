<!doctype html>
<html lang="en">
<?php include 'layout.php'; ?>
<body>
<?php include '../../../controller/ConnectDBController.php'; ?>
<?php include '../../../controller/IndexController.php'; ?>
    <div id="wrapper">
        <div class="container">
            <?php include 'header.php'; ?>
            
        
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
				<div class="prod-title">
                    <h2 >Popular Reviews</h2>
        </div>
			</div>
		</div>
		<div  class="row">
        <?php 
            if ($result1 != null) {
            while($row = $result1->fetch()) {

        ?>
              

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="wrap-content clearfix">
                        <div class="img">
                          <img src="../../../upload/<?php echo $row['namePic'];?>" width="400" height="600" class="lib-img-show"/>
                        </div>
                        <div class="description">
                            <h2><?php echo $row['book_name'] ?></h2>
                            <div class="content">
                                <p><?php echo $row['sumary_review'] ?></p>
                            </div>
                            <div class="author clearfix">
                                <img src="../../../upload/<?php echo $row['avatar'];?>" width="50px" height="50px" class="lib-img-show"/>
                                <div class="author-name">

                                   <a href="#" ><?php echo $row['fullName'] ?></a>
                                   <p><span>Nov 6</span><span>21 min read</span></p>
                                </div>
                                <span class="fa fa-bookmark-o"></span>
                                <span class="fa fa-angle-down"></span>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
        } else {
            echo "0 results";
        }
         ?>
            </div>

                <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <div class="prod-title">
                    <h2 >Best Rated Reviews</h2>
        </div>
      </div>
    </div>
    <div  class="row">
        <?php 
            if ($result2 != null) {
            while($row = $result2->fetch()) {

        ?>
              

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="wrap-content clearfix">
                        <div class="img">
                            <img src="../../../upload/<?php echo $row['namePic'];?>" width="400" height="600" class="lib-img-show"/>
                        </div>
                        <div class="description">
                            <h2><?php echo $row['book_name'] ?></h2>
                            <div class="content">
                                <p><?php echo $row['sumary_review'] ?></p>
                            </div>
                            <div class="author clearfix">
                                <img src="../../../upload/<?php echo $row['avatar'];?>" width="50px" height="50px" class="lib-img-show"/>
                                <div class="author-name">

                                   <a href="#" ><?php echo $row['fullName'] ?></a>
                                   <p><span>Nov 6</span><span>21 min read</span></p>
                                </div>
                                <span class="fa fa-bookmark-o"></span>
                                <span class="fa fa-angle-down"></span>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
        } else {
            echo "0 results";
        }
         ?>
            </div>
        </div>


        </div>
    <?php include 'footer.php'; ?>
    <?php include 'script.php'; ?>
</body>
</html>

