<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Contact US</title>
    
    <style>
        .contact-form {
            width: 100%;
            max-width: 360px;
            margin: 0 auto;
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 16px;
            background: #ccc;
        }

        .contact-form > * {
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form > input {
            padding: 8px;
        }

        .contact-form > h1 {
            text-align: center;
            margin: 0;
        }

        .contact-form > p {
            text-align: justify;
            margin: 0;
            line-height: 24px;
            border: 1px solid #000;
            padding: 4px 8px;
            white-space: pre-line;
        }

        .contact-form > textarea {
            resize: vertical;
            padding: 4px 8px;
            line-height: 24px;
        }

        .contact-form > input[type=submit] {
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form
        action="{{ route('contact') }}"
        method="{{ $contact ? 'GET' : 'POST' }}"
        class="contact-form"
    >
        <h1>Contact Us any time</h1>

        @if($contact)
        <div>
            <b>Name:</b>
            {{ $contact->name ?? '' }}
        </div>
        <div>
            <b>Email:</b>
            {{ $contact->email ?? '' }}
        </div>
        <div>
            <b>Subject:</b>
            {{ $contact->subject ?? '' }}
        </div>
        <p>{{ $contact->message ?? '' }}</p>
        @else
        @csrf
        <input type="text" name="name" placeholder="Your Name Please" required />
        <input type="email" name="email" placeholder="Your Valid Email" required />
        <input type="text" name="subject" placeholder="Your Query Subject" required />
        <textarea name="message" rows="10" placeholder="Your Query" required></textarea>
        @endif

        <input type="submit" value="{{ $contact ? 'Go To Contact' : 'Submit' }}" />
    </form>
</body>
</html>