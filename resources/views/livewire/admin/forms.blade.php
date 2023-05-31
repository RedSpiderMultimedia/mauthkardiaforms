<div>

    <div class="md:flex">
        <div class="md:w-1/2 bg-gray-300 m-6 p-4">
            <h1 class="text-xl text-center pb-6"><a href="/add-disclosure" class="text-blue-500">Disclosures</a> </h1>

            @if ($disclosures->count())
            <table class="w-full text-sm text-left text-gray-700">
                <thead>
                    <th>Date Added</th>
                    <th>Patient Name</th>
                    <th>Date of Birth</th>
                    <th>Phone</th>
                    <th>View Disclosure</th>
                </thead>

                @foreach ($disclosures as $disclosure)
                <tr>
                    <td>{{ Carbon\Carbon::parse($disclosure->created_at)->format('m-d-Y') }}</td>
                    <td>{{ $disclosure->name  }}</td>
                    <td>{{ $disclosure->dob  }}</td>
                    <td>{{ $disclosure->disclose_phone  }}</td>
                    <td><a href="/view-disclosure/{{ $disclosure->id }}">View</a> </td>
                </tr>
            @endforeach
            </table>
            @else
            There are no disclosures to display
            @endif


        </div>

        <div class="bg-gray-300 md:w-1/2 m-6 p-4">
            <h1 class="text-xl text-center pb-6"><a href="/add-assessment" class="text-blue-500">Assessments</a> </h1>

        @if ($assessments->count())
        <table class="w-full text-sm text-left text-gray-700">
            <thead>
                <th>Date</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Primary Phone</th>
                <th>Email</th>
                <th>ID</th>
            </thead>

            @foreach ($assessments as $assessment)
            <tr>
                <td>{{ Carbon\Carbon::parse($assessment->created_at)->format('m-d-Y') }}</td>
                <td>{{ $assessment->last_name  }}</td>
                <td>{{ $assessment->first_name  }}</td>
                <td>{{ $assessment->primary_phone  }}</td>
                <td>{{ $assessment->email}}</td>
                <td><a href="/view-assessment/{{ $assessment->id }}">View</a> </td>
            </tr>
        @endforeach
        </table>
        @else
        There are no assessments to display
        @endif
        </div>
    </div>

</div>
