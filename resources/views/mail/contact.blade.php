<p>
    Hi, <br>
    You have received an email from the website contact form. <br> <br>

    <strong>Name: </strong> {{ $contact->name}} <br>
    <strong>Subject: </strong> {{ $contact->subject }} <br>
    <strong>Email: </strong> {{ $contact->email }} <br>
    <strong>Phone: </strong> {{ $contact->phone }} <br>
    <br>
    <strong>Details:</strong> <br>
    {{ $contact->message }}


</p>
