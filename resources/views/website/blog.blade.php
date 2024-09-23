@extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay breadcrumb__style-3" data-background="{{asset('website/assets/img/breadcrumb/breadcrumb-bg-1.jpg')}}">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Our Blog</h3>
                        <div class="breadcrumb__list">
                           <span><a href="{{route('website')}}">Home</a></span>
                           <span>Blog</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- postbox area start -->
         <section class="tp-postbox-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-8">
                     <div class="tp-postbox-wrapper pr-50">
                        @foreach($blogs as $blog)
                        <article class="tp-postbox-item format-image mb-50 transition-3">
                           <div class="tp-postbox-thumb w-img">
                                 <img src="{{asset('uploads/blogs/featured-images/' .$blog->featured_image)}}" alt="">
                              </a>
                           </div>
                           <div class="tp-postbox-content">
                              <div class="tp-postbox-meta">
                                 <span><i class="far fa-calendar-check"></i>{{$blog->created_at}}</span>
                                 <span><a href="#"><i class="far fa-user"></i> {{ $blog->author ? $blog->author->name : 'Unknown' }}</a></span> 
                                 <span><a href="#"><i class="fal fa-comments"></i>{{ $blog->category ? $blog->category->name : 'Unknown' }}</a></span>
                              </div>
                              <h3 class="tp-postbox-title">
                                 <a href="#">{{$blog->title}}</a>
                              </h3>
                              <div class="tp-postbox-text">
                                 <p>{{$blog->content}}</p>
                              </div>
                              <div class="tp-postbox-read-more">
                              </div>
                           </div>
                        </article>
                        <hr>
                        @endforeach
                       
                       
                        <div class="tp-blog-pagination mt-50">
                           <div class="tp-pagination">
                              <nav>
                                 <ul>
                                    <li>
                                       <a href="{{route('blog')}}" class="tp-pagination-prev prev page-numbers">
                                          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{route('blog')}}">1</a>
                                    </li>
                                    <li>
                                       <span class="current">2</span>
                                    </li>
                                    <li>
                                       <a href="{{route('blog')}}">3</a>
                                    </li>
                                    <li>
                                       <a href="{{route('blog')}}" class="next page-numbers">
                                          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>                                     
                                       </a>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                     <div class="tp-sidebar-wrapper tp-sidebar-ml--24">
                        <div class="tp-sidebar-widget mb-35">
                           <div class="tp-sidebar-search">
                              
                           </div>
                        </div>

                        <!-- about -->
                        <div class="tp-sidebar-widget mb-35">
                           <h3 class="tp-sidebar-widget-title">About me</h3>
                           <div class="tp-sidebar-widget-content">
                              <div class="tp-sidebar-about">
                                 <div class="tp-sidebar-about-thumb mb-25">
                                    <a href="#">
                                       <img src="{{asset('website/assets/img/users/user-11.jpg')}}" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-sidebar-about-content">
                                    <h3 class="tp-sidebar-about-title">
                                       <a href="https://talhachandar.netlify.app/">Talha Chandar</a>
                                    </h3>
                                    <span class="tp-sidebar-about-designation">Blogger</span>
                                    <p>Enthusiast exploring the intersection of literature and technology.</p>
                                    <div class="tp-sidebar-about-signature">
                                       <img src="{{asset('website/assets/img/blog/signature/signature.png')}}" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- about end -->

                        <!-- latest post start -->
                        <div class="tp-sidebar-widget mb-35">
                           <h3 class="tp-sidebar-widget-title">Latest Posts</h3>
                           <div class="tp-sidebar-widget-content">
                              <div class="tp-sidebar-blog-item-wrapper">
                                 @foreach($blogs1 as $blog)
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="#">
                                          <img src="{{asset('uploads/blogs/featured-images/' .$blog->featured_image)}}" alt="">
                                       </a>
                                    </div> 
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>{{$blog->created_at}}</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="#">{{$blog->title}}</a>
                                       </h3>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </div>
                        </div>
                        <!-- latest post end -->

                        <!-- categories start -->
                        <div class="tp-sidebar-widget widget_categories mb-35">
                           <h3 class="tp-sidebar-widget-title">Categories</h3>
                           <div class="tp-sidebar-widget-content">
                              <ul>
                                 @foreach($category as $cat)
                                 <li><a href="{{route('blog')}}">{{$cat->name}} <span></span></a></li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                        <!-- categories end -->

                       

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- postbox area end -->

      </main>
      

      @endsection