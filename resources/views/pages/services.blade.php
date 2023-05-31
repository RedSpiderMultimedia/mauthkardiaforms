@extends('layouts.front')

@section('title', 'Services')

@section('content')

<div class="main">
<h1 class="text-2xl">Kardia Services</h1>
   <p>Kardia Counseling & Consulting, PLLC provides a full range of clinical and psycho-educational services that address life-transitions, stress, body image issues, trauma, grief and loss, anxiety, depression, mood disorders, and more. We offer on-site and telehealth services for your convenience </p>
   <div class="flex justify-center">
   <a href="{{ url('/about') }}" class="btn">Learn More About Kardia</a>
   </div>
   </div>


<div class="flex justify-center mt-12">
   <h1 class="text-2xl">Clinical Services</h1>
</div>


   <div class="md:grid grid-cols-3 gap-2 p-2">
      <div><img src="img/pexels-engin-akyurt-3209136.jpg" alt="">
      <ul class="px-6 py-4 bg-brand-lt text-brand-dk">
         <li>Deployment Challenges</li>
         <li>Addictive Disorders</li>
         <li>Family Dynamics</li>
         <li>Marital Issues</li>
         <li>Life Transitions</li>
         <li><br></li>
      </ul>
      </div>
  <div>
     <img src="img/pexels-nathan-cowley-897817.jpg" alt="">
     <ul class="px-6 py-4 bg-brand-lt text-brand-dk">
      <li>Grief & Loss</li>
      <li>Academic Difficulties</li>
      <li>Depression</li>
      <li>Anxiety</li>
      <li>Eating Disorders</li>
      <li>Body Image Issues</li>
   </ul>
  </div>
  <div><img src="img/pexels-kat-jayne-568027.jpg" alt="">
  <ul class="px-6 py-4 bg-brand-lt text-brand-dk">
      <li>Adjustment Disorders</li>
      <li>Post-Traumatic Stress Disorder</li>
      <li>Fertility Issues</li>
      <li>Gender & Sexuality Issues</li>
      <li><br></li>
      <li><br></li>
   </ul>
</div>
</div>


<div class="flex justify-center mt-12">
   <h1 class="text-2xl">Psycho-Educational Services</h1>
</div>
<div class="md:grid grid-cols-3 gap-2 p-2">

  <div><img src="img/pexels-nappy-3536643.jpg" alt="">
  <ul class="px-6 py-4 bg-brand-lt text-brand-dk">
      <li>Pregnancy Support & Birth Adjustment</li>
      <li>Parenting</li>
      <li><br></li>
   </ul>
</div>
<div><img src="img/pexels-andrea-piacquadio-3808803.jpg" alt="">
   <ul class="px-6 py-4 bg-brand-lt text-brand-dk">
      <li>Relapse Prevention</li>
      <li>Reintegration</li>
      <li>Child Development</li>
   </ul>
</div>
  <div><img src="img/pexels-nappy-935949.jpg" alt="">
  <ul class="px-6 py-4 bg-brand-lt text-brand-dk">
      <li>Teacher Mentoring</li>
      <li>Forgivness</li>
      <li><br></li>
   </ul>
</div>
</div>

@endsection
