<div class="lg:w-[980px] mx-auto bg-gray-300 p-8">

    <div class="text-center my-6 text-xl">Client/Guardian Authorization for Use and Disclosure of Protected Health Information (PHI)</div>
    <form wire:submit.prevent="save">

        <p>I, <input type="text" wire:model="name" Placeholder="Full Name" class="mx-3"> authorize Kardia Counseling & Consulting, PLLC at 325 Page Road, Pinehurst, NC 28370 Phone: (910) 295-0500 Fax: (910) 295-0503
            to use, exchange, disclose or obtain certain protected health information (PHI) about me to/with:</p>
            @error('name')
            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
        @enderror
            <div class="md:flex mt-6 justify-between px-12">
                <div>Name: <input type="text" wire:model="disclose_name">
                    @error('disclose_name')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
                </div>


                <div>Phone: <input type="text" wire:model="disclose_phone">
                    @error('disclose_phone')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror</div>

            </div>
            <div class="md:flex mt-6 justify-between px-12">
                <div>Address: <input type="text" wire:model="disclose_address">
                    @error('disclose_address')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
                </div>
                <div>Fax: <input type="text" wire:model="disclose_fax"></div>
            </div>

            <div class="mt-6">
                <label><strong>Information to be released (check all that apply):</strong></label><br>
                <div class="border border-gray-600 p-3">
                    <div class="flex justify-between mb-4">
                        <label><input type="checkbox" wire:model="releasable_info" value="All clinical records including any assessments"> All clinical records including any assessments</label>
                        <label><input type="checkbox" wire:model="releasable_info" value="Letters about my treatment/condition"> Letters about my treatment/condition</label>
                    </div>
                    <div class="flex justify-between mb-4">
                        <label><input type="checkbox" wire:model="releasable_info" value="Progress notes"> Progress notes</label>
                        <label><input type="checkbox" wire:model="releasable_info" value="Diagnostic reportse"> Diagnostic reports</label>
                        <label><input type="checkbox" wire:model="releasable_info" value="Treatment plans & goals"> Treatment plans & goals</label>
                    </div>
                    <div class="flex justify-between">
                        <label><input type="checkbox" wire:model="releasable_info" value="Clinical evaluations"> Clinical evaluations</label>
                        <label><input type="checkbox" wire:model="releasable_info" value="Substance abuse/treatment "> Substance abuse/treatment*</label>
                        <label><input type="checkbox" wire:model="releasable_info" value="Discharge Summary"> Discharge Summary</label>
                        <label><input type="checkbox" wire:model="releasable_info" value="Diagnosis"> Diagnosis</label>

                    </div>
                    @error('releasable_info')
                            <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                        @enderror
                    <div class="text-sm mt-8 text-center">* disclosure period limited to 6 months from date of consent</div>
                </div>
                </div>

                <div class="mt-6">

                    <label><strong>Purpose of use/disclore (check all that apply):</strong></label><br>
                    <div class="border border-gray-600 p-3">
                        <label><input type="checkbox" wire:model="purpose" value="Continuity of client care"> Continuity of client care</label> <br>
                        <label><input type="checkbox" wire:model="purpose" value="At the request of the client/guardian "> At the request of the client/guardian</label> <br>
                        <label><input type="checkbox" wire:model="purpose" value="Attorney/Legal/DJJ/DSS /disability"> Attorney/Legal/DJJ/DSS /disability</label> <br>
                        <label><input type="checkbox" wire:model="purpose" value="Insurance"> Insurance</label>
                        @error('purpose')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                    </div>

                </div>


                <div class="mt-6">
                    <label for="expiry_date">Expiration date (if less than one year)</label> <br>
                    <input type="date" wire:model="expiry_date" >
                </div>
                <div class="my-4 text-sm">

                    <p> <strong>Redisclosure: </strong>    <br>
                        Once information is used or disclosed pursuant to this authorization, I understand that the federal privacy law, (45 CFR Parts 160 & 164) protecting PHI may not apply to the recipient and may not prohibit redisclosure. Other laws may prohibit redisclosure. When we disclose mental health and development disabilities information protected by the state law (GS 122C) or substance abuse treatment information protected by federal law (42 CFR Part 2) we must inform the recipient than disclosure is prohibited except as permitted or required by these two laws. Our notice of privacy practices describes the circumstances where disclosure is permitted or required by these laws.
                    </p>

                    <p class="mt-6"> <strong> Revocation and expiration:</strong> <br>

                    I understand that I have the right to revoke this authorization at any time. My written revocation must be submitted to Shelwilbed O. Wray, LCAS, LMHC, LCMHC-Supervisor, at Kardia® Counseling & Consulting, PLLC (Privacy Officer). I understand I may refuse to sign this authorization form. I understand that Kardia® Counseling & Consulting, PLLC will not deny or refuse to provide treatment if I do not sign. This consent shall be valid for one year from the date signed unless noted below:
                    </p>

                </div>

                <div class="px-12 mt-6">
                    <label for="ssn">Social Security Number:</label> <br>
                    <input type="password" wire:model="ssn" >
                    @error('ssn')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                @enderror
                </div>

                <div class="flex mt-6 px-12">
                    <div class="mr-24">
                        <label for="signature">Electronic Signaure</label> <br>
                        <input type="text" wire:model="signature" Placeholder="Input Your Full Name Here">
                        @error('signature')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                    </div>
                    <div>
                        <label for="date">Date of Signing:</label>  <br>
                        <input type="date" wire:model="date">
                        @error('date')
                        <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="flex mt-6 px-12">
                <div class="mr-24">
                    <label for="dob">Date of Birth</label> <br>
                    <input type="date" wire:model="dob">
                    @error('dob')
                    <p class="text-red-600 text-sm mb-6 mt-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="ml-20">
                    <label for="signature">Guardian Signaure (if client is younger than 18)</label> <br>
                    <input type="text" wire:model="guardian" Placeholder="Input Your Full Name Here">
                </div>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="bg-gray-600 text-white text-xl px-3 py-.5 rounded-lg mt-6 shadow-xl">Save</button>
            </div>



    </form>

</div>

