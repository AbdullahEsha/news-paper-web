<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Contact - Super Equestrian</title>
    <link rel="canonical" href="https://superequestrian.com/contact"/>
</head>

<body>
    @include("components/navber")
    <div class="container">
        <h1 class="blog-title">Contact With Us</h1>
        <p class="blog-title-description">[Were you get some idea and overview of it.....]</p>
        <hr />
        <div class="row contact-section">
            <div class="col-12 col-md-6">
                <div class="contact-social">
                    <div class="contact-social-link">
                        <a href="/"><i class="fa-brands fa-facebook-f"></i> Contact On Facebook</a>
                        <a href="/"><i class="fa-brands fa-instagram"></i> Contact On Instagram</a>
                        <a href="/"><i class="fa-solid fa-phone"></i> Call For Help Or Support</a>
                        <a href="/"><i class="fa-regular fa-envelope"></i> Send Mail For Help Or Support</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <form method='POST' action="" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your name." name="name" required />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter your email address." name="email"
                            required />
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Enter your phone number."
                            pattern="[0-9]{9,11}" name="phone" required />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="8" placeholder="Enter your message."
                            required></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-blue btn-block blog-upload-btn">Send</button>
                    </div>
                    <label class="contact-label">
                        *I understand that the use of this form for communication with Super Equestrian does not
                        establish
                        an relationship.
                    </label>
                </form>
            </div>
        </div>
    </div>
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>