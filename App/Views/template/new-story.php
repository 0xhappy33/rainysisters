<!DOCTYPE html>
<html lang="en">
<?php include '../layout/layout.php'; ?>
<body>
<div class="wrapper" id="wrapper">
    <div id="top"></div>
    <?php include '../layout/header.php'; ?>
    <div class="new-story">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="widget-area no-padding blank">
                        <div class="status-upload" >
                            <form>
                                <input class="form-control" placeholder="Name Of books"> </input>
                                  <div class="form-group">
                                    <br/>
                                    <label for="exampleFormControlSelect1">Categories</label>
                                    <br/>
                                    <select class="form-control" id="categories">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                                <button type="button" onclick="show()" class="btn btn-success green"><i class="fa fa-hand-o-right" ></i> StartReview
                                </button>
                                <br>
                                <br>
                                <br>
                            </form>
                        </div>

                        <div class="status-upload" style="display: none" id="start">
                            <form>
                                <h3 class="editable medium-editor-textarea" id = "Title" name="Title" >Title</h3>
                                <textarea class="editable medium-editor-textarea" id = "newstory" name="tellstory" >Tell your story</textarea>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../layout/footer.php'; ?>
</div>
    <?php include '../layout/script.php'; ?>
<script>
            var editor = new MediumEditor('.editable', {
            buttonLabels: 'fontawesome'
        });

</script>
</body>
</html>
