{{-- @extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Keep In Touch with Us</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Contact</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->


         <!-- contact area start -->
         <section class="tp-contact-area pb-100">
            <div class="container">
               <div class="tp-contact-inner">
                  <div class="row">
                     <div class="col-xl-9 col-lg-8">
                        <div class="tp-contact-wrapper">
                           <h3 class="tp-contact-title">Sent A Message</h3>

                           <div class="tp-contact-form">
                              <form id="contact-form" action="{{ route('contact.add') }}" method="POST">
                              @csrf
                                 <div class="tp-contact-input-wrapper">
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Shahnewaz Sakil">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="name">Your Name</label>
                                       </div>
                                       @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="email" id="email" value="{{ old('email') }}" type="email" placeholder="shofy@mail.com">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="email">Your Email</label>
                                       </div>
                                       @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="subject" id="subject" value="{{ old('subject') }}" type="text" placeholder="Write your subject">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="subject">Subject</label>
                                       </div>
                                       @error('subject')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                         <textarea id="message" name="message" value="{{ old('message') }}" placeholder="Write your message here..."></textarea>
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="message">Your Message</label>
                                       </div>
                                       @error('message')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                 </div>
                                 <div class="tp-contact-suggetions mb-20">
                                    <div class="tp-contact-remeber">
                                       <input id="remeber" type="checkbox">
                                       <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                 </div>
                                 <div class="tp-contact-btn">
                                    <button type="submit" class="tp-login-btn w-100">Send Message</button>
                                 </div>
                              
                              <p class="ajax-response"></p>
                           </div>
                        </div>
                        </form>
                     </div>
                     <div class="col-xl-3 col-lg-4">
                        <div class="tp-contact-info-wrapper">
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{asset('website/assets/img/contact/contact-icon-1.png')}}" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p data-info="mail"><a href="https://template.wphix.com/cdn-cgi/l/email-protection#14777b7a6075776054677c7b726d3a777b79"><span class="__cf_email__" data-cfemail="95f6fafbe1f4f6e1d5e6fdfaf3ecbbf6faf8"></span></a></p>
                                 <p data-info="phone"><a href="tel:+92 3099323779">+92 3099323779</a></p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{asset('website/assets/img/contact/contact-icon-2.png')}}" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p>
                                    <a href="https://www.google.com/maps/place/Pasr%C5%ABr,+Sialkot,+Punjab,+Pakistan/@32.2651115,74.6218568,13z/data=!3m1!4b1!4m6!3m5!1s0x391eb35f8568abf3:0x59b3080a03a3607d!8m2!3d32.2625241!4d74.6576091!16zL20vMDl3bjkz?entry=ttu&g_ep=EgoyMDI0MDkwNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                                       Chandar <br> Pasrur, Sialkot 51480
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="{{asset('website/assets/img/contact/contact-icon-3.png')}}" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <div class="tp-contact-social-wrapper mt-5">
                                    <h4 class="tp-contact-social-title">Find on social media</h4>

                                    <div class="tp-contact-social-icon">
                                       <a href="https://www.facebook.com/talhachandar5"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="https://www.instagram.com/talha_chandar/"><i class="fa-brands fa-instagram"></i></a>
                                       <a href="https://www.linkedin.com/in/talha-younas-9791ba318/"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->

        

      </main>
      

      @endsection --}}


@extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')

<main>
    <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Keep In Touch with Us</h3>
                        <div class="breadcrumb__list">
                            <span><a href="#">Home</a></span>
                            <span>Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- contact area start -->
    <section class="tp-contact-area pb-100">
        <div class="container">
            <div class="tp-contact-inner">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="tp-contact-wrapper">
                            <h3 class="tp-contact-title">Sent A Message</h3>

                            <div class="tp-contact-form">
                                <form id="contact-form" action="{{ route('contact.add') }}" method="POST">
                                    @csrf
                                    <div class="tp-contact-input-wrapper">
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <input name="name" id="name" value="{{ old('name') }}" type="text" placeholder="Talha Chander">
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="name">Your Name</label>
                                            </div>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <input name="email" id="email" value="{{ old('email') }}" type="email" placeholder="talhachander50@gmail.com">
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="email">Your Email</label>
                                            </div>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <input name="subject" id="subject" value="{{ old('subject') }}" type="text" placeholder="Write your subject">
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="subject">Subject</label>
                                            </div>
                                            @error('subject')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="tp-contact-input-box">
                                            <div class="tp-contact-input">
                                                <textarea id="message" name="message" placeholder="Write your message here...">{{ old('message') }}</textarea>
                                            </div>
                                            <div class="tp-contact-input-title">
                                                <label for="message">Your Message</label>
                                            </div>
                                            @error('message')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tp-contact-suggetions mb-20">
                                        <div class="tp-contact-remeber">
                                            <input id="remeber" type="checkbox">
                                            <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="tp-contact-btn">
                                        <button type="submit" class="tp-login-btn w-100">Send Message</button>
                                    </div>
                                </form>
                                @if(session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="tp-contact-info-wrapper">
                            <!-- Contact info items -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end -->
</main>
@endsection
