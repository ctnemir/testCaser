@extends('lbc/pages/components/layouts/layout-1')

@php
  use App\Lbc\Helpers\GrepCodeExampleComponents;

  $data['meta']['description'] = 'Toggle the visibility of content across your project with a few classes and our JavaScript plugins.';
@endphp

@section('component-content')
  <h1 id="collapse">Collapse</h1>

  <h2 class="font-weight-lighter mb-5">{{ $data['meta']['description'] }}</h2>


  <h3>Accordion example</h3>

  <!-- example-start-1 -->
  @php
    $collapses = [
    [
      'header' => [
        'headline' => [
          'link' => [
            'text' => 'Lorem ipsum dolor sit amet',
            'href' => '#',
            'class' => 'btn btn-link'
          ]
        ],
      ],
      'body' => [
        'text' => 'Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
      ],
    ],
    [
      'header' => [
        'headline' => [
          'link' => [
            'text' => 'Focused on helping our clients to build a great business',
            'href' => '#',
            'class' => 'btn btn-link'
          ]
        ],
      ],
      'body' => [
        'text' => 'Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.',
      ],
    ],
    [
      'header' => [
        'headline' => [
          'link' => [
            'text' => 'Lorem ipsum dolor sit amet',
            'href' => '#',
            'class' => 'btn btn-link'
          ]
        ],
      ],
      'body' => [
        'text' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores.',
      ],
    ]]
  @endphp

  <div class="accordion mb-3" id="accordionExample">
    @foreach ($collapses as $collapse)
      <x-card
        :all="$collapse"
        class="mb-0"
        :collapse="[
          'id' => $loop->index,
          'parent' => 'accordionExample',
          'index' => $loop->index,
        ]"
        :header="[
            'headline' => [
              'class' => 'mb-0',
              'link' => [
                'collapse' => [
                  'id' => $loop->index,
                  'parent' => 'accordionExample',
                  'index' => $loop->index,
                ]
              ]
            ],
          ]"
      />
    @endforeach
  </div>
  <!-- example-end-1 -->
  {!! GrepCodeExampleComponents::get(1) !!}

  <hr class="my-5">

  @include('lbc/components/description-table', [
    'descriptionTableClass' => 'mb-5',
    'name' => 'Collapse',
    'type' => 'components',
    'variables' => [
      [
        'name' => 'collapseId',
        'type' => 'string',
        'default' => '',
        'description' => 'Collapse id for correct targeting.',
      ],[
        'name' => 'class',
        'type' => 'string',
        'default' => '',
        'description' => 'Classes can be added, all other attributes can also be set.',
      ],[
        'name' => 'collapseParent',
        'type' => 'string',
        'default' => '',
        'description' => 'If parent is provided, then all collapsible elements under the specified parent will be closed when this collapsible item is shown. The attribute has to be set on the target collapsible area.',
      ]
    ],
  ])
@endsection
