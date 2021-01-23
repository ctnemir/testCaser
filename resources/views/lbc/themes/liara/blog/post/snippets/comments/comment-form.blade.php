<h4 class="mt-3">Leave a Reply</h4>
<p>Your email address will not be published. Required fields are marked *</p>

<form class="mb-3 mb-lg-4" action="{{ route('liara.send.comment') }}" method="post">
  {{ csrf_field() }}

  <div class="row">
    <div class="col-sm-4">
      <x-input
        :name="'name_' . $loopIndex"
        :label="['text' => 'Name *']"
      />
    </div>

    <div class="col-sm-4">
      <x-input
        :name="'email_' . $loopIndex"
        type="email"
        :label="['text' => 'Email *']"
      />
    </div>

    <div class="col-sm-4">
      <x-input
        :name="'website_' . $loopIndex"
        :label="['text' => 'Website *']"
      />
    </div>
  </div>

  <x-textarea
      :name="'comment_' . $loopIndex"
      :label="['text' => 'Comment *']"
      rows="6"
  />

  <button class="btn btn-primary">Post comment</button>
</form>
