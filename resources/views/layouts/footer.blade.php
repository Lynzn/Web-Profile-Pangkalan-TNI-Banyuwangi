<footer class="footer py-4" style="background-color: #4E6766">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="footer-py-60">
                      <div class="row">
                          <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                              <a href="#" class="logo-footer">
                                  <img src="{{ asset('assets/images/logolanal.png') }}" alt="">
                              </a>
                              
                          </div>
  
                          <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                              <h5 class="footer-head text-white">Alamat</h5>
                              <a class="text-white" href="https://goo.gl/maps/Ge6e3Fwt7dE483hGA" target="_blank">
                               V96X+GVW, Jl. Gatot Subroto, Lkr. Kp. Baru, Bulusan, Kec. Kalipuro, Kabupaten Banyuwangi, Jawa Timur 68455, Indonesia
                              </a>
                          </div>
  
                          <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0 text-white">
                              <h5 class="footer-head">Telepon</h5>
                              <p>(0333) 510733</p>
                          </div>
                          <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                              <h5 class="footer-head text-white">Link Terkait</h5>
                              <ul class="list-unstyled ps-3 mb-0 mt-8">
                              <li style="list-style-type: disc;"><a href="https://tni.mil.id/" target="_blank" class="rounded text-white">MABES TNI</a></li>
                              <li style="list-style-type: disc;"><a href="https://www.tnial.mil.id/" target="_blank" class="rounded text-white">MABES TNI AL</a></li>
                              <li style="list-style-type: disc;"><a href="https://sisinforb.tnial.mil.id/" target="_blank" class="rounded text-white">SisinfoRB TNI AL</a></li>
                              </ul>
                            </div>
                            <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                              <h5 class="footer-head text-white">Sosial Media</h5>
                              <ul class="list-unstyled social-icon foot-social-icon ps-9 mb-0 mt-8">
                                  <li class="list-inline-item"><a href="https://www.instagram.com/lanal_banyuwangi/" target="_blank" class="rounded text-white"><iconify-icon icon="ri:instagram-fill" width="22"></iconify-icon></a></li>
                                  <li class="list-inline-item"><a href="https://mail.google.com/mail/u/0/?tf=cm&fs=1&to=lanal.banyuwangi.v@gmail.com" target="_blank" class="rounded text-white"><iconify-icon icon="mdi:gmail" width="22"></iconify-icon></a></li>
                                  <li class="list-inline-item"><a href="https://goo.gl/maps/Ge6e3Fwt7dE483hGA" target="_blank" class="rounded text-white"><iconify-icon icon="mdi:location" width="22"></iconify-icon></a></li>
                                  <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCWn8z46GeWsWFb93BG4DbVg/channels" target="_blank" class="rounded text-white"><iconify-icon icon="mdi:youtube" width="22"></iconify-icon></a></li>
                              </ul>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </div> 
    
      <style>
    .footer-py-20 {
        padding-top: 20px; /* Anda bisa sesuaikan nilai padding sesuai kebutuhan */
    }
</style>

<footer>
    <div class="footer-py-20 footer-bar">
        <div class="container text-center text-white">
            <div class="row align-items-center">
                <div class="col-sm-4 text-right">
                    <div class="text-sm-start">
                        <p class="mb-0">©  
                            <script>
                                if ((new Date().getFullYear())== 2023){
                                    document.write(new Date().getFullYear())
                                }
                                else {
                                    document.write('2023 - ')
                                    document.write(new Date().getFullYear())
                                }
                            </script> Pangkalan Utama TNI AL V - Pangkalan TNI AL Banyuwangi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/jquery.min.js') }}"></script>
<script src="{{ url('assets/js/slick.min.js') }}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/js/scrolltotop_arrow_code.js') }}"></script>
<script src="{{ url('assets/js/venobox.min.js') }} "></script>
<script src="{{ url('assets/js/script.js') }}"></script>
<script src="{{ url('assets/js/aos.js') }}"></script>
<!-- Select2 -->
<script src="{{ url('plugins/select2/js/select2.full.min.js') }}"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- Galery -->
<script src="{{ url('assets/js/lightgallery.js') }}"></script>
<script src="{{ url('assets/js/lg-pager.js') }}"></script>
<script src="{{ url('assets/js/lg-autoplay.js') }}"></script>
<script src="{{ url('assets/js/lg-fullscreen.js') }}"></script>
<script src="{{ url('assets/js/lg-zoom.js') }}"></script>
<script src="{{ url('assets/js/lg-share.js') }}"></script>
@yield('script')
</body>

</html>