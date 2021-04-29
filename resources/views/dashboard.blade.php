@extends('layouts.backend')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Dashboard</h4>
    </div>
    <div class="card-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ducimus temporibus aut ratione maxime
        accusamus
        commodi esse itaque tenetur. Temporibus ducimus ea veniam quisquam rerum vitae? Animi quos laudantium quam?
    </div>
</div>

<button class="btn btn-primary" id="toggle-modal-1">Launch Modal</button>
  <script>
    $('#toggle-modal-1').fireModal({
      title: 'My Modal',
      body: 'Hello, dude!',
      buttons: [
        {
          text: 'Close',
          class: 'btn btn-secondary',
          handler: function(current_modal) {
          $.destroyModal(current_modal);
          }
        }
      ]
    });
  </script>

@endsection
