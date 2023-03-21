<x-form-section submit="updateProfileInformation">
    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            "/>

                <x-label for="photo" value="Photo"/>

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}"
                         class="object-cover w-20 h-20 rounded-full">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                <span class="block w-20 h-20 rounded-full"
                      x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                </span>
                </div>

                <x-secondary-button class="mt-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                <x-input-error for="photo" class="mt-2"/>
            </div>
    @endif

    <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="names" value="Names"/>
            <x-input id="names" type="text" class="block mt-1 w-full" wire:model.defer="state.names"
                     autocomplete="names"/>
            <x-input-error for="names" class="mt-2"/>
        </div>

        <!-- First Last Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="first_last_name" value="First Last Name"/>
            <x-input id="first_last_name" type="text" class="block mt-1 w-full" wire:model.defer="state.first_last_name"
                     autocomplete="first_last_name"/>
            <x-input-error for="first_last_name" class="mt-2"/>
        </div>

        <!-- Second Last Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="second_last_name" value="Second Last Name"/>
            <x-input id="second_last_name" type="text" class="block mt-1 w-full"
                     wire:model.defer="state.second_last_name" autocomplete="second_last_name"/>
            <x-input-error for="second_last_name" class="mt-2"/>
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-label for="email" value="Email"/>
            <x-input id="email" type="email" class="block mt-1 w-full" wire:model.defer="state.email"/>
            <x-input-error for="email" class="mt-2"/>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
