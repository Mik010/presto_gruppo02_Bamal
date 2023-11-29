<x-layout>

    <div class="container vh-100 sfondoRegister">
        <div class="row pt-5 my-5 justify-content-center">
            <div class="col-12 form card p-4 col-md-5 pb-4 rounded-5 mt-4 bg-transparent shadow-lg">
                <h1 class=" mb-4 t-b ">Register</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fs-5">Username</label>
                        <input type="text" class="form-control" id="name" name="name">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-5">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fs-5">Password confirmation</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn bg-o text-white rounded-5 mt-2 btnOrange">Submit</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>