@extends('lbc.themes.liara.pages.base')

@php
  $bodyClass = 'page-pages page-contact'
@endphp

@section('content')
  <h1 class="mt-3 mt-lg-4">
    <small>Glaebam ea</small><br>
    Pinguem eu.
  </h1>

  @if(Session::has('success'))
    <x-alert class="mt-3 mt-lg-4" type="success" :message="Session::get('success')" :dismissible="'true'"/>
  @endif

  @if ($errors->any())
    <x-alert class="mt-3 mt-lg-4" type="danger" :dismissible="'true'">
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </x-alert>
  @endif

  <iframe class="my-3 my-lg-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.1127905248313!2d8.509095316397369!3d50.28982240680601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bdabff4dc7fe39%3A0x22e7424ac3700505!2sZundel-Webdesign.de!5e0!3m2!1sde!2sde!4v1564940106677!5m2!1sde!2sde" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  <div class="row">
    <div class="col-sm-7">
      <p class="font-size-lg">
        We promise we don't bite and we would love to hear your opinion and feedback regarding our work. So don't be shy and write us a message via our contact form.
      </p>

      <form class="my-3 my-lg-4" method="post" action="{{ route('liara.contact') }}">
        {{ csrf_field() }}

        <x-input name="name" :label="['text' => 'Name *']" :grid="['col-sm-3', 'col-sm-9']"/>
        <x-input name="email" type="email" :label="['text' => 'Email-Address *']" :grid="['col-sm-3', 'col-sm-9']"/>
        <x-input name="subject" :label="['text' => 'Subject']" :grid="['col-sm-3', 'col-sm-9']"/>
        <x-textarea name="message" :label="['text' => 'Message *']" rows="5" :grid="['col-sm-3', 'col-sm-9']"/>
        @php
          $checkboxText = 'I have taken note of the <a href="#">privacy policy</a> I agree that my details and data for answering my inquiry will be collected and stored electronically. Note: You can revoke your consent at any time by e-mail to <a href="mailto:info@zundel-webdesign.de">info@zundel-webdesign.de</a>.'
        @endphp
        <x-checkbox name="check" :label="['text' => $checkboxText]" :grid="['offset-sm-3']"/>

        <div class="row">
          <div class="col-sm-9 ml-auto">
            <button class="btn btn-primary">Send message</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
