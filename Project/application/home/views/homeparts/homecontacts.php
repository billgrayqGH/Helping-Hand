<section id="contact">
    <div class="container text-center">
    <div class="row">
    <h1 class="title">Contact us</h1>
    <form action="<?php echo base_url('index.php/welcome/send_mail');?>"  method="post" role="form" class="contact-form">
    <?php echo '<p class="text-error">' .$this->session->flashdata('sent') . '</p>'; ?>
    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s">
    <div class="form-group">
    <div class="controls">
    <input type="text" class="form-control" placeholder="Name" name="name">
    </div>
    </div>
    <div class="form-group">
    <div class="controls">
    <input type="email" class="form-control email" placeholder="Email" name="email">
    </div>
    </div>
    <div class="form-group">
    <div class="controls">
    <input type="text" class="form-control requiredField" placeholder="Subject" name="subject">
    </div>
    </div>

    <div class="form-group">

    <div class="controls">
    <textarea rows="7" class="form-control" placeholder="Message" name="message"></textarea>
    </div>
    </div>
    <?php echo validation_errors();?>    
    <button type="submit"  class="btn btn-lg btn-common">Send</button><div id="success" style="color:#34495e;"></div>

    </div>
    </form>

    <div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2885.655434645994!2d-79.41267698423539!3d43.67613545896482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b349c7e14727f%3A0x8bd06e05bd9af30d!2sGeorge+Brown+College!5e0!3m2!1sen!2sca!4v1449078696914" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>
    <div class="contact-info">
    <p><i class="fa fa-map-marker"></i> 160 Kendal Ave, Toronto, ON M5R 1M3</p>
     <p><i class="fa fa-envelope"></i> BillGray.Quitalig@georgebrown.ca</p>
</div>

  
    
    </div>

    </div>
    </div>
    </section>