@extends('layouts.front')

@section('title', 'About')

@section('content')

<div class="main">
<h1 class="text-2xl">Shelwilbed “Billy” Wray​</h1>
<h2>NCC, CAS, LCAS, AADC, LCMHC, LMHC</h2>
<div class="lg:flex">
   <div class="lg:w-3/4">
   <p>I am a retired Army Reserve Officer with tours to Iraq, Afghanistan, & Africa. I enjoy being a husband, a father to our two young daughters, scuba diving, fishing, teaching yoga, listening to, writing and playing reggae music and cooking.  I have been providing counseling services for over 30 years.  Positions held include clinical program coordination, management, private practice and clinical director.</p>





   <div class="md:flex justify-start space-x-4">


      <div>

      <ul class="my-6 list-disc list-inside">
      <li>Over 30 years of counseling experience</li>
      <li>Clinical coordination, management, private practice and directorship</li>
      <li>Addiction specialist (Alcohol, Drugs & Eating Disorders)</li>
      <li>Deployment experience including OIF & OEF</li>
      <li>Trainer and Trainer of Trainers</li>
      <li>Individual, Marital, Couples, Family & Group sessions​</li>
   </ul>

      </div>
      <div>

      <img class="w-full md:w-44 md:h-44 mt-6" src="img/board-certified-NCC.png" alt="board certified">


      </div>
   </div>

   </div>
   <div class="lg:w-1/4 mx-10">
      <img class="w-full object-cover rounded-xl overflow-hidden border-2 border-gray-400" src="img/billywray.jpeg" alt="">
   </div>
   </div>

   <div class="flex justify-center mb-6">
   <a href="{{ url('/contact') }}" class="btn">Get Started</a>
   </div>


   </div>

   <div class="main">
      <div class="mb-10">
        <h3>Confidentiality</h3>
        <p>The confidentiality of counseling relationships is maintained in a manner consistent with accepted professional standards and with state and federal law. No persons outside of the Counseling Services Office are given any information without your prior written consent, except where it is permitted or required by law to disclose the information.</p>
        </div>
        <div class="mb-10">
        <h3>New Patients</h3>
        <p>We are currently accepting new patients. Please call, fax, or email us to set up an appointment. Feel free to call or email if you have specific questions about our services and our practice. </p>
        </div>
      <h3>Missed Appointment/Late Cancellation Fee</h3>
      <p>If you need to cancel or reschedule an appointment, please email or call 24 hours prior to your appointment. If you fail to contact us 24-hours prior to the appointment you want to cancel or reschedule, a fee will be charged to your account. Reducing missed appointments will help us maximize patient access to counseling sessions and reduce wait times.</p>

</div>
@endsection
