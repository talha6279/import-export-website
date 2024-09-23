@extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')






      <main>

        <!-- profile area start -->
        <section class="profile__area pt-120 pb-120">
         <div class="container">
            <div class="profile__inner p-relative">
               <div class="profile__shape">
                  <img class="profile__shape-1" src="{{asset('website/assets/img/login/laptop.png')}}" alt="" >
                  <img class="profile__shape-2" src="{{asset('website/assets/img/login/man.png')}}" alt="" >
                  <img class="profile__shape-3" src="{{asset('website/assets/img/login/shape-1.png')}}" alt="" >
                  <img class="profile__shape-4" src="{{asset('website/assets/img/login/shape-2.png')}}" alt="" >
                  <img class="profile__shape-5" src="{{asset('website/assets/img/login/shape-3.png')}}" alt="" >
                  <img class="profile__shape-6" src="{{asset('website/assets/img/login/shape-4.png')}}" alt="" >
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-lg-4">
                     <div class="profile__tab mr-40">
                        <nav>
                           <div class="nav nav-tabs tp-tab-menu flex-column" id="profile-tab" role="tablist">
                              <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><span><i class="fa-regular fa-user-pen"></i></span>Profile</button>
                              <button class="nav-link" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false"><span><i class="fa-regular fa-circle-info"></i></span> Information</button>
                              
                              <span id="marker-vertical" class="tp-tab-line d-none d-sm-inline-block"></span>
                           </div>
                        </nav>
                     </div>
                  </div>
                  <div class="col-xxl-8 col-lg-8">
                     <div class="profile__tab-content">
                        <div class="tab-content" id="profile-tabContent">
                           <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <div class="profile__main">
                                 <div class="profile__main-top pb-80">
                                    <div class="row align-items-center">
                                       <div class="col-md-6">
                                          <div class="profile__main-inner d-flex flex-wrap align-items-center">
                                             <div class="profile__main-thumb">
                                                <img src="{{asset('website/assets/img/download.png')}}" alt="">
                                                <div class="profile__main-thumb-edit">
                                                   <input id="profile-thumb-input" class="profile-img-popup" type="file">
                                                   <label for="profile-thumb-input"><i class="fa-light fa-camera"></i></label>
                                                </div>
                                             </div>
                                             <div class="profile__main-content">
                                                <h1 class="profile__main-title">Welcome Mr/Mrs {{ $user->name }} !</h1>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="profile__main-logout text-sm-end">
                                             <a href="{{route('user.logout')}}" class="tp-logout-btn">Logout</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 
                                       
                                      
                                       
                           <div class="tab-pane fade" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                              <div class="profile__info">
                                 <h3 class="profile__info-title">Personal Details</h3>
                                 <div class="profile__info-content">
                                    <form action="#">
                                       <div class="row">
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="Enter your username" value="{{ $user->name }}" disabled>
                                                   <span>
                                                      <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M15.5 17.6C15.5 14.504 12.3626 12 8.5 12C4.63737 12 1.5 14.504 1.5 17.6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="email" placeholder="Enter your email" value="{{ $user->email }}" disabled>
                                                   <span>
                                                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M13 14.6H5C2.6 14.6 1 13.4 1 10.6V5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M13 5.3999L10.496 7.3999C9.672 8.0559 8.32 8.0559 7.496 7.3999L5 5.3999" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>                                             
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="Email Not Verified Yet" value="{{ $user->email_verified_at }}" disabled>
                                                   <span>
                                                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M13 14.6H5C2.6 14.6 1 13.4 1 10.6V5C1 2.2 2.6 1 5 1H13C15.4 1 17 2.2 17 5V10.6C17 13.4 15.4 14.6 13 14.6Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path d="M13 5.3999L10.496 7.3999C9.672 8.0559 8.32 8.0559 7.496 7.3999L5 5.3999" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>                                             
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xxl-6 col-md-6">
                                             <div class="profile__input-box">
                                                <div class="profile__input">
                                                   <input type="text" placeholder="User Type" value="{{ $user->usertype }}" disabled>
                                                   <span>
                                                      <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                         <path d="M13.9148 5V13C13.9148 16.2 13.1076 17 9.87892 17H5.03587C1.80717 17 1 16.2 1 13V5C1 1.8 1.80717 1 5.03587 1H9.87892C13.1076 1 13.9148 1.8 13.9148 5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path opacity="0.4" d="M9.08026 3.80054H5.85156" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         <path opacity="0.4" d="M7.45425 14.6795C8.14522 14.6795 8.70537 14.1243 8.70537 13.4395C8.70537 12.7546 8.14522 12.1995 7.45425 12.1995C6.76327 12.1995 6.20312 12.7546 6.20312 13.4395C6.20312 14.1243 6.76327 14.6795 7.45425 14.6795Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      </svg>                                                                                        
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
</form>
                          
      </main>
      

     @endsection