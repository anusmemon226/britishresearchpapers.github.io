 <!-- /////////////////////////////////// -->
 <div class="click-form" id="click">
        <div class="form" id="form">
            <div class="col-md-6 col-lg-12 columns">
                <div class="d-flex justify-content-center">
                    <h4 class="text-uppercase font-weight-sbold fadeIn" style="visibility: visible; animation-name: fadeIn;">REGISTER NOW</h4><span class="icon mdi icon-sm linearicons-pencil3"></span>
                </div>
                <!-- RD Mailform-->
                <div class="regForm">
                <form method="POST" id="sf_form">
                   <div class="form-group">
                       <input type="text" id="name" name="sf_name" placeholder="Enter Your Name" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <input type="email" id="email" name="sf_email" placeholder="Enter Your Email" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <input type="number" id="num" name="sf_num" placeholder="Enter Your Number" class="form-control" required>
                   </div>
                   <div class="form-group">
                       <button type="submit" onclick="form_submit(this.form.id)" class="sf-submit submit">Submit</button>
                   </div>
                </form>
                </div>
            </div>
        </div>
        <div class="discount" id="discount" >
            <img src="images/discountbadge-01.png"  onclick="clickOpen()" alt="">
        </div>
    </div>