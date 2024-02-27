
<form action="{{route('filter-name')}}" method="get" enctype="multipart/form-data">
                        @csrf
                        <div class="filters-container">
                            
                            <div class="filters-container-typechar">

                                @if($systems)
                                <div class="filters-container-typechar-item">
                                    <div class="filters-container-typechar-name" id="system_svg">
                                        <span class="filters-container-typechar-text">Система</span>
                                        <svg id="system_svg" xmlns="http://www.w3.org/2000/svg" width="16" height="6"
                                            viewBox="0 0 16 6" fill="none">
                                            <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                        </svg>
                                    </div>
                                    <div id="system_div" class="filters-container-typechar-values">
                                        @foreach($systems as $item)
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox"
                                                name="system_{{$item->id}}" {{isset($_GET["system_$item->id"]) ?
                                            'checked' : ''}} type="checkbox" />
                                            <label class="filter-name-type">{{$item->name}}</label>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                @endif


                                @if($producers)
                                <div class="filters-container-typechar-item">
                                    <div class="filters-container-typechar-name" id="producer_svg">
                                        <span class="filters-container-typechar-text">Производитель</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                            fill="none">
                                            <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                        </svg>
                                    </div>
                                    <div class="filters-container-typechar-values" id="producer_div">
                                        @foreach($producers as $producer)
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox"
                                                name="producer_{{$producer->id}}"
                                                {{isset($_GET["producer_$producer->id"]) ? 'checked' : ''}}
                                            type="checkbox" />
                                            <label class="filter-name-type">{{$producer->name}}</label>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                @endif
                                @if($series)
                                <div class="filters-container-typechar-item">
                                    <div class="filters-container-typechar-name" id="serie_svg">
                                        <span class="filters-container-typechar-text">Серия</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                            fill="none">
                                            <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                        </svg>
                                    </div>
                                    <div class="filters-container-typechar-values" id="serie_div">
                                        @foreach($series as $serie)
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox"
                                                {{isset($_GET["serie_$serie->id"]) ? 'checked' : ''}}
                                            name="serie_{{$serie->id}}" type="checkbox" />
                                            <label class="filter-name-type">{{$serie->name}}</label>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                @endif
                                @if($categories)
                                <div class="filters-container-typechar-item">
                                    <div class="filters-container-typechar-name" id="category_svg">
                                        <span class="filters-container-typechar-text">Тип</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                            fill="none">
                                            <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                        </svg>
                                    </div>
                                    <div class="filters-container-typechar-values" id="category_div">
                                        @foreach($categories as $item)
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox"
                                                {{isset($_GET["category_$item->id"]) ? 'checked' : ''}}
                                            name="category_{{$item->id}}" type="checkbox" />
                                            <label class="filter-name-type">{{$item->name}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                                @if($angle)
                                <div class="filters-container-typechar-item">
                                    <div class="filters-container-typechar-name" id="angle_svg">
                                        <span class="filters-container-typechar-text">Угол открывания</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                            fill="none">
                                            <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                        </svg>
                                    </div>
                                    <div class="filters-container-typechar-values" id="angle_div">
                                        @foreach($angle as $item)
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox"
                                                {{isset($_GET["angle_$item->id"]) ? 'checked' : ''}}
                                            name="angle_{{$item->id}}" type="checkbox" />
                                            <label class="filter-name-type">{{$item->name}}</label>
                                        </div>
                                        @endforeach
                                    </div>


                                </div>
                                @endif


                                <div class="filters-container-typechar-item">
                                    <div class="filters-container-typechar-name" id="beo_svg">
                                        <span class="filters-container-typechar-text">Наличия товара</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="6" viewBox="0 0 16 6"
                                            fill="none">
                                            <path d="M1 5L8 1L15 5" stroke="#5D5D5D" />
                                        </svg>
                                    </div>
                                    <div class="filters-container-typechar-values" id="beo_div">
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox" type="checkbox" />
                                            <label class="filter-name-type">Есть в наличии</label>
                                        </div>
                                        <div class="filters-container-typechar-list-item">
                                            <input class="filters-container-typechar-chekbox" type="checkbox" />
                                            <label class="filter-name-type">Нету в наличии</label>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="clear-filters-container">
                                <button type="submit" class="set-clearing-filters">Применить</button>
                                <button id="clear_filter_button" class="clearing-filters">
                                    <span class="clearing-filters-text">Сбросить</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13"
                                        fill="none">
                                        <path
                                            d="M10.3451 11.1654C10.5638 11.4388 10.5365 11.849 10.263 12.0951C10.1263 12.2044 9.98958 12.2318 9.85286 12.2318C9.66146 12.2318 9.47005 12.1771 9.33333 12.013L5.25911 7.14583L1.15755 12.013C1.02083 12.1771 0.829427 12.2318 0.638021 12.2318C0.501302 12.2318 0.364583 12.2044 0.227865 12.0951C-0.0455729 11.849 -0.0729167 11.4388 0.145833 11.1654L4.38411 6.10677L0.145833 1.07552C-0.0729167 0.802083 -0.0455729 0.391927 0.227865 0.145833C0.501302 -0.0729167 0.911458 -0.0455729 1.15755 0.227865L5.25911 5.09505L9.33333 0.227865C9.57943 -0.0455729 9.98958 -0.0729167 10.263 0.145833C10.5365 0.391927 10.5638 0.802083 10.3451 1.07552L6.10677 6.10677L10.3451 11.1654Z"
                                            fill="#EA600A" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>

                    <script> 
                      function toggleDisplay(elementId, initialState) {
            const element = document.getElementById(elementId);
            let state = initialState;
            return function() {
                state = !state;
                element.style.display = state ? 'none' : 'flex';
            };
        }

        const toggles = [
            { svgId: 'producer_svg', divId: 'producer_div' },
            { svgId: 'serie_svg', divId: 'serie_div' },
            { svgId: 'category_svg', divId: 'category_div' },
            { svgId: 'system_svg', divId: 'system_div' },
            { svgId: 'angle_svg', divId: 'angle_div' },
            { svgId: 'beo_svg', divId: 'beo_div' }
        ];
        
        toggles.forEach(({ svgId, divId }) => {
            const svgElement = document.getElementById(svgId);
            if (svgElement) { 
                svgElement.addEventListener('click', toggleDisplay(divId, true));
                console.log('2')
            }
        });
    
                </script>