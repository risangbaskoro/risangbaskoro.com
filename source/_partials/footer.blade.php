<footer class="mx-auto w-full p-8 text-sm text-center">
    <div class="flex flex-col justify-center items-center gap-2">
        <p>
            © {{ date('Y') }} {{ $page->siteName }}
        </p>
        <p>
            <a href="{{ $page->baseUrl . '/privacy-policy' }}" class="font-bold hover:underline">
                Privacy policy
            </a>
        </p>
        <p class="mt-4">
            Built with
            <a href="https://jigsaw.tighten.co" target="_blank" class="font-bold hover:underline">Jigsaw</a> and
            <a href="https://tailwindcss.com" target="_blank" class="font-bold hover:underline">TailwindCSS</a>.

            Code highlighting provided by <a href="https://torchlight.dev" target="_blank"
                                             class="font-bold hover:underline">Torchlight</a>.
        </p>
    </div>
</footer>