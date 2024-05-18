<div class="card offset-3 col-6 mt-5">
  <div class="card-header">
    View Customer
  </div>
  <div class="card-body ">
    <h5 class="card-title">name: {{$customer->name}}</h5>
    <p class="card-text">email: {{$customer->email}}</p>
    <p class="card-text">phone: {{$customer->phone}}</p>
    <a wire:navigate  href="/customers" class='btn btn-primary'>back</a>
  </div>
</div>