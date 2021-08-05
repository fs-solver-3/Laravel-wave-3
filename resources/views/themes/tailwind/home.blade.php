@extends('theme::layouts.app')

@section('content')

<section class="pb-20">
    <div class="container px-4 mx-auto pt-12">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-6 md:mb-0">
                <span class="font-semibold text-xs text-blue-400">Get your crypto and bitcoin taxes done in
                    minutes</span>
                <h2 class="mt-8 mb-6 lg:mb-12 text-4xl lg:text-5xl font-semibold">Track your crypto portfolio
                    and taxes</h2>
                <div class="max-w-lg mb-6 lg:mb-12">
                    <p class="text-xl text-gray-500">Accurately tracking the investment performance and taxes of
                        your crypto assets is complicated. You connect your exchanges &amp; wallets, and we do
                        it for you.</p>
                </div>
                <div class="flex flex-wrap"><a
                        class="inline-block px-6 py-4 mb-3 mr-4 text-sm font-medium leading-normal bg-red-400 hover:bg-red-300 text-white rounded transition duration-200"
                        href="#">Get started now</a><a
                        class="inline-block px-6 py-4 mb-3 text-sm font-medium leading-normal hover:text-gray-700 rounded border"
                        href="#">Ressources</a></div>
            </div>
            <div class="relative w-full md:w-1/2 px-4"><img
                    class="hidden lg:block lg:absolute top-0 right-0 z-10 lg:mt-28"
                    src="/storage/zeus-logos/dots/yellow-dot-right-shield.svg" alt=""><img class="relative"
                    src="/storage/zeus-logos/sourcing.png" alt=""><img
                    class="hidden lg:block lg:absolute bottom-0 lg:left-0 lg:ml-6 lg:mb-20"
                    src="/storage/zeus-logos/dots/blue-dot-left-bars.svg" alt=""></div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="container px-4 mx-auto">
        <div class="max-w-3xl mx-auto mb-16 text-center">
            <span class="text-xs text-blue-400 font-semibold">Connect all your Exchanges and Wallets</span>
            <h2 class="mt-8 mb-10 text-4xl font-semibold font-heading">Easily sync over 400 wallets and
                exchanges</h2>
            <div class="max-w-2xl mx-auto">
                <p class="text-xl text-gray-500">Directly connect all of your exchanges, wallets, and DeFi
                    platforms. We automatically and continuously synchronize your crypto balances and
                    transactions.

                </p>
            </div>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="w-full md:w-1/3 lg:w-1/6 p-4">
                <div class="bg-gray-50 rounded-xl py-12"><img class="h-6 mx-auto" src="/storage/zeus-logos/slack-gray.svg"
                        alt=""></div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 p-4">
                <div class="bg-gray-50 rounded-xl py-12"><img class="h-6 mx-auto"
                        src="/storage/zeus-logos/dropbox-gray.svg" alt=""></div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 p-4">
                <div class="bg-gray-50 rounded-xl py-12"><img class="h-6 mx-auto"
                        src="/storage/zeus-logos/spotify-gray.svg" alt=""></div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 p-4">
                <div class="bg-gray-50 rounded-xl py-12"><img class="h-6 mx-auto" src="/storage/zeus-logos/amazon-gray.svg"
                        alt=""></div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 p-4">
                <div class="bg-gray-50 rounded-xl py-12"><img class="h-6 mx-auto"
                        src="/storage/zeus-logos/netflix-gray.svg" alt=""></div>
            </div>
            <div class="w-full md:w-1/3 lg:w-1/6 p-4">
                <div class="bg-gray-50 rounded-xl py-12"><img class="h-6 mx-auto" src="/storage/zeus-logos/stripe-gray.svg"
                        alt=""></div>
            </div>
        </div>
    </div>
</section>

@endsection