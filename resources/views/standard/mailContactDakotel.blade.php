@component('mail::message')

<h1> De la part de Mr/Mme {{ $nom }} {{ $prenom }} </h1>

<p>
    {{ $message }}
</p>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

<p>
    Adresse mail: {{ $adresseMail }}
</p>

Thanks,<br>
{{-- {{ config('app.name') }} --}}
@endcomponent
