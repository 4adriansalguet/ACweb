<footer id="footer">
    <div class="footer_container"> 
                <nav>
                    
                </nav>
        </div>
    </div>
</footer>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
    <textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
    <script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
    <script>
        var captchaCallBack = function () {
            $('.g-recaptcha').each(function (index, el) {
                var recaptcha = grecaptcha.render(el, {
                    'sitekey': '<?php $this->info("site_key"); ?>'
                });
                $('.destroy-on-load').remove();
            })
        };


        $('.consentBox').click(function () {
            if ($(this).is(':checked')) {
                if ($('.termsBox').length) {
                    if ($('.termsBox').is(':checked')) {
                        $('.ctcBtn').removeAttr('disabled');
                    }
                } else {
                    $('.ctcBtn').removeAttr('disabled');
                }
            } else {
                $('.ctcBtn').attr('disabled', true);
            }
        });

        $('.termsBox').click(function () {
            if ($(this).is(':checked')) {
                if ($('.consentBox').is(':checked')) {
                    $('.ctcBtn').removeAttr('disabled');
                }
            } else {
                $('.ctcBtn').attr('disabled', true);
            }
        });
    </script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
    <script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
    <script>
        $('#gall1').pajinate({
            num_page_links_to_display: 3,
            items_per_page: 10
        });
        $('.fancy').fancybox({
            helpers: {
                title: {
                    type: 'over'
                }
            }
        });
    </script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
        style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./public/scripts/slick.js"></script>
<script type="text/javascript" src="./public/scripts/custom.js"></script>
<?php $this->checkSuspensionFooter(); ?>
</body>

</html>