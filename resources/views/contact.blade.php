@extends('layouts.app')

@section('content')
<section class="contact" id="contact">
    <div class="container">
        <div class="contact-content">
            <p class="contact-subtitle fade-in">Let's Create Together</p>
            <h2 class="contact-title fade-in delay-1">Get In Touch</h2>
            <p class="contact-description fade-in delay-1">
                Interested in working together or discussing projects? Feel free to contact me.
            </p>

            <!-- FORM KONTAK -->
            <form id="contact-form" class="contact-form fade-in delay-2" action="https://formspree.io/f/mqabbzbq" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="_replyto" class="form-control" required placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control" required placeholder="Tell me about your project"></textarea>
                </div>
                <button type="submit" class="submit-btn">
                    <span>Send Message</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- ALERT POPUP -->
    <div id="popup-alert" class="alert alert-success">
        Your message has been sent successfully!
    </div>
</section>
@endsection
