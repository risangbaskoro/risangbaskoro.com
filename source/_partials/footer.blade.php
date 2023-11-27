<footer class="mx-auto w-full p-8 flex flex-col justify-center items-center space-y-2 text-sm text-center">
    <p>
        © {{ date('Y') }} {{ $page->siteName }}.
        •
        <a href="{{ $page->baseUrl . '/privacy-policy' }}" class="font-bold hover:underline">Privacy policy</a>
    </p>
    <p>
        Built with
        <a href="https://jigsaw.tighten.co" target="_blank" class="font-bold hover:underline">Jigsaw</a> and
        <a href="https://tailwindcss.com" target="_blank" class="font-bold hover:underline">TailwindCSS</a>.

        Code highlighting provided by <a href="https://torchlight.dev" target="_blank" class="font-bold hover:underline">Torchlight</a>.
    </p>
</footer>