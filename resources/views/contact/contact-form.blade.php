@component('mail::message')

<p>Subject: {{$contact_form_data['subject']}}</p>

<p>Name: {{$contact_form_data['name']}}</p>

<h4>New Message from {{$contact_form_data['email']}}</h4>

<p>Message: {{$contact_form_data['message']}}</p>

@endcomponent


