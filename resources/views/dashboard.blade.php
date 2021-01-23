@if(isset($id))
@section('project'){{$projects[$id-1]->projectName}}@endsection
@else
@section('project'){{__('PROJE')}}@endsection
@endif
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold d-inline-block">
            {{ __('Dashboard')}}
        </h2>

    </x-slot>


{{--    <x-jet-welcome />--}}
</x-app-layout>
