<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg-5.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5">
                <div class="py-md-5">
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                        <h2 class="mb-4">Sign Up Request</h2>
                        <p>You can place your service with us. Let's begin your order and fill in the following details given below:
                        </p>
                    </div>
                    <form method="POST" id="quote_form" class="appointment-form ftco-animate">
                        <div class="d-md-flex">
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="fa fa-caret-down"></span></div>
                                        <select name="q_course" id="select" class="form-control">
                                            <option value="default" class="opt-color">Select Your Service</option>
                                            <option value="Essay" class="opt-color">Essay</option>
                                            <option value="Assignment" class="opt-color">Assignment</option>
                                            <option value="Thesis" class="opt-color">Thesis</option>
                                            <option value="Dissertation" class="opt-color">Dissertation</option>
                                            <option value="Other Services" class="opt-color">Other Services</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ml-md-4">
                                <input type="text" name="q_num" class="form-control" placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="d-md-flex">
                            <div class="form-group">
                                <textarea name="q_message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group ml-md-4">
                                <button type="button" onclick="form_submit(this.form.id)" name="quote_btn" class="btn btn-primary py-3 px-3">Request a Quote</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>