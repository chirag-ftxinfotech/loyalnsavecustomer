<?php include('head.php'); ?>
<style>
    #content {
        min-height: auto;
    }
    ul {
        padding: 0;
    }

    li {
        padding: 5px 0;
    }
    .svg-group {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    .svg-icon {
        margin-right: 25px;
        margin-top: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 120px;
        height: 120px;
        background: #d5d5d5;
        padding: 15px;
        transition: all 0.3s ease-in-out;
    }
    .svg-icon:hover {
        background: #fff;
        box-shadow: 0px 5px 10px rgba(0,0,0,.1);
    }

    .svg-icon svg {
        width: 32px;
        height: 32px;
        color: #000;
        fill: currentColor;
    }
    .style-guide {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        height: 100%;
    }
    .style-guide > div {
        height: 100vh;
        /* overflow-x: hidden;
        overflow-y: auto; */
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    .style-guide .sgSidebar {
        -ms-flex: 0 0 320px;
        flex: 0 0 320px;
        max-width: 320px;
        padding: 25px;
        border-right: 1px solid #f5f5f5;
        position: sticky;
        top: 0;
    }
    .sgSidebar li {
        font-size: 13px;
        font-weight: bold;
        color: #adadad;
        text-transform: uppercase;
    }
    .sgSidebar li a {
        font-size: 16px;
        font-weight: normal;
        text-transform: none;
    }
    .font-container {
        overflow-x: auto;
        overflow-y: hidden;
        margin-bottom: 40px;
        line-height: 1.3;
        white-space: nowrap;
        padding-bottom: 5px;
    }
    .font-title {
        position: relative;
        background: #444;
        font-size: 32px;
        color: #fff;
        padding: 10px 20px;
        margin: 0 0 12px;
    }
    .letters {
        font-size: 25px;
        margin-bottom: 20px;
    }
    .s10:before {
        content: '10px';
    }
    .s11:before {
        content: '11px';
    }
    .s12:before {
        content: '12px';
    }
    .s14:before {
        content: '14px';
    }
    .s18:before {
        content: '18px';
    }
    .s24:before {
        content: '24px';
    }
    .s30:before {
        content: '30px';
    }
    .s36:before {
        content: '36px';
    }
    .s48:before {
        content: '48px';
    }
    .s60:before {
        content: '60px';
    }
    .s72:before {
        content: '72px';
    }
    .s10:before, .s11:before, .s12:before, .s14:before,
    .s18:before, .s24:before, .s30:before, .s36:before,
    .s48:before, .s60:before, .s72:before {
        font-family: Arial, sans-serif;
        font-size: 10px;
        font-weight: normal;
        font-style: normal;
        color: #999;
        padding-right: 6px;
    }
    pre {
        display: block;
        padding: 9px;
        margin: 0 0 12px;
        font-family: Monaco, Menlo, Consolas, "Courier New", monospace;
        font-size: 13px;
        line-height: 1.428571429;
        color: #333;
        font-weight: normal;
        font-style: normal;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        overflow-x: auto;
        border-radius: 4px;
    }
    .navigation {
    background: radial-gradient(circle, rgb(87, 175, 220) 0%, rgb(43, 62, 110) 100%);
    height: 100vh;
    }

    .h500 {
        height: 500px;
    }
    .pages a {
        color: #666;
    }
    .pages a:hover {
        text-decoration: underline;
    }
    .pages a.active {
        color: #ff0988;
    }
</style>
</head>

<body>
    
    <!-- Page SVG -->
    <?php include('svg.php'); ?>
    <!-- Page SVG -->

    <?php /*include('header.php');*/ ?>    
    <main id="content">
        <div class="style-guide">
            <div class="sgSidebar">
                <ul>
                    <li>Navigation Link</li>
                    <li><a href="#pages">Pages</a></li>
                    <li><a href="#typography">Typography</a></li>
                    <li><a href="#button">Button</a></li>
                    <li><a href="#icon">Icon</a></li>
                    <li><a href="#navigation">Navigation</a></li>
                    <li><a href="#section">Section</a></li>
                    <li><a href="#animation">Animation</a></li>
                </ul>
            </div>
            <div class="sgcontent">
                <div class="container">
                    <h1 class="pt-5 pb-5 text-center">Loyal~n~Save</h1>                    
                    <!-- Start Pages Section -->
                    <h2 class="pt-5 pb-5 text-left" id="pages">Pages</h2>
                    <div class="row pages">
                        <div class="col-md-8">
                            <h4>Main Pages</h4>
                            <ul>
                                <li><a href="index.php" target="_blank" class="active">Homepage</a></li>
                                <li><a href="merchant-perks.php" target="_blank" class="active">Merchant Perks</a></li>
                                <li><a href="pricing.php" target="_blank" class="active">Pricing</a></li>
                                <li><a href="features.php" target="_blank" class="active">Features</a></li>
                                <li><a href="industries.php" target="_blank" class="active">Industries</a></li>
                                <li><a href="resources.php" target="_blank" class="active">Resources</a></li>
                                <li><a href="about-us.php" target="_blank" class="active">About us</a></li>
                                <li><a href="download-app.php" target="_blank" class="active">Download App</a></li>
                            </ul>
                            
                            <h4>About Us</h4>
                            <ul>
                                <li><a href="why-lns.php" target="_blank" class="active">Why LNS</a></li>
                                <li><a href="contact-us.php" target="_blank" class="active">Contact us</a></li>
                                <li><a href="faq.php" target="_blank" class="active">FAQs</a></li>
                            </ul>

                            <h4>Merchant Perks</h4>
                            <ul>
                                <li><a href="integration.php" target="_blank" class="active">API Integration</a></li>
                                <li><a href="#" target="_blank" class="active">Scan Data Loyalty</a></li>
                            </ul>
                        </div>
                        <div class="col-md-8">                            
                            <h4>Features</h4>
                            <ul>
                                <li><a href="umbrella-loyalty-program.php" target="_blank" class="active">Umbrella Loyalty Program</a></li>
                                <li><a href="user-engagement.php" target="_blank" class="active">User Engagement</a></li>
                                <li><a href="campaign-builder.php" target="_blank" class="active">Campaign Builder</a></li>
                                <li><a href="team-builder.php" target="_blank" class="active">Team Builder</a></li>
                                <li><a href="swag-shop.php" target="_blank" class="active">Swag Shop</a></li>
                            </ul>
                            <h4>Resources</h4>
                            <ul>
                                <li><a href="blog.php" target="_blank" class="active">Blog</a></li>
                                <li><a href="blog-details.php" target="_blank" class="active">Blog - Detail</a></li>
                                <li><a href="whitepapers.php" target="_blank" class="active">White Papers</a></li>
                                <li><a href="videos.php" target="_blank" class="active">Videos</a></li>
                                <li><a href="#">Release notes</a></li>
                                <li><a href="#">Release notes - Detail</a></li>
                            </ul> 
                        </div>
                        <div class="col-md-8">
                            <h4>Industries</h4>
                            <ul>
                                <li><a href="industry-restaurant.php" target="_blank" class="active">Restaurants</a></li>
                                <li><a href="#">Grocery</a></li>
                                <li><a href="#">Tobacco</a></li>
                                <li><a href="#">CBD</a></li>
                                <li><a href="#">Convenience Store</a></li>
                                <li><a href="#">Pet</a></li>
                                <li><a href="#">Salon & Spa</a></li>
                                <li><a href="#">Liquor</a></li>                                
                                <li><a href="#">Other</a></li>
                            </ul>                                       
                            <h4>CMS Content</h4>
                            <ul>
                                <li><a href="privacy-policy.php" target="_blank" class="active">Privacy Policy</a></li>
                                <li><a href="terms.php" target="_blank" class="active">Terms and Condition</a></li>
                                <li><a href="sitemap.php" target="_blank" class="active">Sitemap</a></li>
                            </ul>
                            <h4>Modal Popup</h4>
                            <ul>
                                <li><a href="#!" class="active" data-toggle="modal" data-target="#requestQuote">Schedule a Demo</a></li>
                                <li><a href="#!" class="active" data-toggle="modal" data-target="#whylnsVideo">Watch Video</a></li>
                                <li><a href="#!" class="active" data-toggle="modal" data-target="#scandatamodal">Scan Data Dialog</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Pages Section -->

                    <!-- Start Pages Section -->
                    <h2 class="pt-5 pb-5 text-left" id="typography">Typography</h2>
                    <h4>Font Family</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="font-title">Avenir Next Regular</h3>
                            <div class="font-container" style="font-family: 'Avenir Next'; font-weight: normal; font-style: normal;">
                                <p class="letters">
                                    abcdefghijklmnopqrstuvwxyz<br>
                                    ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                    0123456789.:,;()*!?'@#&lt;&gt;$%&^+-=~
                                </p>
                                <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="font-title">Avenir Next Medium</h3>
                            <div class="font-container" style="font-family: 'Avenir Next'; font-weight: 500; font-style: normal;">
                                <p class="letters">
                                    abcdefghijklmnopqrstuvwxyz<br>
                                    ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                    0123456789.:,;()*!?'@#&lt;&gt;$%&^+-=~
                                </p>
                                <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog.</p>
                            </div>
                        </div>                        
                        <div class="col-md-12">
                            <h3 class="font-title">Avenir Next Bold</h3>
                            <div class="font-container" style="font-family: 'Avenir Next'; font-weight: Bold; font-style: normal;">
                                <p class="letters">
                                    abcdefghijklmnopqrstuvwxyz<br>
                                    ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                    0123456789.:,;()*!?'@#&lt;&gt;$%&^+-=~
                                </p>
                                <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3 class="font-title">Avenir Next Demi Bold</h3>
                            <div class="font-container" style="font-family: 'Avenir Next'; font-weight: 600; font-style: normal;">
                                <p class="letters">
                                    abcdefghijklmnopqrstuvwxyz<br>
                                    ABCDEFGHIJKLMNOPQRSTUVWXYZ<br>
                                    0123456789.:,;()*!?'@#&lt;&gt;$%&^+-=~
                                </p>
                                <p class="s10" style="font-size: 10px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s11" style="font-size: 11px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s12" style="font-size: 12px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s14" style="font-size: 14px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s18" style="font-size: 18px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s24" style="font-size: 24px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s30" style="font-size: 30px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s36" style="font-size: 36px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s48" style="font-size: 48px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s60" style="font-size: 60px;">The quick brown fox jumps over the lazy dog.</p>
                                <p class="s72" style="font-size: 72px;">The quick brown fox jumps over the lazy dog.</p>
                            </div>
                        </div>
                    </div>
                    <h4>Heading</h4>
                    <h1>Heading H1: Loyal~n~Save</h1><br />
                    <h2>Heading H2: Loyal~n~Save</h2><br />
                    <h3>Heading H3: Loyal~n~Save</h3><br />
                    <p>Paragraph: Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                    <!-- End Pages Section -->

                    <!-- Start Button Section -->
                    <h2 class="pt-5 pb-5 text-left" id="button">Button</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Color</h4>
                            <a href="#" class="btn btn-primary">Primary Button</a><br /><br />
                            <a href="#" class="btn btn-secondary">Secondary Button</a><br /><br />
                            <a href="#" class="btn btn-tertiary">Tertiary Button</a>
                        </div>
                        <div class="col-md-8">
                            <h4>Sizes</h4>
                            <a href="#" class="btn btn-primary btn-sm">Small Button</a><br /><br />
                            <a href="#" class="btn btn-primary btn-lg">Large Button</a>
                        </div>
                        <div class="col-md-8">
                            <h4>Style</h4>
                            <a href="#" class="btn btn-primary btn-square">Square Button</a><br /><br />
                            <a href="#" class="btn btn-primary btn-rounded">Rounded Button</a>
                        </div>
                    </div>            
                    <!-- End Button Section -->

                    <!-- Start Icon Section -->
                    <h2 class="pt-5 pb-5 text-left" id="icon">Icon</h2>
                    <div class="row">
                        <div class="col-md-24">
                            <h4>SVG Icon</h4>
                            <div class="svg-group">
                                <div class="svg-icon"><svg class="svg svg-bar" aria-hidden="true" role="img"><use href="#svg-bar" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bar"></use></svg></div>
                                <div class="svg-icon"><svg class="svg svg-close" aria-hidden="true" role="img"><use href="#svg-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bar"></use></svg></div>
                                <div class="svg-icon"><svg class="svg svg-phone" aria-hidden="true" role="img"><use href="#svg-phone" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bar"></use></svg></div>
                                <div class="svg-icon"><svg class="svg svg-modal-close" aria-hidden="true" role="img"><use href="#svg-modal-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bar"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-logo" aria-hidden="true" role="img"><use href="#nav-logo" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-logo"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-contact" aria-hidden="true" role="img"><use href="#nav-contact" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-contactuse></svg></div>
                                <div class="svg-icon"><svg class="svg nav-integration" aria-hidden="true" role="img"><use href="#nav-integration" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-integration"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-umbrellaloyalty" aria-hidden="true" role="img"><use href="#nav-umbrellaloyalty" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-umbrellaloyalty"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-userengagement" aria-hidden="true" role="img"><use href="#nav-userengagement" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-userengagement"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-campaignbuilder" aria-hidden="true" role="img"><use href="#nav-campaignbuilder" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-campaignbuilder"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-teambuilder" aria-hidden="true" role="img"><use href="#nav-teambuilder" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-teambuilder"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-swagshop" aria-hidden="true" role="img"><use href="#nav-swagshop" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-swagshop"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-blog" aria-hidden="true" role="img"><use href="#nav-blog" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-blog"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-whitepapers" aria-hidden="true" role="img"><use href="#nav-whitepapers" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-whitepapers"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-videos" aria-hidden="true" role="img"><use href="#nav-videos" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-videos"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-releasenotes" aria-hidden="true" role="img"><use href="#nav-releasenotes" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-releasenotes"></use></svg></div>
                                <div class="svg-icon"><svg class="svg nav-arrrow-right" aria-hidden="true" role="img"><use href="#nav-arrrow-right" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-arrrow-right"></use></svg></div>
                            </div>
                        </div>
                    </div>            
                    <!-- End Icon Section -->

                    <!-- Start Navigation Section -->
                    <h2 class="pt-5 pb-5 text-left" id="navigation">Navigation</h2>
                    <div class="row" style="display: none;">
                        <div class="col-24">
                            <div class="navigation">
                                <nav id="menu">  
                                    <div class="menu-item menu-about-us highlight">
                                        <div class="menu-text">
                                            <a href="#">About Us</a>
                                        </div>
                                        <div class="sub-menu">
                                            <div class="sub-menu-links">
                                                <div class="icon-box gb a">
                                                    <div class="icon"><svg class="svg nav-logo" aria-hidden="true" role="img"><use href="#nav-logo" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-logo"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Why Loyal~n~Save?</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb b">
                                                    <div class="icon"><svg class="svg nav-contact" aria-hidden="true" role="img"><use href="#nav-contact" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-contact"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Contact Us</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb c">
                                                    <div class="icon"><svg class="svg nav-help" aria-hidden="true" role="img"><use href="#nav-help" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-help"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">FAQ’s</div>
                                                    </div>
                                                </div>

                                                <div class="sub-menu-bottom">
                                                    <a href="#">More About Us</a>
                                                </div>
                                            </div>
                                            <div class="sub-menu-content text-center">
                                                <h4>Need a Custom Solution?</h4>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-tertiary btn-block">Call Us</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-secondary btn-block">Email Us</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item menu-merchant-perks highlight">
                                        <div class="menu-text">
                                            <a href="#">Merchant Perks</a>
                                        </div>
                                        <div class="sub-menu">
                                            <div class="sub-menu-links">
                                                <div class="icon-box gb a">
                                                    <div class="icon"><svg class="svg nav-integration" aria-hidden="true" role="img"><use href="#nav-integration" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-integration"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Integration</div>
                                                    </div>
                                                </div>
                                                <div class="sub-menu-bottom">
                                                    <a href="#">More Merchant Perks</a>
                                                </div>
                                            </div>
                                            <div class="sub-menu-content text-center">
                                                <h4>Need a Custom Solution?</h4>
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-tertiary btn-block">Call Us</a>
                                                    </div>
                                                    <div class="col-6">
                                                        <a href="#" class="btn btn-secondary btn-block">Email Us</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item menu-features highlight">
                                        <div class="menu-text">
                                            <a href="#">Features</a>
                                        </div>
                                        <div class="sub-menu">
                                            <div class="sub-menu-links">
                                                <div class="icon-box gb a">
                                                    <div class="icon"><svg class="svg nav-umbrellaloyalty" aria-hidden="true" role="img"><use href="#nav-umbrellaloyalty" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-umbrellaloyalty"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Umbrella Loyalty Program</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb b">
                                                    <div class="icon"><svg class="svg nav-userengagement" aria-hidden="true" role="img"><use href="#nav-userengagement" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-userengagement"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">User Engagement</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb c">
                                                    <div class="icon"><svg class="svg nav-campaignbuilder" aria-hidden="true" role="img"><use href="#nav-campaignbuilder" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-campaignbuilder"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Campaign Builder</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb d">
                                                    <div class="icon"><svg class="svg nav-teambuilder" aria-hidden="true" role="img"><use href="#nav-teambuilder" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-teambuilder"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Team Builder</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb e">
                                                    <div class="icon"><svg class="svg nav-swagshop" aria-hidden="true" role="img"><use href="#nav-swagshop" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-swagshop"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Swag Shop</div>
                                                    </div>
                                                </div>

                                                <!-- <div class="sub-menu-bottom">
                                                    <a href="#">More Features</a>
                                                </div> -->
                                            </div>
                                            <div class="sub-menu-content text-center">
                                                <br /><br /><br /><br /><br /><br />
                                                <div class="nav-img-download-app">
                                                    <h4>Download App</h4>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <a href="#"><img src="assets/img/new/nav-img-googleplay.png" alt="" /></a>
                                                        </div>
                                                        <div class="col-6">
                                                            <a href="#"><img src="assets/img/new/nav-img-appstore.png" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item menu-resources highlight">
                                        <div class="menu-text">
                                            <a href="#">Resources</a>
                                        </div>
                                        <div class="sub-menu">
                                            <div class="sub-menu-links">
                                                <div class="icon-box gb a">
                                                    <div class="icon"><svg class="svg nav-blog" aria-hidden="true" role="img"><use href="#nav-blog" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-blog"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Blog</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb b">
                                                    <div class="icon"><svg class="svg nav-whitepapers" aria-hidden="true" role="img"><use href="#nav-whitepapers" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-whitepapers"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">White Papers</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb c">
                                                    <div class="icon"><svg class="svg nav-videos" aria-hidden="true" role="img"><use href="#nav-videos" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-videos"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Videos</div>
                                                    </div>
                                                </div>
                                                <div class="icon-box gb d">
                                                    <div class="icon"><svg class="svg nav-releasenotes" aria-hidden="true" role="img"><use href="#nav-releasenotes" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#nav-releasenotes"></use></svg></div>
                                                    <div class="text">
                                                        <div class="title">Release Notes</div>
                                                    </div>
                                                </div>

                                                <div class="sub-menu-bottom">
                                                    <a href="#">More Resources</a>
                                                </div>
                                            </div>
                                            <div class="sub-menu-content text-center">
                                                <p><img src="assets/img/new/nav_img_laptop.png" alt="" /></p>
                                                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="#" class="btn btn-primary">Get In Touch</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-text">
                                            <a href="#">Pricing</a>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <div class="menu-text">
                                            <a href="#">Download App</a>
                                        </div>
                                    </div>
                                    <div id="sub-menu-container">
                                        <div id="sub-menu-holder">
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Navigation Section -->

                    <!-- Start Structure Section -->
                    <h2 class="pt-5 pb-5 text-left" id="section">Section</h2>
                    <div class="row">
                        <div class="col-24">

                            <section class="section-content">
                                <div class="container">
                                    <div class="row align-items-center rs-section">
                                        <div class="col-24 col-md-10 rs-text">
                                            <div class="header-title-1">
                                                <h3 class="title">Left Content and Right Image</h3>
                                                <p>The Loyal~n~Save development team has designed APIs that can be easily integrated with your business's existing POS system. Our APIs have been designed with the customer in mind; your tech team has the ability to make any design changes to make sure the integration is seamless.</p>
                                                <p>With the Loyal~n~Save API integration seamlessly working with your POS system, you have the ability to launch loyalty campaigns, point-based discounts, and customer referrals faster and easier with programmable building blocks.</p>
                                            </div>                        
                                        </div>
                                        <div class="col-24 col-md-12 offset-md-1 rs-img">
                                            <div class="text-center">
                                                <img src="assets/img/new/api-solution.jpg" alt="" />
                                            </div>
                                        </div>
                                    </div>                              
                                </div>
                            </section>

                            <section class="section-content">
                                <div class="container">
                                    <div class="row align-items-center rs-section">                    
                                        <div class="col-24 col-md-12 rs-img">
                                            <div class="text-center">
                                                <img src="assets/img/new/developer-driven.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-24 col-md-10 offset-md-1 rs-text">
                                            <div class="header-title-1">
                                                <h3 class="title">Left Image and Right Content</h3>
                                                <p>The Loyal~n~Save team of developers designed our APIs with the consumer in mind. Our interface is easy to use and is designed to work seamlessly with your POS system.</p>
                                                <p><a href="#!" class="btn btn-primary">Submit</a></p>
                                            </div>                        
                                        </div>
                                    </div>                              
                                </div>
                            </section>

                            <section class="section-client">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-24 col-md-12 offset-md-6">
                                            <div class="header-title-1 text-center">                            
                                                <h3 class="title">Meet Our Fantastic <br />Community of Loyal Clients</h3>
                                                <p class="description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                            </div>
                                            <p class="text-center"><a href="#"><img src="assets/img/new/smokers-choice-logo.png"></a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#"><img src="assets/img/new/cbd-logo.png"></a></p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="section-testimonial">
                                <div class="container">
                                    <div class="header-title-1 text-center">
                                        <h3 class="title">What Our Clients Say is Extremely <br /> Important to Us </h3>
                                    </div>
                                </div>

                                <div class="slick-client">
                                    <?php for ($x = 0; $x <= 4; $x++) { ?>
                                    <div class="client-box">
                                        <div class="image">
                                            <img src="assets/img/new/smokerschoice.jpg" alt="" />
                                        </div>
                                        <div class="text">
                                            <p>Our problem solved: a way to communicate and engage with our customers on a platform they actually use. We use social media like Instagram and Facebook, but we just don't get the participation rates we want. Loyal~n~Save gives us the credibility and voice we needed to increase our customer engagement.</p>
                                            <h4>Smokers Choice</h4>
                                        </div>
                                    </div>
                                    <?php } ?>                
                                </div> 

                            </section>

                        </div>
                    </div>
                    <!-- End Structure Section -->

                    <!-- Start Animation Section -->
                    <h2 class="pt-5 pb-5 text-left" id="animation">Animation</h2>
                    <div class="row">
                        <div class="col-24">
                            <div class="h500 p5 animated-row">
                                <h1 class="animate" data-animate="fadeInLeft">Hello World</h1>
                                <p class="animate" data-animate="fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Animation Section -->
                    
                    <!-- Start SECTION_NAME Section -->
                    <?php for ($x = 0; $x <= 5; $x++) { ?>
                        Multiple Condition
                    <?php } ?>
                    <!-- End SECTION_NAME Section -->
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <style>
                    #sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; }
                    #sortable li { background: #fff; border: none; outline: 2px dashed transparent; margin: 15px 25px 15px 0; padding: 0; float: left; width: 320px; height: 200px; border-radius: 8px; box-shadow: 0 3px 10px rgba(0,0,0,0.1);  overflow: hidden; }
                    #sortable li.ui-sortable-placeholder { background: #fffad6; outline-style: dashed; outline-color: #dfbd0f; visibility: visible !important; }
                    .ins .thumb { height: 120px; overflow: hidden; position: relative; }
                    .ins .thumb img { width: 320px; position: absolute; top: 50%; transform: translateY(-50%); }
                    .ins .info { padding: 20px; }
                    .ins .info a { display: block; }
                    .ins .info h4 { margin: 0; padding: 0; font-size: 18px; font-weight: 600; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
                    .ins .info p { margin: 0; padding: 0; font-size: 14px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
                    </style>
                    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
                    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
                    <script>
                        $(function() {
                            $( "#sortable" ).sortable();
                            $( "#sortable" ).disableSelection();
                        } );
                    </script>
                    <ul id="sortable">
                        <?php for ($x = 1; $x <= 12; $x++) { ?>
                            <li class="ui-state-default">
                                <div class="ins">
                                    <div class="thumb">
                                        <img src="https://via.placeholder.com/200" alt="" />
                                    </div>
                                    <div class="info">
                                        <h4>Google Info <?php echo $x; ?></h4>
                                        <p>www.google.com</p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                    <div style="height: 1000px;"></div>
                </div>
            </div>
        </div>        
    </main>
    <?php /*include('footer.php');*/ ?>
    <?php include('js.php'); ?>

    <!-- Request a Quote Demo -->
    <div class="modal fade" id="requestQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">    
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><svg class="svg svg-modal-close" aria-hidden="true" role="img"><use href="#svg-modal-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-modal-close"></use></svg></button>
                <div class="modal-image">
                    <div class="mi-inner">
                        <div class="mb-3"><img src="assets/img/new/logo-black.png" alt="" /></div>
                        <h3>Sed ut Perspiciatis Unde</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt sed do eiusmod Lorem ipsum dolor sit amet, consectetur</p>
                        <p class="mt-3"><img src="http://placehold.it/500" alt="" /></p>
                    </div>
                </div>
                <div class="modal-body">                
                    <form class="form">
                        <div class="row">
                            <div class="col-24">
                                <div class="form-title">
                                    <h3>Get In Touch</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt sed do eiusmod</p>
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-field">
                                    <label>Name <small>*</small></label>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-field">
                                    <label>Email <small>*</small></label>
                                    <input type="email" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-field">
                                    <label>Phone <small>*</small></label>
                                    <input type="tel" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-field">
                                    <label>Company <small>*</small></label>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-field">
                                    <label>Message <small>*</small></label>
                                    <textarea class="form-control" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-field">
                                    <p>By clicking the “Get Started” button below I agree to the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>
                                </div>
                            </div>
                            <div class="col-24">
                                <div class="form-action text-center">
                                    <button class="btn btn-secondary btn-block">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Request a Quote Demo -->

    <!-- Video Demo -->
    <div class="modal fade" id="whylnsVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">    
        <div class="modal-dialog modal-fullscreen" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><svg class="svg svg-modal-close" aria-hidden="true" role="img"><use href="#svg-modal-close" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-modal-close"></use></svg></button>                
                <div class="modal-body row align-items-center">
                    <div class="container">
                        <iframe width="100%" height="640" src="https://www.youtube.com/embed/eTV1WT-Cjms?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Demo -->

    <!-- Scan Data Modal Demo -->
    <div class="modal fade" id="scandatamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">    
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <p><a href="#"><img src="assets/img/new/scan-data-modal.png" alt="Exciting Reward Tokens" /></a></p>
                <!-- <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">Close</button>
                    <h2>Important Announcement</h2>
                    <p><img src="assets/img/new/existing-reward-tokens.jpg" alt="Exciting Reward Tokens" /></p>
                    <p>Altria Group Distribution Company(AGDC) has rolled out Digital Trade Program, and Loyal-n-Save can help you make the most of the newly rolled our DTP.</p>
                    <p>One of Alteria's DTP's essential requirements is having a digital loyaly solution provider. With Loyal-n-Save by your side, you've already fulfilled that requirement. Loyal-n-Save's experienced team is trained to help tobacco and convenience store retailers qualify for all the 3 Altria DTP 2022.</p>
                    <p class="text-center"><a href="#" class="btn btn-primary btn-square btn-lg">Click Here to Get Started</a></p>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Scan Data Modal Demo -->

    

    <script>
        $(document).ready(function() {
            jQuery("#scandatamodal").modal('show');

            $('.slick-client').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                centerMode: true,
                centerPadding: '250px',
                /*infinite: false,*/
            });

        })
    </script>
</body>

</html>