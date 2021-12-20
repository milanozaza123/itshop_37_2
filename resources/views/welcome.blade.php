
@include ('layouts/admin/head')


<body>

  
  @include ('layouts/admin/header')


  <!-- ======= Hero Section ======= -->
  @foreach ($background as $backgrounds)
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>{{$backgrounds->name}}</h1>
      

  </section>
  @endforeach
  <section id="" class="contact">
  <div class="container text-align text-md-left" data-aos="fade-up">
      <h3>รายการสินค้ายอดนิยม</h3>
      
      <div class="row" data-aos="fade-up">
      <div class="col-lg-4 d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="{{asset('admin/img/product/ไข่ไก่.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">ไข่ไก่เบอร์ 0 </h5>
          <p class="card-text">ราคา 45บาท</p>
        </div>
      </div>
              
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
        <img src="{{asset('admin/img/product/มาม่า.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">มาม่าหมูสับ</h5>
          <p class="card-text">ถุงละ 100บาท</p>
        </div>
      </div>
                
            
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
        <img src="{{asset('admin/img/product/น้ำจิ้มพันท้าย.png')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">น้ำจิ้มพันท้าย</h5>
          <p class="card-text">ขวดละ 55บาท</p>
        </div>
      </div>
              
              </div>
              </div> 
              <div class="row" data-aos="fade-up"> 
              <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
        <img src="{{asset('admin/img/product/น้าปลาทิพรส.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">น้ำปลาทิพรส</h5>
          <p class="card-text">ถุงละ 32บาท</p>
          
        </div>
      </div>
             
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
        <img src="{{asset('admin/img/product/น้ำตาล.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">น้ำตาลทรายขาว</h5>
          <p class="card-text">ถุงละ 32บาท</p>         
        </div>
      </div>
              
              </div>
              <div class="col-lg-4 d-flex justify-content-center">
              <div class="card" style="width: 18rem;">
        <img src="{{asset('admin/img/product/กะทิ.jpg')}}" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">กะทิชาวเกาะ</h5>
          <p class="card-text">กล่องละ 24บาท</p>
        </div>
      </div>
          
              </div>
              </div> 
             
</section>
              <div class="container text-align text-md-left" data-aos="fade-up">
      <h3>ข้อดีของร้านขายของชำ?</h3>
                 
      </div>
      <section id="" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          
        </div>
        
        
        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                @foreach ($content1 as $contents)
              
                <h4>{{$contents->name}}</h4>



                <h5>1.ลูกค้ากับเจ้าของร้านมีความสนิทสนมคุ้นเคยกันเป็นอย่างดี<br> 2.ลูกค้าสามารถต่อรองราคาสินค้าได้ <br>
3.สินค้ามีความแตกต่าง หลากหลายในแต่ละชุมชน เพื่อตอบสนองความต้องการของคนในชุมชนที่ไม่เหมือนกัน</h5>
              </div>


              <div class="phone mt-4">
                
               
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
          <img src="{{asset('admin/images/'.$contents->image)}}" class="card-img-top" alt="..." >
          </div>

          @endforeach
        </div>

       

      </div>
      </div>
    </section>


              


  <!-- End Hero -->


  <main id="main">

    <!-- ======= Product Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Product</h2>
        </div>

        <div class="row" data-aos="fade-up">
          
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" >รายการสินค้าทั้งหมด</li>
              <li data-filter=".filter-app">เครื่องปรุง</li>
              <li data-filter=".filter-web">น้ำจิ้ม</li>
              <li data-filter=".filter-5">อาหารกึ่งสำเร็จรูป</li>
              <li data-filter=".filter-card">วัตถุดิบอาหาร</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">


          @foreach ($product as $rows)
     
          @if($rows->category_id == 1)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/images/'.$rows->image)}}" class="img-fluid" alt="" style="width: 336.01px;
              height: 242.99px; "> 
              <div class="portfolio-info">
           
                <h4>{{$rows->name}}</h4>
                <h4>{{$rows->description}}</h4>
                <p>฿{{number_format($rows->price)}}</p>
                <div class="portfolio-links">
                  <a href="{{asset('admin/images/'.$rows->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            
            </div>
          </div>
         
    
  
     

   
        @elseif($rows->category_id == 2)
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('admin/images/'.$rows->image)}}" class="img-fluid" alt="" style="width: 336.01px;
          height: 242.99px; "> 
          <div class="portfolio-info">
       
            <h4>{{$rows->name}}</h4>
            <h4>{{$rows->description}}</h4>
            <p>฿{{number_format($rows->price)}}</p>
            <div class="portfolio-links">
              <a href="{{asset('admin/images/'.$rows->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        
        </div>
      </div>

      @elseif($rows->category_id == 3)

      <div class="col-lg-4 col-md-6 portfolio-item filter-5">
        <div class="portfolio-wrap">
          <img src="{{asset('admin/images/'.$rows->image)}}" class="img-fluid" alt="" style="width: 336.01px;
          height: 242.99px; "> 
          <div class="portfolio-info">
       
            <h4>{{$rows->name}}</h4>
            <h4>{{$rows->description}}</h4>
            <p>฿{{number_format($rows->price)}}</p>
            <div class="portfolio-links">
              <a href="{{asset('admin/images/'.$rows->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        
        </div>
      </div>

      @elseif($rows->category_id == 4)

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('admin/images/'.$rows->image)}}" class="img-fluid" alt="" style="width: 336.01px;
          height: 242.99px; "> 
          <div class="portfolio-info">
       
            <h4>{{$rows->name}}</h4>
            <h4>{{$rows->description}}</h4>
            <p>฿{{number_format($rows->price)}}</p>
            <div class="portfolio-links">
              <a href="{{asset('admin/images/'.$rows->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        
        </div>
      </div>




      @endif



      @endforeach
      
        
          

        </div>

        
        

      </div>
    </section><!-- End Portfolio Section -->


 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About</h2>
          <p>เกี่ยวกับคุณวิไลพรร้านขายของชำอเนกประสงค์</p>
        </div>
        
        
        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>ที่อยู่ 15 /30 หมู่ 4 ต.สวนใหญ่ อ.เมือง จ.นนทบุรี 11000</p>
              </div>


              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0974386474</p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
          <img src="{{asset('admin/img/about.jpeg')}}" class="img-fluid" alt="">
          </div>

        </div>

       

      </div>
    </section><!-- End Contact Section -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>ผู้จัดทำ</p>
        </div>

        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <img src="{{asset('admin/img/team/team-1.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>นายลาภิษ รูปหล่อ</h4>
                  <span>Tester</span>
                </div>
                <div class="social">
                  
                  <a href="https://www.facebook.com/profile.php?id=100017060838343"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{asset('admin/img/team/team-2.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>นายฌานวัตฒ์ กลอยเทพ</h4>
                  <span>Back-end</span>
                </div>
                <div class="social">
                  
                  <a href="https://www.facebook.com/profile.php?id=100006938206046"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{asset('admin/img/team/team-3.jpg')}}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>นายพชรพล มีทองคำ</h4>
                  <span>Font-end</span>
                </div>
                <div class="social">
                  
                  <a href="https://www.facebook.com/profile.php?id=100002831058439"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  
                </div>
              </div>
            </div>
          </div>

         

         

        </div>

      </div>
    </section><!-- End Team Section -->

    

   
  </main><!-- End #main -->


@include ('layouts/admin/footer')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('admin/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('admin/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('admin/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('admin/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('admin/js/main.js')}}"></script>

</body>

</html>