@extends('base')

@section('content')
<div class="well"><?= $description ?></div>
<div id="timeline"></div>

<?php if (isset($user)) : ?>
<div class="row">
    <div class="col-sm-9 col-md-9" id="chatbox-frame">
      <div class="input-group chatbox">
        <textarea class="form-control" rows="3" id="chatbox-textarea"></textarea>
        <span class="input-group-btn">
          <button class="btn btn-primary" onclick="on_send_button()">送信</button>
        </span>
      </div>
    </div>
  </div>
<?php endif; ?>

<script type="text/javascript" src="/js/chat.js"></script>
@endsection