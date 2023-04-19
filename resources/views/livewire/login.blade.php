<div class="card-body mt-2">
    <h4 class="mb-2 fw-semibold">Yaska Group'a Hoşgeldin! 👋</h4>
    @error('username')
                    <strong>{{ $message }}</strong>
    @enderror
    @error('email')
                    <strong>{{ $message }}</strong>
    @enderror
    @error('password')
                    <strong>{{ $message }}</strong>
    @enderror
    <form wire:submit.prevent="login" action="#" method="POST">
        @csrf
        <div class="form-floating form-floating-outline mb-3">
            <input wire:model="email"
                type="text"
                class="form-control"
                id="email"
                placeholder="Enter your email or username" required
                autofocus />
            <label for="email">Email veya Kullanıcı Adı</label>
        </div>
        <div class="mb-3">
            <div class="form-password-toggle">
                <div class="input-group input-group-merge">
                    <div class="form-floating form-floating-outline">
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            wire:model.lazy="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" required/>
                        <label for="password">Password</label>
                    </div>
                    <span class="input-group-text cursor-pointer"><i class="mdi mdi-eye-off-outline"></i></span>
                </div>
            </div>
        </div>
        <div class="mb-3 d-flex justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" wire:model.lazy="remember" id="remember_me" />
                <label class="form-check-label" for="remember_me"> Remember Me </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </div>
    </form>


</div>

