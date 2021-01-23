<div class="tab-content {{ $tabContentClass ?? '' }}" id="{{ $tabsId }}">
  @php $i = 1 @endphp
  @while(isset(${'slot' . $i}))
    <div class="tab-pane fade {{ ${'slot' . $i . 'Class'} ?? '' }} {{ $i == 1 ? 'show active' : '' }}"
         id="nav-{{ Str::slug($items[$i - 1]) }}"
         role="tabpanel"
         aria-labelledby="nav-{{ Str::slug($items[$i - 1]) }}-tab">
      {!! ${'slot' . $i} !!}
    </div>
    @php $i++ @endphp
  @endwhile
</div>
