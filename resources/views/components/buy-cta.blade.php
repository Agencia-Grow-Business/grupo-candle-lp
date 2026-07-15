@props([
    'label' => 'Quero meu diagnóstico',
    'variant' => 'flame',
    'block' => false,
])

<a
    href="{{ route('checkout.show') }}"
    {{ $attributes->class([
        'btn',
        'btn--'.$variant,
        'btn--block' => $block,
    ]) }}
>
    {{ $label }}
</a>
