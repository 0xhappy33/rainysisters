
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <?php include 'layout.php'; ?>
</head>

<body id="myPage"  data-spy="scroll" data-target=".navbar" data-offset="60">
  <?php include 'header.php'; ?>
    <!-- contact  -->
   <div class="container">

      <div class="row">
          <div class="col-md-12" style="margin-top: 100px;">
            <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.114115758844!2d108.24146731494757!3d16.05956698888692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f2ced6d8b%3A0xe282c779264f7088!2sDanang+Vocational+Training+College!5e0!3m2!1sen!2s!4v1508476745271" frameborder="0" width="100%" height="300" marginwidth="0" marginheight="0" scrolling="no">
                        </iframe>
              </div>
            </div>
         </div>
        <div class="row">
          <div class="col-md-6"  >
            <div class="title-box clearfix ">
              <h2 class="title-box_primary">Contact Info</h2>
            </div><!-- //.title-box -->
              <h5 class="intro">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</h5>
              <p class="des">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.<br></p>
              <address><strong>Rainysister<br>
                    99 To Hien Thanh<br>
                    DaNang, DC 45 Fr 45.</strong><br>
                    Telephone: +0 123 456 78<br>
                    FAX: +1 800 889 9898<br>
                    E-mail: <a class="email" href="passerellsnumeriques.org">Rainysister.org</a><br>
              </address><!-- address (end) -->
          </div>
          <div class="col-md-6" id="form-contact">
              <h2 class="title-box_primary">Contact Form</h2>
                      <form>
                          <div class="col-md-6 form-line">
                            <div class="form-group">
                               <label for="exampleInputUsername">Your name</label>
                                <input type="text" class="form-control" id="" placeholder=" Enter Name">
                           </div>
                          <div class="form-group">
                            <label for="exampleInputEmail">Email Address</label>
                            <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                          </div>
                          <div class="form-group">
                            <label for="telephone">Mobile No.</label>
                            <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                          </div>
                         </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Message</label>
                            <textarea  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                        </div>
                            <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"   aria-hidden="true"></i>  Send Message</button>
                      </div>
                  </form>
          </div>
       </div>
       <?php include 'footer.php'; ?>
       </div>
</body>
</html>
