<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
  <title>Tech & Innovation</title>
</head>
<body>

 @include('layouts.navbar')

  <!-- Main Header -->
  <section id="header">
    <div id="header-image">
      <img src="https://www.indiegogo.com/assets/explore/desktop/tech-innovation-4120b9cf94492250c4ac5efe9026d85f6aa5e46d4559dab0c9a43ed5968a08db.jpg" alt="" id="header-image-img">
    </div>

    <div id="header-details-heading1">Tech &amp; Innovation</div>
    <div id="header-details-heading2">Emerging tech starts here</div>

  </section>

  <!-- Content -->
  <section id="content">
    <div class="container">
      <div class="row">

        <div class="col-3">
          <div id="sidebar">
            <div id="sidebar-title">Filter Results</div>

            <div class="sidebar-attribute-container">
              <div class="sidebar-attribute-title">Category</div>

              <div class="sidebar-attribute">
                <div class="sidebar-attribute-item-main" data-toggle="false" data-toggled="false">
                  <div class="sidebar-attribute-item-main-title">All Categories</div>
                </div>
              </div>

              <div class="sidebar-attribute">

                <a href="#">
                  <div class="sidebar-attribute-item-main active" data-toggle="true" data-toggled="false">
                    <div class="sidebar-attribute-item-main-title">Tech &amp; Innovation</div>

                    <svg fill="#a8a8a8" style="height: 7px;float: left; position: relative; top: 10px; left: 15px;" viewBox="0 0 26 17" class="down-caret"><path d="M25.8 3.947L22.28.534 13 9.601 3.72.534.2 3.947 13 16.534 25.8 3.947z" fill-rule="evenodd"></path></svg>

                  </div>
                </a>

                <ul class="sidebar-attribute-items">
                  <a href="#"><div class="sidebar-attribute-item">Audio</div></a>
                  <a href="#"><div class="sidebar-attribute-item">Camera Gear</div></a>
                  <a href="#"><div class="sidebar-attribute-item">Education</div></a>
                  <a href="#"><div class="sidebar-attribute-item">Energy</div></a>
                </ul>
              </div>

              <div class="sidebar-attribute">

                <a href="javascript:void(0))">
                  <div class="sidebar-attribute-item-main" data-toggle="true" data-toggled="false">
                    <div class="sidebar-attribute-item-main-title">Creative Works</div>

                    <svg fill="#a8a8a8" style="height: 7px;float: left; position: relative; top: 10px; left: 15px;" viewBox="0 0 26 17" class="down-caret"><path d="M25.8 3.947L22.28.534 13 9.601 3.72.534.2 3.947 13 16.534 25.8 3.947z" fill-rule="evenodd"></path></svg>

                  </div>
                </a>

                <ul class="sidebar-attribute-items">
                  <a href="#"><div class="sidebar-attribute-item">Art</div></a>
                  <a href="#"><div class="sidebar-attribute-item">Comics</div></a>
                  <a href="#"><div class="sidebar-attribute-item">Dance &amp; Theater</div></a>
                  <a href="#"><div class="sidebar-attribute-item">Film</div></a>
                </ul>
              </div>

              <div class="sidebar-attribute">

              <a href="javascript:void(0))">
                <div class="sidebar-attribute-item-main" data-toggle="true" data-toggled="false">
                  <div class="sidebar-attribute-item-main-title">Community Projects</div>

                  <svg fill="#a8a8a8" style="height: 7px;float: left; position: relative; top: 10px; left: 15px;" viewBox="0 0 26 17" class="down-caret"><path d="M25.8 3.947L22.28.534 13 9.601 3.72.534.2 3.947 13 16.534 25.8 3.947z" fill-rule="evenodd"></path></svg>

                </div>
              </a>

              <ul class="sidebar-attribute-items">
                <a href="#"><div class="sidebar-attribute-item">Culture</div></a>
                <a href="#"><div class="sidebar-attribute-item">Environment</div></a>
                <a href="#"><div class="sidebar-attribute-item">Human Rights</div></a>
                <a href="#"><div class="sidebar-attribute-item">Local Businesses</div></a>
              </ul>
              </div>
            </div>
            <hr style="height:2px;border:none;color:#333;background-color:#ddd;margin-top: 40px; margin-bottom: 40px;">

            <div class="sidebar-attribute-container">
              <div class="sidebar-attribute-title">Project Timing</div>

              <a href="" style="display: inline-block;">
                <div style="margin-top: 20px;">
                  <input type="radio" id="radio1" name="radio-group" checked>
                  <label for="radio1">All</label>
                </div>
              </a>
              <br>
              <a href="" style="display: inline-block;">
                <div>
                  <input type="radio" id="radio2" name="radio-group">
                  <label for="radio2">Launching Soon</label>
                </div>
              </a>
              <br>
              <a href="" style="display: inline-block;">
                <div>
                  <input type="radio" id="radio3" name="radio-group">
                  <label for="radio3">Just Launched</label>
                </div>
              </a>
              <br>
              <a href="" style="display: inline-block;">
                <div>
                  <input type="radio" id="radio4" name="radio-group">
                  <label for="radio4">Ending Soon</label>
                </div>
              </a>

            </div>





          </div>
        </div>
        <div class="col-9">
          <div id="campaigns-container">

            <div id="campaigns-search">
              <form action="">
                <svg viewBox="0 0 21 21" id="campaigns-search-icon"><g fill-rule="evenodd"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm0-2A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path><path d="M11.44 13.56l2.12-2.12L20 17.878A1.5 1.5 0 0 1 17.879 20l-6.44-6.44z"></path></g></svg>
                <input type="text" id="campaigns-search-input" placeholder="Search For Campaigns">
              </form>
            </div>

            <hr style="background: #ddd;margin: 30px 0;">

            <div id="campaigns-sort-by">
              <div class="float-right">
                <label for="campaigns-sort-by-select" style="font-size: 14px;margin-right: 10px;">Sort By</label>
                <select name="" id="campaigns-sort-by-select">
                  <option value="">Trending</option>
                  <option value="">Most Funded</option>
                </select>
              </div>
            </div>

            <br><br><br>

            <div id="campaigns" style="clear: both;">
              <div class="row">

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c4.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fit,w_auto,g_center,q_auto:best,dpr_1.3,f_auto/voqqeulfbiruky3rxef7" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/kj62idppsudcimru1ogc.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/s1ky2fbhufgajbzk0zh2.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/usk8opskkewhasfxwmcv.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/lgmvj2jwhxp11noygyu1.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/lnvmaoxbcnskbv9rnbxt.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/cdridtgq5xr3xa2qykzv.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/aopkboahs6vpu2cj8uhj.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/vuhdhxrvgagorxi07vr7.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/jovoxk9y6nb4riob0cti.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/njn17j673bovle8lpeyu.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

                <div class="col-4 campaign">
                  <div class="campaign-card">
                    <a href="#">
                      <!-- Card Image -->
                      <div class="pouplar-projects-card-img">
                        <img style="width: 100%;" src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill,f_auto,h_273,w_273/hwb3ivjtnyb0zz9kskzu.jpg" alt="">
                      </div>

                      <!-- Card Details -->
                      <div class="campaign-card-details">
                        <div class="campaign-card-details-header">
                          <div class=" campaign-card-details-header-title">
                            FUNDING
                          </div>
                          <div class=" campaign-card-details-header-save">
                            <svg viewBox="0 0 20 20" class="campaign-card-details-header-save-heart">
                              <path d="M15.996 10.378L10 16.44l-6.097-6.177-.07-.059a3.91 3.91 0 01-.129-.135 9.96 9.96 0 01-.495-.619c-.228-.3-.435-.61-.613-.923A5.334 5.334 0 012.17 7.5 3.387 3.387 0 012 6.484c0-1.187.278-2.049.85-2.635C3.406 3.277 4.22 3 5.334 3c.233 0 .486.046.751.14.313.11.596.252.864.437.355.245.66.474.916.69.24.2.47.416.686.644L10 6.431l1.448-1.52c.217-.228.446-.444.687-.646.255-.214.56-.443.915-.688.268-.185.551-.328.864-.438.265-.093.518-.139.751-.139 1.115 0 1.928.277 2.486.85.571.585.85 1.447.85 2.634 0 1.187-.675 2.498-2.005 3.894m2.586-7.925C17.638 1.484 16.332 1 14.665 1a4.26 4.26 0 00-1.412.252c-.48.168-.926.394-1.339.68-.413.284-.768.552-1.066.802-.297.25-.58.516-.848.797a10.643 10.643 0 00-.848-.797c-.298-.25-.653-.518-1.066-.803a5.612 5.612 0 00-1.34-.679A4.25 4.25 0 005.336 1c-1.668 0-2.974.484-3.919 1.453C.473 3.421 0 4.765 0 6.484c0 .523.087 1.062.262 1.617.175.555.374 1.027.597 1.418.223.391.476.772.76 1.143.282.371.488.627.62.767.13.141.231.242.305.305L9.51 18.79c.134.14.298.211.491.211a.655.655 0 00.491-.21l6.953-7.033C19.148 9.968 20 8.211 20 6.484c0-1.719-.473-3.063-1.418-4.03"></path>
                            </svg>
                          </div>
                        </div>
                        <hr style="margin: 8px 0;">
                        <div class="campaign-card-details-body" >
                          <div class="campaign-card-details-body-title">
                            AYA NEO：World’s First 7nm Handheld Gaming Device
                          </div>
                          <div class="campaign-card-details-body-description">
                            AMD Ryzen 5 4500U, 16G RAM, NVME SSD, 7’ IPS Touchscreen, 47Wh Battery, Ergonomic Joystick, Win10 OS
                          </div>
                          <div class="campaign-card-details-body-type">
                            Tech & Innovation
                          </div>
                          <div class="campaign-card-details-body-sign-up">
                            Sign up to get early access and special discount!
                          </div>
                          <div class="campaign-card-details-body-status">
                            <svg viewBox="0 0 16 16" style="height: 16px; fill: #6a6a6a;" id="v-rocket_fillable">
                              <path fill-rule="evenodd" d="M8.828 15.179c.643-1.356-.475-2.832-.863-3.283-1.095.292-2.247.232-3.172-.675-.926-.907-1-2.05-.72-3.14-.459-.38-1.959-1.472-3.316-.817a.211.211 0 01-.229-.034.207.207 0 01-.058-.222c.281-.817 1.09-2.364 3.283-3 1.912-.555 3.028-.704 3.819-.911 4.38-3.714 7.414-3.023 7.994-2.84.066.02.117.071.139.136.191.574.925 3.577-2.763 7.97-.198.788-.335 1.897-.87 3.801-.615 2.184-2.163 3.006-2.983 3.296a.21.21 0 01-.223-.055.207.207 0 01-.038-.226zm1.51-11.639a1.461 1.461 0 00.013 2.078 1.485 1.485 0 002.093-.013 1.461 1.461 0 00-.013-2.077 1.487 1.487 0 00-2.092.012zm-6.292 8.433a1.748 1.748 0 01.015 2.481c-.495.498-2.432 1.14-3.468 1.458a.378.378 0 01-.376-.09.371.371 0 01-.096-.373c.307-1.032.93-2.962 1.426-3.46a1.774 1.774 0 012.5-.016z"></path>
                            </svg> &nbsp;Launching Soon
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>

              </div>
            </div>

            <div id="campaigns-show-more">
              <center><button id="campaigns-show-more-button">SHOW MORE</button></center>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

@include('layouts.footer')



  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script src="projects.js"></script>
</body>
</html>
