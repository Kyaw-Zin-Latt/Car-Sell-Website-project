<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route("index") }}">Home</a></li>
        <li class="breadcrumb-item active text-secondary" aria-current="page">{{ $breadText }}</li>
        {{ $slot }}
    </ol>
</nav>
