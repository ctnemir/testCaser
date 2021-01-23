<x-app-layout>
    @if(isset($data['statuses'][0]))
    @section('project')
        {{$data['project']->projectName}}
    @endsection
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Teknik Kart') }}
        </h2>

    </x-slot>
        <div class="container">
            <form action="{{route('tecCard.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="taskName">Task Name</label>
                <input name="taskName" id="taskName" type="text" class="form-control">
            </div>
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
            <input type="hidden" value="{{$id}}" name="projectId">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    @endif
</x-app-layout>


