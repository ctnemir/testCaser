@if(isset($data['statuses'][0]))
@section('project')
    {{$data['project']->projectName}}
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold d-inline-block">
            {{ __('Dashboard')}}

        </h2>
        <h2 class=" d-inline-block">
                <a id="addTask" href="/tecCard/create/{{$data['id'][0]}}" type="button" class="btn btn-outline-primary ml-5">Add Task</a>
                <button data-target="#createProject" dusk="createProject" data-toggle="modal" aria-expanded="false" aria-controls="createProject"  class="btn btn-outline-success ml-5" type="button">Add Project</button>
                <button id="deleteProject" dusk="deleteProject"  class="btn btn-outline-danger ml-5" type="button">Delete Project</button>
        </h2>

    </x-slot>

    <x-modal id="createProject" title="CreateProject">
        <x-slot name="body">
                <h4>Create Task State</h4>
                <form action="{{route('project.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Project Name</label>
                        <input type="text" name="name" id="name" dusk="projectNameInput" class="form-control as">
                    </div>

                    <button type="submit" dusk="projectSubmit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </x-slot>

{{--        <x-slot name="footer">--}}
{{--            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--        </x-slot>--}}
    </x-modal>


    <div class="row d-flex justify-content-between w-100">
    @if($data['id'][1])
    @foreach($data['statuses'] as $status)
        <div class="card col-2 pt-3 m-2 draggable">
            <h4 class="card-title" dusk="statusCard{{$status->id}}">{{$status->statusName}}</h4>
            <hr>
            <div class="card-body px-0">
                <ul class="list-group">
                    @if(isset($data['tasks']))
                    @foreach($data['tasks'] as $task)
                        @if($task->statusId == $status->id)
                        <li class="list-group-item my-1 shadow draggable" type="button" data-toggle="modal" data-target="#task{{$task->id}}">
                            <h5 class="card-title d-inline-block">
                                {{$task->taskName}}
                            </h5>
{{--                            <button class="btn d-inline-block" data-toggle="modal" data-target="#task{{$task->id}}">+</button>--}}
                        </li>
{{--                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#video-about-us">--}}
{{--                            @icon('oi oi-play-circle') Watch a video about us--}}
{{--                        </button>--}}

                        <x-modal id="task{{$task->id}}" title="{{$task->taskName}}">
                            <x-slot name="body">
                                    <select name="taskStatus"  class="form-control taskStatusSelect">
                                        <option value="-1">Seçiniz..</option>
                                        @foreach($data['statuses'] as $statuss)
                                            @if($statuss->id == $task->statusId)
                                            <option selected class="statusOption"
                                                    data-status="{{$task->id}}"
                                                    value="{{$statuss->id}}">{{$statuss->statusName}}</option>
                                            @else
                                                <option class="statusOption"
                                                        data-status="{{$task->id}}"
                                                        value="{{$statuss->id}}">{{$statuss->statusName}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                <div class="bg-light w-100 py-4 px-2">
                                    <ul class="list-group">
                                        <li class="list-group-item">Description: {{$task->desc}}</li>
                                        <li class="list-group-item">Estimated Date: {{$task->preDate}}</li>
                                    </ul>
                                </div>
                                <div class="text-muted mt-3 border-bottom">
                                    <table class="table">
                                        <tr>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>User</th>
                                            <th>Date</th>
                                        </tr>
                                        @if(isset($data['taskStates']))
                                            @foreach($data['taskStates'] as $states)
                                                @if($states->taskId == $task->id)
                                                    <tr>
                                                        <td>{{$states->taskStatesDesc}}</td>
                                                        <td>{{$states->statusName}}</td>
                                                        <td>{{$states->user->name}}</td>
                                                        <td>{{$states->created_at}}</td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                                <div class="collapse" id="createState{{$task->id}}">
                                    <h4>Create Task State</h4>
                                    <form action="{{route('taskState.store')}}" method="post">
                                    @csrf
                                        <div class="form-group">
                                            <label for="desc">Description</label>
                                            <input type="text" name="desc"  class="form-control">
                                        </div>
                                        <input type="hidden" name="stateStatus" value="{{$task->statusId}}">
                                        <input type="hidden" name="taskId" value="{{$task->id}}">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </x-slot>

                            <x-slot name="footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="#createState{{$task->id}}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="createState" type="button" class="btn btn-primary">Add State</a>
                            </x-slot>
                        </x-modal>
                        @endif
                    @endforeach
                        @endif
                </ul>
            </div>
        </div>
    @endforeach
    @endif
    </div>

    <script>


        @section('js')
        $(document).ready( function () {
            //alert("a");
            let option = $(".statusOption");
            console.log(option);
            $(".taskStatusSelect").change(function () {
                //alert("b");
                if($(this).find('option:selected').attr('value') != -1) {
                    var form = $('<form action="{{route('changeStatus')}}" method="post"> @csrf' +
                        '<input type="hidden" name="dataStatus" value="' + $(this).find('option:selected').attr('data-status') + '"/>' +
                        '<input type="hidden" name="value" value="' + $(this).find('option:selected').attr('value') + '" />' +
                        '</form>');
                    $('body').append(form);
                    console.log(form);
                    form.submit();
                }
            });


            $("#deleteProject").click(function () {
                var form = $('<form action="{{route('project.destroy',$data['project']->id)}}" method="post"> @csrf @method("DELETE") '+
                    '<input type="hidden" name="_method" value="delete" />' +
                    '</form>');
                $('body').append(form);
                console.log(form);
                form.submit();
            });





            // $( "select").change(function () {
            //     var str = "";
            //     str = $(this).find('option:selected').attr('value');
            //     alert(str);
            // });


        });
        @endsection
    </script>

{{--    <x-jet-welcome />--}}
</x-app-layout>

@else
@section('project'){{__('PROJE')}}@endsection
<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold d-inline-block">
            {{ __('Dashboard')}}
        </h2>
        <h2 class=" d-inline-block">
            <button data-target="#createProject" dusk="createProject" data-toggle="modal" aria-expanded="false" aria-controls="createProject"  class="btn btn-outline-success ml-5" type="button">Add Project</button>
        </h2>
    </x-slot>
    <x-modal id="createProject" title="CreateProject">
        <x-slot name="body">
            <h4>Create Task State</h4>
            <form action="{{route('project.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Project Name</label>
                    <input type="text" name="name" id="name" dusk="createProjectInput" class="form-control">
                </div>

                <button type="submit" dusk="projectSubmit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </x-slot>

        {{--        <x-slot name="footer">--}}
        {{--            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
        {{--        </x-slot>--}}
    </x-modal>
</x-app-layout>
@endif
