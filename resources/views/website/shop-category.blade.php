@extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')

   

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-100 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Trending Categories</h3>
                        <div class="breadcrumb__list">
                           <span><a href="{{route('website')}}">Home</a></span>
                           <span>Only Categories</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- banner area start -->
         <section class="tp-banner-area pb-30">
            <div class="container">
               <div class="row">
                  @foreach($oneProducts as $oneProduct)
                  <div class="col-xl-4 col-lg-5">
                     <div class="tp-banner-content">
                           <h3 class="tp-banner-title" style="text-align: center;">
                              <a href="{{route('product-detail', $oneProduct->item_id) }}">{{$oneProduct->itemname}}</a>
                           </h3>
                     <div class="tp-banner-item tp-banner-item-sm has-square tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="{{asset($oneProduct->picture)}}"></div>
                        
                           <div class="tp-product-badge">
                                    <span class="product-trending">Trending</span>
                                 </div>
                          
                        </div>
                     </div>
                     <div class="tp-banner-btn" style="text-align: end;">
                              <a href="{{route('product-detail', $oneProduct->item_id) }}" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </section>
         <!-- banner area end -->

         <!-- category area start -->
         <section class="tp-category-area pb-120">
            <div class="container">
               <h2>All Categories</h2>
               <div class="breadcrumb__list">
                           <span><a href="{{route('website')}}">Home</a></span>
                           <span>Only Categories</span>
                        </div>
               <div class="row">
                  @foreach( $randomProducts as $product)
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="{{asset($product->picture)}}"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="{{route('shop')}}">{{$product->itemname}}</a>
                           </h3>
                           <span class="tp-category-main-item"><a href="{{route('product-detail', $product->item_id) }}">Category Detail</a></span>
                        </div>
                     </div>
                  </div>
                  @endforeach
                
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-category-main-result text-center mb-35 mt-35">
                        <div class="tp-category-main-result-bar">
                        </div>
                     </div>
                     <div class="tp-category-main-more text-center">
                        <a href="{{route('shop')}}" class="tp-load-more-btn">
                           Load More 
                           <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13.0003 1.698V5.2986H9.39966" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M11.4933 8.29916C11.1032 9.40329 10.3649 10.3507 9.38948 10.9987C8.41408 11.6467 7.2545 11.9601 6.08548 11.8917C4.91647 11.8233 3.80134 11.3768 2.90816 10.6195C2.01497 9.86225 1.3921 8.83518 1.13343 7.69309C0.874748 6.551 0.99427 5.35578 1.47398 4.28753C1.95369 3.21928 2.7676 2.33588 3.79306 1.77045C4.81852 1.20502 5.99998 0.988199 7.15939 1.15265C8.3188 1.31711 9.39335 1.85393 10.2211 2.68222L12.9996 5.29866" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- category area end -->

     
              
      </main>
      

 @endsection