@extends('zw.mail.base')

@section('content')
  <h1>Kontaktformular von zundel-webdesign.de</h1>
  <p><strong>Firma</strong> {{ $data['company'] ?? '' }}</p>
  <p><strong>Vorname</strong> {{ $data['name'] ?? '' }}</p>
  <p><strong>Name</strong> {{ $data['lastname'] ?? '' }}</p>
  <p><strong>Straße + Nr.</strong> {{ $data['street'] ?? '' }}</p>
  <p><strong>PLZ + Ort</strong> {{ $data['plz'] ?? '' }}</p>
  <p><strong>Land</strong> {{ $data['land'] ?? '' }}</p>
  <p><strong>E-Mail-Adresse</strong> {{ $data['email'] ?? '' }}</p>
  <p><strong>Betreff</strong> {{ $data['subject'] ?? '' }}</p>
  <p><strong>Nachricht</strong></p>
  <br>
  <p>{{ $data['message'] ?? '' }}</p>
@endsection
