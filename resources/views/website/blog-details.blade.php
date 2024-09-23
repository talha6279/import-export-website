@extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')

      <main>


         <!-- blog details area start -->
         <section class="tp-postbox-details-area pb-120 pt-95">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9">
                     <div class="tp-postbox-details-top">
                        <div class="tp-postbox-details-category">
                           <span>
                           {{ $blogs->category ? $blogs->category->name : 'Unknown' }}
                           </span>
                        </div>
                        <h3 class="tp-postbox-details-title">{{$blogs->title}}</h3>
                        <div class="tp-postbox-details-meta mb-50">
                           <span data-meta="author">
                              <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7.4104 8C9.33922 8 10.9028 6.433 10.9028 4.5C10.9028 2.567 9.33922 1 7.4104 1C5.48159 1 3.91797 2.567 3.91797 4.5C3.91797 6.433 5.48159 8 7.4104 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.4102 15.0001C13.4102 12.2911 10.721 10.1001 7.41016 10.1001C4.09933 10.1001 1.41016 12.2911 1.41016 15.0001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              By <a href="#">{{ $blogs->author ? $blogs->author->name : 'Unknown' }}</a>
                           </span>
                           <span>
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.5972 10.7259L8.42721 9.43093C8.04921 9.20693 7.74121 8.66793 7.74121 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                             {{$blogs->created_at}}
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-12">
                     <div class="tp-postbox-details-thumb">
                        <img src="{{asset('uploads/blogs/featured-images/'.$blogs->featured_image)}}" alt="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-9 col-lg-8">
                     <div class="tp-postbox-details-main-wrapper">
                        <div class="tp-postbox-details-content">
                           <p class="tp-dropcap">{{$blogs->content}}</p>

                           <p></p>


                           

                           <div class="tp-postbox-details-quote">
                              <blockquote>
                                 <div class="tp-postbox-details-quote-shape">
                                    <img class="tp-postbox-details-quote-shape-1" src="{{asset('website/assets/img/blog/details/shape/line.png')}}" alt="">
                                    <img class="tp-postbox-details-quote-shape-2" src="{{asset('website/assets/img/blog/details/shape/quote.png')}}" alt="">
                                 </div>
                                 <p>There is a way out of every box, a solution to every puzzle its just a matter of finding it.</p>
                                 <cite>Talha Chandar</cite>
                              </blockquote>
                           </div>


                           <div class="tp-postbox-details-list">
                              <ul>
                              </ul>
                           </div>

                           <div class="tp-postbox-details-share-wrapper">
                              <div class="row">
                                 <div class="col-xl-8 col-lg-6">
                                   
                                 </div>
                                 <div class="col-xl-4 col-lg-6">
                                    
                                 </div>
                              </div>
                           </div>

                           <div class="tp-postbox-details-navigation d-none d-md-flex justify-content-between align-items-center">
                              <div class="tp-postbox-details-navigation-item d-flex align-items-center">
                                 <div class="tp-postbox-details-navigation-icon mr-15">
                                    <span>
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.999965 7.04891L15.939 7.04891" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M7.02588 1.04883L1.00048 7.04833L7.02588 13.0488" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </span>
                                 </div>
                                 <div class="tp-postbox-details-navigation-content">
                                    <span>Previous Post</span>
                                    <h3 class="tp-postbox-details-navigation-title">
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">Hiring the Right Sales Team at <br> the Right Time</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="tp-postbox-details-navigation-item d-flex align-items-center text-end">
                                 <div class="tp-postbox-details-navigation-content">
                                    <span>Next Post</span>
                                    <h3 class="tp-postbox-details-navigation-title">
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">Fully embrace the return of <br> 90s fashion</a>
                                    </h3>
                                 </div>
                                 <div class="tp-postbox-details-navigation-icon ml-15">
                                    <span>
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M15.939 7.00008L1 7.00008" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M9.91211 1L15.9375 6.9995L9.91211 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </span>
                                 </div>
                              </div>
                           </div>

                           <div class="tp-postbox-details-author d-sm-flex align-items-start" data-bg-color="#F4F7F9">
                              <div class="tp-postbox-details-author-thumb">
                                 <a href="#">
                                    <img src="{{asset('website/assets/img/users/user-11.jpg')}}" alt="">
                                 </a>
                              </div>
                              <div class="tp-postbox-details-author-content">
                                 <span>Written by</span>
                                 <h5 class="tp-postbox-details-author-title">
                                    <a href="#">Theodore Handle</a>
                                 </h5>
                                 <p>By defining and following internal and external processes, your team will have clarity on resources to attract and retain customers for your business.</p>

                                 <div class="tp-postbox-details-author-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                 </div>
                              </div>
                           </div>

                           <div class="tp-postbox-details-comment-wrapper">
                              <h3 class="tp-postbox-details-comment-title"></h3>

                              <div class="tp-postbox-details-comment-inner">
                                 <ul>
                                    <li>
                                       <div class="tp-postbox-details-comment-box d-sm-flex align-items-start">
                                          <div class="tp-postbox-details-comment-thumb">
                                          </div>
                                          <div class="tp-postbox-details-comment-content">
                                             <div class="tp-postbox-details-comment-top d-flex ">
                                                <div class="tp-postbox-details-comment-avater">
                                                </div>
                                                <div class="tp-postbox-details-comment-reply">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <ul class="children">
                                          <li>
                                             <div>
                                                <div>
                                                </div>
                                                <div>
                                                   <div>
                                                      <div >
                                                      </div>
                                                      <div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li>
                                       <div>
                                          <div >
                                          </div>
                                          <div>
                                             <div >
                                                <div>
                                                </div>
                                                <div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>

                           <div class="tp-postbox-details-form">

                              <div class="tp-postbox-details-form-wrapper">
                                 <div class="tp-postbox-details-form-inner">
                                    <div class="tp-postbox-details-input-box">
                                       <div class="tp-contact-input">
                                       </div>
                                       <div class="tp-postbox-details-input-title">
                                       </div>
                                    </div>
                                    <div class="tp-postbox-details-input-box">
                                       <div class="tp-contact-input">
                                       </div>
                                       <div class="tp-postbox-details-input-title">
                                       </div>
                                    </div>
                                    <div class="tp-postbox-details-input-box">
                                       <div class="tp-contact-input">
                                       </div>
                                       <div class="tp-postbox-details-input-title">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-postbox-details-suggetions mb-20">
                                    <div class="tp-postbox-details-remeber">
                                       <input id="remeber" type="checkbox">
                                    </div>
                                 </div>
                                 <div c>
                                 </div>
                              </div>
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
                                    <span class="tp-sidebar-about-designation">Author</span>
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
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">
                                          <img src="{{asset('website/assets/img/blog/sidebar/blog-sidebar-1.jpg')}}" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>12 April, 2023</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="{{route('blog-details', $blogs->blog_id)}}">Sweeten your summer Wardrobes</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">
                                          <img src="{{asset('website/assets/img/blog/sidebar/blog-sidebar-2.jpg')}}" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>8 July, 2023</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="{{route('blog-details', $blogs->blog_id)}}">Exploring the English Countryside</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="{{route('blog-details', $blogs->blog_id)}}">
                                          <img src="{{asset('website/assets/img/blog/sidebar/blog-sidebar-3.jpg')}}" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>12 April, 2023</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="{{route('blog-details', $blogs->blog_id)}}">Freelancer Days 2023, What’s new?</a>
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- latest post end -->

                        <!-- categories start -->
                        <div class="tp-sidebar-widget widget_categories mb-35">
                           <h3 class="tp-sidebar-widget-title">Categories</h3>
                           <div class="tp-sidebar-widget-content">
                              <ul>
                                 <li><a href="{{route('blog')}}">Farming <span>(12)</span></a></li>
                                 <li><a href="{{route('blog')}}">Crisp Bread & Cake <span>(6)</span></a></li>
                                 <li><a href="{{route('blog')}}">Milk & Meat <span>(2)</span></a></li>
                                 <li><a href="{{route('blog')}}">Organic Fruits <span>(8)</span></a></li>
                                 <li><a href="{{route('blog')}}">Sea Foods <span>(0)</span></a></li>
                                 <li><a href="{{route('blog')}}">Vegetable <span>(3)</span></a></li>
                              </ul>
                           </div>
                        </div>
                        <!-- categories end -->

                       

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- blog details area end -->


      </main>
      

@endsection