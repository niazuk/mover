@component('mail::layout')
@slot('header')
@component('mail::header', ['url'=> config('data.meta.url')])
<img src="{{asset('storage/images/logo-default-270x69.png')}}">
@endcomponent
@endslot
@component('mail::subcopy')
# Incoming Query

A customer has submitted a query. Below is a copy of the submission

Name: {{$data['name']}}

E-mail: {{$data['email']}}

Phone: {{$data['phone']}}

Message: {{$data['message']}}

Thanks,<br>
{{ config('data.meta.sitename') }}<br>
{{ config('data.meta.contact_email') }}<br>
{{ config('data.meta.contact_number') }}


@endcomponent
@slot('footer')
@component('mail::footer', ['url'=> config('data.meta.url')])
<section class="section-12 bg-gray-darker text-md-left">
    <div class="shell">
        <p class="font-accent">
            <span class="small text-silver-dark">&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a
            href="#">Privacy Policy</a></span>
        </p>
    </div>
</section>
@endcomponent
@endslot
@endcomponent