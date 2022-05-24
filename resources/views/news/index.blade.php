<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sticky News</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .card-big-shadow {
                max-width: 320px;
                position: relative;
            }

            .coloured-cards .card {
                margin-top: 30px;
            }

            .card[data-radius="none"] {
                border-radius: 0px;
            }
            .card {
                border-radius: 8px;
                box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
                background-color: #FFFFFF;
                color: #252422;
                margin-bottom: 20px;
                position: relative;
                z-index: 1;
            }


            .card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
                color: #FFFFFF;
            }
            .card.card-just-text .content {
                padding: 50px 65px;
                text-align: center;
            }
            .card .content {
                padding: 20px 20px 10px 20px;
            }
            .card[data-color="blue"] .category {
                color: #7a9e9f;
            }

            .card .category, .card .label {
                font-size: 14px;
                margin-bottom: 0px;
            }
            .card-big-shadow:before {
                background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
                background-position: center bottom;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                bottom: -12%;
                content: "";
                display: block;
                left: -12%;
                position: absolute;
                right: 0;
                top: 0;
                z-index: 0;
            }
            h4, .h4 {
                font-size: 1.5em;
                font-weight: 600;
                line-height: 1.2em;
            }
            h6, .h6 {
                font-size: 0.9em;
                font-weight: 600;
                text-transform: uppercase;
            }
            .card .description {
                font-size: 16px;
                color: #66615b;
            }
            .content-card{
                margin-top:30px;    
            }
            a:hover, a:focus {
                text-decoration: none;
            }

            /*======== COLORS ===========*/
            .card[data-color="blue"] {
                background: #b8d8d8;
            }
            .card[data-color="blue"] .description {
                color: #506568;
            }

            .card[data-color="green"] {
                background: #d5e5a3;
            }
            .card[data-color="green"] .description {
                color: #60773d;
            }
            .card[data-color="green"] .category {
                color: #92ac56;
            }

            .card[data-color="yellow"] {
                background: #ffe28c;
            }
            .card[data-color="yellow"] .description {
                color: #b25825;
            }
            .card[data-color="yellow"] .category {
                color: #d88715;
            }

            .card[data-color="brown"] {
                background: #d6c1ab;
            }
            .card[data-color="brown"] .description {
                color: #75442e;
            }
            .card[data-color="brown"] .category {
                color: #a47e65;
            }

            .card[data-color="purple"] {
                background: #baa9ba;
            }
            .card[data-color="purple"] .description {
                color: #3a283d;
            }
            .card[data-color="purple"] .category {
                color: #5a283d;
            }

            .card[data-color="orange"] {
                background: #ff8f5e;
            }
            .card[data-color="orange"] .description {
                color: #772510;
            }
            .card[data-color="orange"] .category {
                color: #e95e37;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">

                <h1>Sticky News</h1>

                <div class="row">
                    @foreach ($news['articles'] as $new)

                        @if(!empty($new['description']))
                        <div class="col-md-4 col-sm-6 content-card">
                            <a href="{{ $new['url'] }}" target="_blank">
                                <div class="card-big-shadow">
                                    <div class="card card-just-text" data-background="color" data-color="{{ $colors[random_int(0, 4)] }}" data-radius="none">
                                        <div class="content">
                                            <h6 class="category">{{ $new['author'] }}</h6>
                                            <h5 class="title">{{ $new['title'] }}</h5>
                                            <p class="description">{{ mb_strimwidth($new['description'], 0, 100, '...') }}</p>
                                        </div>
                                    </div> <!-- end card -->
                                </div>
                            </a>
                        </div>
                        @endif
                        
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
