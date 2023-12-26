

<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 rounded-md font-semibold text-white uppercase tracking-widest hover:bg-orange-600 focus:bg-orange-600 active:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150', 'style' => 'background-color: #ff9900;']) }}>
    {{ $slot }}
</button>

