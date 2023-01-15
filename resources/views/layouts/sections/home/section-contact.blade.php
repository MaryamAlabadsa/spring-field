<section id="section-contact">
    <div class="container">
        <div class="row mt-100">


            <div class="col-md-12">
                <div class="padding30" data-bgcolor="#f8f8f8"
                     style="background-color: rgb(248, 248, 248); background-size: cover;">

                    <h3>Send Us Message
                        <span class="tiny-border"></span>
                    </h3>
                    <form name="contactForm" id='contact_form' method="post" action='/home/sendEmail'>
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control"
                                           placeholder="Your Name">
                                </div>

                                <div id='job_title_error' class='error'>Please enter your job title.</div>
                                <div>
                                    <input type='text' name='job_title' id='job_title' class="form-control"
                                           placeholder="Job title">
                                </div>

                                <div id='name_error' class='error'>Please enter your organization.</div>
                                <div>
                                    <input type='text' name='organization' id='organization' class="form-control"
                                           placeholder="organization">
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='text' name='email' id='email' class="form-control"
                                           placeholder="Your Email">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control"
                                           placeholder="Your Phone">
                                </div>

                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                            <textarea name='message' id='message' class="form-control"
                                                      placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div id='submit'>
                                    <input type='submit' id='send_message' value='Send'
                                           class="btn btn-line">
                                </div>
                                <div id='mail_success' class='success'>Your message has been sent
                                    successfully.
                                </div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending
                                    your
                                    message.
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>
    </div>
</section>
