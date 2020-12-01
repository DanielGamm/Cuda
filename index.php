<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
    integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,400;0,700;1,300;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Cuda</title>
    
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/> -->
    <!-- подключаем jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</head>
<body>
    <!-- sprite -->
    <svg style="display: none;">
        <symbol id="facebook-icon"   viewBox="0 0 455.73 455.73">
            <g>
                <path d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475
	h62.025v64.622h-44.382c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z"/>
            </g>
        </symbol>
        <symbol id="twitter-icon" viewBox="0 0 512 512"  >
            <g>
                <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                    c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                    c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                    c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                    c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                    c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                    C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                    C480.224,136.96,497.728,118.496,512,97.248z"/>
            </g>
        </symbol>
        <symbol id="google-icon"  viewBox="0 0 455.731 455.731">
            <g>
                <path d="M0,0v455.73h455.73V0H0z M265.67,247.037c-7.793,51.194-45.961,80.543-95.376,80.543
                c-55.531,0-100.552-45.021-100.552-100.552c0-55.517,45.021-100.538,100.552-100.538c26.862,0,50.399,9.586,67.531,26.226
                l-28.857,28.857c-9.773-9.846-23.147-15.094-38.674-15.094c-32.688,0-59.189,27.874-59.189,60.548
                c0,32.703,26.501,59.768,59.189,59.768c27.397,0,48.144-13.243,54.129-39.758h-54.129v-40.38h95.131
                c1.142,6.506,1.72,13.315,1.72,20.37C267.144,234.025,266.638,240.69,265.67,247.037z M386.419,234.517h-35.233v35.218H326.16
                v-35.218h-35.233v-25.041h35.233v-35.233h25.026v35.233h35.233V234.517z"/>
            </g>
        </symbol>
        <symbol id="linkedin-icon"   viewBox="0 0 455.731 455.731" >
            <g>
                <path d="M0,0v455.731h455.731V0H0z M139.94,375.963c0,5.804-4.705,10.509-10.509,10.509H84.71c-5.804,0-10.509-4.705-10.509-10.509
                V185.18c0-5.804,4.705-10.509,10.509-10.509h44.721c5.804,0,10.509,4.705,10.509,10.509V375.963z M106.998,145.491
                c-20.308,0.411-38.155-16.551-38.151-38.188c0-20.985,17.282-38.105,38.408-38.088c20.873,0.017,38.088,17.257,38.043,38.234
                C145.248,129.413,127.02,145.969,106.998,145.491z M386.884,382.153c0,2.41-1.954,4.363-4.364,4.362l-57.152-0.014
                c-2.409-0.001-4.362-1.954-4.362-4.363V264.331c0-10.183-4.126-19.407-10.802-26.079c-6.764-6.768-16.149-10.916-26.501-10.799
                c-20.279,0.229-36.454,17.068-36.454,37.348v117.323c0,2.41-1.954,4.363-4.364,4.362l-57.011-0.014
                c-2.409-0.001-4.361-1.954-4.361-4.362V179.034c0-2.409,1.953-4.363,4.363-4.363h55.795c2.409,0,4.363,1.953,4.363,4.363v23.418
                c0.005-0.01,0.225,0.018,0.599,0.075c1.078-1.95,2.252-3.839,3.52-5.658c11.628-16.688,30.96-27.606,52.842-27.606h11.47
                c39.996,0,72.42,32.423,72.42,72.42V382.153z"/>
            </g>
        </symbol>
        <symbol id="dribbble-icon"   viewBox="0 0 455.731 455.731" >
            <g>
            	<path d="M217.947,179.593c-27.654-50.295-53.098-82.935-53.098-82.935c-40.088,19.289-69.979,56.404-79.386,101.065h0.009
		C85.472,197.723,151.346,198.738,217.947,179.593z"/>
	<path d="M324.394,118.984l0.009-0.009c-25.686-22.793-59.504-36.629-96.537-36.629c-11.662,0-23.009,1.375-33.88,3.971
		c0,0,26.585,30.906,54.589,82.899C277.594,157.725,304.772,141.598,324.394,118.984z"/>
	<path d="M139.648,343.611c24.482,18.679,55.047,29.774,88.218,29.774c19.712,0,38.516-3.917,55.658-11.033
		c-5.481-38.381-16.99-75.837-30.789-109.951C204.47,267.379,164.139,300.414,139.648,343.611z"/>
	<path d="M242.285,228.045c-3.773-8.302-7.637-16.343-11.509-24.078c-37.483,11.877-86.151,20.422-148.386,20.089h-0.009
		c-0.027,1.267-0.045,2.534-0.045,3.809c0,37.492,14.177,71.668,37.465,97.471C147.33,279.732,190.697,244.765,242.285,228.045z"/>
	<path d="M0,0v455.731h455.731V0H0z M227.866,400.357c-95.27,0-172.491-77.23-172.491-172.491S132.595,55.375,227.866,55.375
		c95.261,0,172.491,77.23,172.491,172.491S323.127,400.357,227.866,400.357z"/>
	<path d="M282.913,245.592c11.338,31.194,20.736,65.936,25.785,103.293c32.416-21.688,55.631-56.063,62.54-96.025
		c-18.912-6.046-39.064-9.299-59.98-9.299C301.636,243.561,292.167,244.253,282.913,245.592z"/>
	<path d="M341.024,136.387c0,0-21.437,31.328-80.356,56.53c4.214,8.742,8.382,17.933,12.407,27.537
		c12.407-2.138,25.165-3.252,38.184-3.252c21.554,0,42.397,3.055,62.118,8.751c-0.44-33.925-12.488-65.047-32.344-89.574
		L341.024,136.387z"/>
            </g>
        </symbol>
        <symbol id="behance-icon"   viewBox="0 0 455.731 455.731" >
            <g>
                <path d="M176.611,179.483c0-25.627-28.941-24.964-28.941-24.964H98.625v49.929h49.045
                C147.67,204.448,176.611,205.11,176.611,179.483z"/>
            <path d="M325.47,204.889c-17.674,0-32.334,13.229-35.127,33.978h70.254C357.804,218.118,343.144,204.889,325.47,204.889z"/>
            <path d="M150.657,238.24H98.625v59.544h52.032c0,0,34.517,0.795,34.517-29.772S150.657,238.24,150.657,238.24z"/>
            <path d="M0,0v455.731h455.731V0H0z M280.887,131.101h88.812v22.092h-88.812V131.101z M196.273,326.84
                c-12.239,6.036-27.58,7.927-41.976,7.927H50.684V116.962c0,0,99.858,0,113.997,0s57.812,8.395,58.059,50.371
                c0.168,29.021-16.26,42.285-29.984,48.639c0,0,36.214,10.79,39.086,42.824C234.714,290.829,228.97,310.712,196.273,326.84z
                 M404.569,266.748H290.608h-0.265c-1.06,25.185,17.321,40.173,38.22,40.173c14.811,0,27.828-7.856,35.33-21.173h37.389
                c-10.26,37.442-40.403,53.022-75.989,53.022c-46.615,0-79.753-37.389-79.753-83.509s35.71-83.509,79.753-83.509
                s79.754,37.389,79.754,83.509C405.047,259.246,404.888,263.081,404.569,266.748z"/>
            </g>
        </symbol>
        <symbol id="github-icon"  viewBox="0 0 568.034 568.034" >
            <g>
                <path d="M550.99,0H17.051C8.948,0,2.381,6.567,2.381,14.67v538.694c0,8.104,6.567,14.67,14.67,14.67h177.498v-0.129
                    c8.011-0.092,14.149-4.577,14.431-12.166c0.728-19.725,0.214-39.492,0.214-58.562c-14.296,0.667-27.944,2.473-41.438,1.695
                    c-29.762-1.714-52.632-14.413-64.493-43.556c-7.026-17.265-17.613-32.032-34.101-41.886c-3.079-1.842-5.771-4.554-8.127-7.308
                    c-3.079-3.592-2.503-7.282,2.362-8.268c4.908-0.998,10.27-1.695,15.11-0.79c19.009,3.568,32.154,15.49,42.216,31.347
                    c19.896,31.371,50.521,40.974,84.976,26.487c1.921-0.808,4.363-2.766,4.725-4.553c2.778-13.887,7.968-26.549,18.427-37.65
                    c-11.628-2.154-22.399-3.739-32.962-6.188c-30.417-7.038-57.742-19.7-77.724-44.848c-16.303-20.514-23.758-44.528-27.185-70.086
                    c-5.367-40.031-0.563-77.503,26.928-109.493c1.389-1.616,2.142-4.927,1.524-6.94c-6.885-22.497-5.833-44.805,0.991-67.051
                    c3.581-11.683,4.578-12.265,16.5-10.637c0.729,0.098,1.438,0.281,2.161,0.404c23.898,3.954,44.468,15.526,64.731,27.95
                    c2.724,1.671,6.873,2.711,9.866,1.983c48.397-11.744,96.702-11.695,145.093,0.043c2.809,0.679,6.561-0.288,9.247-1.695
                    c11.016-5.759,21.561-12.454,32.718-17.914c12.98-6.346,26.652-11.12,41.371-10.857c2.576,0.049,6.561,2.509,7.423,4.786
                    c8.856,23.464,10.723,47.375,3.666,71.794c-0.753,2.607,0.367,6.322,1.769,8.892c6.965,12.779,16.689,24.572,21.096,38.127
                    c13.434,41.316,8.538,82.229-9.749,121.06c-16.757,35.594-47.834,53.63-84.621,62.933c-12.424,3.14-25.153,5.049-38.556,7.681
                    c17.564,18.348,20.318,40.74,20.006,64.192c-0.324,24.192-0.238,48.391-0.251,72.589c-0.006,11.72,5.11,18.195,14.039,18.574
                    c-0.006,0.037,188.723,0.037,188.723,0.037V14.67C565.653,6.567,559.087,0,550.99,0z"/>
            </g>
        </symbol>
    </svg>

    <!-- /sprite -->
     <!-- header -->
    <header class="header" id="header">
        <div class="container header__container">
            <div class="header__inner">
                <div class="logo">
                    <img src="img/logo.png" alt="logo">
                </div>
                <nav class="header__menu" id="nav">
                    <a class="header__link header__active" href="#" data-scroll="#welcome">Home</a>
                    <a class="header__link" href="#" data-scroll="#testimonials">About</a>
                    <a class="header__link" href="#" data-scroll="#portfolio">WORK</a>
                    <a class="header__link" href="#" data-scroll="#team">Blog</a>
                    <a class="header__link" href="#" data-scroll="#touch">Contact</a>
                </nav>
                <div class="burger" id="navToggle">
                    <span class="burger__item">menu</span>
                </div>
            </div>
        </div>
    </header>
     <!-- welcome -->
        <section class="welcome" id="welcome">
            <div class="container">
                <div class="welcome__inner">
                    <h1 class="welcome__title">
                        Hi there! We are the new kids on the block 
                        and we build awesome websites and mobile apps.</h1>
                        <div class="btn__welcome">
                            <a href="#" class="btn btn--red">WORK WITH US!</a>
                        </div>
                        
                </div>
            </div>
        </section>
   
         <!-- services -->
    <section class="services" id="services">
        <div class="container">
            <div class="services__inner">
                <h1 class="services__title"> SERVICES WE PROVIDE</h1>
                <h2 class="services__subtitle">We are working with both individuals and businesses from all over the globe to create awesome websites and applications.</h2>
            </div>
            <div class="services__items">
                <div class="services__item">
                    <div class="services__imgblk">
                        <img src="img/services/serv1.png" alt="Branding">
                    </div>
                    <h2 class="services__item__title">Branding</h2>
                    <div class="services__item__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</div>
                </div>
                <div class="services__item">
                    <div class="services__imgblk">
                        <img src="img/services/serv2.png" alt="Design">
                    </div>
                    <h2 class="services__item__title">Design</h2>
                    <div class="services__item__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem  </div>
                </div>
                <div class="services__item">
                    <div class="services__imgblk">
                        <img src="img/services/serv3.png" alt="Development">
                    </div>
                    <h2 class="services__item__title">Development</h2>
                    <div class="services__item__description">At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</div>
                </div>
                <div class="services__item">
                    <div class="services__imgblk">
                        <img src="img/services/serv4.png" alt="ROCKET SCIENCE">
                    </div>
                    <h2 class="services__item__title">ROCKET SCIENCE</h2>
                    <div class="services__item__description">Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</div>
                </div>
            </div>
        </div>
    </section> 

       <!-- team -->
    <section class="team" id="team">
        <div class="container">
            <div class="team__inner">
                <h1 class="team__title">MEET OUR BEAUTIFUL team</h1>
                <p class="team__subtitle">We are a small team of designers and developers, who help brands with big ideas.</p>
            </div>
            <div class="team__items" id="teamSlider">
                <div>
                    <div class="team__item">
                        <div class="team__imgblk">
                            <img src="img/team/team1.jpg" alt="photo">
                        </div>    
                            <h1 class="team__item__title">ANNE HATHAWAY</h1>
                            <h2 class="team__item__subtitle">CEO / Marketing Guru</h2>
                            <p class="team__item__description">Lorem ipsum dolor sit amet, 
                                consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna.</p>
                            <div class="team__item__icons">
                                <div class="team__item__icon"><img src="img/team/icons/Fb icon.png" alt="Fb"></div>
                                <div class="team__item__icon"><img src="img/team/icons/Twitter icon.png " alt="Twitter"></div>
                                <div class="team__item__icon"><img src="img/team/icons/LinkedIn icon.png" alt="LinkedIn"></div>
                                <div class="team__item__icon"><img src="img/team/icons/Mail icon.png" alt="Mail"></div>
                            </div>
                    </div>
                </div>
                <div> 
                    <div class="team__item">
                        <div class="team__imgblk">
                            <img src="img/team/team2.jpg" alt="photo">
                        </div>    
                            <h1 class="team__item__title">Kate Upton</h1>
                            <h2 class="team__item__subtitle">Creative Director</h2>
                            <p class="team__item__description">Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident.</p>
                            <div class="team__item__icons2">
                                <div class="team__item__icon2"><img src="img/team/icons/Twitter icon.png " alt="Twitter"></div>
                                <div class="team__item__icon2"><img src="img/team/icons/LinkedIn icon.png" alt="LinkedIn"></div>
                                <div class="team__item__icon2"><img src="img/team/icons/Mail icon.png" alt="Mail"></div>
                            </div>
                    </div>
                </div>
                <div>
                    <div class="team__item">
                        <div class="team__imgblk">
                            <img src="img/team/team3.jpg" alt="photo">
                        </div>    
                            <h1 class="team__item__title">Olivia Wilde</h1>
                            <h2 class="team__item__subtitle">Lead Designer</h2>
                            <p class="team__item__description">Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem nesciunt.</p>
                            <div class="team__item__icons">
                                <div class="team__item__icon"><img src="img/team/icons/Fb icon.png" alt="Fb"></div>
                                <div class="team__item__icon"><img src="img/team/icons/Twitter icon.png " alt="Twitter"></div>
                                <div class="team__item__icon"><img src="img/team/icons/LinkedIn icon.png" alt="LinkedIn"></div>
                                <div class="team__item__icon"><img src="img/team/icons/Mail icon.png" alt="Mail"></div>
                            </div>
                    </div>
                </div>
                <div>
                    <div class="team__item">
                        <div class="team__imgblk">
                            <img src="img/team/team4.jpg" alt="photo">
                        </div>    
                            <h1 class="team__item__title">Ashley Greene</h1>
                            <h2 class="team__item__subtitle">SEO / Developer</h2>
                            <p class="team__item__description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                            <div class="team__item__icons2">
                                <div class="team__item__icon2"><img src="img/team/icons/Fb icon.png" alt="Fb"></div>
                                <div class="team__item__icon2"><img src="img/team/icons/Twitter icon.png " alt="Twitter"></div>
                                <div class="team__item__icon2"><img src="img/team/icons/Mail icon.png" alt="Mail"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

         <!-- skills -->
    <section class="skills" id="skills">
        <div class="container">
            <div class="skills__inner">
                <h1 class="skills__title">WE GOT SKILLS!</h1>
                <p class="skills__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                    tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="skills__items">
                <div class="skills__item">
                    <div class="skills__imgblk">
                        <img src="img/skills/1.png" alt="90%">
                    </div>
                    <div class="skills__item__title">Web Design</div>
                </div>
                <div class="skills__item">
                    <div class="skills__imgblk">
                        <img src="img/skills/2.png" alt="75%">
                    </div>
                    <div class="skills__item__title">HTML / CSS</div>
                </div>
                <div class="skills__item">
                    <div class="skills__imgblk">
                        <img src="img/skills/3.png" alt="70%">
                    </div>
                    <div class="skills__item__title">GRAPHIC DESIGN</div>
                </div>
                <div class="skills__item">
                    <div class="skills__imgblk">
                        <img src="img/skills/4.png" alt="80%">
                    </div>
                    <div class="skills__item__title">UI / UX</div>
                </div>
            </div>
        </div>
    </section>

        <!-- portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="portfolio__inner">
                <h1 class="portfolio__title">OUR PORTFOLIO</h1>
                <p class="portfolio__subtitle">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet
                    consectetur, adipisci velit, sed quia non numquam</p>
                <nav class="portfolio__nav">
                        <a class="portfolio__nav__item portfolio__nav__active">ALL</a>
                        <a class="portfolio__nav__item">WEB</a>
                        <a class="portfolio__nav__item">APPS</a>
                        <a class="portfolio__nav__item">ICONS</a>
                </nav> 
           </div>
           <div class="portfolio__items">
               <div class="portfolio__item">
                    <div class="portfolio__imgblk">
                        <img src="img/portfolio/portfolio1.png" alt="">   
                    </div>
                    <div class="portfolio__imgblk__title">Isometric Perspective Mock-Up</div>
               </div>
               <div class="portfolio__item">
                    <div class="portfolio__imgblk">
                        <img src="img/portfolio/portfolio2.png" alt=""> 
                    </div>
                    <div class="portfolio__imgblk__title">Time Zone App UI</div>
               </div>
               <div class="portfolio__item">
                    <div class="portfolio__imgblk">
                        <img src="img/portfolio/portfolio3.png" alt="">
                    </div>
                    <div class="portfolio__imgblk__title">Viro Media Players UI</div>
               </div>
               <div class="portfolio__item">
                    <div class="portfolio__imgblk">
                        <img src="img/portfolio/portfolio4.png" alt="">
                    </div>
                    <div class="portfolio__imgblk__title">Blog / Magazine Flat UI Kit</div>
               </div>
           </div>
           <div class="portfolio__btn">
               <a href="#" class="btn btn--green">LOAD MORE PROJECTS</a>
           </div>
        </div> 
    </section>

    <!-- testimonials --> 
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="testimonials__inner">
                <h1 class="testimonials__title">WHAT POEPLE SAY ABOUT US</h1>
                <p class="testimonials__subtitle">Our clients love us!</p>
            </div>
            <div class="testimonials__items" id="testimonialsSlider">
                <div>
                    <div class="testimonials__item">
                        <div class="testimonials__photo"><img src="img/team/team1.jpg" alt="Chanel Iman"></div>
                        <div class="testimonials__quote">
                            <p>“Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
                        </div>
                        <div class="testimonials__description">
                             <div class="testimonials__name">
                                Chanel Iman
                             </div>
                             <div class="testimonials__position">
                                CEO of Pinterest
                             </div>
                         </div>
                    </div>
                </div>
                <div>
                    <div class=" testimonials__item">
                        <div class="testimonials__photo"><img src="img/team/team2.jpg" alt="Chanel Iman"></div>
                        <div class="testimonials__quote">
                            <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                        </div>
                        <div class="testimonials__description">
                            <div class="testimonials__name">
                                ADRIANA LIMA
                            </div>
                            <div class="testimonials__position">
                                Founder of Instagram
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials__item">
                        <div class="testimonials__photo"><img src="img/team/team3.jpg" alt="Chanel Iman"></div>
                        <div class="testimonials__quote">
                            <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                         </div>
                        <div class="testimonials__description">
                            <div class="testimonials__name">
                                ANNE HATHAWAY
                            </div>
                            <div class="testimonials__position">
                                Lead Designer at Behance
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="testimonials__item">
                        <div class="testimonials__photo"><img src="img/team/team4.jpg" alt="Chanel Iman"></div>
                        <div class="testimonials__quote">
                            <p>Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem cursus neque.”</p>
                         </div>                    
                        <div class="testimonials__description">
                            <div class="testimonials__name">
                                EMMA STONE
                            </div>
                            <div class="testimonials__position">
                                Co-Founder of Shazam
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>
  
    <!-- touch -->
    <section class="touch" id="touch">
        <div class="container">
            <div class="touch__inner">
                <h1 class="touch__title">GET IN TOUCH</h1>
                <p class="touch__subtitle">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111
                </p>
            </div>
            <div class="touch__inputs">
                <form action="#" method="GET" class="touch__boxs">
                <div class="touch__item">
                    <input id="name" class="touch__box touch__boxEmail" type="text" name="username"  required="required">
                    <label for="name">Your Name<span> *</span></label>
                </div>
                <div class="touch__item">
                    <input id="email"class="touch__box touch__boxName" type="text" name="email" required>
                    <label for="email">Your Email<span> *</span></label>
                </div>
                <div class="touch__textarea">
                    <textarea id="massage" class="touch__box2-messagee" cols="" rows="" name="Messagee" required></textarea>
                    <label for="massage">Your Message<span> *</span></label>
                </div>
                </form>
                <div class="touch__btn">
                    <a href="#" class="btn btn--turquoise ">SEND MESSAGE</a>
                </div>
              
            </div>    
        </section> 
        </div>

<!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer__socialMedia">
                <ul class="footer__list--socialMedia">
                    <li><a class="footer__item facebook" href="#">Facebook</a></li>
                    <li><a class="footer__item twitter" href="#">Twitter</a></li>
                    <li><a class="footer__item google" href="#">Google+</a></li>
                    <li><a class="footer__item linkedIn" href="#">LinkedIn</a></li>
                    <li><a class="footer__item behance" href="#">Behance</a></li>
                    <li><a class="footer__item dribbble" href="#">Dribbble</a></li>
                    <li><a class="footer__item gitHub" href="#">GitHub</a></li>
                </ul>
            </div>
        </div>
    </footer>                    
<footer class="footer__sprite">
    <div class="container">
        <div class="footer__icons">
            <div class="list-sprite">
                
                    <a class="social__item" href="#" title="Facebook">
                        <svg class="social__icon">
                            <use xlink:href="#facebook-icon"></use>
                        </svg>
                    </a>
               
              
                    <a class="social__item" href="#" title="Twitter">
                        <svg class="social__icon">
                            <use xlink:href="#twitter-icon"></use>
                        </svg>
                    </a>
               
                
                    <a class="social__item"  href="#" title="Google">
                        <svg class="social__icon">
                            <use xlink:href="#google-icon"></use>
                        </svg>
                    </a>
               
                    <a class="social__item" href="#" title="LinkedIn">
                        <svg class="social__icon">
                            <use xlink:href="#linkedin-icon"></use>
                        </svg>
                    </a>
               
                    <a class="social__item" href="#" title="Behance">
                        <svg class="social__icon">
                            <use xlink:href="#behance-icon"></use>
                        </svg>
                    </a>
               
                    <a class="social__item" href="#" title="Dribbble">
                        <svg class="social__icon">
                            <use xlink:href="#dribbble-icon"></use>
                        </svg>
                    </a>
               
                    <a 
                    class="social__item" href="#" title="GitHub">
                    <svg class="social__icon">
                        <use xlink:href="#github-icon"></use>
                    </svg>
                    </a>
            </div>
        </div>
    </div>
</footer>
    <!-- подключаем файл JS скриптов-->
    <script src="js/script.js"></script>
</body>
</html>