<style type="text/css">

/**
 * Print Stylesheet fuer Deinewebsite.de
* @version         1.0
* @lastmodified    16.06.2016
*/

@media print {

 /* Inhaltsbreite setzen, Floats und Margins aufheben */
 /* Achtung: Die Klassen und IDs variieren von Theme zu Theme. Hier also eigene Klassen setzen */
 #content, #page {
 width: 100%;
 margin: 0;
 float: none;
 }

 /** Seitenränder einstellen */
 @page { margin: 2cm }

 /* Font auf 16px/13pt setzen, Background auf Weiß und Schrift auf Schwarz setzen.*/
 /* Das spart Tinte */
 body {
 font: 13pt Georgia, "Times New Roman", Times, serif;
 line-height: 1.3;
 background: #fff !important;
 color: #000;
 }

 h1 {
 font-size: 24pt;
 }

 h2, h3, h4 {
 font-size: 20pt;
 margin-top: 25px;
 }

 /* Alle Seitenumbrüche definieren */
 a {
     page-break-inside:avoid
 }
 blockquote {
     page-break-inside: avoid;
 }
 h1, h2, h3, h4, h5, h6 { page-break-after:avoid;
      page-break-inside:avoid }
 img { page-break-inside:avoid;
      page-break-after:avoid; }
 table, pre { page-break-inside:avoid }
 ul, ol, dl  { page-break-before:avoid }

 /* Linkfarbe und Linkverhalten darstellen */
 a:link, a:visited, a {
 background: transparent;
 color: #520;
 font-weight: bold;
 text-decoration: underline;
 text-align: left;
 }

 a {
     page-break-inside:avoid
 }

 a[href^=http]:after {
       content:" <" attr(href) "> ";
 }

 $a:after > img {
    content: "";
 }

 article a[href^="#"]:after {
    content: "";
 }

 a:not(:local-link):after {
    content:" <" attr(href) "> ";
 }

 /**
  * Eingebundene Videos verschwinden lassen und den Whitespace der iframes auf null reduzieren.
  */
 .entry iframe, ins {
     display: none;
     width: 0 !important;
     height: 0 !important;
     overflow: hidden !important;
     line-height: 0pt !important;
     white-space: nowrap;
 }
 .embed-youtube, .embed-responsive {
   position: absolute;
   height: 0;
   overflow: hidden;
 }

 /* Unnötige Elemente ausblenden für den Druck */

 #header-widgets, nav, aside.mashsb-container,
 .sidebar, .mashshare-top, .mashshare-bottom,
 .content-ads, .make-comment, .author-bio,
 .heading, .related-posts, #decomments-form-add-comment,
 #breadcrumbs, #footer, .post-byline, .meta-single,
 .site-title img, .post-tags, .readability
 {
 display: none;
 }

 /* Benutzerdefinierte Nachrichten vor und nach dem Inhalt einfügen */
 .entry:after {
 content: "\ Alle Rechte vorbehalten. (c) 2014 - 2016 TechBrain - techbrain.de";
 color: #999 !important;
 font-size: 1em;
 padding-top: 30px;
 }
 #header:before {
 content: "\ Vielen herzlichen Dank für das Ausdrucken unseres Artikels. Wir hoffen, dass auch andere Artikel von uns Ihr Interesse wecken können.";
 color: #777 !important;
 font-size: 1em;
 padding-top: 30px;
 text-align: center !important;
 }

 /* Wichtige Elemente definieren */
 p, address, li, dt, dd, blockquote {
 font-size: 100%
 }

 /* Zeichensatz fuer Code Beispiele */
 code, pre { font-family: "Courier New", Courier, mono}

 ul, ol {
 list-style: square; margin-left: 18pt;
 margin-bottom: 20pt;
 }

 li {
 line-height: 1.6em;
 }



 }


</style>


<div class="bg-gray-200 p-4">


        <h3>Patient Info:</h3>
        <p>


        <strong>Patient Name: </strong> {{ $assessment->first_name }} {{ $assessment->last_name }}<br>
         <strong>Nickname: </strong> {{ $assessment->nickname }} <br>
         <strong>Address: </strong> {{ $assessment->full_address}} <br>
         <strong>Date of Birth: </strong> {{ $assessment->dob }} <br>
         <strong>Primary Phone: </strong> {{ $assessment->primary_phone }} <strong>Secondary:</strong> {{ $assessment->secondary_phone }} <br>
         <strong>Email: </strong> {{ $assessment->email }}<br>
         <strong>Person Completing Form: </strong> {{ $assessment->form_filler }}<br>
         <strong>Relationship to Client: </strong> {{ $assessment->relationship_to_client }}<br>
         <strong>Client's School: </strong>{{ $assessment->client_school }} <br>
         <strong>Client's Grade: </strong> {{ $assessment->client_grade }}<br>
        </p>
        <h3>Family Information</h3>



         <strong>Family Members: </strong>
         <div class="mb-4">
            @php
            if (is_array($assessment->members) || is_object($assessment->members))
            { @endphp
            @foreach ($assessment->members as $member)
            In-Home:  <u>{{ $member['in_home'] }}</u> Name:  <u>{{ $member['name'] }}</u>   Age: <u>{{ $member['age'] }}</u>  Relationship: <u>{{ $member['relationship'] }}</u>   Highest Grade Completed: <u>{{ $member['grade_level'] }}</u> <br>
           @endforeach
                @php
            }
            @endphp
        </div>
         <strong>Mother's Marital Status: </strong> <u> {{ $assessment->marital_status_mother }}</u> <br>
         <strong>Father's Marital Status: </strong> <u>{{ $assessment->marital_status_father }}</u>  <br>
         <strong>Custody: </strong> <u>{{ $assessment->custody }}</u><br>
         <strong>Visitation: </strong> <u>{{ $assessment->visitations }}</u><br>
         <strong>Patient's Employment: </strong> <u>{{ $assessment->patient_employment }}</u>  <br>
         <strong>Patient's Weekly Hours Worked: </strong> <u>{{ $assessment->patient_hours_weekly }}</u>  <br>
         <strong>Spouse's Employment: </strong><u>{{ $assessment->spouse_employment }}</u> <br>
         <strong>Spouse's Weekly Hours Worked: </strong>  <u>{{ $assessment->spouse_hours_weekly }}</u> <br>
         <strong>Annual Family Household Income: </strong>  <u>{{ $assessment->income }}</u> <br>




         <h3>What are the MAJOR problems/concerns for which you are coming to the clinic? </h3>
         <p>{{ $assessment->major_problems}}</p>

         <strong>What kinds of help do you believe you need?  </strong>
            <ul>
                @foreach ($assessment->type_of_help as $type)
               <li> - {{ $type }} </li>
                @endforeach
            </ul>
            <br>



         <strong>Please indicate any stressful events that you believe may be related to the problems noted above: </strong> <br>
         {{ $assessment->stressful_events }} <br>


         <strong>How have the problems changed since you first noticed them? </strong> <br>
         {{ $assessment->problems_changed }} <br>

         <h3>Problem Checklist: </h3>
         <p>
         <strong>Depressed or irritable mood, lack of interest or motivation, boredom or withdrawal from friends: </strong> <u>{{ $assessment->checklist_depressed }} </u> <br>
         <strong>Sleep or appetite/weight changes: </strong> <u>{{ $assessment->checklist_sleep_appetite }} </u> <br>
         <strong>Multiple apparently unfounded medical complaints: </strong> <u>{{ $assessment->checklist_medical_complaints }}</u> <br>
         <strong>Self-esteem decreased/excessive self-blame and guilt: </strong> <u>{{ $assessment->checklist_self_esteem }}</u> <br>
         <strong>Suicidal behavior or thoughts: </strong> <u>{{ $assessment->checklist_suicidal }}</u> <br>
         <strong>Increased tearfulness or rapid changes of mood: </strong> <u>{{ $assessment->checklist_increased_tearfulness }}</u> <br>
         <strong>Has a hard time making/keeping friends: </strong> <u>{{ $assessment->checklist_making_friends }}</u> <br>
         <strong>Overactivity: </strong> <u>{{ $assessment->checklist_overactivity }}</u> <br>
         <strong>Distractibility/inattentiveness/fidgeting: </strong> <u>{{ $assessment->checklist_distractibility }}</u> <br>
         <strong>Impulsivity: </strong> <u>{{ $assessment->checklist_impulsivity }}</u> <br>
         <strong>Difficulty following through on instructions: </strong> <u>{{ $assessment->checklist_following_through }}</u> <br>
         <strong>Loses things easily: </strong> <u>{{ $assessment->checklist_losing_things }}</u> <br>
         <strong>Shifts from one incomplete activity to another: </strong> <u>{{ $assessment->checklist_incomplete_activity }}</u> <br>
         <strong>Argumentative, angry, or vindictive behavior: </strong> <u>{{ $assessment->checklist_argumentative }}</u> <br>
         <strong>Refuse to comply with reasonable rules/laws or regulations: </strong> <u>{{ $assessment->checklist_refuse_to_comply }}</u> <br>
         <strong>Annoys others deliberately: </strong> <u>{{ $assessment->checklist_annoys_others }}</u> <br>
         <strong>Stealing/forgery/breaking and entering: </strong> <u>{{ $assessment->checklist_stealing_forgery }}</u> <br>
         <strong>Lying: </strong> <u>{{ $assessment->checklist_lying }}</u> <br>
         <strong>Fire-setting: </strong> <u>{{ $assessment->checklist_firesetting }}</u> <br>
         <strong>Homicidal/dangerous behavior or plans: </strong> <u>{{ $assessment->checklist_homicidal }}</u> <br>
         <strong>Cruelty to animals or people: </strong> <u>{{ $assessment->checklist_cruelty }}</u> <br>
         <strong>Physical fights: </strong> <u>{{ $assessment->checklist_fights }}</u> <br>
         <strong>Arrests: </strong> <u>{{ $assessment->checklist_arrests }}</u> <br>
         <strong>Binge eating: </strong> <u>{{ $assessment->checklist_binge_eating }}</u> <br>
         <strong>Use of laxatives/diuretic/diet pills: </strong> <u>{{ $assessment->checklist_laxatives_diuretics }}</u> <br>
         <strong>Fasting/strict dieting not prescribed by a doctor: </strong> <u>{{ $assessment->checklist_fasting_dieting }}</u> <br>
         <strong>Persistent concern with body shape/weight: </strong> <u>{{ $assessment->checklist_body_concerns }}</u> <br>
         <strong>Fearful about being separated from you (at school, at night, being left with a sitter): </strong> <u>{{ $assessment->checklist_separation_fears }}</u> <br>
         <strong>Fear that harm will come to you/them during absences (killed, kidnapped, accident): </strong> <u>{{ $assessment->checklist_fear_harm }}</u> <br>
         <strong>Painfully or excessively shy when around unfamiliar people: </strong> <u>{{ $assessment->checklist_shy }}</u> <br>
         <strong>Have unpleasant thoughts that go around in head or discusses being afraid that he might do something wrong: </strong> <u>{{ $assessment->checklist_unpleasant_thoughts }}</u> <br>
         <strong>Substance use, abuse, or suspected abuse: </strong> <u>{{ $assessment->checklist_substance_abuse }}</u> <br>
         <strong>Substances Used/Abused: </strong> <br>

            @foreach ($assessment->substances_used as $substance)
            - {{ $substance }} <br>
            @endforeach

         <strong>Have bizarre ideas/odd behavior: </strong> <u> {{ $assessment->checklist_bizarre_ideas }} </u> <br>
         <strong>Sees/hears things that others do not: </strong> <u> {{ $assessment->checklist_sees_things }} </u> <br>
         <strong>Behavior is grossly disorganized: </strong> <u> {{ $assessment->checklist_disorganized }} </u> <br>
         <strong>Speech does not make sense to others (loosely connected, rambling, etc.): </strong> <u> {{ $assessment->checklist_rambling }} </u> <br>
         <strong>Withdrawn from others/little social contact: </strong> <u> {{ $assessment->checklist_withdrawn }} </u> <br>
         <strong>Functioning below highest level preciously achieved: </strong> <u> {{ $assessment->checklist_low_functioning }} </u> <br>
         <strong>Little or inappropriate expression of feelings: </strong> <u> {{ $assessment->checklist_inappropriate_expression }} </u> <br>
        </p>
        <p>
            Please explain any other problems not already mentioned: <br>
            {{ $assessment->other_problems }}
        </p>
        <h3>Past Psychiatric History</h3>
        <p>
            <strong>Previous history of psychiatric/psychological/drug or alcohol evaluation or treatment.: </strong> <u> {{ $assessment->psych_history_treatment }} </u> <br>
            <p> {{ $assessment->psych_history_treatment_details }} </p>

            <br>
            <strong>Medication for psychiatric/emotional/attentional problems, now or previous.: </strong> <u>{{ $assessment->psych_history_medications }} </u>
            <div class="mb-4">
                @php
                if (is_array($assessment->psych_medications) || is_object($assessment->psych_medications))
                { @endphp
                @foreach ($assessment->psych_medications as $med)
                Medication Name:  <u>{{ $med['med_name'] }}</u> Dosage:  <u>{{ $med['dose'] }}</u>   Approximate Date: <u>{{ $med['approx_date'] }}</u> <br>
               @endforeach
                    @php
                }
                @endphp
            </div>
            <strong>History of suicide attempt(s): </strong> <u> {{ $assessment->psych_history_suicide }} </u> <br>
            <div class="my-6">
                @php
                if (is_array($assessment->suicide_attempts) || is_object($assessment->suicide_attempts))
                { @endphp
                @foreach ($assessment->suicide_attempts as $attempt)
                - When:  <u>{{ $attempt['when'] }}</u> How:  <u>{{ $attempt['how'] }}</u>  <br>
               @endforeach
                    @php
                }
                @endphp
            </div>
            <strong>Hospitalizations for psychiatric or drug problems: </strong> <u>{{ $assessment->psych_history_hospitalization }}</u> <br>
            <div class="mb-4">
                @php
                if (is_array($assessment->psych_hospitalizations) || is_object($assessment->psych_hospitalizations))
                { @endphp
                @foreach ($assessment->psych_hospitalizations as $psych_hospital)
               -  When:  <u>{{ $psych_hospital['when'] }}</u> How:  <u>{{ $psych_hospital['how'] }}</u>  <br>
               @endforeach
                    @php
                }
                @endphp
            </div>


            <strong>Involvement with juvenile court/probation officer: </strong> <u>{{ $assessment->psych_history_juvenile_court }}</u> <br>
            <strong>Any involvement with Child Protective Services: </strong> <u>{{ $assessment->psych_history_cps }}</u> <br>
        </p>

        <h3>Medical History</h3>
        <p>
            <strong>Primary Care Physician: </strong> <u>{{ $assessment->primary_care_physician }}</u> <br>
            <strong>Last Primary Care Visit: </strong> <u>{{ $assessment->medical_history_last_visit }}</u> <br>

            <strong>Previous hospitalizations, surgeries, or major illnesses:
                 </strong> <u>{{ $assessment->medical_history_last_visit }}</u>


            <div class="mb-4">
                @php
                if (is_array($assessment->med_hospitalizations) || is_object($assessment->med_hospitalizations))
                { @endphp
                @foreach ($assessment->med_hospitalizations as $med_hospital)
               -  Approx Date:  <u>{{ $med_hospital['date'] }}</u> Issue:  <u>{{ $med_hospital['problem'] }}</u> Outcome:  <u>{{ $med_hospital['outcome'] }}</u>  <br>
               @endforeach
                    @php
                }
                @endphp
            </div>

            <strong>Traumatic head injuries: </strong> <u> {{ $assessment->medical_history_head_injuries  }}</u> <br>
            <p>{{ $assessment->medical_history_head_injuries }}</p>
            <strong>Allergies to medications: </strong> <u>{{ $assessment->medical_history_allergies }}</u> <br>
            <strong>If yes, which medications:</strong> <u> {{ $assessment->medical_history_allergy_details }} </u>
            <strong>Other allergies (e.g., specific food allergies, ragweed, cats, etc.): </strong> <u>{{ $assessment->medical_history_other_allergies  }}</u> <br>
            <strong>Chronic earaches: </strong> <u>{{ $assessment->medical_history_chronic_earaches  }}</u> <br>
            <strong>If yes, please describe the problem:</strong> <u> {{ $assessment->medical_history_earache_details }}</u> <br>
            <strong>Tubes: </strong> <u>{{ $assessment->medical_history_tubes  }}</u> <br>
            <strong>If yes, at what age?</strong> <u> {{ $assessment->medical_history_tubes_age }}</u>
            <strong>Last hearing test: </strong> <u>{{ $assessment->medical_history_hearing_test  }}</u> <br>
        </p>

        <h3>Developmental and Perinatal History</h3>
        <p>
            <strong>Full-term: </strong> <u>{{ $assessment->developmental_perinatal_history_full_term  }}</u> <br>
            If not, how many weeks? - I should add this to database <br>
            <strong>Medications for the mother: </strong> <u>{{ $assessment->developmental_perinatal_history_drug_exposure  }}</u> <br>
            <strong>Drugs or other toxic substances (including smoking) to which mother was exposed: </strong> <u>{{ $assessment->medications_for_mother_specify  }}</u> <br>
            Specify drugs or other toxic substances
            Also add other illnesses to the database
            <br>
             Child(ren) condition at birth:  <br>

             <div class="mb-4">
                @php
                if (is_array($assessment->child_conditions) || is_object($assessment->child_conditions))
                { @endphp
                @foreach ($assessment->child_conditions as $condition)
               -  Overall Condition:  <u>{{ $condition['overall'] }}</u> How:  <u>{{ $condition['pounds'] }}</u> Ounces: <u>{{$condition['ounces'] }}</u>  <br>
               @endforeach
                    @php
                }
                @endphp
            </div>

             <h4>First Year of Life</h4>
            <strong>Feeding problems: </strong> <u>{{ $assessment->feeding_problems  }}</u> <br>
            <strong>Slept well: </strong> <u>{{ $assessment->sleeping_problems  }}</u> <br>
            <strong>Bonded well: </strong> <u>{{ $assessment->bonding_problems  }}</u> <br>

           Additional Details (first year) <br>
           {{ $assessment->first_year_additional_details }}
        </p>

        <h3>Academic History</h3>
        <p>
            How would you describe yourself as a student in school: <br>
            Primary: {{ $assessment->student_description_primary  }} <br>
            Middle: {{ $assessment->student_description_middle  }} <br>
            High School: {{ $assessment->student_description_high  }} <br>
            College: {{ $assessment->student_description_college  }}
        </p>

        <h3>Leisure Activities</h3>
        <br>{{ $assessment->leisure_activities  }}


        <p>Family Stressors</p>
        @foreach($assessment->family_stressors as $stress)
        - {{ $stress}}
        @endforeach

        <p>Please indicate the presence in biological relatives of any psychiatric problem, such as depression, suicide, alcoholism, drug abuse, anxiety panic attacks, manic-depressive (bipolar) illness, schizophrenia, mental retardation, autism, learning disability, hyperactivity, attention deficit disorder, childhood behavior problems, school or academic problems, narcolepsy, legal problems, brain trauma.</p>

        <strong>Your father: </strong> <u>{{ $assessment->psych_problems_father  }}</u> <br>
        <strong>Father’s parents, brothers, sisters: </strong> <u>{{ $assessment->psych_problems_father_parents_or_siblings  }}</u> <br>
        <strong>Your mother: </strong> <u>{{ $assessment->psych_problems_mother  }}</u> <br>
        <strong>Mother’s parents, brothers, sisters: </strong> <u>{{ $assessment->psych_problems_mother_parents_or_siblings  }}</u> <br>
        <strong>Your brothers and sisters: </strong> <u>{{ $assessment->psych_problems_brothers_sisters  }}</u> <br>
        <strong>Other biological relatives: </strong> <u>{{ $assessment->psych_problems_other_relatives  }}</u> <br>

        <h3>Family Circumstances</h3>
        <p>Please provide any information about the family that you think would be important in our understanding of the current problem</p>
        {{ $assessment->family_circumstances  }}


        <strong>Current Functioning: </strong> <u>{{ $assessment->current_functioning  }}</u> <br>

        <p>This data was created on {{ $assessment->created_at }}.</p>



</div>

