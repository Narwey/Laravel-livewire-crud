<div class="card offset-3 col-6">
  <div class="card-header">
    Create Customer
  </div>
  <div class="card-body">
  <form wire:submit='save'>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input wire:model='name' type="text" class="form-control" id="exampleInputName" aria-describedby="name">
    <div>
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input wire:model='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div>
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">genre</label>
    <input wire:model='genre' type="genre" class="form-control" id="exampleInputgenre" aria-describedby="genreHelp">
    <div>
        @error('genre')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone Number</label>
    <input wire:model='phone' type="text" class="form-control" id="exampleInputPhone">
    <div>
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
  </div>
  <button wire:navigate href="/customers" class='btn btn-secondary btn-sm'>Back</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>