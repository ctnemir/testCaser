@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.';
@endphp

@section('component-content')
  <h1 id="forms">Forms</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>

  <h3 class="mt-4">Form controls</h3>

  <!-- example-start-asdf -->
  <x-input
    name="email1"
    type="email"
    placeholder="Enter email"
    required
    :label="[
      'text' => 'Email Address',
    ]"
    help="We'll never share your email with anyone else."
  />

  <x-input
    type="password"
    placeholder="Password"
    required
    :label="[
        'text' => 'Password',
    ]"
  />

  <x-checkbox
    name="checkobox1"
    :label="[
        'text' => 'Check me out',
    ]"
  />

  <x-select
    name="select4"
    :label="[
        'text' => 'Example select',
    ]"
    :options="[1,2,3,4]"
  />

  <x-textarea
    name="textarea1"
    rows="3"
    :label="[
        'text' => 'Example textarea',
    ]"
  />
  <!-- example-end-asdf -->
  {!! GrepCodeExampleComponents::get('asdf') !!}

  <h3 class="mt-4">Sizing</h3>
  <p>Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.
  </p>

  <!-- example-start-2 -->
  <x-input
    name="exmple6"
    class="form-control-lg"
    placeholder=".form-control-lg"
  />

  <x-input
    name="exmple7"
    placeholder=".form-control (default)"
  />

  <x-input
    name="exmple8"
    class="form-control-sm"
    placeholder=".form-control-sm"
  />

  <x-select
    name="exmple9"
    class="form-control-lg"
    :options="['.form-control-lg']"
  />

  <x-select
    name="exmple10"
    :options="['.form-control (default)']"
  />

  <x-select
    name="exmple11"
    class="form-control-sm"
    :options="['.form-control-sm']"
  />
  <!-- example-end-2 -->
  {!! GrepCodeExampleComponents::get(2) !!}


  <h3 class="mt-4">Horizontal form label sizing</h3>

  <!-- example-start-3 -->
  <x-input
    class="form-control-sm"
    name="email12"
    type="email"
    placeholder=".col-form-label-sm"
    required
    :label="[
      'text' => 'Email Address',
    ]"
    :grid="['col-sm-3 col-form-label-sm', 'col-sm-9']"
  />

  <x-input
    name="email13"
    type="email"
    placeholder="default"
    required
    :label="[
      'text' => 'Email Address',
    ]"
    :grid="['col-sm-3', 'col-sm-9']"
  />

  <x-input
    class="form-control-lg"
    name="email14"
    type="email"
    placeholder=".col-form-label-lg"
    required
    :label="[
      'text' => 'Email Address',
    ]"
    :grid="['col-sm-3 col-form-label-lg', 'col-sm-9']"
  />
  <!-- example-end-3 -->
  {!! GrepCodeExampleComponents::get(3) !!}

  <h3 class="mt-4">Readonly</h3>

  <!-- example-start-4 -->
  <x-input
    name="exmple15"
    placeholder="Readonly input here..."
    readonly
  />
  <!-- example-end-4 -->
  {!! GrepCodeExampleComponents::get(4) !!}

  <h3 class="mt-4">Readonly plain text</h3>

  <!-- example-start-5 -->
  <x-input
    class="form-control-plaintext"
    name="exmple16"
    :label="[
      'text' => 'Email Address',
    ]"
    placeholder="Readonly input here..."
    readonly
    :grid="['col-sm-3', 'col-sm-9']"
  />

  <x-input
    name="password17"
    type="password"
    :label="[
      'text' => 'Password',
    ]"
    placeholder="Password"
    readonly
    :grid="['col-sm-3', 'col-sm-9']"
  />
  <!-- example-end-5 -->
  {!! GrepCodeExampleComponents::get(5) !!}


  <h3 class="mt-4">Form groups</h3>

  <!-- example-start-6 -->
  <x-input
    name="example18"
    :label="[
      'text' => 'Example label',
    ]"
    placeholder="Example input"
  />

  <x-input
    name="example19"
    :label="[
      'text' => 'Another label',
    ]"
    placeholder="Another input"
  />
  <!-- example-end-6 -->
  {!! GrepCodeExampleComponents::get(6) !!}

  <h3 class="mt-4">Form grid</h3>

  <!-- example-start-7 -->
  <div class="row">
    <div class="col">
      <x-input
        name="example20"
        :label="[
          'text' => 'Example label',
        ]"
        placeholder="Example input"
      />
    </div>

    <div class="col">
      <x-input
        name="example21"
        :label="[
          'text' => 'Another label',
        ]"
        placeholder="Another input"
      />
    </div>
  </div>
  <!-- example-end-7 -->
  {!! GrepCodeExampleComponents::get(7) !!}

  <h3 class="mt-4">Form row</h3>

  <!-- example-start-8 -->
  <div class="form-row">
    <div class="col">
      <x-input
        name="example22"
        :label="[
          'text' => 'Example label',
        ]"
        placeholder="Example input"
      />
    </div>

    <div class="col">
      <x-input
        name="example23"
        :label="[
          'text' => 'Another label',
        ]"
        placeholder="Another input"
      />
    </div>
  </div>
  <!-- example-end-8 -->
  {!! GrepCodeExampleComponents::get(8) !!}

  <h3 class="mt-4">Horizontal form</h3>

  <!-- example-start-9 -->
  <x-input
    name="email24"
    type="email"
    :label="[
      'text' => 'Email address',
    ]"
    placeholder="Enter email"
    :grid="['col-sm-3', 'col-sm-9']"
    help="We'll never share your email with anyone else."
  />

  <x-input
    name="password25"
    type="password"
    :label="[
      'text' => 'Password',
    ]"
    placeholder="Password"
    :grid="['col-sm-3', 'col-sm-9']"
  />

  <x-checkbox
    name="checkmeout26"
    :label="[
      'text' => 'Check me out',
    ]"
    :grid="['offset-sm-3 col-sm-9']"
  />

  <x-switches
    name="switch"
    :label="[
      'text' => 'Toggle this switch element',
    ]"
    :grid="['offset-sm-3 col-sm-9']"
  />

  <x-radio
    name="radio1"
    id="customRadioInline1"
    :label="[
      'text' => 'Toggle this custom radio',
    ]"
    :grid="['offset-sm-3 col-sm-9']"
  />

  <x-radio
    name="radio1"
    id="customRadioInline2"
    :label="[
      'text' => 'Or toggle this custom radio',
    ]"
    :grid="['offset-sm-3 col-sm-9']"
  />

  <x-select
    name="multipleSelect27"
    :options="[1,2,3,4]"
    :label="[
      'text' => 'Example select',
    ]"
    :grid="['col-sm-3', 'col-sm-9']"
  />

  <x-select
    name="multipleSelect28"
    multiple
    :options="[1,2,3,4]"
    :label="[
      'text' => 'Example multiple select',
    ]"
    :grid="['col-sm-3', 'col-sm-9']"
  />
  <!-- example-end-9 -->
  {!! GrepCodeExampleComponents::get(9) !!}

  <h3 class="mt-4">Server side validation</h3>
  <p>
    The server validation of Laravel is integrated in the components with the standard bootstrap markup:<br>
    <a href="https://getbootstrap.com/docs/4.4/components/forms/#validation" target="_blank">Bootstrap forms validation</a>
  </p>


  <h3 class="mt-4">File Browse</h3>

  <!-- example-start-11 -->
  <x-upload
    type="file"
    name="upload"
    :label="[
      'text' => 'File upload',
    ]"
  />
  <!-- example-end-11 -->
  {!! GrepCodeExampleComponents::get(11) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Forms',
    'text' => 'Path <code>components/forms/(input, textarea, upload, select, switches).blade.php</code>',
    'type' => 'components',
    'variables' => [
      [
        'name' => 'all',
        'type' => 'array',
        'default' => '',
        'description' => 'Submit all data.',
      ],[
        'name' => 'class',
        'type' => 'string',
        'default' => '',
        'description' => 'Classes can be added, all other attributes can also be set.',
      ],[
        'name' => 'grid',
        'type' => 'array',
        'default' => '',
        'description' => 'For horizontal form',
      ],[
        'name' => 'help',
        'type' => 'string',
        'default' => '',
        'description' => 'Information text',
      ],
  ]])
@endsection
