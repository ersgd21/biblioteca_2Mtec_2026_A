<button
    type="button"
    x-data="{ dark: document.documentElement.classList.contains('dark') }"
    @click="
        dark = !dark;
        document.documentElement.classList.toggle('dark', dark);
        try { localStorage.setItem('theme', dark ? 'dark' : 'light'); } catch (e) {}
    "
    :aria-label="dark ? 'Ativar tema claro' : 'Ativar tema escuro'"
    {{ $attributes->merge(['class' => 'rounded-md p-2 text-gray-500 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-indigo-500']) }}
>
    <span x-text="dark ? '☀️' : '🌙'" aria-hidden="true"></span>
</button>