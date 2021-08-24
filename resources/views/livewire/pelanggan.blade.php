<div class="row">
    <div class="col-sm-8 col-md-8 col-lg-8 mx-auto">
        <div class="card border-primary-ijigo">
            <div class="card-body mx-5">
                <h1 class="card-title text-center">Register</h1>
                <form class="row" wire:submit.prevent="submit">
                    @if ($currentPage === 1)                        
                        <div class="col-md-12 mb-4">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" id="user-email" name="email"
                                required wire:model="email" autocomplete="off" />
                            @error('email')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" id="user-password"
                                name="password" required wire:model="password" />
                            @error('password')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control rounded-pill @error('confirmPassword') is-invalid @enderror" id="confirm-password"
                                name="confirmPassword" required wire:model="confirmPassword" />
                            @error('confirmPassword')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    @elseif ($currentPage === 2)
                        <div class="col-md-12 mb-4">
                            <label for="email" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" id="user-name" name="name"
                                required wire:model="name" autocomplete="off" />
                            @error('name')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="password" class="form-label">No Handphone</label>
                            <input type="number" class="form-control rounded-pill @error('phone') is-invalid @enderror" id="user-phone" name="phone"
                                required wire:model="phone" autocomplete="off" />
                            @error('phone')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    @endif
                        
                    <div class="row">
                        @if ($currentPage === 1)
                        <div></div>
                        @else
                        <div class="col-md-4 text-center">
                            <button type="button" id="back" class="btn btn-register px-5 py-2" wire:click="goToPreviousPage">
                                Back
                            </button>
                        </div>
                        @endif

                        @if ($currentPage === count($pages))
                            <div class="col-md-4"></div>
                            <div class="col-md-4 text-center">
                                <button type="submit" id="submit" class="btn btn-register px-5 py-2">
                                    Submit
                                </button>
                            </div>
                        @else
                            <div class="col-md-4 text-center">
                                <button type="button" id="next" class="btn btn-register px-5 py-2" wire:click="goToNextPage">
                                    Next
                                </button>
                            </div>
                        @endif

                    </div>
                </form>

                <div class="col-md-12 my-4 text-center">
                    <a href="{{ route('login') }}" class="link-dark px-5 py-2">
                        Kembali ke halaman login
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>