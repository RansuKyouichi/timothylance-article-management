
@extends('web._layouts.main')

@section('content')

<section class="contact-hero">

    <div class="container">
        <h1 class="mt-3">Contact<span class="text-accent"> US</span></h1>
        <p>Have a question, suggestion, or story to share? We're always open to hearing from curious minds. Send us a message and let's connect.</p>
    </div>

</section>

<section class="contact-section">

    <div class="container">
        <div class="contact-wrapper">
            <div class="row g-0">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <span class="section-label">GET IN TOUCH</span>

                        <h2 class="mt-3">We'd Like to Hear From You.</h2>

                        <p class="contact-info-description">Whether you have feedback, an idea, or simply want to say hello, feel free to reach out.</p>

                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>

                            <div>
                                <h6>General Inquiries</h6>
                                <p>Questions or concerns about AMS? We'd be happy to hear from you.</p>
                            </div>
                        </div>

                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="bi bi-lightbulb"></i>
                            </div>

                            <div>
                                <h6>Suggestions & Feedback</h6>
                                <p>Have ideas for future articles or ways we can improve? Share your thoughts with us.</p>
                            </div>
                        </div>

                        <div class="contact-detail">
                            <div class="contact-detail-icon">
                                <i class="bi bi-people"></i>
                            </div>

                            <div>
                                <h6>Collaborations</h6>
                                <p>Interested in sharing stories or working together? Let's explore possibilities.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-wrapper">
                        <span class="section-label">SEND US A MESSAGE</span>
                        <h2 class="mt-2">Get in Touch</h2>
                        <p class="contact-form-description">Fill out the form below and tell us what's on your mind</p>

                        <form id="contactForm" class="contact-form">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contactName" class="form-label">Full Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="contactName"
                                        name="name"
                                        placeholder="Enter your name"
                                        required
                                    >
                                </div>

                                <div class="col-md-6">
                                    <label for="contactEmail" class="form-label">Email Address</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="contactEmail"
                                        name="email"
                                        placeholder="Enter your email"
                                        required
                                    >
                                </div>

                                <div class="col-12">
                                    <label for="contactSubject" class="form-label">Subject</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="contactSubject"
                                        name="subject"
                                        placeholder="What is this about?"
                                        required
                                    >
                                </div>

                                <div class="col-12">
                                    <label for="contactMessage" class="form-label">Your Message</label>

                                    <textarea
                                        class="form-control"
                                        id="contactMessage"
                                        name="message"
                                        placeholder="Write your message here..."
                                        required
                                    >
                                    </textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-dark w-100">Send Message<i class="bi bi-arrow-right ms-2"></i></button>
                                </div>

                            </div>

                            <div id="formNotice"
                                 class="contact-notice"
                                 role="status"
                                 aria-live="polite">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@section('page-styles')
<style>

.contact-hero {
    padding: 0 0 65px;
    background-color: var(--background-color);
    text-align: center;
}

.contact-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.7rem, 5vw, 4rem);
    line-height: 1.2;
    color: var(--primary-color);
}

.contact-hero p {
    max-width: 600px;
    margin: 20px auto 0;
    color: var(--muted-color);
    line-height: 1.8;
}

.contact-section {
    padding: 30px 0 100px;
}

.contact-wrapper {
    background-color: #FFFFFF;
    border: 1px solid var(--border-color);
    border-radius: 10px;
    overflow: hidden;
}

.contact-info {
    height: 100%;
    padding: 50px 40px;
    background-color: var(--primary-color);
    color: #FFFFFF;
}

.contact-info h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    margin-bottom: 18px;
}

.contact-info-description {
    color: #BBBBBB;
    font-size: 0.9rem;
    line-height: 1.8;
    margin-bottom: 40px;
}

.contact-detail {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 30px;
}

.contact-detail-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    flex-shrink: 0;
    border: 1px solid #555555;
    border-radius: 50%;
    color: var(--accent-color);
    font-size: 1.1rem;
}

.contact-detail h6 {
    font-size: 0.9rem;
    font-weight: 700;
    margin-bottom: 6px;
}

.contact-detail p {
    color: #BBBBBB;
    font-size: 0.85rem;
    line-height: 1.7;
    margin-bottom: 0;
}

.contact-form-wrapper {
    padding: 50px 45px;
}

.contact-form-wrapper h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    color: var(--primary-color);
}

.contact-form-description {
    color: var(--muted-color);
    font-size: 0.9rem;
    line-height: 1.7;
    margin-bottom: 30px;
}

.contact-form .form-label {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 8px;
}

.contact-form .form-control {
    border: 1px solid var(--border-color);
    border-radius: 5px;
    padding: 12px 14px;
    font-size: 0.9rem;
    background-color: #FAFAF9;
}

.contact-form .form-control:focus {
    background-color: #FFFFFF;
    border-color: var(--accent-color);
    box-shadow: 0 0 0 0.2rem rgba(200, 117, 77, 0.12);
}

.contact-form textarea {
    min-height: 150px;
    resize: vertical;
}

.contact-form .btn {
    padding: 12px 25px;
    font-size: 0.9rem;
    font-weight: 600;
}

.contact-notice {
    display: none;
    padding: 13px 15px;
    margin-top: 18px;
    border-radius: 5px;
    background-color: #FFF4EA;
    color: #87512E;
    font-size: 0.85rem;
    line-height: 1.6;
}

.contact-bottom {
    padding: 70px 0;
    background-color: #F2F0EB;
    text-align: center;
}

.contact-bottom h2 {
    font-family: 'Playfair Display', serif;
    font-size: 2.3rem;
    color: var(--primary-color);
}

.contact-bottom p {
    max-width: 550px;
    margin: 15px auto 25px;
    color: var(--muted-color);
    line-height: 1.8;
}

@media (max-width: 991.98px) {

    .contact-info {
        padding: 40px 30px;
    }

    .contact-form-wrapper {
        padding: 40px 30px;
    }

}

@media (max-width: 575.98px) {

    .contact-hero {
        padding: 0px 0 45px;
    }

    .contact-section {
        padding-bottom: 60px;
    }

    .contact-info,
    .contact-form-wrapper {
        padding: 35px 25px;
    }

    .contact-info h2,
    .contact-form-wrapper h2 {
        font-size: 1.7rem;
    }

    .contact-bottom {
        padding: 55px 0;
    }

}

</style>
@endsection

