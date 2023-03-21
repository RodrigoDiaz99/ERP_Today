<x-guest-layout title="Verify Email">
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo/>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="flex justify-between items-center mt-4">
            <form method="POST" action="/email/verification-notification">
                @csrf

                <div>
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="/logout">
                @csrf

                <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                    {{ __('Logout') }}
                </button>
            </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
