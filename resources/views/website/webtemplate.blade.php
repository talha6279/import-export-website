<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('website/assets/img/logo/favicon.png')}}">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('website/assets/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/animate.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/font-awesome-pro.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/flaticon_shofy.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/spacing.css')}}">
      <link rel="stylesheet" href="{{asset('website/assets/css/main.css')}}">
   </head>
   <body>
      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <!-- loading content here -->
               <div class="tp-preloader-content">
                  <div class="tp-preloader-logo">
                     <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                           <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                       </svg>
                     </div>
                     <img src="{{asset('website/assets/img/logo/preloader/preloader-icon.svg')}}" alt="">
                  </div>
                  <h3 class="tp-preloader-title">Shofy</h3>
                  <p class="tp-preloader-subtitle">Loading</p>
               </div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area offcanvas__radius">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="{{route('website')}}">
                        <img src="{{asset('website/assets/img/logo/logo.svg')}}" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="offcanvas__category pb-40">
                  <button class="tp-offcanvas-category-toggle">
                     <i class="fa-solid fa-bars"></i>
                     All Categories
                  </button>
                  <div class="tp-category-mobile-menu">
                     
                  </div>
               </div>
               <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

               <div class="offcanvas__contact align-items-center d-none">
                  <div class="offcanvas__contact-icon mr-20">
                     <span>
                        <img src="{{asset('website/assets/img/icon/contact.png')}}" alt="">
                     </span>
                  </div>
                  <div class="offcanvas__contact-content">
                     <h3 class="offcanvas__contact-title">
                        <a href="tel:+923099323779">+92 309 932 3779</a>
                     </h3>
                  </div>
               </div>
               <div class="offcanvas__btn">
                  <a href="{{route('contact')}}" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
               </div>
            </div>
            <div class="offcanvas__bottom">
               <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                  <div class="offcanvas__currency-wrapper currency">
                     <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
                     <ul class="offcanvas__currency-list tp-currency-list">
                        <li>USD</li>
                        <li>ERU</li>
                        <li>BDT </li>
                        <li>INR</li>
                     </ul>
                  </div>
                  <div class="offcanvas__select language">
                     <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                        <div class="offcanvas__lang-img mr-15">
                           <img src="{{asset('website/assets/img/icon/language-flag.png')}}" alt="">
                        </div>
                        <div class="offcanvas__lang-wrapper">
                           <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                           <ul class="offcanvas__lang-list tp-lang-list">
                              <li>Spanish</li>
                              <li>Portugese</li>
                              <li>American</li>
                              <li>Canada</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- mobile menu area start -->
      <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
         <div class="container">
            <div class="row row-cols-5">
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="{{route('shop')}}" class="tp-mobile-item-btn">
                        <i class="flaticon-store"></i>
                        <span>Store</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-search-open-btn">
                        <i class="flaticon-search-1"></i>
                        <span>Search</span>
                     </button>
                  </div>
               </div>
               
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="{{route('profile')}}" class="tp-mobile-item-btn">
                        <i class="flaticon-user"></i>
                        <span>Account</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                        <i class="flaticon-menu-1"></i>
                        <span>Menu</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mobile menu area end -->

      <!-- search area start -->
      <section class="tp-search-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-search-form">
                     <div class="tp-search-close text-center mb-20">
                        <button class="tp-search-close-btn tp-search-close-btn"></button>
                     </div>
                     <form action="#">
                        <div class="tp-search-input mb-10">
                           <input type="text" placeholder="Search for product...">
                           <button type="submit"><i class="flaticon-search-1"></i></button>
                        </div>
                        <div class="tp-search-category">
                           <span>Search by : </span>
                           <a href="#">Men, </a>
                           <a href="#">Women, </a>
                           <a href="#">Children, </a>
                           <a href="#">Shirt, </a>
                           <a href="#">Demin</a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- search area end -->

      <!-- cart mini area start -->
      <div class="cartmini__area tp-all-font-roboto">
         <div class="cartmini__wrapper d-flex justify-content-between flex-column">
             <div class="cartmini__top-wrapper">
                 <div class="cartmini__top p-relative">
                     <div class="cartmini__top-title">
                         <h4>Bank Details for Manual Payment</h4>
                     </div>
                     <div class="cartmini__close">
                         <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                     </div>
                 </div>
                 <div class="cartmini__shipping">
                  <p>Bank Account Information</p>
                                    
                 </div>
                 <div class="cartmini__widget">
                     <div class="cartmini__widget-item">
                     <ul>
                        <li><strong>Bank Name:</strong> United Bank Limited (UBL)</li>
                        <li><strong>Account Title:</strong> Talha Younas</li>
                        <li><strong>Branch:</strong> 0043 Pasrur</li>
                        <li><strong>Account Number:</strong> 0043283126509</li>
                        <li><strong>IBAN:</strong> PK87 UNIL 0109 0002 8312 6509</li>
                        <li><strong>Branch Address:</strong>  Sialkot Road Pasrur, Pasrur, Sialkot, Pakistan.</li>
                     </ul>
                         
                     </div>
                 </div>
                 <!-- for wp -->
                 <!-- if no item in cart -->
                 <div class="cartmini__empty text-center d-none">
                     <img src="{{asset('website/assets/img/product/cartmini/empty-cart.png')}}" alt="">
                     <p>Your Cart is empty</p>
                     <a href="{{route('shop')}}" class="tp-btn">Go to Shop</a>
                 </div>
             </div>
             <div class="cartmini__checkout">
                 <div class="cartmini__checkout-title mb-30">
                 After making the payment, kindly send us the payment confirmation via email or contact us directly.
                 </div>
                 <div class="cartmini__checkout-btn">
                     <a href="{{route('contact')}}" class="tp-btn mb-10 w-100"> Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- cart mini area end -->

      <!-- header area start -->
      <header>
         <div class="tp-header-area p-relative z-index-11">
            <!-- header top start  -->
            <div class="tp-header-top black-bg p-relative z-index-1 d-none d-md-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tp-header-welcome d-flex align-items-center">
                           <span>
                              <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.6364 1H1V12.8182H14.6364V1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M14.6364 5.54545H18.2727L21 8.27273V12.8182H14.6364V5.54545Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M5.0909 17.3636C6.3461 17.3636 7.36363 16.3461 7.36363 15.0909C7.36363 13.8357 6.3461 12.8182 5.0909 12.8182C3.83571 12.8182 2.81818 13.8357 2.81818 15.0909C2.81818 16.3461 3.83571 17.3636 5.0909 17.3636Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M16.9091 17.3636C18.1643 17.3636 19.1818 16.3461 19.1818 15.0909C19.1818 13.8357 18.1643 12.8182 16.9091 12.8182C15.6539 12.8182 14.6364 13.8357 14.6364 15.0909C14.6364 16.3461 15.6539 17.3636 16.9091 17.3636Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                 
                           </span>
                           <p>Your Products, Our Expertise – Let's Go Global!</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="tp-header-top-right d-flex align-items-center justify-content-end">
                           <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                              
                              <div class="tp-header-top-menu-item tp-header-currency">
                                 <span class="tp-header-currency-toggle" id="tp-header-currency-toggle">USD</span>
                                 <ul>
                                    <li>
                                       <a href="#">EUR</a>
                                    </li>
                                    <li>
                                       <a href="#">CHF</a>
                                    </li>
                                    <li>
                                       <a href="#">GBP</a>
                                    </li>
                                    <li>
                                       <a href="#">KWD</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-header-top-menu-item tp-header-setting">
                                 <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                                 <ul>
                                    <li>
                                       <a href="{{route('profile')}}">My Profile</a>
                                    </li>
                                    
                                    <li>
                                       <a href="{{route('cart')}}">Cart</a>
                                    </li>
                                    <li>
                                       <a href="{{route('user.login')}}">Logout</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- header main start -->
            <div class="tp-header-main tp-header-sticky">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="logo">
                           <a href="{{route('website')}}">
                              <img src="{{asset('website/assets/img/logo/logo.svg')}}" alt="logo">
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                        <div class="tp-header-search pl-70">
                           <form action="#">
                              <div class="tp-header-search-wrapper d-flex align-items-center">
                                 <div class="tp-header-search-box">
                                    <input type="text" placeholder="Search for Products...">
                                 </div>
                                 <div class="tp-header-search-category">
                                    <select>
                                       <option>Select Category</option>
                                       <option>Apparels</option>
                                       <option>Leather Garments</option>
                                       <option>Textile</option>
                                       <option>Gloves & Bags</option>
                                    </select>
                                 </div>
                                 <div class="tp-header-search-btn">
                                    <button type="submit">
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M19 19L14.65 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                          
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                        <div class="tp-header-main-right d-flex align-items-center justify-content-end">
                           <div class="tp-header-login d-none d-lg-block">
                              <a href="{{route('profile')}}" class="d-flex align-items-center">
                                 <div class="tp-header-login-icon">
                                    <span>
                                       <svg width="17" height="21" viewBox="0 0 17 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <circle cx="8.57894" cy="5.77803" r="4.77803" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M1.00002 17.2014C0.998732 16.8655 1.07385 16.5337 1.2197 16.2311C1.67736 15.3158 2.96798 14.8307 4.03892 14.611C4.81128 14.4462 5.59431 14.336 6.38217 14.2815C7.84084 14.1533 9.30793 14.1533 10.7666 14.2815C11.5544 14.3367 12.3374 14.4468 13.1099 14.611C14.1808 14.8307 15.4714 15.27 15.9291 16.2311C16.2224 16.8479 16.2224 17.564 15.9291 18.1808C15.4714 19.1419 14.1808 19.5812 13.1099 19.7918C12.3384 19.9634 11.5551 20.0766 10.7666 20.1304C9.57937 20.2311 8.38659 20.2494 7.19681 20.1854C6.92221 20.1854 6.65677 20.1854 6.38217 20.1304C5.59663 20.0773 4.81632 19.9641 4.04807 19.7918C2.96798 19.5812 1.68652 19.1419 1.2197 18.1808C1.0746 17.8747 0.999552 17.5401 1.00002 17.2014Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </span>
                                 </div>
                                 
                              </a>
                           </div>
                           <div class="tp-header-action d-flex align-items-center ml-50">
                              <div class="tp-header-action-item d-none d-lg-block">
                                 <a href="{{route('about')}}"  class="tp-header-action-btn">
                                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                       
                                 </a>
                              </div>
                              <div class="tp-header-action-item d-none d-lg-block">
                                 <a href="{{route('contact')}}" class="tp-header-action-btn">
                                    <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                    <span class="tp-header-action-badge">1</span>                          
                                 </a>
                              </div>
                              <div class="tp-header-action-item">
                                 <button type="button" class="tp-header-action-btn cartmini-open-btn">
                                    <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>    
                                    <span class="tp-header-action-badge">1</span>                                                                          
                                 </button>
                              </div>
                              <div class="tp-header-action-item d-lg-none">
                                 <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                       <rect x="10" width="20" height="2" fill="currentColor"/>
                                       <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                       <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                                    </svg>
                                 </button>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- header bottom start -->
            <div class="tp-header-bottom tp-header-bottom-border d-none d-lg-block">
               <div class="container">
                  <div class="tp-mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                           <div class="tp-header-category tp-category-menu tp-header-category-toggle">
                              <button class="tp-category-menu-btn tp-category-menu-toggle">
                                 <span>
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1C0 0.447715 0.447715 0 1 0H15C15.5523 0 16 0.447715 16 1C16 1.55228 15.5523 2 15 2H1C0.447715 2 0 1.55228 0 1ZM0 7C0 6.44772 0.447715 6 1 6H17C17.5523 6 18 6.44772 18 7C18 7.55228 17.5523 8 17 8H1C0.447715 8 0 7.55228 0 7ZM1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447715 14 1 14H11C11.5523 14 12 13.5523 12 13C12 12.4477 11.5523 12 11 12H1Z" fill="currentColor"/>
                                    </svg>
                                 </span>     
                                 All Categories                            
                              </button>
                              <nav class="tp-category-menu-content">
                               <ul>
                               @if(isset($categories) && $categories->isNotEmpty())
                                 @foreach( $categories as $cat )
                                   <li>
                                      <a href="{{route('shop')}}">
                                         <span>
                                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                               <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                         </span>
                                        {{$cat->name}}</a>
                                   </li>
                                   @endforeach
                                   @else
                                   <li>No categories available</li>
                                   @endif
                                </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                           <div class="main-menu menu-style-1">
                              <nav class="tp-main-menu-content">
                                 <ul>
                                    <li class="has-dropdown has-mega-menu">
                                       <a href="{{route('website')}}">Home</a>
                                       <div class="home-menu tp-submenu tp-mega-menu">
                                          <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="{{route('website')}}">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="{{asset('website/assets/img/menu/menu-home-1.jpg')}}" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Home</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="{{route('index2')}}">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="{{asset('website/assets/img/menu/menu-home-2.jpg')}}" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Fashion</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="{{route('index3')}}">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="{{asset('website/assets/img/menu/menu-home-3.jpg')}}" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Beauty</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="{{route('index4')}}">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="{{asset('website/assets/img/menu/menu-home-4.jpg')}}" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Jewelry </h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="{{route('index5')}}">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="{{asset('website/assets/img/menu/menu-home-5.jpg')}}" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Grocery</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li  class="has-dropdown has-mega-menu">
                                       <a href="{{route('shop')}}">Shop</a>
                                       <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                          <div class="row">
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="{{route('shop')}}" class="shop-mega-menu-title">Shop Pages</a>
                                                      <ul>
                                                      @if(isset($categories) && $categories->isNotEmpty())
                                                         @foreach($categories as $cate)
                                                          <li><a href="{{route('shop-category')}}">{{$cate->name}}</a></li>
                                                          @endforeach
                                                          @else
                                                         <li>No categories available</li>
                                                         @endif
                                                      </ul>
                                                </div>
                                             </div>
                                             @if(isset($randomCategory) && $randomCategory->isNotEmpty())
                                             @foreach($randomCategory as $category)
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="{{asset('uploads/products/categories/' . $category->picture)}}" alt="{{$category->name}}">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="{{route('shop-category')}}" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">{{$category->name}}</a>
                                                   </div>
                                                </div>
                                             </div>
                                             @endforeach
                                             @else
                                             <li>No categories available</li>
                                             @endif
                                          </div>
                                       </div>
                                   </li>
                                   <li class="has-dropdown has-mega-menu">
    <a href="{{ route('shop') }}">Products</a>
    <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
        <!-- Loop through categories -->
        @if(isset($categories) && $categories->isNotEmpty())
        @foreach($categories as $category)
            <li class="has-dropdown">
                <a href="{{ route('shop') }}" class="mega-menu-title">{{ $category->name }}</a>
                <ul class="tp-submenu">
                    <!-- Loop through products under each category -->
                    @if(isset($category->products) && $category->products->isNotEmpty())
                    @foreach($category->products as $product)
                        <li><a href="{{ route('shop-category') }}">{{ $product->itemname }}</a></li>
                    @endforeach
                    @else
                            <li>No products available</li>
                        @endif
                </ul>
            </li>
        @endforeach
        @else
            <li>No categories available</li>
        @endif
        <!-- Separate section for 'More Pages' -->
        <li class="has-dropdown">
            <a href="{{ route('shop') }}" class="mega-menu-title">More Pages</a>
            <ul class="tp-submenu">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('user.login') }}">Login</a></li>
                <li><a href="{{ route('user.register') }}">Register</a></li>
            </ul>
        </li>
    </ul>
</li>


                                    
                                    <li class="has-dropdown">
                                       <a href="{{route('blog')}}">Blog</a>
                                       <ul class="tp-submenu">
                                          <li><a href="{{route('blog')}}">Blog Standard</a></li>
                                          <li><a href="{{route('blog')}}">Blog Details</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                 </ul>
                                 
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                           <div class="tp-header-contact d-flex align-items-center justify-content-end">
                              <div class="tp-header-contact-icon">
                                 <span>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96977 3.24859C2.26945 2.75144 3.92158 0.946726 5.09889 1.00121C5.45111 1.03137 5.76246 1.24346 6.01544 1.49057H6.01641C6.59631 2.05874 8.26011 4.203 8.35352 4.65442C8.58411 5.76158 7.26378 6.39979 7.66756 7.5157C8.69698 10.0345 10.4707 11.8081 12.9908 12.8365C14.1058 13.2412 14.7441 11.9219 15.8513 12.1515C16.3028 12.2459 18.4482 13.9086 19.0155 14.4894V14.4894C19.2616 14.7414 19.4757 15.0537 19.5049 15.4059C19.5487 16.6463 17.6319 18.3207 17.2583 18.5347C16.3767 19.1661 15.2267 19.1544 13.8246 18.5026C9.91224 16.8749 3.65985 10.7408 2.00188 6.68096C1.3675 5.2868 1.32469 4.12906 1.96977 3.24859Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 1.23685C16.4432 1.62622 19.2124 4.39253 19.6065 7.89874" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M12.936 4.59337C14.6129 4.92021 15.9231 6.23042 16.2499 7.90726" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                    
                                 </span>
                              </div>
                              <div class="tp-header-contact-content">
                                 <h5>Hotline:</h5>
                                 <p><a href="tel:+923099323779">+(92) 309 932 3779</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <div id="header-sticky-2" class="tp-header-sticky-area">
         <div class="container">
            <div class="tp-mega-menu-wrapper p-relative">
               <div class="row align-items-center">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="logo">
                        <a href="{{route('website')}}">
                           <img src="{{asset('website/assets/img/logo/logo.svg')}}" alt="logo">
                        </a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 d-none d-md-block">
                     <div class="tp-header-sticky-menu main-menu menu-style-1">
                        <nav id="mobile-menu"> 
                           <ul>
                              <li class="has-dropdown has-mega-menu">
                                 <a href="{{route('website')}}">Home</a>
                                 <div class="home-menu tp-submenu tp-mega-menu">
                                    <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="{{route('website')}}">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="{{asset('website/assets/img/menu/menu-home-1.jpg')}}" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title"> Home </h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="{{route('index2')}}">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="{{asset('website/assets/img/menu/menu-home-2.jpg')}}" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Fashion</h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="{{route('index3')}}">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="{{asset('website/assets/img/menu/menu-home-3.jpg')}}" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Beauty</h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="{{route('index4')}}">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="{{asset('website/assets/img/menu/menu-home-4.jpg')}}" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Jewelry </h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="col">
                                          <div class="home-menu-item ">
                                             <a href="{{route('index5')}}">
                                                <div class="home-menu-thumb p-relative fix">
                                                   <img src="{{asset('website/assets/img/menu/menu-home-5.jpg')}}" alt="">
                                                </div>
                                                <div class="home-menu-content">
                                                   <h5 class="home-menu-title">Grocery</h5>
                                                </div>
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li  class="has-dropdown has-mega-menu">
                                 <a href="{{route('shop')}}">Shop</a>
                                 <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                    <div class="row">
                                       <div class="col-lg-2">
                                          <div class="shop-mega-menu-list">
                                                <a href="{{route('shop')}}" class="shop-mega-menu-title">Shop Pages</a>
                                                <ul>
                                                      @if(isset($categories) && $categories->isNotEmpty())
                                                         @foreach($categories as $cate)
                                                          <li><a href="{{route('shop-category')}}">{{$cate->name}}</a></li>
                                                          @endforeach
                                                          @else
                                                         <li>No categories available</li>
                                                         @endif
                                                      </ul>
                                          </div>
                                       </div>
                                       @if(isset($randomCategory) && $randomCategory->isNotEmpty())
                                             @foreach($randomCategory as $category)
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="{{asset('uploads/products/categories/' . $category->picture)}}" alt="{{$category->name}}">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="{{route('shop-category')}}" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">{{$category->name}}</a>
                                                   </div>
                                                </div>
                                             </div>
                                             @endforeach
                                             @else
                                             <li>No categories available</li>
                                             @endif
                                    </div>
                                 </div>
                             </li>
                             <li class="has-dropdown has-mega-menu">
    <a href="{{ route('shop') }}">Products</a>
    <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
        <!-- Loop through categories -->
        @if(isset($categories) && $categories->isNotEmpty())
        @foreach($categories as $category)
            <li class="has-dropdown">
                <a href="{{ route('shop') }}" class="mega-menu-title">{{ $category->name }}</a>
                <ul class="tp-submenu">
                    <!-- Loop through products under each category -->
                    @if(isset($category->products) && $category->products->isNotEmpty())
                    @foreach($category->products as $product)
                        <li><a href="{{ route('shop-category') }}">{{ $product->itemname }}</a></li>
                    @endforeach
                    @else
                            <li>No products available</li>
                        @endif
                </ul>
            </li>
        @endforeach
        @else
            <li>No categories available</li>
        @endif
        <!-- Separate section for 'More Pages' -->
        <li class="has-dropdown">
            <a href="{{ route('shop') }}" class="mega-menu-title">More Pages</a>
            <ul class="tp-submenu">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('user.login') }}">Login</a></li>
                <li><a href="{{ route('user.register') }}">Register</a></li>
            </ul>
        </li>
    </ul>
</li>

                              
                              <li class="has-dropdown">
                                 <a href="{{route('blog')}}">Blog</a>
                                 <ul class="tp-submenu">
                                    <li><a href="{{route('blog')}}">Blog Standard</a></li>
                                    <li><a href="{{route('blog')}}">Blog Details</a></li>
                                 </ul>
                              </li>
                              <li><a href="{{route('contact')}}">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                     <div class="tp-header-action d-flex align-items-center justify-content-end ml-50">
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="compare.html"  class="tp-header-action-btn">
                              <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>                                       
                           </a>
                        </div>
                        <div class="tp-header-action-item d-none d-lg-block">
                           <a href="wishlist.html" class="tp-header-action-btn">
                              <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg> 
                              <span class="tp-header-action-badge">4</span>                          
                           </a>
                        </div>
                        <div class="tp-header-action-item">
                           <button type="button" class="tp-header-action-btn cartmini-open-btn">
                              <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>    
                              <span class="tp-header-action-badge">13</span>                                                                          
                           </button>
                        </div>
                        <div class="tp-header-action-item d-lg-none">
                           <button type="button" class="tp-header-action-btn tp-offcanvas-open-btn">
                              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                 <rect x="10" width="20" height="2" fill="currentColor"/>
                                 <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                 <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                              </svg>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      @yield('webcontent')


      <!-- footer area start -->
      <footer>
         <div class="tp-footer-area" data-bg-color="footer-bg-grey">
            <div class="tp-footer-top pt-95 pb-40">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-1 mb-50">
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-logo">
                                 <a href="{{route('website')}}">
                                    <img src="{{asset('website/assets/img/logo/logo.svg')}}" alt="logo">
                                 </a>
                              </div>
                              <p class="tp-footer-desc">Bridging domestic and international markets with efficiency and expertise in import and export</p>
                              <div class="tp-footer-social">
                                 <a href="https://www.facebook.com/talhachandar5"><i class="fa-brands fa-facebook-f"></i></a>
                                 <a href="https://www.instagram.com/talha_chandar/"><i class="fa-brands fa-instagram"></i></a>
                                 <a href="https://www.linkedin.com/in/talha-younas-9791ba318/"><i class="fa-brands fa-linkedin-in"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-50">
                           <h4 class="tp-footer-widget-title">My Account</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="{{route('profile')}}">My Profile</a></li>
                                 <li><a href="{{route('cart')}}">Cart</a></li>
                                 <li><a href="{{route('user.register')}}">Register</a></li>
                                 <li><a href="{{route('user.login')}}">Login</a></li>
                                 <li><a href="{{route('shop')}}">Products</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-3 mb-50">
                           <h4 class="tp-footer-widget-title">Infomation</h4>
                           <div class="tp-footer-widget-content">
                              <ul>
                                 <li><a href="{{route('blog')}}">Our Story</a></li>
                                 <li><a href="{{route('about')}}">About Us</a></li>
                                 <li><a href="{{route('shop-category')}}">Categories</a></li>
                                 <li><a href="{{route('blog')}}">Latest Blogs</a></li>
                                 <li><a href="{{route('contact')}}">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-4 mb-50">
                           <h4 class="tp-footer-widget-title">Talk To Us</h4>
                           <div class="tp-footer-widget-content">
                              <div class="tp-footer-talk mb-20">
                                 <span>Got Questions? Call us</span>
                                 <h4><a href="tel:+92 3099323779">+92 3099323779</a></h4>
                              </div>
                              <div class="tp-footer-contact">
                                 <div class="tp-footer-contact-item d-flex align-items-start">
                                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6H5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M13 5.40039L10.496 7.40039C9.672 8.05639 8.32 8.05639 7.496 7.40039L5 5.40039" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 11.4004H5.8" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M1 8.19922H3.4" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-footer-contact-content">
                                       <p><a href="mailto:talhachander50@gmail.com"><span class="__cf_email__" data-cfemail="c1b2a9aea7b881b2b4b1b1aeb3b5efa2aeac">talhachander50@gmail.com</span></a></p>
                                    </div>
                                 </div>
                                 <div class="tp-footer-contact-item d-flex align-items-start">
                                    <div class="tp-footer-contact-icon">
                                       <span>
                                          <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M8.50001 10.9417C9.99877 10.9417 11.2138 9.72668 11.2138 8.22791C11.2138 6.72915 9.99877 5.51416 8.50001 5.51416C7.00124 5.51416 5.78625 6.72915 5.78625 8.22791C5.78625 9.72668 7.00124 10.9417 8.50001 10.9417Z" stroke="currentColor" stroke-width="1.5"/>
                                             <path d="M1.21115 6.64496C2.92464 -0.887449 14.0841 -0.878751 15.7889 6.65366C16.7891 11.0722 14.0406 14.8123 11.6313 17.126C9.88298 18.8134 7.11704 18.8134 5.36006 17.126C2.95943 14.8123 0.210885 11.0635 1.21115 6.64496Z" stroke="currentColor" stroke-width="1.5"/>
                                          </svg>
                                       </span>
                                    </div>
                                    <div class="tp-footer-contact-content">
                                       <p><a href="https://www.google.com/maps/place/Habib+Pura+Habibpura,+Sialkot,+Punjab/@32.4806507,74.54229,16z/data=!3m1!4b1!4m6!3m5!1s0x391eea7e9c5adaff:0x2162b9c2ff4daf2c!8m2!3d32.4781593!4d74.5412017!16s%2Fg%2F12hkt3g_z?entry=ttu&g_ep=EgoyMDI0MDkwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">St. Nursery, Habib Pura <br> Sialkot, Pakistan 51101</a></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-footer-bottom">
               <div class="container">
                  <div class="tp-footer-bottom-wrapper">
                     <div class="row align-items-center">
                        <div class="col-md-6">
                           <div class="tp-footer-copyright">
                              <p>©  Designed by <a href="https://talhachandar.netlify.app/">Talha Chander</a>.</p>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="tp-footer-payment text-md-end">
                              <p>
                                 <img src="{{asset('website/assets/img/footer/footer-pay.png')}}" alt="">
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer area end -->



      <!-- JS here -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="{{asset('website/assets/js/vendor/jquery.js')}}"></script>
      <script src="{{asset('website/assets/js/vendor/waypoints.js')}}"></script>
      <script src="{{asset('website/assets/js/bootstrap-bundle.js')}}"></script>
      <script src="{{asset('website/assets/js/meanmenu.js')}}"></script>
      <script src="{{asset('website/assets/js/swiper-bundle.js')}}"></script>
      <script src="{{asset('website/assets/js/slick.js')}}"></script>
      <script src="{{asset('website/assets/js/range-slider.js')}}"></script>
      <script src="{{asset('website/assets/js/magnific-popup.js')}}"></script>
      <script src="{{asset('website/assets/js/nice-select.js')}}"></script>
      <script src="{{asset('website/assets/js/purecounter.js')}}"></script>
      <script src="{{asset('website/assets/js/countdown.js')}}"></script>
      <script src="{{asset('website/assets/js/wow.js')}}"></script>
      <script src="{{asset('website/assets/js/isotope-pkgd.js')}}"></script>
      <script src="{{asset('website/assets/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{asset('website/assets/js/ajax-form.js')}}"></script>
      <script src="{{asset('website/assets/js/main.js')}}"></script>
   </body>


</html>
