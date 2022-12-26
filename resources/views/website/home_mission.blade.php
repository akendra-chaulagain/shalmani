@php
    $home_mission = App\Models\Navigation::query()
        ->orWhere('nav_name', 'LIKE', 'our-objectives')
        ->orWhere('nav_name', 'LIKE', 'our-goals')
        ->orWhere('nav_name', 'LIKE', 'mission&vision')
        ->get();
    
@endphp
<div class="mision_section">
    <div class="container">
        <div class="row">
            @foreach ($home_mission as $item)
                <div class="col-md-4">
                    <div class="col_data_info">
                        <h1>{{ $item->caption }}</h1>
                        <p> {!! Str::limit($item->long_content, 350) !!}</p>
                        <button>
                            <a href="/company/{{ $item->nav_name }}">Load More</a>
                        </button>
                    </div>
                </div>
            @endforeach




        </div>
    </div>
</div>
