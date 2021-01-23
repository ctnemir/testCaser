<h3 class="mb-3">Related Posts</h3>

@foreach(array_chunk(array_slice($data['posts'], 1, 6), 3) as $chunk)
  <div class="row {{ $loop->last ? 'mb-lg-3' : '' }}">
    @foreach($chunk as $post)
      <div class="col-md-4">
        <x-card
          :overlay="true"
          class="mb-3"
          :image="[
            'class' => 'img-fluid rounded',
            'src' => $post['image']['src'],
            'width' => [350, 510],
          ]"
          :body="[
            'class' => 'd-flex',
            'headline' => [
              'tag' => 'h4',
              'class' => 'card-title mt-auto',
              'link' => [
                'class' => 'text-white',
                'text' => $post['headline']['text'],
                'href' => $post['headline']['link']['href'],
              ],
            ]
          ]"
        />
      </div>
    @endforeach
  </div>
@endforeach
