<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include("components/head")
    <title>Affiliate disclaimer - Super Equestrian</title>
    <link rel="canonical" href="https://superequestrian.com/disclaimer"/>
</head>

<body>
    @include("components/navber")
    <div class="container">
        <h1 class="about-title">Affiliate disclaimer</h1>
        <p class="about-title-description">[Were you get some idea and overview of it.....]</p>
        <hr />
        <h4>Effective Date: March 1, 2023</h4>
        <p>
            Super Equestrian is a member of several affiliate marketing programs, which means we may receive commissions
            on certain items or services you buy through our website.
        </p>
        <p>
            When you click on one of our affiliate links and make a purchase, we may receive a commission at no extra
            cost to you. We only promote products or services that we believe in and have used or researched personally.
        </p>
        <p>
            Our affiliate partnerships have no influence on our content, and we always work hard to provide our readers
            with honest and unbiased information. We do, however, receive compensation for some of the products or
            services mentioned on our website.
        </p>
        <p>
            Please keep in mind that product and service prices and availability are subject to change without notice,
            and we cannot guarantee the accuracy of information provided by our affiliate partners.
        </p>
        <p>
            We respect your faith in our recommendations. Please <a href="/contact" class="link">contact us</a> if you
            have any questions or concerns about our affiliate partnerships.
        </p>
        <p>
            You acknowledge that you have read and agree to this affiliate disclaimer by using our website and clicking
            on affiliate links.
        </p>
    </div>
    @include("components/footer")
</body>
@include("components/bootstrapscript")

</html>