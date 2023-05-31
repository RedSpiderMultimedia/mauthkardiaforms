<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('nickname')->nullable();
            $table->string('full_address');
            $table->date('dob');
            $table->string('age');
            $table->string('primary_phone');
            $table->string('secondary_phone')->nullable();
            $table->string('email');
            $table->string('form_filler')->nullable();
            $table->string('relationship_to_client')->nullable();
            $table->string('client_school')->nullable();
            $table->string('client_grade')->nullable();
            $table->json('members')->nullable();
            $table->string('marital_status_mother')->nullable();
            $table->string('marital_status_father')->nullable();
            $table->string('custody')->nullable();
            $table->string('visitations')->nullable();
            $table->string('patient_employment')->nullable();
            $table->string('patient_hours_weekly')->nullable();
            $table->string('spouse_employment')->nullable();
            $table->string('spouse_hours_weekly')->nullable();
            $table->string('income')->nullable();
            $table->mediumText('major_problems');
            $table->json('type_of_help');
            $table->mediumText('stressful_events')->nullable();
            $table->mediumText('problems_changed')->nullable();
            $table->string('checklist_depressed');
            $table->string('checklist_sleep_appetite');
            $table->string('checklist_medical_complaints');
            $table->string('checklist_self_esteem');
            $table->string('checklist_suicidal');
            $table->string('checklist_increased_tearfulness');
            $table->string('checklist_making_friends');
            $table->string('checklist_overactivity');
            $table->string('checklist_distractibility');
            $table->string('checklist_impulsivity');
            $table->string('checklist_following_through');
            $table->string('checklist_losing_things');
            $table->string('checklist_incomplete_activity');
            $table->string('checklist_argumentative');
            $table->string('checklist_refuse_to_comply');
            $table->string('checklist_annoys_others');
            $table->string('checklist_stealing_forgery');
            $table->string('checklist_lying');
            $table->string('checklist_firesetting');
            $table->string('checklist_homicidal');
            $table->string('checklist_cruelty');
            $table->string('checklist_fights');
            $table->string('checklist_arrests');
            $table->string('checklist_binge_eating');
            $table->string('checklist_laxatives_diuretics');
            $table->string('checklist_fasting_dieting');
            $table->string('checklist_body_concerns');
            $table->string('checklist_separation_fears');
            $table->string('checklist_fear_harm');
            $table->string('checklist_shy');
            $table->string('checklist_unpleasant_thoughts');
            $table->string('checklist_substance_abuse');
            $table->json('substances_used')->nullable();
            $table->string('checklist_bizarre_ideas');
            $table->string('checklist_sees_things');
            $table->string('checklist_disorganized');
            $table->string('checklist_rambling');
            $table->string('checklist_withdrawn');
            $table->string('checklist_low_functioning');
            $table->string('checklist_inappropriate_expression');
            $table->mediumText('other_problems')->nullable();
            $table->string('psych_history_treatment');
            $table->mediumText('psych_history_treatment_details')->nullable();
            $table->string('psych_history_medications');
            $table->json('psych_medications')->nullable();;
            $table->string('psych_history_suicide');
            $table->json('suicide_attempts')->nullable();
            $table->string('psych_history_hospitalization');
            $table->json('psych_hospitalizations')->nullable();
            $table->string('psych_history_juvenile_court');
            $table->string('psych_history_cps');
            $table->string('primary_care_physician')->nullable();
            $table->string('medical_history_last_visit')->nullable();
            $table->string('medical_history_hospitalization');
            $table->json('med_hospitalizations')->nullable();
            $table->string('medical_history_head_injuries');
            $table->mediumText('medical_history_head_injury_details')->nullable();
            $table->string('medical_history_allergies');
            $table->mediumText('medical_history_allergy_details')->nullable();
            $table->string('medical_history_other_allergies');
            $table->mediumText('medical_history_other_allergy_details')->nullable();
            $table->string('medical_history_chronic_earaches');
            $table->mediumText('medical_history_earache_details')->nullable();
            $table->string('medical_history_tubes');
            $table->text('medical_history_tubes_age')->nullable();
            $table->date('medical_history_hearing_test')->nullable();
            $table->date('medical_history_vision_test')->nullable();
            $table->string('developmental_perinatal_history_full_term');
            $table->string('how_many_weeks');
            $table->string('developmental_perinatal_medications');
            $table->mediumText('developmental_perinatal_medications_specify')->nullable();
            $table->string('developmental_perinatal_history_drug_exposure');
            $table->mediumText('other_illnesses')->nullable();
            $table->json('child_conditions')->nullable();
            $table->string('feeding_problems');
            $table->string('sleeping_problems');
            $table->string('bonding_problems');
            $table->mediumText('first_year_additional_details')->nullable();
            $table->string('student_description_primary')->nullable();
            $table->string('student_description_middle')->nullable();
            $table->string('student_description_high')->nullable();
            $table->string('student_description_college')->nullable();
            $table->mediumText('leisure_activities')->nullable();
            $table->json('family_stressors')->nullable();
            $table->string('psych_problems_father');
            $table->string('psych_problems_father_parents_or_siblings');
            $table->string('psych_problems_mother');
            $table->string('psych_problems_mother_parents_or_siblings');
            $table->string('psych_problems_brothers_sisters');
            $table->string('psych_problems_other_relatives');
            $table->mediumText('family_circumstances')->nullable();
            $table->string('current_functioning');
















            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
