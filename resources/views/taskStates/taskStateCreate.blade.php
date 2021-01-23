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
    <form action="{{route('taskState.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" name="desc" id="desc" class="form-control">
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <input type="text" name="note" id="note" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Staus</label>
            <select name="status" id="status" class="form-control">
                @foreach($data['statuses'] as $status)
                    <option value="{{$status->id}}">{{$status->statusName}}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" value="{{$data['id']}}" name="projectId">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endif

</x-app-layout>

