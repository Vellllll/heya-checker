<button {{ $attributes->merge(['type' => 'submit button', 'class' => 'button']) }}>
    {{ $slot }}
</button>
