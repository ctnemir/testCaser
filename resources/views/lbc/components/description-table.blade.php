@php
  $items = [
      'tabsId' => 'description-alerts',
      'items' => ['Variables']
  ]
@endphp

<div class="{{ $descriptionTableClass }}">
  <h2>Blade-Component informations</h2>
  @isset($text)
    <strong>Path</strong>
    <p>{!! $text ?? '' !!}</p>
  @endisset

  @include('lbc/components/tabs/nav-tabs', $items)
  @component('lbc/components/tabs/tab-content-with-slots', $items)
    @slot('slot1')
      <div class="table-responsive">
        <table class="table table-striped table-bordered border-top-0">
          <thead>
          <tr>
            <th class="border-top-0">Name</th>
            <th class="border-top-0">Type</th>
            <th class="border-top-0">Default</th>
            <th class="border-top-0">Description</th>
          </tr>
          </thead>
          <tbody>
          @foreach($variables as $item)
            <tr>
              <td>{{ $item['name'] }}</td>
              <td>{{ $item['type'] }}</td>
              <td>{{ $item['default'] }}</td>
              <td>{!! $item['description'] !!}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    @endslot
  @endcomponent

  @if(isset($type))
    <p>
      For more information about {{ strtolower($name) }} read the bootstrap documention
      <a target="_blank" href="https://getbootstrap.com/docs/4.3/{{ strtolower($type) }}/{{ strtolower($name) }}/">
        {{ $name }}
      </a>
    </p>
  @endif
</div>
