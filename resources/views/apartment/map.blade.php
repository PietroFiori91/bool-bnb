@extends('layout.app')

@section('content')
    <div id="map" style="width: 100%; height: 400px;"></div>
    <script>
        const apiKey = "{{ config('services.tomtom.api_key') }}";
        tomtom.setProductInfo('YourApp', '1.0');

        const map = tomtom.map({
            key: apiKey,
            container: 'map',
            center: [45.46798316548238, 9.182563411756917],
            zoom: 10,
        })

        const marker = new tomtom.Marker().setLngLat([45.46798316548238, 9.182563411756917]).addTo(map);
    </script>
@endsection
