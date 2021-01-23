@php
  $attr = $attributes->merge($attrs);
  if (isset($errors)) {
    $attr['class'] .= $errors->has($attr['name']) ? ' is-invalid' : '';
  }
@endphp

<div{!! $group['attrs'] !!}>
  @if(!empty($label['text']))
    <label{!! $label['attrs'] !!} for="input-{{ $attr['name'] }}">{!! $label['text'] ?? '' !!}</label>
  @endif

  @isset($grid[1])
    <div class="{{ $grid[1] }}">
      @endisset

      <select {!! $attr->merge($attrs) !!} id="input-{{ $attr['name'] }}">
        @foreach($options as $option)
          <option {{ request()->input($attr['name'], old($attr['name'])) == $option ? 'selected' : '' }}>
            {{ $option }}
          </option>
        @endforeach
      </select>

      @if(!empty($help))
        <small id="help-{{ $attr['name'] }}" class="form-text text-muted">We'll never share your email with anyone else.</small>
      @endif

      @if(isset($errors) && $errors->has($attr['name']))
        <div class="{{ $errors->has($attr['name']) ? 'invalid' : '' }}-feedback d-block">
          {!! $errors->first($attr['name']) !!}
        </div>
      @endif

      @isset($grid[1])
    </div>
  @endisset
</div>
