@foreach($data['navbars'] as $navbar)
    <!-- Navbar -->
    <nav style="background-color: {{ $navbar['style']['background-color'] }}; padding: {{ $navbar['style']['padding'] }}; font-family: {{ $navbar['style']['font-family'] }};">
        <a href="{{ $navbar['logo']['url'] }}">
            <img src="{{ asset('storage/' . $navbar['logo']['image']) }}" alt="Logo">
            <span>{{ $navbar['logo']['text'] }}</span>
        </a>
        <ul>
            @foreach($navbar['links'] as $link)
                <li>
                    <a href="{{ $link['url'] }}" style="color: {{ $link['style']['color'] }}; font-size: {{ $link['style']['font-size'] }}; text-decoration: {{ $link['style']['text-decoration'] }};">
                        {{ $link['text'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
@endforeach
