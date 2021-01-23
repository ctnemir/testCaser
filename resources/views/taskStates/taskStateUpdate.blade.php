@section('project')
    @if(isset($data['project']))
        {{$data['project']->projectName}}
    @endif
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('İş Takibi') }}
        </h2>

    </x-slot>

    @if(isset($data['project']))
    <form action="{{route('taskState.update',$data->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" name="desc" id="desc" class="form-control"  value="{{$data->desc}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endif
</x-app-layout>

