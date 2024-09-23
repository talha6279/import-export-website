



@extends('website/webtemplate')
@section('webcontent')
@include('dashboard/includes/alerts')

<main>

   <!-- breadcrumb area start -->
   <section class="breadcrumb__area include-bg pt-95 pb-50">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="breadcrumb__content p-relative z-index-1">
                  <h3 class="breadcrumb__title">Payment Information</h3>
                  <div class="breadcrumb__list">
                     <span><a href="{{ route('website') }}">Home</a></span>
                     <span>Payment Details</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb area end -->

   <!-- payment info area start -->
   <section class="tp-payment-area pb-120">
      <div class="container">
         <div class="row">
            <div class="col-xl-8 col-lg-8">
               <div class="tp-payment-info mb-25 mr-30">
                  <h3 class="tp-payment-title">Bank Details for Manual Payment</h3>
                  <p>Please find below our bank details for manual payments. You can transfer the payment to the provided account and contact us to confirm the transaction.</p>
                  <div class="tp-bank-details">
                     <h4>Bank Account Information</h4>
                     <ul>
                        <li><strong>Bank Name:</strong>United Bank Limited (UBL)</li>
                        <li><strong>Account Title:</strong>Talha Younas</li>
                        <li><strong>Account Number:</strong> 0043283126509</li>
                        <li><strong>IBAN:</strong> PK87 UNIL 0109 0002 8312 6509</li>
                        <li><strong>Branch Code:</strong> 0043</li>
                        <li><strong>Branch:</strong>0043 Pasrur</li>
                     </ul>
                  </div>
                  <div class="tp-payment-notes mt-4">
                     <h4>Important Notes:</h4>
                     <ul>
                        <li>Please include your order number or company name in the payment reference.</li>
                        <li>After making the payment, kindly send us the payment confirmation via email or contact us directly.</li>
                        <li>For any questions or assistance, feel free to reach out to us.</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="tp-contact-info-wrapper">
                  <h3 class="tp-contact-title">Contact Information</h3>
                  <div class="tp-contact-info-item">
                     <div class="tp-contact-info-icon">
                        <span>
                           <img src="{{ asset('website/assets/img/contact/contact-icon-1.png') }}" alt="Email Icon">
                        </span>
                     </div>
                     <div class="tp-contact-info-content">
                        <p><strong>Email:</strong></p>
                        <p><a href="mailto:your-email@example.com">talhachander50@gmail.com</a></p>
                     </div>
                  </div>
                  <div class="tp-contact-info-item">
                     <div class="tp-contact-info-icon">
                        <span>
                           <img src="{{ asset('website/assets/img/contact/contact-icon-2.png') }}" alt="Phone Icon">
                        </span>
                     </div>
                     <div class="tp-contact-info-content">
                        <p><strong>Phone:</strong></p>
                        <p><a href="tel:+1234567890">+92 3099323779</a></p>
                     </div>
                  </div>
                  <div class="tp-contact-info-item">
                     <div class="tp-contact-info-icon">
                        <span>
                           <img src="{{ asset('website/assets/img/contact/contact-icon-3.png') }}" alt="Address Icon">
                        </span>
                     </div>
                     <div class="tp-contact-info-content">
                        <p><strong>Address:</strong></p>
                        <p>St. Nursery, Habib Pura<br>Sialkot, Pakistan 51101</p>
                     </div>
                  </div>
                  <div class="tp-contact-social-wrapper mt-5">
                     <h4 class="tp-contact-social-title">Find Us on Social Media</h4>
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
   </section>
   <!-- payment info area end -->

</main>

@endsection
