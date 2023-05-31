<?php

namespace App\Http\Livewire\Forms;

use Livewire\Component;
use App\Models\Assessment;

class AddAssessment extends Component
{

   public Assessment $assesment;
   public $first_name;
   public $last_name;
   public $nickname;
   public $full_address;
   public $dob;
   public $age;
   public $primary_phone;
   public $secondary_phone;
   public $email;
   public $form_filler;
   public $relationship_to_client;
   public $client_school;
   public $client_grade;
   public $members =[];
   public $marital_status_mother;
   public $marital_status_father;
   public $custody;
   public $visitations;
   public $patient_employment;
   public $spouse_employment;
   public $patient_hours_weekly;
   public $spouse_hours_weekly;
   public $income;
   public $major_problems;
   public $type_of_help = [];
   public $stressful_events;
   public $problems_changed;
   public $checklist_depressed;
   public $checklist_sleep_appetite;
   public $checklist_medical_complaints;
   public $checklist_self_esteem;
   public $checklist_suicidal;
   public $checklist_increased_tearfulness;
   public $checklist_making_friends;
   public $checklist_overactivity;
   public $checklist_distractibility;
   public $checklist_impulsivity;
   public $checklist_following_through;
   public $checklist_losing_things;
   public $checklist_incomplete_activity;
   public $checklist_argumentative;
   public $checklist_refuse_to_comply;
   public $checklist_annoys_others;
   public $checklist_stealing_forgery;
   public $checklist_lying;
   public $checklist_firesetting;
   public $checklist_homicidal;
   public $checklist_cruelty;
   public $checklist_fights;
   public $checklist_arrests;
   public $checklist_binge_eating;
   public $checklist_laxatives_diuretics;
   public $checklist_fasting_dieting;
   public $checklist_body_concerns;
   public $checklist_separation_fears;
   public $checklist_fear_harm;
   public $checklist_shy;
   public $checklist_unpleasant_thoughts;
   public $checklist_substance_abuse;
   public $substances_used = [];
   public $checklist_bizarre_ideas;
   public $checklist_sees_things;
   public $checklist_disorganized;
   public $checklist_rambling;
   public $checklist_withdrawn;
   public $checklist_low_functioning;
   public $checklist_inappropriate_expression;
   public $other_problems;
   public $psych_history_treatment;
   public $psych_history_treatment_details;
   public $psych_history_medications;
   public $psych_medications = [];
   public $psych_history_suicide;
   public $suicide_attempts =[];
   public $psych_history_hospitalization;
   public $psych_hospitalizations = [];
   public $psych_history_juvenile_court;
   public $psych_history_cps;
   public $primary_care_physician;
   public $medical_history_last_visit;
   public $medical_history_hospitalization;
   public $med_hospitalizations = [];
   public $medical_history_head_injuries;
   public $medical_history_head_injury_details;
   public $medical_history_allergies;
   public $medical_history_allergy_details;
   public $medical_history_other_allergies;
   public $medical_history_other_allergy_details;
   public $medical_history_chronic_earaches;
   public $medical_history_earache_details;
   public $medical_history_tubes;
   public $medical_history_tubes_age;
   public $medical_history_hearing_test;
   public $medical_history_vision_test;
   public $developmental_perinatal_history_full_term;
   public $how_many_weeks;
   public $developmental_perinatal_medications;
   public $developmental_perinatal_medications_specify;
   public $developmental_perinatal_history_drug_exposure;
   public $medications_for_mother_specify;
   public $other_illnesses;
   public $child_conditions = [];
   public $feeding_problems;
   public $sleeping_problems;
   public $bonding_problems;
   public $first_year_additional_details;
   public $student_description_primary;
   public $student_description_middle;
   public $student_description_high;
   public $student_description_college;
   public $leisure_activities;
   public $family_stressors = [];
   public $psych_problems_father;
   public $psych_problems_father_parents_or_siblings;
   public $psych_problems_mother;
   public $psych_problems_mother_parents_or_siblings;
   public $psych_problems_brothers_sisters;
   public $psych_problems_other_relatives;
   public $family_circumstances;
   public $current_functioning;

   protected $rules = [
    'first_name' => 'required|min:2|max:55',
    'last_name' => 'required|min:2|max:55',
    'nickname' => 'nullable',
    'full_address' => 'required|min:5|max:255',
    'dob' => 'required',
    'age' => 'required',
    'primary_phone' => 'required|min:5|max:255',
    'secondary_phone' => 'nullable',
    'email' => 'required|email',
    'form_filler' => 'nullable',
    'relationship_to_client' => 'nullable',
    'client_school' => 'nullable',
    'client_grade' => 'nullable',
    'members' => 'nullable',
    'marital_status_mother' => 'nullable',
    'marital_status_father' => 'nullable',
    'custody' => 'nullable',
    'visitations' => 'nullable',
    'patient_employment' => 'nullable',
    'patient_hours_weekly' => 'nullable',
    'spouse_employment' => 'nullable',
    'spouse_hours_weekly' => 'nullable',
    'income' => 'nullable',
    'major_problems' => 'required|min:5',
    'type_of_help' => 'required',
    'stressful_events' => 'nullable',
    'problems_changed' => 'nullable',
    'checklist_depressed' => 'required',
    'checklist_sleep_appetite' => 'required',
    'checklist_medical_complaints' => 'required',
    'checklist_self_esteem' => 'required',
    'checklist_suicidal' => 'required',
    'checklist_increased_tearfulness' => 'required',
    'checklist_making_friends' => 'required',
    'checklist_overactivity' => 'required',
    'checklist_distractibility' => 'required',
    'checklist_impulsivity' => 'required',
    'checklist_following_through' => 'required',
    'checklist_losing_things' => 'required',
    'checklist_incomplete_activity' => 'required',
    'checklist_argumentative' => 'required',
    'checklist_refuse_to_comply' => 'required',
    'checklist_annoys_others' => 'required',
    'checklist_stealing_forgery' => 'required',
    'checklist_lying' => 'required',
    'checklist_firesetting' => 'required',
    'checklist_homicidal' => 'required',
    'checklist_cruelty' => 'required',
    'checklist_fights' => 'required',
    'checklist_arrests' => 'required',
    'checklist_binge_eating' => 'required',
    'checklist_laxatives_diuretics' => 'required',
    'checklist_fasting_dieting' => 'required',
    'checklist_body_concerns' => 'required',
    'checklist_separation_fears' => 'required',
    'checklist_fear_harm' => 'required',
    'checklist_shy' => 'required',
    'checklist_unpleasant_thoughts' => 'required',
    'checklist_substance_abuse' => 'required',
    'substances_used' => 'nullable',
    'checklist_bizarre_ideas' => 'required',
    'checklist_sees_things' => 'required',
    'checklist_disorganized' => 'required',
    'checklist_withdrawn' => 'required',
    'checklist_low_functioning' => 'required',
    'checklist_inappropriate_expression' => 'required',
    'other_problems' => 'nullable',
    'psych_history_treatment' => 'required',
    'psych_history_treatment_details' => 'nullable',
    'psych_history_medications' => 'required',
    'psych_medications' => 'nullable',
    'psych_history_suicide' => 'required',
    'suicide_attempts' => 'nullable',
    'psych_history_hospitalization' => 'required',
    'psych_hospitalizations' => 'nullable',
    'psych_history_juvenile_court' => 'required',
    'psych_history_cps' => 'required',
    'primary_care_physician' => 'nullable',
    'medical_history_last_visit' => 'nullable',
    'medical_history_hospitalization' => 'required',
    'med_hospitalizations' => 'nullable',
    'medical_history_head_injuries' => 'required',
    'medical_history_head_injury_details' => 'nullable',
    'medical_history_allergies' => 'required',
    'medical_history_allergy_details' => 'nullable',
    'medical_history_other_allergies' => 'required',
    'medical_history_other_allergy_details' => 'nullable',
    'medical_history_chronic_earaches' => 'required',
    'medical_history_earache_details' => 'nullable',
    'medical_history_tubes' => 'required',
    'medical_history_tubes_age' => 'nullable|numeric',
    'medical_history_hearing_test' => 'nullable',
    'medical_history_vision_test' => 'nullable',
    'developmental_perinatal_history_full_term' => 'required',
    'how_many_weeks' => 'nullable',
    'developmental_perinatal_medications' => 'required',
    'developmental_perinatal_medications_specify' => 'nullable',
    'developmental_perinatal_history_drug_exposure' => 'required',
    'medications_for_mother_specify' => 'nullable',
    'other_illnesses' => 'nullable',
    'child_conditions' => 'nullable',
    'feeding_problems' => 'required',
    'sleeping_problems' => 'required',
    'bonding_problems' => 'required',
    'first_year_additional_details' => 'nullable',
    'student_description_primary' => 'nullable',
    'student_description_middle' => 'nullable',
    'student_description_high' => 'nullable',
    'student_description_college' => 'nullable',
    'leisure_activities' => 'nullable',
    'family_stressors' => 'nullable',
    'psych_problems_father' => '',
    'psych_problems_father_parents_or_siblings' => 'required',
    'psych_problems_mother' => 'required',
    'psych_problems_mother_parents_or_siblings' => 'required',
    'psych_problems_brothers_sisters' => 'required',
    'psych_problems_other_relatives' => 'required',
    'family_circumstances' => 'nullable',
    'current_functioning' => 'required',
   ];

   public function mount() {
    $this->members = [
        ['in_home' => '', 'name' => '', 'age' => '', 'relationship' => '', 'grade_level' => '' ]
    ];

    $this->psych_medications = [
        ['med_name' => '', 'dose' => '', 'approx_date' => '' ]
    ];

    $this->suicide_attempts = [
        ['when' => '', 'how' => '' ]
     ];

     $this->psych_hospitalizations = [
        ['when' => '', 'how' => '' ]
     ];

     $this->med_hospitalizations = [
        ['when' => '', 'how' => '' ]
     ];

     $this->child_conditions = [
        ['overall' => '', 'pounds' => '', 'ounces' => '' ]
     ];
   }

   public function addMember(){

    $this->members[] = ['in_home' => '', 'name' => '', 'age' => '', 'relationship' => '', 'grade_level' => ''];
    }

    public function removeMember($index){
        unset($this->members[$index]);
        array_values($this->members);
}

    public function addPyschMed() {
        $this->psych_medications[] = ['med_name' => '', 'dose' => '', 'approx_date' => '' ];
    }

    public function removePyschMed($index){
        unset($this->psych_medications[$index]);
        array_values($this->psych_medications);
}

    public function addAttempt() {
        $this->suicide_attempts[] = ['date' => '', 'how' => ''];
    }

    public function removeAttempt($index) {
        unset($this->suicide_attempts[$index]);
        array_values($this->suicide_attempts);
    }

    public function addHospitalization() {
        $this->psych_hospitalizations[] = ['date' => '', 'how' => ''];
    }

    public function removeHospitalization($index) {
        unset($this->psych_hospitalizations[$index]);
        array_values($this->psych_hospitalizations);
    }

    public function addMedHospitalization() {
        $this->med_hospitalizations[] = ['date' => '', 'how' => ''];
    }

    public function removeMedHospitalization($index) {
        unset($this->med_hospitalizations[$index]);
        array_values($this->med_hospitalizations);
    }

    public function addChildAtBirth($index) {

        $this->child_conditions[] = ['overall' => '', 'pounds' => '', 'ounces' => '' ];

    }

    public function removeChildAtBirth($index) {
        unset($this->child_conditions[$index]);
        array_values($this->child_conditions);
    }

    public function save() {
       // $this->validate();
        //dd($this);
        Assessment::create(
            [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'nickname' => $this->nickname,
            'full_address' => $this->full_address,
            'dob' => $this->dob,
            'age' => $this->age,
            'primary_phone' => $this->primary_phone,
            'secondary_phone' => $this->secondary_phone,
            'email' => $this->email,
            'form_filler' => $this->form_filler,
            'relationship_to_client' => $this->relationship_to_client,
            'client_school' => $this->client_school,
            'client_grade' => $this->client_grade,
            'members' => $this->members,
            'marital_status_mother' => $this->marital_status_mother,
            'marital_status_father' => $this->marital_status_father,
            'custody' => $this->custody,
            'visitations' => $this->visitations,
            'patient_employment' => $this->patient_employment,
            'patient_hours_weekly' => $this->patient_hours_weekly,
            'spouse_employment' => $this->spouse_employment,
            'spouse_hours_weekly' => $this->spouse_hours_weekly,
            'income' => $this->income,
            'major_problems' => $this->major_problems,
            'type_of_help' => $this->type_of_help,
            'stressful_events' => $this->stressful_events,
            'problems_changed' => $this->problems_changed,
            'checklist_depressed' => $this->checklist_depressed,
            'checklist_sleep_appetite' => $this->checklist_sleep_appetite,
            'checklist_medical_complaints' => $this->checklist_medical_complaints,
            'checklist_self_esteem' => $this->checklist_self_esteem,
            'checklist_suicidal' => $this->checklist_suicidal,
            'checklist_increased_tearfulness' => $this->checklist_increased_tearfulness,
            'checklist_making_friends' => $this->checklist_making_friends,
            'checklist_overactivity' => $this->checklist_overactivity,
            'checklist_distractibility' => $this->checklist_distractibility,
            'checklist_impulsivity' => $this->checklist_impulsivity,
            'checklist_following_through' => $this->checklist_following_through,
            'checklist_losing_things' => $this->checklist_losing_things,
            'checklist_incomplete_activity' => $this->checklist_incomplete_activity,
            'checklist_argumentative' => $this->checklist_argumentative,
            'checklist_refuse_to_comply' => $this->checklist_refuse_to_comply,
            'checklist_annoys_others' => $this->checklist_annoys_others,
            'checklist_stealing_forgery' => $this->checklist_stealing_forgery,
            'checklist_lying' => $this->checklist_lying,
            'checklist_firesetting' => $this->checklist_firesetting,
            'checklist_homicidal' => $this->checklist_homicidal,
            'checklist_cruelty' => $this->checklist_cruelty,
            'checklist_fights' => $this->checklist_fights,
            'checklist_arrests' => $this->checklist_arrests,
            'checklist_binge_eating' => $this->checklist_binge_eating,
            'checklist_laxatives_diuretics' => $this->checklist_laxatives_diuretics,
            'checklist_fasting_dieting' => $this->checklist_fasting_dieting,
            'checklist_body_concerns' => $this->checklist_body_concerns,
            'checklist_separation_fears' => $this->checklist_separation_fears,
            'checklist_fear_harm' => $this->checklist_fear_harm,
            'checklist_shy' => $this->checklist_shy,
            'checklist_unpleasant_thoughts' => $this->checklist_unpleasant_thoughts,
            'checklist_substance_abuse' => $this->checklist_substance_abuse,
            'substances_used' => $this->substances_used,
            'checklist_bizarre_ideas' => $this->checklist_bizarre_ideas,
            'checklist_sees_things' => $this->checklist_sees_things,
            'checklist_disorganized' => $this->checklist_disorganized,
            'checklist_rambling' => $this->checklist_rambling,
            'checklist_withdrawn' => $this->checklist_withdrawn,
            'checklist_low_functioning' => $this->checklist_low_functioning,
            'checklist_inappropriate_expression' => $this->checklist_inappropriate_expression,
            'other_problems' => $this->other_problems,
            'psych_history_treatment' => $this->psych_history_treatment,
            'psych_history_treatment_details' => $this->psych_history_treatment_details,
            'psych_history_medications' => $this->psych_history_medications,
            'psych_medications' => $this->psych_medications,
            'psych_history_suicide' => $this->psych_history_suicide,
            'suicide_attempts' => $this->suicide_attempts,
            'psych_history_hospitalization' => $this->psych_history_hospitalization,
            'psych_hospitalizations' => $this->psych_hospitalizations,
            'psych_history_juvenile_court' => $this->psych_history_juvenile_court,
            'psych_history_cps' => $this->psych_history_cps,
            'primary_care_physician' => $this->primary_care_physician,
            'medical_history_last_visit' => $this->medical_history_last_visit,
            'medical_history_hospitalization' => $this->medical_history_hospitalization,
            'med_hospitalizations' => $this->med_hospitalizations,
            'medical_history_head_injuries' => $this->medical_history_head_injuries,
            'medical_history_head_injury_details' => $this->medical_history_head_injury_details,
            'medical_history_allergies' => $this->medical_history_allergies,
            'medical_history_allergy_details' => $this->medical_history_allergy_details,
            'medical_history_other_allergies' => $this->medical_history_other_allergies,
            'medical_history_other_allergy_details' => $this->medical_history_other_allergy_details,
            'medical_history_chronic_earaches' => $this->medical_history_chronic_earaches,
            'medical_history_earache_details' => $this->medical_history_earache_details,
            'medical_history_tubes' => $this->medical_history_tubes,
            'medical_history_tubes_age' => $this->medical_history_tubes_age,
            'medical_history_hearing_test' => $this->medical_history_hearing_test,
            'medical_history_vision_test' => $this->medical_history_vision_test,
            'developmental_perinatal_history_full_term' => $this->developmental_perinatal_history_full_term,
            'how_many_weeks' => $this->how_many_weeks,
            'developmental_perinatal_medications' => $this->developmental_perinatal_medications,
            'developmental_perinatal_medications_specify' => $this->developmental_perinatal_medications_specify,
            'developmental_perinatal_history_drug_exposure' => $this->developmental_perinatal_history_drug_exposure,
            'other_illnesses' => $this->other_illnesses,
            'child_conditions' => $this->child_conditions,
            'feeding_problems' => $this->feeding_problems,
            'sleeping_problems' => $this->sleeping_problems,
            'bonding_problems' => $this->bonding_problems,
            'first_year_additional_details' => $this->first_year_additional_details,
            'student_description_primary' => $this->student_description_primary,
            'student_description_middle' => $this->student_description_middle,
            'student_description_high' => $this->student_description_high,
            'student_description_college' => $this->student_description_college,
            'leisure_activities' => $this->leisure_activities,
            'family_stressors' => $this->family_stressors,
            'psych_problems_father' => $this->psych_problems_father,
            'psych_problems_father_parents_or_siblings' => $this->psych_problems_father_parents_or_siblings,
            'psych_problems_mother' => $this->psych_problems_mother,
            'psych_problems_mother_parents_or_siblings' => $this->psych_problems_mother_parents_or_siblings,
            'psych_problems_brothers_sisters' => $this->psych_problems_brothers_sisters,
            'psych_problems_other_relatives' => $this->psych_problems_other_relatives,
            'family_circumstances' => $this->family_circumstances,
            'current_functioning' => $this->current_functioning,
            ]);

           return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.forms.add-assessment')
            ->layout('layouts.form');
    }
}
