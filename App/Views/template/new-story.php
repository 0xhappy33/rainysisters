<!DOCTYPE html>
<html lang="en">
<?php include '../layout/layout.php'; ?>
<body>
<div class="wrapper" id="wrapper">
    <div id="top"></div>
    <?php include '../layout/header.php'; ?>
    <main class="main-new-story">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="widget-area no-padding blank">
                        <div class="status-upload">
                            <form>
                                <input type="text" class="form-control title-header" placeholder="Title"><br>
                                <textarea class="form-control" placeholder="Tell your story"></textarea>
                                <ul>
                                    <li><a title="" data-toggle="tooltip" data-placement="bottom"
                                           data-original-title="Audio"><i class="fa fa-music"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" data-placement="bottom"
                                           data-original-title="Video"><i class="fa fa-video-camera"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" data-placement="bottom"
                                           data-original-title="Sound Record"><i class="fa fa-microphone"></i></a></li>
                                    <li><a title="" data-toggle="tooltip" data-placement="bottom"
                                           data-original-title="Picture"><i class="fa fa-picture-o"></i></a></li>
                                </ul>
                                <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Share
                                </button>
                            </form>
                        </div><!-- Status Upload  -->
                    </div><!-- Widget Area -->
                </div>
            </div>
        </div>
    </main>
    <?php include '../layout/footer.php'; ?>
</div>
</body>
</html>
