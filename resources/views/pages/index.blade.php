@extends('layouts.front')

@section('title', 'Home')

@section('content')


<div class="lg:grid grid-cols-2 items-center gap-1 mb-6">

<div class="flex justify-center"><img class="lg:w-[550px] lg:h-[550px]" src="img/heartsminds-01.png" alt="certification"></div>

      <div class="lg:p-10 text-2xl">

      <h2 class="px-14 pb-8 text-center text-brand-lt">"Our thoughts have a mind of their own."</h2>

      <h2 class="px-14 pb-8 text-center text-brand-lt">
         "It's not about what you think or feel, it's about WHAT you think about how you feel."
      </h2>

      <h2 class="px-14 pb-8 text-center text-brand-lt">
               "Within each breath lies the possibility of healing... so take a deep one!"
            </h2>

            <h2 class="float-right pr-20">- Wray</h2>

      </div>

</div>


<div class="main">

    <h1 class="text-2xl">Our Vision</h1>
    <p>Kardia Counseling & Consulting began as a dream over​ 18 years ago, with the idea that the healing process is as much about what you feel and think as it is HOW you think about your feelings; the notion that healing, at its core is the repairing of our soul; to be done respectfully, compassionately and with conscious intention. The realignment of our innermost “being-ness” with that of our true nature could indeed recenter and heal us; that our deepest desires for internal peace, blissful coexistence with loved ones and even the contemplation of true happiness is within our reach.</p>
    <div class="flex justify-center">
    <a href="{{ url('/services') }}" class="btn mx-auto">Browse Our Services</a>
    </div>
 </div>




   <div class="px-6 lg:px-16 py-8 lg:flex justify-between grid-cols-3">


    <div class="card lg:w-1/3 px-3 pt-6">
        <h1 class="card-header">Experience</h1>
            <ul class="card-ul" style="line-height: 1.9;">
                <li>Caduceus Outpatient Addiction Center (in MS)</li>
                <li>The Willough at Naples</li>
                <li>Charter Hospital</li>
                <li>Lutheran Ministries</li>
                <li>The Brain Enhancement Institute</li>
                <li>Anchor Counseling (all in FL)</li>
                <li>Children of Separation & Divorce</li>
                <li>Safe & Drug Free Schools</li>
                <li>Pinnacle Center</li>
                <li>Washington Assessments & Therapy Services (all in MD)</li>
                <li>Adolescent Substance Abuse Counseling Services (in Germany)</li>
                <li>The Pines Behavioral Health Services (in SC)</li>
                <li>Cardinal Clinic (in NC)</li>
                <li>First Health Behavioral Health (in NC)</li>
            </ul></div>
    <div class="card lg:w-1/3 px-3 pt-6">
        <h1 class="card-header">Credentials</h1>
            <ul class="card-ul" style="line-height: 2.5;">
                <li>NCC    - National Certified Counselor</li>
                <li>CAS    - Certified Addictions Specialist <br> (Alcohol, Drugs & Eating Disorders)</li>
                <li>LPCA    - Licensed Professional Counselor Associate</li>
                <li>LCMHC  - Licensed Clinical Mental Health Counselor - Supervisor</li>
                <li>LCAS  - Licensed Clinical Addictions Specialist</li>
                <li>AADC - Advanced Alcohol & Drug Counselor</li>
                <li>LCSW-A - Licensed Clinical Social Worker Associate </li>
            </ul></div>
    <div class="card lg:w-1/3 px-3 pt-6">
        <h1 class="card-header">Focus Areas</h1>
            <ul class="card-ul" style="line-height: 1.8;">
                <li>Deployment Challenges</li>
                <li>Addictive Disorders</li>
                <li>Family Dynamics</li>
                <li>​Marital Issues</li>
                <li>​Grief & Loss</li>
                <li>School Difficulties</li>
                <li>Eating Disorders</li>
                <li>Body Image Issues</li>
                <li>Life Transitions</li>
                <li>​Depression</li>
                <li>​Anxiety</li>
                <li>Adjustment Disorders</li>
                <li>​Post-Traumatic Stress Disorder</li>
                <li>Fertility Issues</li>

            </ul></div>
</div>
@endsection
