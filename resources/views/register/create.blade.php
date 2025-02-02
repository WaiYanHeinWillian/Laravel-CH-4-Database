<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center my-2">Register Form</h3>
                <div class="card p-4 my-3 shadow-sm">

                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}">
                          @error('name')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('username') }}">
                            @error('username')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                          </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                            @error('email')
                              <p class="text-danger">{{ $message }}</p>
                            @enderror
                          </div>

                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                          @error('password')
                            <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                        {{-- <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul> --}}

                      </form>

                </div>
            </div>
        </div>
    </div>
</x-layout>