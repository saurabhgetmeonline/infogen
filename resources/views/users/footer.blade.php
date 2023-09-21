<footer class="main-footer">
    <div class="foot-col-1">
        <div class="foot-col-1-row-1-img">
            <a href="{{url('/')}}"><img src="/users/images/final-1@2x.png" alt=""></a>
        </div>
        <p class="foot-col-1-row-1-p">Empowering businesses with actionable market insights for smarter, data-driven decisions.</p>
        <div class="foot-col-1-row-1-icons">
            <img src="/users/images/Group 28.png" alt="">
            <img src="/users/images/Group 30.png" alt="">
        </div>
    </div>
    <div id="parent-foot-col-234">
        <div class="foot-col-2">
            <h3>Company</h3>
            <p><a href="{{url('/aboutus')}}">About us</a></p>
            <p><a href="{{url('/insights')}}">Insights</a></p>
            <p><a href="{{url('/careers')}}">Careers</a></p>
        </div>
        <div class="foot-col-3">
            <h3>Quick Links</h3>
            <p><a href="{{url('/terms')}}">Terms and Condition</a></p>
            <p><a href="{{url('/privacy')}}">Privacy Policy</a></p>
            <p><a href="{{url('/gdpr')}}">GDPR Policy</a></p>
            <p><a href="{{url('/faqs')}}">FAQs</a></p>

        </div>
        <div class="foot-col-4">
            <h3>Contact</h3>
            <div class="foot-col-4-add-part">
                <div class="home-icon">
                    <img src="/users/images/Vector (2).png" alt="">
                    <p>406, Nyati Eureka, Near Manipal Hospital,
                        Kharadi, Pune-14, India</p>
                </div>
                <div class="phone-icon">
                    <img src="/users/images/Vector (3).png" alt="">
                    <p><a href="tel:+919356439799"><strong>+91 93564 39799</strong></a></p>
                </div>
                <div class="mail-icon">
                    <img src="/users/images/Vector (4).png" alt="">
                    <p id="foot-col-4-add-part-email"><a href="mailto:contact@infogenceglobalresearch.com"><strong>contact@infogenceglobalresearch.com

                            </strong></a></p>
                </div>
            </div>
            <div class="foot-col-4-payment-icons">
                <span><img src="/users/images/Group 75.png" alt=""></span>
                <span><img src="/users/images/Vector.png" alt=""></span>
                <span><img src="/users/images/Vector (1).png" alt=""></span>
                <span><img src="/users/images/Group 76.png" alt=""></span>
                <span><img src="/users/images/image 28.png" alt=""></span>
            </div>
        </div>
    </div>

</footer>
<footer class="footer-bottom">
    <p>@2023 Infogence Global Research. All rights reserved. </p>
</footer>

<script>
    const menuList = document.getElementById('menu-list');

    // menuList.style.maxHeight = "0px";

    function togglemenu() {
        if (menuList.classList.contains('hidden')) {
            menuList.classList.remove('hidden');
        } else {
            menuList.classList.add('hidden');
        }
    }

    // Start of Tawk.to Script 
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/650174f4b1aaa13b7a769214/1ha6r1n3l';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
    // End of Tawk.to Script 

    // scroll to top button 

    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
</script>
</body>

</html>