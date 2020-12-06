@include('includes.header')
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
      </div>

    </div>
  </section><!-- End Breadcrumbs -->




    <div class="container-contact100">
        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url({{url('contactform/images/bg-01.jpg')}});">
                <span class="contact100-form-title-1">
                            Register In Course
				</span>

                <span class="contact100-form-title-2">

				</span>
            </div>

            <form class="contact100-form ">
                <div class="wrap-input100 ">
                    <span class="label-input100">Full Name:</span>
                    <input class="input100" type="text" name="name" placeholder="Enter full name">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100">
                    <span class="label-input100">Email:</span>
                    <input class="input100" type="email" name="email" placeholder="Enter email addess">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Phone:</span>
                    <input class="input100" type="tel" name="phone" placeholder="Enter phone number">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <span class="label-input100">Message:</span>
                    <textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" ></i>
						</span>
					</button>
                </div>
            </form>
        </div>
    </div>


@include('includes.footer')






