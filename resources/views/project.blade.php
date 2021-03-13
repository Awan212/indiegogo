<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/project.css') }}">
  <title>Indiegogo</title>
</head>
<body>
@include('layouts.navbar')
  <!-- Content -->
  <section id="content">
    <div class="container">

      <div id="content-main">
        <div class="row">

          <div class="col-7">
            <div id="content-slider">

              <div id="content-slider-image">
                <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/zpjbz4yglgn9jzdoqcln" alt="" id="content-slider-image-img">
              </div>

              <div id="content-slider-thumbs">
                <div class="content-slider-thumb active" style="background: url('https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/zpjbz4yglgn9jzdoqcln') 50% 50% no-repeat; background-size:cover ;"></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi/XVy_yOv_1bw/maxresdefault.jpg") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi/JX52EnF77EU/maxresdefault.jpg") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi_webp/xuEeOfFOIdg/maxresdefault.webp") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi_webp/S3JBmIiuJwU/maxresdefault.webp") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi/VZrVn4WUgbM/maxresdefault.jpg") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi_webp/ZiqRuaTrrEA/maxresdefault.webp") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi_webp/fkUSsE1lEPs/maxresdefault.webp") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://i.ytimg.com/vi/VZrVn4WUgbM/maxresdefault.jpg") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://c2.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/bhkk8siehqba4p5nolj9") 50% 50% no-repeat; background-size:cover ;'></div>

                <div class="content-slider-thumb" style='background: url("https://c2.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_695,g_auto,q_auto,dpr_1.3,f_auto,h_460/mrmbj4fqg0nmtmr2un3j") 50% 50% no-repeat; background-size:cover ;'></div>

              </div>

            </div>
          </div>

          <div class="col-5">
            <div id="content-main-details">
              <div id="content-main-details-status">Funding</div>
              <div id="content-main-details-heading">AYA-NEO:World’s First 7nm Handheld Gaming Device</div>
              <div id="content-main-details-description">6 cores AMD Ryzen 5 4500U Mobile Processor with Radeon Graphics. Unmatched levels of performance.</div>
              <div id="content-main-details-owner">
                <div id="content-main-details-owner-image">
                  <img src="https://graph.facebook.com/v6.0/167489711789300/picture?width=200" height="40" alt="" id="content-main-details-owner-image-img">
                </div>

                <div id="content-main-details-owner-details">
                  <div id="content-main-details-owner-detail1">Aya Neo</div>
                  <div id="content-main-details-owner-detail2">1 Campaign | Shenzhen, China</div>
                </div>

                <div id="content-main-details-owner-funds-raised">
                  <div id="content-main-details-owner-funds-raised-amount">
                    <span style="font-weight: bold;">$7,262,668</span>
                    <span style="font-weight: 400; font-size: 16px;">HKD</span>
                  </div>
                  <div id="content-main-details-owner-funds-raised-backers-count">
                    <span style="font-weight: 500;">1,063</span>
                    <span style="font-weight: 400;">backers</span>
                  </div>
                </div>

                <div id="content-main-details-owner-progress" style="clear: both;">
                  <div id="content-main-details-owner-bar"></div>
                  <div id="content-main-details-owner-bar-green" style=" width: 100%;"></div>
                </div>

                <div id="content-main-details-owner-amount-completed">
                  <div class="float-left">1757% of $420,000 <span style="font-weight: 600;">Flexible Goal</span></div>
                  <div class="float-right"><span style="font-weight: 600;">30</span> days left </div>
                </div>
                <br><br>
                <div id="content-main-details-owner-buttons" style="clear: both;margin-top: 10px;">
                  <a href="" id="content-main-details-owner-button1">BACK IT</a>
                  <a href="" id="content-main-details-owner-button2">
                    <svg viewBox="0 0 20 20" fill="#6a6a6a" style="height: 16px;position: relative;top: -2px" id="v-heart_hollow"><path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path></svg>
                    FOLLOW
                  </a>
                </div>



              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <hr style="background: #ddd;margin-top: 40px;">
    <div class="container">
      <div id="content-secondary">
        <div class="row">
          <div class="col-8">
            <div id="content-secondary-details">
              <ul id="content-secondary-details-tabs">
                <a href=""><li class="content-secondary-details-tab active">STORY</li></a>
                <a href=""><li class="content-secondary-details-tab">FAQ</li></a>
                <a href=""><li class="content-secondary-details-tab">UPDATES</li></a>
                <a href=""><li class="content-secondary-details-tab">COMMENTS</li></a>

              </ul>
            </div>

            <div id="content-secondary-tabs">
              <div id="content-secondary-tabs-story">
                <div style="background-color:black;color:white;">
                  <p>&nbsp;&nbsp;<img src="https://static.wixstatic.com/media/aac863_6656635baa574ee3bb8d41cedbc857a8~mv2.gif" class="" data-src="https://static.wixstatic.com/media/aac863_6656635baa574ee3bb8d41cedbc857a8~mv2.gif"></p>
                  <p><br><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615019935/njqfwmc4qkhhqzgiq1ni.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615019935/njqfwmc4qkhhqzgiq1ni.png"><br>Bringing the 7nm AMD Ryzen APU to a handheld gaming device for the first time in the world, AYA NEO provides gaming performance never seen before in such a form factor.&nbsp;With&nbsp;its amazing features listed below, it is not only a&nbsp;AAA capable gaming device but also a versatile ultra-portable windows PC.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                  <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615019962/rn6jcqjs1po8f5gmtyqf.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615019962/rn6jcqjs1po8f5gmtyqf.png"><br>With the Cutting&nbsp;Edge Ryzen&nbsp;5 4500U&nbsp;processor, a six-core processor&nbsp;with&nbsp;4.0Ghz max turbo frequency, AYA NEO is a powerhouse. It handles demanding games with ease.&nbsp;<br>With 50% more cores than previous generation and competition, the hexa-core design also ensures great multi-tasking performance.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615019979/r9mmjkop1uvc6rhi6e0s.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615019979/r9mmjkop1uvc6rhi6e0s.png"></p>
                  <p>Equipped with powerful AMD Radeon&nbsp;Graphics, you can play AAA titles much more easily. The greater image details and smoother gameplay provides a much better gaming experience.<br>Drivers&nbsp;for&nbsp;Radeon Graphics have great&nbsp;compatibility&nbsp;for the latest games. Games like Cyberpunk 2077 could run at 30+FPS with lower settings.<br>Radeon Graphics drivers&nbsp;also&nbsp;come&nbsp;with&nbsp;great&nbsp;features&nbsp;like&nbsp;Radeon Boost, Radeon Image Sharpening and&nbsp;Radeon Anti-Lag. Radeon Image Sharpening alone&nbsp;provides 5-10 FPS more in AAA titles with little&nbsp;sacrifice&nbsp;in&nbsp;image quality.<br><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936310/sx0rqht7zj0sxihvxhub.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936310/sx0rqht7zj0sxihvxhub.png"><br>Equipped with 16 GB of LPDDR4x 4266 ram, and up to 1TB NVME SSD, AYA NEO provides you not only with a smooth gaming experience but also fast loading time. While others are waiting for the game to load, yours is already done.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936351/fiymw14evbgdyzf9sqgs.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936351/fiymw14evbgdyzf9sqgs.png"></p>
                  <p><br>The Game controller portion of AYA NEO comes with multiple ergonomic features:<br>Clickable joysticks have optimized dead zone for smoother operation.<br>The positioning of joysticks and D-Pad are optimized, ensuring minimal learning curve.<br>The device chassis is shaped with wider sides, ensuring a firmer grip and better gaming performance.</p>
                  <p><img src="https://static.wixstatic.com/media/aac863_43ed0b20a12b4752aef923e0e2adfe9e~mv2.gif" class="" data-src="https://static.wixstatic.com/media/aac863_43ed0b20a12b4752aef923e0e2adfe9e~mv2.gif"></p>
                  <p>Shoulder buttons comes with APLPS micro switches with shorter travel and clearer feedback.<br>AYA NEO joysticks are also equipped with Windows task manager and on-screen keyboard buttons for better Windows experience. These buttons are flush with the joystick surface to reduce unintended activations.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615001195/nzloks9padhf7p2zhwav.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615001195/nzloks9padhf7p2zhwav.png"></p>
                  <p><br>The built-in lithium battery has 3 cells of 4100mah each. It is supplied by BYD auto and is up to all international industry standards.<br>Because of its 47 Watt-hour battery capacity and its low power consumption, AYA NEO has great battery life: up to 5-6 hours at lower TDP settings. Up to 140 minutes for demanding AAA gaming. AYA NEO is also equipped with fast charging, a full charge takes as little as 90 minutes.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020381/lhrkmd6a0fwvkzcqdrhr.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020381/lhrkmd6a0fwvkzcqdrhr.png"><br>The 7-inch multitouch screen has an 800p native landscape 215 PPI H-IPS panel.It covers 76% NTSC color space, has 500 nit peak brightness, and is flicker-free.You will be provided with great game images every single frame.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020027/knbtdy0fr89jdpecpbfa.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020027/knbtdy0fr89jdpecpbfa.png"></p>
                  <p>AYA NEO has 6-axis gyroscope/accelerometer built in, providing great features like high-precision aiming assistance.<br>Rumble motors are also built in, providing feedback for collision, vibration, combat, and other scenes.<br>The combination of sensors and rumble motors provides a more immersive gaming experience.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020046/ghondj0xjfgyldiartzt.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020046/ghondj0xjfgyldiartzt.png"></p>
                  <p>Thanks to its raw power, AYA NEO runs AAA titles like&nbsp;Cyberpunk 2077, Watch Dogs: Legion, Death Stranding, Assassin's Creed Valhalla, Destiny 2, Horizon Zero Dawn, etc. with good frame rates.&nbsp;<br>Besides in AYA NEO you get to run the PC version of games, which can be much lower priced than the console version.<br><br><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936733/obwoov4gy7o7n23zq8wl.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936733/obwoov4gy7o7n23zq8wl.png"></p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020358/d8cym34zq3rhnbia3b9i.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1615020358/d8cym34zq3rhnbia3b9i.png">With its raw power and great connectivity, AYA NEO not only handles single&nbsp;player AAA titles, it also runs online multiplayer games well.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936771/nz1hzj2hgoyghq1adk1h.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936771/nz1hzj2hgoyghq1adk1h.png"><br>AYA NEO comes with intel AX200 wireless module with Wi-Fi 6 and Bluetooth 5.0 support.<br>Wi-Fi 6 provides up to 2.7 times the speed and 25% of latency of the previous generation.<br>Whether it's gaming, watching online videos, live streaming, or remote access, AYA NEO handles it perfectly with its Wi-Fi 6.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936793/znofdbppssvahjptax4d.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936793/znofdbppssvahjptax4d.png"><br>AYA NEO comes with 3 USB 3.2 Gen 2 Type-C 10Gbps (2 with video output &amp; charging), and a 3.5mm Headphone Jack.<br>Portable docking station will provide additional ports: 2 USB 3.2 Gen 1 type-A, 1 HDMI, 1 SD card slot, 1 TF card slot, 1 RJ45. The docking station is ultra-portable and it fits inside the carrying case with the device. And of course, it also charges the device.<br>Connect to up to 2 external monitors and external keyboard/mouse, AYA NEO can provide a desktop like experience for entertainment and productivity.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936808/rfczhcxftjpotxtukccj.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936808/rfczhcxftjpotxtukccj.png"><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936828/kfgaf7tg9zbmybof9tiw.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614936828/kfgaf7tg9zbmybof9tiw.png"></p>
                  <p>Handheld gaming devices are loved by many gamers. Nowadays many AAA games are not able to run well on those devices, so gaming wherever and whenever possible has been a dream for many gamers.</p>
                  <p>Our&nbsp;founder, Mr. SONG Zheng, aka “Uncle A” is one of those dreamers, so he wanted to build a powerful handheld gaming PC of his own. Driven by his enthusiasm and relying on his industry background, “Uncle A” built a prototype AYA device, and its video got millions of views on Bilibili and YouTube.</p>
                  <p>&nbsp;</p>
                  <p><img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614941723/crzqdfjbafhuqkwkgffi.png" class="" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614941723/crzqdfjbafhuqkwkgffi.png"></p>
                  <p><img src="https://static.wixstatic.com/media/aac863_6dfc5de911ef473ba2e71a5e526007f7~mv2.gif" class="" data-src="https://static.wixstatic.com/media/aac863_6dfc5de911ef473ba2e71a5e526007f7~mv2.gif"></p>
                  <p>After extensive prototyping and testing, now the first mass production version of AYA NEO FOUNDER, the Founder’s Edition, is being produced and shipped to buyers as of Jan 2021.</p>
                  <p>As we are fully confident to provide a great product for everyone now, we are launching this crowdfunding campaign: we hope to let more fans to get the AYA NEO at great prices, and to share our excitement of AYA NEO gaming.</p>
                  <p>&nbsp;</p>
                  <p><img src="" class="lazy" data-src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,w_695/v1614940132/kzzhscl4vje2m9gg20yy.png"></p>
                  <h3><strong>Below are a few of improvement we made for the latest version AYA NEO compared with the Founder Edition:</strong></h3>
                  <ol>
                  <li>Improved operating system compatibility, further operating system optimizations planned to better fit AYA devices user interface.</li>
                  <li>&nbsp;Reduced overall weight and improved user experience through improvements on parts design and materials.</li>
                  <li>&nbsp;Improved rumble motor control: on and off switch through combo keys</li>
                  <li>&nbsp;Improved handling comfort and stability for the controller portion. Optimized actuation force and feedback for buttons.</li>
                  <li>Improved gaming performance and user experience using game preload settings to better balance FPS, power consumption etc.</li>
                  <li>Improved screen quality, fixed resolution scaling issue, fixed blurry screen when certain games run in full screen mode.</li>
                  </ol>
                  <h3><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></h3>
                  <h3>&nbsp;</h3>

                  </div>
              </div>
            </div>

          </div>
          <div class="col-4">

            <div id="content-secondary-perks" style="margin-top: 90px;">
              <div id="content-secondary-perks-title">Select a perk</div>
              <br>
              <div class="content-secondary-perk">

                <div class="content-secondary-perk-image">
                  <img src="https://c3.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_762,g_center,q_auto:best,dpr_1.3,f_auto,h_506/qpmaourpk12xdreyhugd" height="220" style="object-fit: cover;" alt="" id="content-secondary-perk-image-img">
                </div>
                <div class="content-secondary-perk-body">
                  <div class="content-secondary-perk-title">
                    1 x AYANEO 500G
                  </div>
                  <div class="content-secondary-perk-price">
                    $6,120 HKD
                  </div>
                  <div class="content-secondary-perk-details">
                    <span style="font-weight: 600;">Estimated Shipping</span>
                    <br>
                    <span>May 2021</span>
                    <br>
                    <p style="margin-top: 8px;">Only <span style="font-weight: 600;">56</span> left</p>
                    <span>Ships Worldwide</span>
                  </div>
                </div>

              </div>

              <div class="content-secondary-perk">

                <div class="content-secondary-perk-image">
                  <img src="https://c2.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,w_762,g_center,q_auto:best,dpr_1.3,f_auto,h_506/jqrtdn7fihqsdswwsozx" height="220" style="object-fit: cover;" alt="" id="content-secondary-perk-image-img">
                </div>
                <div class="content-secondary-perk-body">
                  <div class="content-secondary-perk-title">
                    1 x AYANEO 500G
                  </div>
                  <div class="content-secondary-perk-price">
                    $6,120 HKD
                  </div>
                  <div class="content-secondary-perk-details">
                    <span style="font-weight: 600;">Estimated Shipping</span>
                    <br>
                    <span>May 2021</span>
                    <br>
                    <p style="margin-top: 8px;">Only <span style="font-weight: 600;">56</span> left</p>
                    <span>Ships Worldwide</span>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@include('layouts.footer')

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/project.js')  }}"></script>
</body>
</html>
