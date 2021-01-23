@section('project')
{{$data->projectName}}
@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Teknik Kart') }}
        </h2>

    </x-slot>


        <form action="{{route('tecCard.update',$data->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="taskName">Task Name</label>
                <input name="taskName" id="taskName" type="text" class="form-control" value="{{$data->taskName}}">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" name="desc" id="desc" class="form-control"  value="{{$data->desc}}">
            </div>
            <div class="form-group">
                <label for="note">Note</label>
                <input type="text" name="note" id="note" class="form-control"  value="{{$data->note}}">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-app-layout>
