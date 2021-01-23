@extends('lbc.themes.liara.pages.base')

@php
  $bodyClass = 'view-features';
@endphp

@section('page-header')
  <h1 class="text-center my-3 mt-lg-5 display-4">
    <small>Mus me cras</small><br>

    Vel id vero nec populum<br>
    erat per mollis unanimi
  </h1>

  <p class="d-flex m-auto text-center" style="max-width:500px">
    Ab ad est si urna ea m tollit nativo, ab metus modi ut elit
    eum pede uidem hac hilari nobiles rem quos aliquip me typi.
  </p>
@endsection

@section('page-content')
  <div class="container font-size-lg mb-3 mb-lg-4">
    <x-image class="img-fluid rounded-lg mb-3 mb-lg-0 d-flex mx-auto"
    src="liara/images/about/office.jpg"
    :width="[635]"
    fit="crop-center"
    />

    <h2>
      Rem tellus studium<br>
      <small>Ut`v tui arcui iactura fuga quo pede magni</small>
    </h2>

    <p>
      Se usus iste minaci ut praecipue mus wisi optio si diam sentiebat te eu ut quo optio nemo elit. Ab ad pede quas ut consiliis w ipsa, regulam arcu subsolanea nisi class, modo custodes mus typi id animus odit in honoris nunc auriacus.
    </p>

    @include('lbc.themes.liara.components.social-share')
  </div>

  <div class="bg-lighter font-size-lg">
    <div class="container pt-3 py-lg-4">
      <h2>V haeret eius</h2>

      <p class="mb-3">
        Me publico e quis, patriae eum gloriose nemo repellendus id aut duis decipitur mazim mi d piscatores sunt.
      </p>

      <div class="row row-3">
        <div class="col-lg-4">
          <x-card :all="[
            'class' => 'mb-3 mb-lg-0',
            'body' => [
              'headline' => [
                'tag' => 'h4',
                'link' => [
                  'class' => 'text-color',
                  'text' => 'Pernidem Civilis<br><small>Interpres</small>',
                  'href' => '#',
                ],
              ],
            ],
            'image' => [
              'src' => 'liara/images/peoples/woman.jpg',
              'width' => [350],
            ],
          ]">
            <x-slot name="body">
              <p>
                D orci tui nobis id massa soluta, augue ipsa, adipiscing non nec Sunt ante. Mi mus non's sint ad eu ad respectu, E iusto ex at m Quas metus ex quocumque dis mi surdis.
              </p>

              @include('lbc.themes.liara.components.social-share')
            </x-slot>
          </x-card>
        </div>

        <div class="col-lg-4">
          <x-card :all="[
            'class' => 'mb-3 mb-lg-0',
            'body' => [
              'headline' => [
                'tag' => 'h4',
                'link' => [
                  'class' => 'text-color',
                  'text' => 'Genere Nomina<br><small>Subiungam</small>',
                  'href' => '#',
                ],
              ],
            ],
            'image' => [
              'src' => 'liara/images/peoples/men-colored.jpg',
              'width' => [350],
            ],
          ]">
            <x-slot name="body">
              <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa.
                Cum sociis natoque penatibus et magnis dis parturient montes,
                nascetur ridiculus mus.
              </p>

              @include('lbc.themes.liara.components.social-share')
            </x-slot>
          </x-card>
        </div>

        <div class="col-lg-4">
          <x-card :all="[
            'class' => 'mb-3 mb-lg-0',
            'body' => [
              'headline' => [
                'tag' => 'h4',
                'link' => [
                  'class' => 'text-color',
                  'text' => 'Quas Impetus<br><small>Auriacus</small>',
                  'href' => '#',
                ],
              ],
            ],
            'image' => [
              'src' => 'liara/images/peoples/woman-2.jpg',
              'width' => [350],
            ],
          ]">
            <x-slot name="body">
              <p>
                D quis iis class te saepe nullum, harum modi, praetorito eos quo Erat nibh. In hac quo'o iste ad ea eu narratus, D liber ea in s Modo minus eu processus vel et nonnis.
              </p>

              @include('lbc.themes.liara.components.social-share')
            </x-slot>
          </x-card>
        </div>
      </div>
    </div>
  </div>

@endsection
