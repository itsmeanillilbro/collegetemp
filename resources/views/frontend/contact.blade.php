@extends ('frontend.layouts.main')
@section ('main-container')
        
        <!-- Breadcrumb Start -->
        <div class="all-title-box">
            <div class="container text-center">
                <h1>Contact<span class="m_1"><a href="{{url('/')}}">Home</a> / <a href="">Contact Us</a></span></h1>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h3>Get in Touch</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                            </p>
                            <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                            <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                            <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- MAP SECTION -->
<section data-aos="fade-up" data-aos-delay="50">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.0940601948546!2d85.30602967546766!3d27.71438197617857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fb62b43191%3A0xc10f0d608a700efc!2z4KSq4KS_4KSq4KSy4KWN4KS4IOCkleCljeCkr-CkvuCkruCljeCkquCkuA!5e0!3m2!1sne!2snp!4v1712566428182!5m2!1sne!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</section>

@endsection