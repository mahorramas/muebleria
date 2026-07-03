<!-- resources/views/components/icon.blade.php -->

<!-- reibe un nombre de icono y lo muestra -->
@props(['name'])

<!-- el metodo attrib-merge permite pasarle clases (css,tailwondcss) -->
<span {{ $attributes->merge(['class' => 'material-symbols-outlined select-none']) }} aria-hidden="true">
    {{ $name }}
</span>