<div class="mx-auto bg-gray-300 md:w-3/4 p-6 rounded-md">

    <p>Dear Client,</p>
    <p>The following information will help the clinic staff obtain an understanding of you and/or your spouse/significant other (SO) as quickly as possible. Please complete it to the best of your ability, and do not worry if you are unable to answer some the questions.</p>
    <p>Thank You Very Much</p>

    <hr>

    <form wire:submit.prevent="save">
        <div class="lg:flex gap-10">
            <div>
                <label for="first_name">Patient's First Name</label><br>
                <input type="text" wire:model="first_name">
                @error('first_name')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="last_name">Patient's Last Name</label><br>
                <input type="text" wire:model="last_name">
                @error('first_name')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="nickname">Nickname</label><br>
                <input type="text" wire:model="nickname">
                @error('nickname')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class=mt-8>
            <label for="full_address">Full Address</label><br>
            <input type="text" wire:model="full_address" class="w-1/2">
            @error('full_address')
            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
            @enderror
        </div>

        <div class="lg:flex gap-10 mt-8">
            <div>
                <label for="dob">Date of Birth</label><br>
                <input type="date" wire:model="dob">
                @error('dob')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="age">Age</label><br>
                <input type="number" wire:model="age">
                @error('age')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="lg:flex gap-10 mt-8">
            <div>
                <label for="primary_phone">Primary Phone Number</label><br>
                <input type="text" wire:model="primary_phone">
                @error('primary_phone')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="secondary_phone">Secondary Phone Number</label><br>
                <input type="text" wire:model="secondary_phone">
                @error('secondary_phone')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email">Email Address</label><br>
                <input type="email" wire:model="email">
                @error('email')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="lg:flex mt-8 gap-4">
            <div>
                <label for="form_filler">Person Completing Form <br> (if different from patient)</label> <br>
                <input type="text" wire:model="form_filler">
                @error('form_filler')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div> <br>
                <label for="relationship_to_client">Relationship to Client</label> <br>
                <input type="text" wire:model="relationship_to_client" class="w-full">
                @error('relationship_to_client')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <br>
                <label for="client_school">Client's School</label> <br>
                <input type="text" wire:model="client_school">
                @error('client_school')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <br>
                <label for="client_grade">Client's Grade Level</label> <br>
                <input type="text" wire:model="client_grade">
                @error('client_grade')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>
    <hr>
        <div class="mt-8">
            <h1 class="text-2xl text-center mt-8">Family Information</h1>
            <header class="flex items-center justify-between text-center">
                <h2 class="text-lg text-slate-600 block mx-auto">Add Family Member(s)</h2>

                 </header>

                            <table class="w-full text-sm text-left text-slate-500">
                                <thead class="text-sm text-slate-600 uppercase bg-slate-50 py-2">
                                <tr>
                                    <th scope="col" class="label-class pr-4">In-Home*</th>
                                    <th scope="col" class="label-class"> Name</th>
                                    <th scope="col" class="label-class">Age</th>
                                    <th scope="col" class="label-class">Relationship</th>
                                    <th scope="col" class="label-class">Highest Grade</th>
                                    <th scope="col" class="label-class">Remove</th>
                                  </tr>
                                </thead>
                <tbody>
                                    @foreach( $members as $index => $member )
                                    <tr class="bg-gray-300 pt-10">
                                      <td class="px-2 py-2">
                                          <input type="checkbox" wire:model="members.{{$index}}.in_home"> <br>
                                     </td>


                                      <td class="px-2 py-4">
                                          <input type="text" wire:model='members.{{$index}}.name' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Name" >
                                    </td>
                                    <td class="px-2 py-4">
                                        <input type="number" wire:model='members.{{$index}}.age' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Age" >
                                  </td>
                                  <td class="px-2 py-4">
                                    <input type="text" wire:model='members.{{$index}}.relationship' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Relationship to Client" >
                                 </td>
                                 <td class="px-2 py-4">
                                    <input type="text" wire:model='members.{{$index}}.grade_level' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Highest Grade Completed" >
                                 </td>

                                        <td class="p-2">
                                            <button wire:click.prevent="removeMember({{$index}})" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 rounded-lg text-xs font-medium block w-full px-2 py-2.5"> Remove</button>
                                        </td>
                                        &nbsp;
                                    </tr>
                                    @endforeach

                <br>
                                </tbody>
                            </table>
                            <span class="text-amber-500">
                                *Check "In-Home" if family member lives in same household
                            </span>

                                <div class="mt-6">
                                    <button wire:click.prevent="addMember" type="button" class="focus:outline-none text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Add Another Family Member</button>
                                </div>

        </div>

        <hr>

        <div class="md:flex mt-8 justify-around">
            <div>
                <label for="marital_status_mother">Mother's Marital Status: </label>
                <select wire:model="marital_status_mother">
                    <option value="">Please Select</option>
                    <option value="Married">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Single">Single</option>
                </select>
                @error('marital_status_mother')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>


                <div>
                    <label for="marital_status_father">Father's Marital Status: </label>
                    <select wire:model="marital_status_father">
                        <option value="">Please Select</option>
                        <option value="Married">Married</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Single">Single</option>
                    </select>
                    @error('marital_status_mother')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
        </div>
        <div class="mt-6 text-center">
            <p>If parents are separated/divorced, who has physical custody? <input type="text" wire:model="custody" class="md:ml-8"> </p>
        </div>


        <div class="mt-6 md:flex justify-around">

            <div>
                <label for="visitations">How often does the non-custodial parent see the child(ren)? </label>
                <select wire:model="visitations">
                    <option value="">Please Select</option>
                    <option value="Daily">Daily</option>
                    <option value="Several Times Per Week">Several Times Per Week</option>
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Other">Other</option>
                </select>
                @error('visitations')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <hr>
            <h1 class="text-2xl text-center mt-8">Employment</h1>

            <div class="md:flex mt-8 gap-12">
                <div>
                    <label for="patient_employment">Patient's Job/Profession</label>
                    <input type="text" wire:model="patient_employment" class="md:ml-6">
                    @error('patient_employment')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="patient_hours_weekly">Patient Hours Worked Weekly</label>
                    <input type="text" wire:model="patient_hours_weekly" class="md:ml-6">
                </div>
            </div>

            <div class="md:flex mt-8 gap-12">
                <div>
                    <label for="spouse_employment">Spouses's Job/Profession</label>
                    <input type="text" wire:model="spouse_employment" class="md:ml-6">
                </div>
                <div>
                    <label for="spouse_hours_weekly">Spouse Hours Worked Weekly</label>
                    <input type="text" wire:model="spouse_hours_weekly" class="md:ml-6">
                </div>
            </div>
    <br>
                <div>
                    <label for="income">Approximate gross family annual income from all sources (optional)? </label>
                    <select wire:model="income">
                        <option value="">Please Select</option>
                        <option value="Over $150K">Over $150K</option>
                        <option value="$100 - 150K">$100 - 150K</option>
                        <option value="$50 - 100K">$50 - 100K</option>
                        <option value="$50K or less">$50K or less</option>
                    </select>
                    @error('income')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
<hr>
            <h1 class="text-2xl text-center my-8">Major Problems/Concerns</h1>
            <label for="major_problems">What are the MAJOR problems/concerns for which you are coming to the clinic?</label>
            <textarea name="major_problems" wire:model="major_problems" id="" rows="5" class="w-full"></textarea>
            @error('major_problems')
            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
            @enderror
            <hr>

            <p>What kinds of help do you believe you need? Please check all that apply.</p>
            <div class="">
                <div><input type="checkbox" wire:model="type_of_help" value="Evaluation/Assessment only"><label for="type_of_help"> Evaluation/Assessment only</label></div>
                <div> <input type="checkbox" wire:model="type_of_help" value="Second opinion"><label for="type_of_help"> Second opinion</label></div>
                <div><input type="checkbox" wire:model="type_of_help" value="Psycho-education/counseling"><label for="type_of_help"> Psycho-education/counseling</label></div>
                <div> <input type="checkbox" wire:model="type_of_help" value="Psychotherapy"><label for="type_of_help"> Psychotherapy</label></div>
                <div><input type="checkbox" wire:model="type_of_help" value="Not sure"><label for="type_of_help"> Not Sure</label></div>
                @error('type_of_help')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
<br>
            <label for="stressful_events">Please indicate any stressful events that you believe may be related to the problems noted above:</label>
            <textarea name="stressful_events" wire:model="stressful_events" id="" rows="5" class="w-full"></textarea>
            @error('stressful_event')
            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
            @enderror
<br>
            <label for="problems_changed">How have the problems changed since you first noticed them?</label>
            <textarea name="problems_changed" wire:model="problems_changed" id="" rows="5" class="w-full"></textarea>
            @error('problems_changed')
            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
            @enderror

            <h2 class="my-6 text-2xl text-center">Problem Checklist</h2>

            <p>Please review the following list of common behavior/emotional problems. Select the appropriate option to indicate the extent to which each symptom describes you.
            </p>


                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_depressed">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_depressed"
                    class=""
                    > Depressed or irritable mood, lack of interest or motivation, boredom or withdrawal from friends</label>
                    @error('checklist_depressed')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_sleep_appetite">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_sleep_appetite"
                    class=""
                    > Sleep or appetite/weight changes</label>
                    @error('checklist_sleep_appetite')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_medical_complaints">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_medical_complaints"
                    class=""
                    > Multiple apparently unfounded medical complaints</label>
                    @error('checklist_medical_complaints')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_self_esteem">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_self_esteem"
                    class=""
                    > Self-esteem decreased/excessive self-blame and guilt</label>
                    @error('checklist_self_esteem')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_suicidal">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_suicidal"
                    class=""
                    > Suicidal behavior or thoughts</label>
                    @error('checklist_suicidal')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_increased_tearfulness">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_increased_tearfulness"
                    class=""
                    > Increased tearfulness or rapid changes of mood</label>
                    @error('checklist_increased_tearfulness')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_making_friends">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_making_friends"
                    class=""
                    > Has a hard time making/keeping friends</label>
                    @error('checklist_making_friends')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_overactivity">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_overactivity"
                    class=""
                    > Overactivity</label>
                    @error('checklist_overactivity')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_distractibility">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_distractibility"
                    class=""
                    > Distractibility/inattentiveness/fidgeting</label>
                    @error('checklist_distractibility')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_impulsivity">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_impulsivity"
                    class=""
                    > Impulsivity</label>
                    @error('checklist_impulsivity')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_following_through">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_following_through"
                    class=""
                    > Difficulty following through on instructions</label>
                    @error('checklist_following_through')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_losing_things">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_losing_things"
                    class=""
                    > Loses things easily</label>
                    @error('checklist_losing_things')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_incomplete_activity">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_incomplete_activity"
                    class=""
                    > Shifts from one incomplete activity to another</label>
                    @error('checklist_incomplete_activity')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_argumentative">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_argumentative"
                    class=""
                    > Argumentative, angry, or vindictive behavior</label>
                    @error('checklist_argumentative')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_refuse_to_comply">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_refuse_to_comply"
                    class=""
                    > Refuse to comply with reasonable rules/laws or regulations</label>
                    @error('checklist_refuse_to_comply')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_annoys_others">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_annoys_others"
                    class=""
                    > Annoys other deliberately</label>
                    @error('checklist_annoys_others')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_stealing_forgery">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_stealing_forgery"
                    class=""
                    > Stealing/forgery/breaking and entering</label>
                    @error('checklist_stealing_forgery')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_lying">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_lying"
                    class=""
                    > Lying</label>
                    @error('checklist_lying')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_firesetting">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_firesetting"
                    class=""
                    > Fire-setting</label>
                    @error('checklist_firesetting')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_homicidal">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_homicidal"
                    class=""
                    > Homicidal/dangerous behavior or plans</label>
                    @error('checklist_homicidal')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_cruelty">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_cruelty"
                    class=""
                    > Cruelty to animals or people</label>
                    @error('checklist_cruelty')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_fights">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_fights"
                    class=""
                    > Physical fights</label>
                    @error('checklist_fights')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_arrests">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_arrests"
                    class=""
                    > Arrests</label>
                    @error('checklist_arrests')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_binge_eating">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_binge_eating"
                    class=""
                    > Binge eating</label>
                    @error('checklist_binge_eating')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_laxatives_diuretics">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_laxatives_diuretics"
                    class=""
                    > Use of laxatives/diuretic/diet pills</label>
                    @error('checklist_laxatives_diuretics')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_fasting_dieting">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_fasting_dieting"
                    class=""
                    > Fasting/strict dieting not prescribed by a doctor</label>
                    @error('checklist_fasting_dieting')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_body_concerns">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_body_concerns"
                    class=""
                    > Persistent concern with body shape/weight</label>
                    @error('checklist_body_concerns')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_separation_fears">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_separation_fears"
                    class=""
                    > Fearful about being separated from you (at school, at night, being left with a sitter)</label>
                    @error('checklist_separation_fears')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_fear_harm">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_fear_harm"
                    class=""
                    > Fear that harm will come to you/them during absences (killed, kidnapped, accident)</label>
                    @error('checklist_fear_harm')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_shy">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_shy"
                    class=""
                    > Painfully or excessively shy when around unfamiliar people</label>
                    @error('checklist_shy')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_unpleasant_thoughts">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_unpleasant_thoughts"
                    class=""
                    > Unpleasant thoughts in head or discusses being afraid that he might do something wrong</label>
                    @error('checklist_unpleasant_thoughts')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_substance_abuse">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_substance_abuse"
                    class=""
                    > Substance use, abuse, or suspected abuse</label>
                    @error('checklist_substance_abuse')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="ml-10 mb-6">
                    <p>Check all that apply.</p>

                    <div class="lg:flex justify-between">
                        <div><input type="checkbox" wire:model="substances_used" value="Alcohol"><label for="substances_used"> Alcohol</label></div>
                        <div> <input type="checkbox" wire:model="substances_used" value="Marijuana"><label for="substances_used"> Marijuana</label></div>
                        <div><input type="checkbox" wire:model="substances_used" value="Cocaine"><label for="substances_used"> Cocaine</label></div>
                        <div> <input type="checkbox" wire:model="substances_used" value="Heroin/Opium"><label for="substances_used"> Heroin/Opium</label></div>
                        <div><input type="checkbox" wire:model="substances_used" value="Tranquilizers"><label for="substances_used"> Tranquilizers</label></div>
                        <div><input type="checkbox" wire:model="substances_used" value=" Hallucinogens/LSD/PCP"><label for="substances_used">  Hallucinogens/LSD/PCP</label></div>
                    </div>
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_bizarre_ideas">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_bizarre_ideas"
                    class=""
                    > Has bizarre ideas/odd behavior</label>
                    @error('checklist_bizarre_ideas')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_sees_things">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_sees_things"
                    class=""
                    > Sees/hears things that others do not</label>
                    @error('checklist_sees_things')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_disorganized">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_disorganized"
                    class=""
                    > Behavior is grossly disorganized</label>
                    @error('checklist_disorganized')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_rambling">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_rambling"
                    class=""
                    > Speech does not make sense to others (loosely connected, rambling, etc.)</label>
                    @error('checklist_rambling')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_withdrawn">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_withdrawn"
                    class=""
                    > Withdrawn from others/little social contact</label>
                    @error('checklist_withdrawn')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_low_functioning">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_low_functioning"
                    class=""
                    > Functioning below highest level preciously achieved</label>
                    @error('checklist_low_functioning')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="relative mb-3" >
                    <select class="text-input" wire:model="checklist_inappropriate_expression">
                        <option value="">Please select</option>
                        <option value="Does not apply">Does not apply</option>
                        <option value="Applies to a moderate degree">Applies to a moderate degree</option>
                        <option value="Clearly applies">Clearly applies</option>
                        <option value="Not sure">Not sure</option>
                    </select>
                    <label
                    for="checklist_inappropriate_expression"
                    class=""
                    > Little or inappropriate expression of feelings</label>
                    @error('checklist_inappropriate_expression')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>

                <br>
            <label for="other_problems">Please explain any other problems not already mentioned:</label>
            <textarea name="other_problems" wire:model="other_problems" id="" rows="5" class="w-full"></textarea>
<hr>
            <h2 class="my-6 text-2xl text-center">Past Psychiatric History</h2>

            <div class="relative mb-3" >
                <select class="text-input" wire:model="psych_history_treatment">
                    <option value="">Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <option value="Unsure">Not sure</option>
                </select>
                <label
                for="psych_history_treatment"
                class=""
                > Previous history of psychiatric/psychological/drug or alcohol evaluation or treatment.</label>
                @error('psych_history_treatment')
                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
            </div>
            <label for="psych_history_treatment_details">If yes, please provide details as to when/when treatment was sought.</label>
            <textarea name="psych_history_treatment_details" wire:model="psych_history_treatment_details" id="" rows="5" class="w-full"></textarea>
            <br>

            <div class="mt-8">
                <h1 class="text-2xl text-center mt-8">Medications</h1>
                <header class="flex items-center justify-between text-center">
                    <h2 class="text-lg text-slate-600 block mx-auto">Add Medications(s)</h2>
                     </header>
                     <div class="relative my-3" >
                        <select class="text-input" wire:model="psych_history_medications">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="psych_history_medications"
                        class=""
                        > Medication for psychiatric/emotional/attentional problems, now or previous.</label>
                        @error('psych_history_medications')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                                <table class="w-full text-sm text-left text-slate-500">
                                    <thead class="text-sm text-slate-600 uppercase bg-slate-50 py-2">
                                    <tr>

                                        <th scope="col" class="label-class"> Name</th>
                                        <th scope="col" class="label-class">Doses</th>
                                        <th scope="col" class="label-class">Approximate Dates</th>
                                        <th scope="col" class="label-class">Remove</th>
                                      </tr>
                                    </thead>
                    <tbody>
                                        @foreach( $psych_medications as $index => $psych_medication )
                                        <tr class="bg-gray-300 pt-10">
                                            <td class="px-2 py-4">
                                                <input type="text" wire:model='psych_medications.{{$index}}.med_name' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Medication Name" >
                                          </td>
                                          <td class="px-2 py-4">
                                              <input type="text" wire:model='psych_medications.{{$index}}.dose' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Dose" >
                                        </td>
                                        <td class="px-2 py-4">
                                            <input type="date" wire:model='psych_medications.{{$index}}.approx_date' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Approximate Date" >
                                      </td>
                                            <td class="p-2">
                                                <button wire:click.prevent="removePyschMed({{$index}})" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 rounded-lg text-xs font-medium block w-full px-2 py-2.5"> Remove</button>
                                            </td>
                                            &nbsp;
                                        </tr>
                                        @endforeach
                    <br>
                                    </tbody>
                                </table>
                                <div class="mt-6">
                                    <button wire:click.prevent="addPyschMed" type="button" class="focus:outline-none text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Add Medications</button>
                                </div>

                                <br>
                                <div class="relative my-3" >
                                    <select class="text-input" wire:model="psych_history_suicide">
                                        <option value="">Please select</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Unsure">Not sure</option>
                                    </select>
                                    <label
                                    for="psych_history_suicide"
                                    class=""
                                    > Is there a history of suicide attempt(s)?</label>
                                    @error('psych_history_suicide')
                                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mt-8">

                                    <header class="flex items-center justify-between text-center">
                                        <h2 class="text-lg text-slate-600 block mx-auto">Add Attempt(s)</h2>
                                         </header>
                                                    <table class="w-full text-sm text-left text-slate-500">
                                                        <thead class="text-sm text-slate-600 uppercase bg-slate-50 py-2">
                                                        <tr>
                                                            <th scope="col" class="label-class"> When?</th>
                                                            <th scope="col" class="label-class"> How</th>
                                                            <th scope="col" class="label-class"> Remove</th>
                                                          </tr>
                                                        </thead>
                                        <tbody>
                                                            @foreach( $suicide_attempts as $index => $attempts )
                                                            <tr class="bg-gray-300 pt-10">
                                                                <td class="px-2 py-4">
                                                                    <input type="date" wire:model='suicide_attempts.{{$index}}.when' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Medication Name" >
                                                              </td>
                                                              <td class="px-2 py-4">
                                                                  <input type="text" wire:model='suicide_attempts.{{$index}}.how' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="How?" >
                                                            </td>
                                                                <td class="p-2">
                                                                    <button wire:click.prevent="removeAttempt({{$index}})" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 rounded-lg text-xs font-medium block w-full px-2 py-2.5"> Remove</button>
                                                                </td>
                                                                &nbsp;
                                                            </tr>
                                                            @endforeach

                                        <br>

                                                        </tbody>
                                                    </table>
                                                    <div class="mt-6">
                                                        <button wire:click.prevent="addAttempt" type="button" class="focus:outline-none text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Add Attempt</button>
                                                    </div>



                                                    <br>
                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_history_hospitalization">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_history_hospitalization"
                                                        class=""
                                                        > Hospitalizations for psychiatric or drug problems?</label>
                                                        @error('psych_history_hospitalization')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div class="mt-8">

                                                        <header class="flex items-center justify-between text-center">
                                                            <h2 class="text-lg text-slate-600 block mx-auto">Add Psychiatric Hospitalization(s)</h2>
                                                             </header>
                                                                        <table class="w-full text-sm text-left text-slate-500">
                                                                            <thead class="text-sm text-slate-600 uppercase bg-slate-50 py-2">
                                                                            <tr>

                                                                                <th scope="col" class="label-class"> When?</th>
                                                                                <th scope="col" class="label-class"> Circumstances</th>
                                                                                <th scope="col" class="label-class"> Remove</th>
                                                                              </tr>
                                                                            </thead>
                                                            <tbody>
                                                                                @foreach( $psych_hospitalizations as $index => $hospitalization )
                                                                                <tr class="bg-gray-300 pt-10">
                                                                                    <td class="px-2 py-4">
                                                                                        <input type="date" wire:model='psych_hospitalizations.{{$index}}.when' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2" >
                                                                                  </td>
                                                                                  <td class="px-2 py-4">
                                                                                      <input type="text" wire:model='psych_hospitalizations.{{$index}}.how' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Circumstances?" >
                                                                                </td>
                                                                                    <td class="p-2">
                                                                                        <button wire:click.prevent="removeHospitalization({{$index}})" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 rounded-lg text-xs font-medium block w-full px-2 py-2.5"> Remove</button>
                                                                                    </td>
                                                                                    &nbsp;
                                                                                </tr>
                                                                                @endforeach

                                                            <br>

                                                                            </tbody>
                                                                        </table>
                        <div class="mt-6">
                            <button wire:click.prevent="addHospitalization" type="button" class="focus:outline-none text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Add Hospitalization</button>
                        </div>
<br>
                        <div class="relative my-3" >
                            <select class="text-input" wire:model="psych_history_juvenile_court">
                                <option value="">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Unsure">Not sure</option>
                            </select>
                            <label
                            for="psych_history_juvenile_court"
                            class=""
                            > Involvement with juvenile court/probation officer?</label>
                            @error('psych_history_juvenile_court')
                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="relative my-3" >
                            <select class="text-input" wire:model="psych_history_cps">
                                <option value="">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Unsure">Not sure</option>
                            </select>
                            <label
                            for="psych_history_cps"
                            class=""
                            > Any involvement with Child Protective Services?</label>
                            @error('psych_history_cps')
                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                            @enderror
                        </div>

                        <hr>
                        <h1 class="text-2xl text-center mt-8">Medical History</h1>
                        <br>
                        <label for="medical_history_physician">Name of primary care physician: </label>
                        <input type="text" wire:model="primary_care_physician"> <br>
            <br>
                        <label for="medical_history_last_visit">Date of Last Visit: </label>
                        <input type="date" wire:model="medical_history_last_visit">

                        <br>
                        <div class="relative my-6" >
                            <select class="text-input" wire:model="medical_history_hospitalization">
                                <option value="">Please select</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                <option value="Unsure">Not sure</option>
                            </select>
                            <label
                            for="medical_history_hospitalization"
                            class=""
                            > Previous hospitalizations, surgeries, or major illnesses (list below)</label>
                            @error('medical_history_hospitalization')
                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-8">

                            <header class="flex items-center justify-between text-center">
                                <h2 class="text-lg text-slate-600 block mx-auto">Add Medical Hospitalization(s)</h2>
                                 </header>
                                            <table class="w-full text-sm text-left text-slate-500">
                                                <thead class="text-sm text-slate-600 uppercase bg-slate-50 py-2">
                                                <tr>

                                                    <th scope="col" class="label-class"> Date?</th>
                                                    <th scope="col" class="label-class"> Nature of Problem</th>
                                                    <th scope="col" class="label-class"> Outcome</th>
                                                    <th scope="col" class="label-class"> Remove</th>
                                                  </tr>
                                                </thead>
                                <tbody>
                                                    @foreach( $med_hospitalizations as $index => $med_hospitalization )
                                                    <tr class="bg-gray-300 pt-10">
                                                        <td class="px-2 py-4">
                                                            <input type="date" wire:model='med_hospitalizations.{{$index}}.date' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2" >
                                                      </td>
                                                      <td class="px-2 py-4">
                                                          <input type="text" wire:model='med_hospitalizations.{{$index}}.problem' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Medical Problem" >
                                                    </td>
                                                    <td class="px-2 py-4">
                                                        <input type="text" wire:model='med_hospitalizations.{{$index}}.outcome' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Outcome of Treatment" >
                                                  </td>
                                                        <td class="p-2">
                                                            <button wire:click.prevent="removeMedHospitalization({{$index}})" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 rounded-lg text-xs font-medium block w-full px-2 py-2.5"> Remove</button>
                                                        </td>
                                                        &nbsp;
                                                    </tr>
                                                    @endforeach

                                <br>

                                                </tbody>
                                            </table>


                                            <div class="mt-6">
                                                <button wire:click.prevent="addMedHospitalization" type="button" class="focus:outline-none text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Add Hospitalization</button>
                                            </div>
                    <br>
                    <div class="relative my-3" >
                        <select class="text-input" wire:model="medical_history_head_injuries">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="medical_history_head_injuries"
                        class=""
                        > Traumatic head injuries?</label>
                        @error('medical_history_head_injuries')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>

                    <label for="medical_history_head_injury_details">Please describe nature of head injuries(When/Where).</label><br>
                    <textarea name="medical_history_head_injury_details" id="" rows="5" class="w-full"></textarea>
                     <br>
                     <br>
                     <div class="relative my-3" >
                         <select class="text-input" wire:model="medical_history_allergies">
                             <option value="">Please select</option>
                             <option value="Yes">Yes</option>
                             <option value="No">No</option>
                             <option value="Unsure">Not sure</option>
                         </select>
                         <label
                         for="medical_history_allergies"
                         class=""
                         > Allergies to medications</label>
                         @error('medical_history_allergies')
                         <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                         @enderror
                     </div>

                     <label for="medical_history_allergy_details">Please list medicine allergies.</label><br>
                     <textarea name="medical_history_allergy_details" id="" rows="5" class="w-full"></textarea>
                      <br>
                      <br>
                      <div class="relative my-3" >
                          <select class="text-input" wire:model="medical_history_other_allergies">
                              <option value="">Please select</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                              <option value="Unsure">Not sure</option>
                          </select>
                          <label
                          for="medical_history_other_allergies"
                          class=""
                          > Other allergies (e.g., specific food allergies, ragweed, cats, etc.)</label>
                          @error('medical_history_other_allergies')
                          <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                          @enderror
                      </div>

                      <label for="medical_history_other_allergy_details">Please list other allergies.</label><br>
                      <textarea name="medical_history_other_allergy_details" id="" rows="5" class="w-full"></textarea>
                       <br>
                       <div class="relative my-3" >
                        <select class="text-input" wire:model="medical_history_chronic_earaches">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="medical_history_chronic_earaches"
                        class=""
                        > Chronic Earaches?</label>
                        @error('medical_history_chronic_earaches')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="medical_history_earache_details">Please explain issues related to earaches.</label>
                    <textarea name="medical_history_earache_details" id="" rows="5" class="w-full"></textarea>

                    <div class="relative my-3" >
                        <select class="text-input" wire:model="medical_history_tubes">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="medical_history_tubes"
                        class=""
                        > Tube Surgery?</label>
                        @error('medical_history_tubes')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div><input type="number" wire:model="medical_history_tubes_age">If yes, what age?</div>
                     <br>
                     <div><input type="date" wire:model="medical_history_hearing_test">Date of last hearing test?</div>
                     <br>
                     <div><input type="date" wire:model="medical_history_vision_test">Date of last vision test?</div>

<hr>
                        <p class="text-xl text-center">Developmental and Perinatal History</p>


                    <div class="relative my-3" >
                        <select class="text-input" wire:model="developmental_perinatal_history_full_term">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="developmental_perinatal_history_full_term"
                        class=""
                        > Full Term?</label>
                        @error('developmental_perinatal_history_full_term')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="how_many_weeks">If not full term, how many weeks?</label>
                        <input type="number" wire:model="how_many_weeks">
                        @error('how_many_weeks')
                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="relative my-3" >
                        <select class="text-input" wire:model="developmental_perinatal_medications">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="developmental_perinatal_medications"
                        class=""
                        > Were medications for the mother necessary?</label>
                        @error('developmental_perinatal_medications')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="developmental_perinatal_medications_specify">If yes, please specify.</label>
                    <textarea wire:model="developmental_perinatal_medications_specify"  rows="5" class="w-full"></textarea>

                    <div class="relative my-3" >
                        <select class="text-input" wire:model="developmental_perinatal_history_drug_exposure">
                            <option value="">Please select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Unsure">Not sure</option>
                        </select>
                        <label
                        for="developmental_perinatal_history_drug_exposure"
                        class=""
                        > Drugs or other toxic substances (including smoking) to which mother was exposed?</label>
                        @error('developmental_perinatal_history_drug_exposure')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    </div>

                    <label for="other_illnesses">Other Illnesses?</label>
                    <textarea wire:model="other_illnesses"  rows="5" class="w-full"></textarea>



                    <div class="mt-8">

                        <header class="flex items-center justify-between text-center">
                            <h2 class="text-lg text-slate-600 block mx-auto">Child(ren) condition at birth:</h2>
                             </header>
                                        <table class="w-full text-sm text-left text-slate-500">
                                            <thead class="text-sm text-slate-600 uppercase bg-slate-50 py-2">
                                            <tr>

                                                <th scope="col" class="label-class"> Overall Condition</th>
                                                <th scope="col" class="label-class"> Pounds</th>
                                                <th scope="col" class="label-class"> Ounces</th>
                                                <th scope="col" class="label-class"> Remove</th>
                                              </tr>
                                            </thead>
                            <tbody>
                                                @foreach( $child_conditions as $index => $condition )
                                                <tr class="bg-gray-300 pt-10">
                                                    <td class="px-2 py-4">
                                                        <input type="text" wire:model='child_conditions.{{$index}}.overall' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2" placeholder="Overall condition">
                                                  </td>
                                                  <td class="px-2 py-4">
                                                      <input type="number" wire:model='child_conditions.{{$index}}.pounds' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Pounds" >
                                                </td>
                                                <td class="px-2 py-4">
                                                    <input type="text" wire:model='child_conditions.{{$index}}.ounces' class="bg-gray-100 border-b border-slate-300 text-slate-900 text-md rounded-lg focus:ring-orange-300 focus:border-orange-200 block w-full pl-2 py-2"  placeholder="Ounces" >
                                              </td>
                                                    <td class="p-2">
                                                        <button wire:click.prevent="removeChildAtBirth({{$index}})" type="button" class="focus:outline-none text-white bg-red-500 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 rounded-lg text-xs font-medium block w-full px-2 py-2.5"> Remove</button>
                                                    </td>
                                                    &nbsp;
                                                </tr>
                                                @endforeach

                            <br>

                                            </tbody>
                                        </table>
                                        <div class="mt-6">
                                            <button wire:click.prevent="addChildAtBirth({{$index}})" type="button" class="focus:outline-none text-white bg-gray-600 hover:bg-gray-400 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">Add Child</button>
                                        </div>

                                        <div>
                                            <p class="text-xl text-center">First Year of Life</p>

                                            <div class="relative my-3" >
                                                <select class="text-input" wire:model="feeding_problems">
                                                    <option value="">Please select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Unsure">Not sure</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                                <label
                                                for="feeding_problems"
                                                class=""
                                                > Feeding Problems?</label>
                                                @error('feeding_problems')
                                                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative my-3" >
                                                <select class="text-input" wire:model="sleeping_problems">
                                                    <option value="">Please select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Unsure">Not sure</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                                <label
                                                for="sleeping_problems"
                                                class=""
                                                > Sleeping Problems?</label>
                                                @error('sleeping_problems')
                                                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div class="relative my-3" >
                                                <select class="text-input" wire:model="bonding_problems">
                                                    <option value="">Please select</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                    <option value="Unsure">Not sure</option>
                                                    <option value="Not Applicable">Not Applicable</option>
                                                </select>
                                                <label
                                                for="bonding_problems"
                                                class=""
                                                > Bonding Problems?</label>
                                                @error('bonding_problems')
                                                <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <label for="first_year_additional_details">Please provide any additional First Year of Live details, if applicable.</label><br>
                                            <textarea name="first_year_additional_details" id="" rows="5" class="w-full"></textarea>
                                        </div>
<hr>
                                        <div>
                                            <p class="text-xl text-center">Academic History</p>
                                            <p>How would you describe yourself as a student in school?</p>

                                            <label for="student_description_primary">Primary School</label>
                                            <textarea wire:model="student_description_primary" rows="1" class="w-full"></textarea>
                                            @error('student_description_primary')
                                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                            @enderror
                                            <label for="student_description_middle">Middle School</label>
                                            <textarea wire:model="student_description_middle" rows="1" class="w-full"></textarea>
                                            @error('student_description_middle')
                                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                            @enderror
                                            <label for="student_description_high">High School</label>
                                            <textarea wire:model="student_description_high" rows="1" class="w-full"></textarea>
                                            @error('student_description_high')
                                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                            @enderror
                                            <label for="student_description_college">College</label>
                                            <textarea wire:model="student_description_college" rows="1" class="w-full"></textarea>
                                            @error('student_description_college')
                                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div>
                                            <p class="text-xl text-center">Leisure Activities</p>
                                            <label for="leisure_activities">Please tell us some of the hobbies/activities.</label>

                                            <textarea wire:model="leisure_activities" rows="1" class="w-full"></textarea>
                                            @error('leisure_activities')
                                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                            @enderror
                                        </div>
<hr>
                                        <div>
                                            <p class="text-xl text-center">Family History</p>
                                            <p>Family Stressors (please check all that apply)</p>


                                                <div class="lg:flex justify-between">
                                                    <div>
                                                    <input type="checkbox" wire:model="family_stressors" value="Marital conflicts">
                                                    <label for="family_stressors"> Marital conflicts</label>
                                                    </div>
                                                    <div>
                                                    <input type="checkbox" wire:model="family_stressors" value="Parent/Child conflict">
                                                    <label for="type_of_help"> Parent/Child conflict</label>
                                                    </div>
                                                    <div>
                                                    <input type="checkbox" wire:model="family_stressors" value="Physical Illness/medical problems">
                                                    <label for="family_stressors"> Physical Illness/medical problems</label>
                                                     </div>
                                                    <div>
                                                    <input type="checkbox" wire:model="family_stressors" value="Recent deaths">
                                                    <label for="family_stressors"> Recent deaths</label>
                                                    </div>
                                                </div>
                                                <div class="lg:flex justify-between">
                                                    <div>
                                                        <input type="checkbox" wire:model="family_stressors" value="Sexual/physical abuse">
                                                        <label for="family_stressors"> Sexual/physical abuse</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" wire:model="family_stressors" value="Drug/alcohol abuse by parents">
                                                        <label for="family_stressors"> Drug/alcohol abuse by parents</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" wire:model="family_stressors" value="Frequent moves">
                                                        <label for="family_stressors"> Frequent moves</label>
                                                    </div>
                                                    <div>
                                                        <input type="checkbox" wire:model="family_stressors" value="Financial problems">
                                                        <label for="family_stressors"> Financial problems</label>
                                                    </div>
                                                </div>
                                                <div>
                                                    <input type="checkbox" wire:model="family_stressors" value="Other">
                                                    <label for="type_of_help"> Other</label>
                                                </div>




                                                <div>
                                                    <p>Please indicate the presence in <strong>biological </strong> relatives of any psychiatric problem, such as depression, suicide, alcoholism, drug abuse, anxiety panic attacks, manic-depressive (bipolar) illness, schizophrenia, mental retardation, autism, learning disability, hyperactivity, attention deficit disorder, childhood behavior problems, school or academic problems, narcolepsy, legal problems, brain trauma.</p>

                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_problems_father">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_problems_father"
                                                        class=""
                                                        > Your Father</label>
                                                        @error('psych_problems_father')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_problems_father_parents_or_siblings">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_problems_father_parents_or_siblings"
                                                        class=""
                                                        > Father's parents, brothers, or sisters</label>
                                                        @error('psych_problems_father_parents_or_siblings')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_problems_mother">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_problems_mother"
                                                        class=""
                                                        > Your mother</label>
                                                        @error('psych_problems_mother')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_problems_mother_parents_or_siblings">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_problems_mother_parents_or_siblings"
                                                        class=""
                                                        > Mother's parents, brothers, or sisters</label>
                                                        @error('psych_problems_mother_parents_or_siblings')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_problems_brothers_sisters">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_problems_brothers_sisters"
                                                        class=""
                                                        > Your brothers and sisters</label>
                                                        @error('psych_problems_brothers_sisters')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="relative my-3" >
                                                        <select class="text-input" wire:model="psych_problems_other_relatives">
                                                            <option value="">Please select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                            <option value="Unsure">Not sure</option>
                                                        </select>
                                                        <label
                                                        for="psych_problems_other_relatives"
                                                        class=""
                                                        > Other biological relatives</label>
                                                        @error('psych_problems_other_relatives')
                                                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div>
                                                    <p class="text-xl text-center">Family Circumstances</p>
                                                    <p>Please provide any information about the family that you think would be important in our understanding of the current problem:</p>
                                                    <textarea wire:model="family_circumstances" class="w-full" rows="2"></textarea>
                                                </div>

                                                <div>

                                                    <p class="text-xl text-center">Current Functioning</p>
                                                    <p>Please select from the following scale to indicate how well you are coping currently. 100% means you are coping the highest reasonably expected.</p>

                                                    <select wire:model="current_functioning">
                                                        <option value="">Please Select</option>
                                                        <option value="0%">0%</option>
                                                        <option value="10%">10%</option>
                                                        <option value="20%">20%</option>
                                                        <option value="30%">30%</option>
                                                        <option value="40%">40%</option>
                                                        <option value="50%">50%</option>
                                                        <option value="60%">60%</option>
                                                        <option value="70%">70%</option>
                                                        <option value="80%">80%</option>
                                                        <option value="0%">90%</option>
                                                        <option value="100%">100%</option>
                                                    </select>

                                                </div>

                                                <div>
                                                    <h2 class="text-2xl text-center my-10">THANK YOU FOR YOUR TIME AND EFFORT!</h2>
                                                </div>

                                                <div class="my-10 w-full text-center">
                                                    <button wire:loading.attr="disabled" type="submit" class="px-2 py-1 bg-blue-500 text-white text-xl rounded-md shadow-lg" onclick="return confirm('Are You Sure')">Submit This Form</button>

                                                </div>










        </form>

</div>
