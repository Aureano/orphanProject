<x-app-layout>

    {{-- Brand display font, scoped to this page --}}
    @once
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&display=swap');
            .font-display {
                font-family: 'Playfair Display', ui-serif, Georgia, Cambria, 'Times New Roman', serif;
            }
        </style>
    @endonce

    {{-- Hero --}}
    <div class="bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 pb-8 text-center">
            <span class="inline-flex items-center gap-2 rounded-full bg-[#FDEEEB] px-4 py-1.5 text-xs font-semibold uppercase tracking-wider text-[#E85D3F]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                {{ __('Account Settings') }}
            </span>

            <h1 class="mt-6 font-display text-4xl sm:text-5xl font-bold leading-tight text-[#17352B]">
                {{ __('Manage your profile') }}
            </h1>

            <p class="mt-4 text-[#52635D]">
                {{ __('Update your personal details, keep your password secure, and manage your account.') }}
            </p>
        </div>
    </div>

    {{-- Cards --}}
    <div class="pb-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <div class="p-6 sm:p-8 bg-white border border-[#E8E5DF] rounded-2xl">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="p-6 sm:p-8 bg-white border border-[#E8E5DF] rounded-2xl">
                @include('profile.partials.update-password-form')
            </div>

            <div class="p-6 sm:p-8 bg-white border border-red-100 rounded-2xl">
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>
</x-app-layout>
