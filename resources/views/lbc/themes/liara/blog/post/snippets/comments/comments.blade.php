<div id="comments" class="post-comments {{ $class ?? '' }}">
  <h3 class="mb-3">
    3 Comments
  </h3>

  @foreach($data['comments'] as $comment)
    @include('lbc.themes.liara.blog.post.snippets.comments.comment', array_merge($comment, [
      'class' => $loop->last ? 'mb-3 mb-lg-4' : 'mb-3',
      'loopIndex' => $loop->index
    ]))
  @endforeach

  <div id="newComment">
    @include('lbc.themes.liara.blog.post.snippets.comments.comment-form', [
      'loopIndex' => 'new',
    ])
  </div>
</div>

@push('js')
  <script>
    let invalidInput = document.querySelector('.is-invalid')
    let newCommentAnchor = document.querySelector('#newComment')

    if (invalidInput) {
      let collapse = invalidInput.closest('.collapse')

      if (collapse) {
        collapse.classList.add('show')
        collapse.id = 'currentComment'
      } else {
        newCommentAnchor.id = 'currentComment'
      }
    }

    const changeLinkName = (e, currentName, changedName) => {
      e.innerHTML = e.innerHTML === currentName ? changedName : currentName
    }
  </script>
@endpush
