<div style="text-align: center">
    <button style="background-color: white; color: black; border-radius: 5px" class="btn-copy" type="button" onclick="navigator.clipboard.writeText(document.getElementsByTagName('table')[0].outerHTML)">Copy To Clipboard</button>
</div>
<table style="border-spacing: 0px; width: 100%;" align="center">
    <tbody>
    <tr>
        <td>
            <div id="ds_div">
                <font rwr="1" style="font-family:Arial" size="4">
                    <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <link href="https://dewiso.com/css/bootstrap.min.css" rel="stylesheet">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Exo">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <style type="text/css">.element{background:#0a91ae}</style>
                    <div class="element" style="font-size: 14pt; border-width: 1px; border-style: solid; border-color: #0a91ae #0a91ae #0a91ae; color: rgb(255, 255, 255); line-height: 45px;">
                        <div class="container" style="padding: 40px 0 40px 0">
                            <div class="row">
                                <div style="display: flex; align-items: center;" class="col-3 col-md-3">
                                    <img alt="Image" class="mx-auto d-block img-fluid" src="https://i.ibb.co/f0b6V2x/LOGO-PSD-3x.jpg" style="border-radius: 5px;" title="Image">
                                </div>
                                <div class="col-9 col-md-9">
                                    <h1 style="text-align: center"><font face="Exo">{!! $title !!}</font></h1>
                                    <hr style="background: #fff; height: 1px; width: 10%" align="center">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; color: rgb(39, 60, 44); line-height: 25px;">
                        <div class="container" style="padding-bottom: 20px; padding-top: 50px;">
                            <div class="row" style="">
                                @isset($product_image)
                                    <div class="col-12 col-md-6" style="font-size: 14pt; padding-bottom: 40px;">
                                        <font face="Exo">
                                        <span class="mx-auto d-block img-fluid" style="width: 90%" title="Image">
                                            <img src="{{ $product_image }}" style="max-width:100%; max-height:100%;">
                                        </span>
                                        </font>
                                    </div>
                                    <div class="col-12 col-md-6" style="">
                                        @isset($product_details)
                                            <div typeof="Product" vocab="https://schema.org/" style="">
                                                <h2 style="color: #0a91ae; line-height: 45px;"><font style="" size="5" face="Exo">Product Details</font></h2>

                                                <hr style="font-size: 14pt; background: #0a91ae; height: 1px; width: 10%;" align="left">
                                                {!! $product_details !!}
                                            </div>
                                        @endisset
                                        @isset($features_and_further_details)
                                            <div typeof="Product" vocab="https://schema.org/" style="">
                                                <h2 style="color: #0a91ae; line-height: 45px;"><font style="" size="5" face="Exo">Features and Further Details</font></h2>

                                                <hr style="font-size: 14pt; background: #0a91ae; height: 1px; width: 10%;" align="left">
                                                {!! $features_and_further_details !!}
                                            </div>
                                        @endisset
                                    </div>
                                @else
                                    <div class="col-12 col-md-12" style="">
                                        @isset($product_details)
                                            <div typeof="Product" vocab="https://schema.org/" style="">
                                                <h2 style="color: #0a91ae; line-height: 45px;"><font style="" size="5" face="Exo">Product Details</font></h2>

                                                <hr style="font-size: 14pt; background: #0a91ae; height: 1px; width: 10%;" align="left">
                                                {!! $product_details !!}
                                            </div>
                                        @endisset
                                        @isset($features_and_further_details)
                                            <div typeof="Product" vocab="https://schema.org/" style="">
                                                <h2 style="color: #0a91ae; line-height: 45px;"><font style="" size="5" face="Exo">Features and Further Details</font></h2>

                                                <hr style="font-size: 14pt; background: #0a91ae; height: 1px; width: 10%;" align="left">
                                                {!! $features_and_further_details !!}
                                            </div>
                                        @endisset
                                    </div>
                                @endisset
                            </div>
                        </div>
                    </div>

                    <div style="background: rgb(244, 246, 247); border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; color: rgb(39, 60, 44); line-height: 25px;">
                        <div class="container" style="padding: 40px 0px;">
                            @isset($specifications)
                                <div class="col-12 col-md-12" style="">
                                    <h2 style="color: #0a91ae; line-height: 45px;"><font style="" size="5" face="Exo">Specifications</font></h2>

                                    <hr style="font-size: 14pt; background: #0a91ae; height: 1px; width: 10%;" align="left">
                                    {!! $specifications !!}
                                    <font style="font-size: 14pt;" face="Exo">
                                        <font>
                                            <font face="Exo"><font>
                                                </font>
                                            </font>
                                        </font>
                                    </font>
                                </div>
                            @endisset
                            @isset($dimensions)
                                <div class="col-12 col-md-12" style="">
                                    <h2 style="color: #0a91ae; line-height: 45px;"><font style="" size="5" face="Exo">Dimensions</font></h2>

                                    <hr style="font-size: 14pt; background: #0a91ae; height: 1px; width: 10%;" align="left">
                                    {!! $dimensions !!}
                                    <font style="font-size: 14pt;" face="Exo">
                                        <font>
                                            <font face="Exo"><font>
                                                </font>
                                            </font>
                                        </font>
                                    </font>
                                </div>
                            @endisset
                            <font style="font-size: 14pt;" face="Exo">
                                <font>
                                    <font face="Exo">
                                        <font>
                                        </font>
                                    </font>
                                </font>
                            </font>
                        </div>
                        <font style="font-size: 14pt;" face="Exo">
                            <font>
                                <font face="Exo">
                                    <font>
                                    </font>
                                </font>
                            </font>
                        </font>
                    </div>
                    <font style="font-size: 14pt;" face="Exo">
                        <font>
                            <font face="Exo">
                                <font>

                                    <div style="border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; border-bottom: 1px solid #0a91ae; color: #273C2C; line-height: 25px">
                                        <div class="container" style="padding: 40px 0 40px 0">
                                            <div class="col-12 col-md-12">
                                                <h2 style="color: #0a91ae; line-height: 45px"><font face="Exo">Contact us</font></h2>

                                                <hr style="background: #0a91ae; height: 1px; width: 10%" align="left">
                                                <p style="color: #273C2C; "><font face="Exo">We can be contacted at any time through eBay messages if you have any questions, comments or product requests. We will respond to you within 24 hours and do our best to help you out! We encourage our customers to contact us with any questions or concerns! We'd like to be sure you are completely satisfied with your purchase.</font></p>
                                            </div>

                                        </div>

                                        <div class="element" style="border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; border-top: 1px solid #0a91ae; color: #fff; line-height: 45px">
                                            <div class="container" style="padding: 40px 0 40px 0">
                                                <div class="col-12 col-md-12">
                                                    <h1 style="text-align: center"><font face="Exo">Khazina Deals Policies</font></h1>

                                                    <hr style="background: #fff; height: 1px; width: 10%" align="center"></div>
                                            </div>
                                        </div>

                                        <div style="background: #F4F6F7; border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; color: #353535; ; line-height: 25px">
                                            <div class="container" style="padding-bottom: 20px; padding-top: 50px">
                                                <div class="row">
                                                    <div class="col-12 col-md-4" style="padding-bottom: 10px"><font face="Exo"><img alt="Product" class="mx-auto d-block img-fluid" src="https://i.imgur.com/724SQ5b.png" style="width: 30%" title="Product"></font>

                                                        <h2 style="color: #0a91ae; text-align: center; line-height: 45px"><font face="Exo">Customer Satisfaction</font></h2>

                                                        <p><font face="Exo">We Offer 100% Customer Satisfaction and try our best to satisfy our lovely and valuable customers, If you have any issues with the product or with our services, even if you don't like the product or just want to return the item for any reason, we are always here to help you out.</font></p>
                                                    </div>

                                                    <div class="col-12 col-md-4" style="padding-bottom: 10px"><font face="Exo"><img alt="Shipping" class="mx-auto d-block img-fluid" src="https://i.imgur.com/pfnrhbf.png" style="width: 30%" title="Shipping"></font>

                                                        <h2 style="color: #0a91ae; text-align: center; line-height: 45px"><font face="Exo">Shipping</font></h2>

                                                        <p><font face="Exo">We Offer the Fastest Shipping, Our items get delivered wihtin 2 days but sometimes 4 days from the day you order to delviery day, We Ship the items to the shipping carriers on the same day as you order, We Provide Tracking Id's and Keep You Updated with the tracking through messages. </font></p>
                                                    </div>

                                                    <div class="col-12 col-md-4" style="padding-bottom: 10px"><font face="Exo"><img alt="Contact" class="mx-auto d-block img-fluid" src="https://i.imgur.com/mvttR3m.png" style="width: 30%" title="Contact"></font>

                                                        <h2 style="color: #0a91ae; text-align: center; line-height: 45px"><font face="Exo">Contact</font></h2>

                                                        <p><font face="Exo">If You Got any issue or have any queries regarding anything we're 24/7 available to solve your issues and provide informations for your queries, We Mostly Reply instantly but sometimes it takes some hours, We Value your time and here on eBay trying to provide you the finest and fastest service.</font></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; color: #353535; line-height: 25px">
                                            <div class="container" style="padding-top: 40px; padding-bottom: 40px">
                                                <div class="row">
                                                    <div class="col-12 col-md-6" style="display: flex; align-items: center;" >
                                                        <font face="Exo"><img alt="Image" class="mx-auto d-block img-fluid" src="https://i.ibb.co/f0b6V2x/LOGO-PSD-3x.jpg" style="width: 50%; border-radius: 5px" title="Image"></font>
                                                    </div>

                                                    <div class="col-12 col-md-6">
                                                        <div typeof="Product" vocab="https://schema.org/">
                                                            <ul>
                                                                <li><font face="Exo"><span property="description">We accept Returns for your purchases wihtin 30 Days of Time period and We Do Provide you the cheapest return labels so you can easily return the item without any hesitations or High shipping cost for your return.</span></font></li>
                                                                <li><font face="Exo"><span property="description">We Offer Customers a Full Refund Instantly incase the buyer didn't recieved the item, if we found our the issue is from our side or the item was misplaced in-transit.</span></font></li>
                                                                <li><font face="Exo"><span property="description">Khazina Deals Try its best to provide our customers the finest and smoothest experience they can ever have and they can buy from us without eeven thinking for a second.</span></font></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="background: #FDFEFE; border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; color: #353535; line-height: 25px">
                                            <div class="container" style="border-top: 1px solid #F4F6F7; padding: 40px 0 40px 0">
                                                <div class="col-12 col-md-12">
                                                    <h2 style="color: #0a91ae; line-height: 45px"><font face="Exo">Details About Services</font></h2>

                                                    <hr style="background: #0a91ae; height: 1px; width: 10%" align="left">
                                                    <p><font face="Exo">This Section is for our customers that what they should expect from Khazina Deals.</font></p>

                                                    <ul style="color: #353535; line-height: 25px; font-size: 16px; margin-top: 30px">
                                                        <li><font face="Exo"><b>Shipping Time:</b> We Ship The items the same day to our Shipping carriers &amp; Provide us Trackings in 1 or 2 Business Days but sometimes 3 Dyas due to some issues / High work load.</font></li>
                                                        <li><font face="Exo"><b>Tracking Updates:</b> We Update Our Customers Regarding Tracking From The Time of Shipping Till The item Delivery &amp; in case of Any issues with your tracking or no update in tracking you can Update us ASAP, We Will Make sure the item is ont its way perfectly .</font></li>
                                                        <li><font face="Exo"><b>Return Labels:</b> We Provide Return Labels within 1 or 2 Business Days &amp; Kindly Contact us first that you want to return before opening the request so we can manage the thing on time.</font></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="border-left: 1px solid #0a91ae; border-right: 1px solid #0a91ae; border-bottom: 1px solid #0a91ae; color: #fff; line-height: 25px">
                                            <div class="col-12 col-md-12 element">
                                                <div class="container" style="padding: 20px 0 20px 0; font-size: 80%; text-align: center">
                                                    <p><font face="Exo">All Rights &amp; Trademarks are reserved by <b>© Khazina Deals</b>.</font></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </font>
                            </font>
                        </font>
                    </font>
                </font>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.btn-dark').on('click', function () {
        navigator.clipboard.writeText($('table')[0].outerHTML).then(function() {
            $('.btn-dark').removeClass('btn-dark').addClass('btn-success').text('Copied Successful!').blur();
            setTimeout(
                function() {
                    $('.btn-success').removeClass('btn-success').addClass('btn-dark').text('Copy To Clipboard');
                },
                3000,
            );
            console.log('Async: Copying to clipboard was successful!');
        }, function(err) {
            $('.btn-dark').removeClass('btn-dark').addClass('btn-danger').text('Copied Fail!').blur();
            setTimeout(
                function() {
                    $('.btn-danger').removeClass('btn-danger').addClass('btn-dark').text('Copy To Clipboard');
                },
                3000,
            );
            console.error('Async: Could not copy text: ', err);
        });
    })
</script>
