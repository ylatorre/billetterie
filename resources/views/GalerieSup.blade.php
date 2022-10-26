{{--<svg class="tn-syos-seat-map__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3948 3012" width="600px" height="412px" id="GalerieSupAfficher">--}}
{{--    <symbol id="tn-syos-seat-map-icon-donut" viewBox="0 0 50 50">--}}
{{--        <circle cx="25" cy="25" r="24"></circle>--}}
{{--        <circle cx="25" cy="25" r="21" fill="#FFF"></circle>--}}
{{--        <circle cx="25" cy="25" r="10"></circle>--}}
{{--    </symbol><symbol id="tn-syos-seat-map-icon-circle" viewBox="0 0 50 50">--}}
{{--        <circle cx="25" cy="25" r="24"></circle>--}}
{{--    </symbol><symbol id="tn-syos-seat-map-icon-wheelchair" viewBox="0 0 500 500">--}}
{{--        <circle cx="250" cy="250" r="240"></circle>--}}
{{--        <g fill-rule="evenodd" clip-rule="evenodd" fill="#FFF">--}}
{{--            <path d="M202.07 122.75c16.76-1.55 29.78-16 29.78-32.87 0-18.18-14.83-33-33-33-18.18 0-33 14.82-33 33 0 5.54 1.54 11.2 4.12 15.98l11.76 165.46 121.1.04 49.68 116.38 65.23-25.58-10.1-24.04-36.5 13.17-48.06-110.98-112.6.76-1.54-20.96 81.5.03v-31l-84.6-.04z"></path>--}}
{{--            <path d="M323.87 360.04c-20.44 40.4-63.22 67.03-108.86 67.03-67 0-121.67-54.67-121.67-121.7 0-47.05 28.52-90.8 71.08-110.17l2.77 35.94c-25.18 15.86-40.7 44.48-40.7 74.48 0 48.62 39.66 88.28 88.28 88.28 44.5 0 82.42-34.14 87.6-77.93z"></path>--}}
{{--        </g>--}}
{{--    </symbol><symbol id="tn-syos-seat-map-icon-star" viewBox="0 0 500 500">--}}
{{--        <path d="M250 21.3L324.3 172l166.2 24-120.3 117.2 28.4 165.5-148.6-78-148.6 78 28.4-165.5L9.5 196l166.2-24z"></path>--}}
{{--    </symbol><symbol id="tn-syos-seat-map-icon-emptyset" viewBox="0 0 50 50">--}}
{{--        <circle cx="25" cy="25" r="15" fill-opacity="0"></circle>--}}
{{--        <path d="M39.078 6.823l3.596 3.474-4.195 4.345a17.499 17.499 0 012.185 3.752C41.554 20.467 42 22.67 42 25c0 2.331-.445 4.533-1.336 6.606-.89 2.072-2.104 3.877-3.643 5.415-1.538 1.539-3.343 2.753-5.415 3.643C29.533 41.554 27.33 42 25 42c-2.331 0-4.533-.445-6.606-1.336a17.637 17.637 0 01-3.275-1.832l-4.197 4.345-3.596-3.474 4.195-4.344a17.498 17.498 0 01-2.185-3.753C8.446 29.533 8 27.33 8 25c0-2.331.445-4.533 1.336-6.606.89-2.072 2.104-3.877 3.643-5.415 1.538-1.539 3.343-2.753 5.415-3.643C20.467 8.446 22.67 8 25 8c2.331 0 4.533.445 6.606 1.336a17.636 17.636 0 013.275 1.832l4.197-4.345zM34.95 18.296L18.648 35.177c.538.334 1.111.632 1.72.893 1.444.62 2.974.93 4.632.93 1.658 0 3.188-.31 4.632-.93 1.495-.642 2.769-1.499 3.854-2.584s1.942-2.36 2.584-3.854c.62-1.444.93-2.974.93-4.632 0-1.658-.31-3.188-.93-4.632a12.762 12.762 0 00-1.12-2.072zM25 13c-1.658 0-3.188.31-4.632.93-1.495.642-2.769 1.499-3.854 2.584s-1.942 2.36-2.584 3.854C13.31 21.812 13 23.342 13 25c0 1.658.31 3.188.93 4.632.32.744.693 1.434 1.12 2.073l16.303-16.882a12.933 12.933 0 00-1.721-.893C28.188 13.31 26.658 13 25 13z" fill="#757575"></path>--}}
{{--    </symbol>--}}
{{--@php--}}
{{--    $coordonneX = [3456,3672,3672,3888,3888,3888,3888,3456,3456,3456,3456,3456,3672,3672,3672,2088,1872,1800,1872,1944,2016,2088,2016,1944,1872,1800,1728,2088,2016,1944,3456,3672,3672,3456,3456,3456,3456,3456,--}}
{{--    3672,3672,3672,288,144,144,0,0,0,0,288,288,288,288,288,144,144,144,2664,2376,2304,2376,2448,2520,2592,2592,2520,2448,2376,2304,2592,2520,2448,3456,3672,3672,3456,3456,3456,3456,3456,3672,3456,3672,3672,3888,3888,3888,3888,3456,3456,3456,3456,3456,3672,3672,3672,504,792,864,864,792,720,648,576,648,720,792,864,576,648,720,288,144,144,288,288,288,288,288,144,1152,1440];--}}

{{--$coordonneY = [720,432,360,360,432,504,576,648,576,504];--}}
{{--@endphp--}}
{{--    @for ($i = 0; $i < count($coordonneY); $i++)--}}
{{--        <g>--}}
{{--            <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="{{$coordonneX[$i]}}" y="{{$coordonneY[$i]}}" width="60" height="60"></use>--}}
{{--        </g>--}}
{{--  @endfor--}}


{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="432" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="360" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="648" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="576" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="504" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2232" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1944" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1872" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2160" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2088" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2016" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1944" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1872" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2160" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2088" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2016" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1728" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1440" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1368" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1368" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1440" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1512" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1584" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1656" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1584" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1512" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1440" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1368" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1656" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1584" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="1512" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2736" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2448" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2376" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2664" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2592" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2520" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2448" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2376" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2520" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1224" width="60" height="60" style="color: rgb(214, 133, 46);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="936" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="864" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="864" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="936" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1008" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1080" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1152" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1080" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1008" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="936" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="864" width="60" height="60" style="color: rgb(214, 133, 46);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1152" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1080" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="1008" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="0" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2736" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2448" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2376" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2664" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2592" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2520" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2448" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2376" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="" y="2520" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1512" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1512" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1440" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1368" y="0" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1296" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1224" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1296" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1368" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1440" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1512" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1224" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1296" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="1368" y="144" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="1224" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="936" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="864" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="864" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="936" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="1008" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="1080" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="1152" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="1080" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="1008" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="936" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="864" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="1152" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="1080" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="1008" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3240" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3024" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="2952" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3024" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3096" y="0" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3168" y="0" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3240" y="0" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3168" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3096" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3024" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="2952" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="2880" y="288" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3240" y="144" width="60" height="60" style="color: rgb(124, 182, 220);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3168" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3096" y="144" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3456" y="1728" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3672" y="1440" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3672" y="1368" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3888" y="1368" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3888" y="1440" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3888" y="1512" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3888" y="1584" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3456" y="1656" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3456" y="1584" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3456" y="1512" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3456" y="1440" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="3456" y="1368" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3672" y="1656" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3672" y="1584" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="3672" y="1512" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="720" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="432" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="360" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="360" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="432" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="504" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="0" y="576" width="60" height="60" style="color: rgb(198, 207, 29);"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="648" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="576" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="504" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="432" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="288" y="360" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="648" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="576" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-circle"  x="144" y="504" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="288" y="2232" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="144" y="1944" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="144" y="1872" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="288" y="2160" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="288" y="2088" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="288" y="2016" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="288" y="1944" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="288" y="1872" width="60" height="60" ></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="144" y="2160" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="144" y="2088" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--    <g>--}}
{{--        <use role="button"  xlink:href="#tn-syos-seat-map-icon-star"  x="144" y="2016" width="60" height="60"></use>--}}
{{--    </g>--}}

{{--</svg>--}}

<div class="placeHaut">
    <div class="absolute blockPlaceHaut">
        @php
            $numeroDePlace = 0;
        @endphp
        @for($i = 0; $i < 5; $i++,$numeroDePlace++)
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 40; $i2++,$numeroDePlace++)
                    <span href="" id="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></span>
                    @if($i2% 10 == 0 && $i2 != 0)
                        <button style="padding: 4px;"></button>
                    @endif
                @endfor
            </div>

        @endfor
    </div>
    <div class="absolute blockPlaceGauche">
        @for($i = 0; $i < 40; $i++, $numeroDePlace++)
            @if($i% 10 == 0 && $i != 0)
                <span style="padding: 2px;"></span>
            @endif
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 5; $i2++,$numeroDePlace++)
                    <button href="" id="{{$numeroDePlace}}" class="blockPlace p-1 m-1"></button>

                @endfor

            </div>
        @endfor
    </div>
    <div class="absolute blockPlaceDroit">
        @for($i = 0; $i < 40; $i++, $numeroDePlace++)
            @if($i% 10 == 0 && $i != 0)
                <span style="padding: 2px;"></span>
            @endif
            <div class="flex flex-row">
                @for($i2 = 0; $i2 < 5; $i2++,$numeroDePlace++)
                    <button href="" class="blockPlace p-1 m-1" id="{{$numeroDePlace}}"></button>

                @endfor

            </div>
        @endfor
    </div>

</div>

<script type="application/javascript">

    let blockPlace = document.querySelectorAll('.blockPlace');

</script>