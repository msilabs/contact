<x-mail::message>
# {{ $contact->subject ?? 'Contact' }}

{{ $contact->message }}

<x-mail::button :url="route('contact', ['id' => $contact->id])">
Show Contact
</x-mail::button>

From,<br>
{{ $contact->name }}<br>
{{ $contact->email }}
</x-mail::message>
