 
    <header class="header-jji style-la65N" id="style-la65N">
       
        <nav class="main-7g2">
          <div class="container-qdt row-han content-mn1 item-zhc">
            <div class="logo-6j9 col-gwl col-rrz">
              <a href="Home.php">
                <img src="https://siteapi.alnassr.sa/files/settings/2022-09/16/sVXvhuCPwi32RnUpf9k9ztz3dEMyW6LL.png">
              </a>
            </div>
            <div class="link-oi8 col-ewg d-nd8 block-4c3">
              <ul class="d-tss w-b8y p-lot m-ybz content-mvn">
                
                <li class="mx-195">
                  <a href="Home.php"   id="nav-home" class="act-x7o">
                    Home 
                  </a>
                </li>
                <li class="mx-195">
                  <a href="about-club.php">
                  </a>
                  <a href="about-club.php">
                    About Club 
                  </a>
                </li>
                <li class="mx-195">
                  <a href="/news">
                    News 
                  </a>
                </li>
                <li class="mx-195">
                  <a href="/social-responsibility">
                    Social Responsibility 
                  </a>
                </li>
                
                <li class="mx-195">
                  <a href="matches.php">
                    Matches 
                  </a>
                </li>
                
                <li class="mx-195">
                  <a href="/contact-us">
                    Contact Us 
                  </a>
                </li>
               
                <li class="mx-195 style-t1lyB" id="style-t1lyB">
                  <a href="/alnassr-alittihad">
                  </a>
                  <a href="/alnassr-alittihad">
                    
                  </a>
                </li>
               
               
               
            
                
                
                <li class="mx-195 style-PWajC" id="style-PWajC">
                  <a href="/socialmedia">
                  </a>
                  <a href="/socialmedia">
                    Social Media 
                  </a>
                </li>
              </ul>
            </div>
            <!-- <div class="search-sds col-gwl d-lg-574 d-nd8">
              <div class="dropdown-v2y lan-5dr">
                <button type="button" class="btn-i4b p-lot dropdown-g84">
                  <svg aria-hidden="true" focusable="false" data-prefix="fa" data-icon="globe" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg-inline--fa fa-globe fa-w-16 fa-lg">
                    <path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z">
                    </path>
                  </svg>
                </button> -->
                <!-- <ul class="dropdown-menu-x9y text-gb4">
                  <li>
                    <a class="dropdown-item-chl">
                      Arabic
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item-chl">
                      English
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item-chl">
                      Spanish
                    </a>
                  </li>
                </ul> -->
              </div>
            </div>
          </div>
        </nav>
       
      </header>
      
<script>
window.addEventListener('scroll', function() {
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('.link-oi8 a');
    
    sections.forEach(section => {
        let rect = section.getBoundingClientRect();
        if (rect.top <= 0 && rect.bottom >= 0) {
            let id = section.getAttribute('id');
            navLinks.forEach(navLink => {
                navLink.classList.remove('active');
                if (navLink.getAttribute('href').substring(1) === id) {
                    navLink.classList.add('active');
                }
            });
        }
    });
});
</script>