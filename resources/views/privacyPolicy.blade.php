<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Privacy Policy - Super Equestrian</title>
    <link rel="canonical" href="https://superequestrian.com/privacy-policy"/>
</head>

<body>
    @include("components/navber")
    <div class="container">
        <h1 class="about-title">Privacy Policy</h1>
        <p class="about-title-description">[Were you get some idea and overview of it.....]</p>
        <hr />
        <h4>Effective Date: March 1, 2023</h4>
        <p>
            At Super Equestrian, we respect your privacy and are committed to protect your personal information. This
            privacy policy describes the types of information we collect from website visitors, as well as how we use,
            share, and protect that information.
        </p>
        <h4>Information We Collect:</h4>
        <p>
            When you visit our website, we may automatically collect information such as your IP address, browser
            history, and device type. We may also gather information about your browsing habits, such as which pages you
            visit and which links you click. If you choose to subscribe to our newsletter or comment on one of our blog
            posts, we may collect your name and email address.
        </p>
        <h4>How We Use Your Information:</h4>
        <p>
            The data we collect is used to improve our website and provide a better user experience. We may use your
            email address to send you our newsletter, respond to your comments, or provide product and service updates.
            Your information may also be used to analyze website traffic and user behavior, conduct research, and
            fulfill legal obligations.
        </p>
        <h4>How We Share Your Information:</h4>
        <p>
            We never sell, trade, or rent your personal information to anyone. However, we may share your information
            with our service providers, like the ones that host our website, deliver emails, and provide analytics. If
            required by law, we may also provide your data with law enforcement or government authorities.
        </p>
        <h4>Security:</h4>
        <p>
            We take your personal information security seriously and take reasonable precautions to prevent unauthorized
            access, disclosure, or misuse. However, no data transmission or storage system can be guaranteed to be
            completely secure.
        </p>
        <h4>Links to Other Websites:</h4>
        <p>
            Our website may contain links to websites that we do not own or operate. We are not responsible for those
            websites' privacy practices and encourage you to read their own privacy policies before offering any
            personal information.
        </p>
        <h4>Changes to Our Privacy Policy:</h4>
        <p>
            We reserve the right to change this privacy statement at any time. If we make significant changes, we will
            send you an email or post a notice on our website.
        </p>
        <h4>Contact Us:</h4>
        <p>
            Please <a href="/contact" class="link">contact us</a> if you have any questions or concerns about our
            privacy policies.
        </p>
        <p>
            By using our website, you agree to the terms of this privacy statement.
        </p>
    </div>
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>