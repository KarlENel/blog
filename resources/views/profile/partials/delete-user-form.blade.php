<div class="flex w-full flex-col">

    <h2 class="card-title">{{ __('Delete account') }}</h2>
    <p class="mt-1 text-sm">
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
    </p>
    <form action="{{ route('profile.destroy') }}" method="DELETE">
        @csrf
        <div class="text-left mt-6">
            <a href="#my_modal_8" class="btn btn-error">{{ __('Delete your account') }}</a>
        </div>
    </form>

    <!-- The button to open modal -->

    <!-- Put this part before </body> tag -->
    <div class="modal" role="dialog" id="my_modal_8">
    <div class="modal-box">
        <h3 class="text-lg font-bold">{{ __('Are you sure you want to delete your account?') }}
        </h3>
        <p class="py-4">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>

        <div>
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">{{__('Password')}}</span>
                </div>
                <input name="password" type="password" placeholder="Password" class="w-full input input-bordered @error('password') input-error @enderror" required autocomplete="password"/>
                <div class="label">
                    @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </div>
            </label>
            <input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>
        <div class="modal-action">
            <a href="{{ route('profile.edit') }}" class="btn btn-secondary">{{__('Cancel')}}</a>
            <a href="#" class="btn btn-error">{{__('Delete account')}}</a>
        </div>
    </div>
    </div>
</div>
