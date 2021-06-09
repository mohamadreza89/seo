<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet"/>
    <link href="{{asset('bootstrap-3.4.1-dist/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('bootstrap-3.4.1-dist/css/bootstrap-theme.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="s002">
    <div class="text-center container " style="background-color: #FFFA; border-radius: 10px;">
        <div class="col-sm-12 col-md-12">
            <h2>The Results</h2>
            <hr style="border-color: #1a202c55"/>
        </div>
        <div class="container">
            <div class="col-md-4"><h3>Head Tips</h3></div>
            <div class="col-md-4"><h3>Readable</h3></div>
            <div class="col-md-4"><h3>Repeat</h3></div>
        </div>
        <div style="margin-bottom: 30px;">
            @foreach($heads as $head)
                @if(strpos($head, "--") === 0)
                    <h3 style="color: #555;">{{str_replace("--", "",$head)}}</h3>
                    @else
                <div class="container">
                    <div class="col-md-4"><h5>{{ucwords(str_replace("-"," ",$head))}}</h5></div>
                    <div class="col-md-4"><h5>{{TagAnalyzer::check($head)? '✅': '❎'}}</h5></div>
                    @if(!is_bool(TagAnalyzer::check($head)))
                    <div class="col-md-4"><h5>{{TagAnalyzer::check($head)}}</h5></div>
                    @endif
                    <div class="col-md-4"><h5>❎</h5></div>
                </div>
                @endif
            @endforeach
        </div>

        <div style="margin-bottom: 30px;">
            @foreach($metas as $meta)

                    <div class="container">
                        <div class="col-md-4"><h5>{{ucwords(str_replace("-"," ",$meta))}}</h5></div>
                        <div class="col-md-4"><h5>{{TagAnalyzer::value($meta)}}</h5></div>
                    </div>
            @endforeach
        </div>
    </div>
</div>
<script src="{{asset('js/extention/choices.js')}}"></script>
<script src="{{asset('js/extention/flatpickr.js')}}"></script>
<script>
    flatpickr(".datepicker",
        {});

</script>
<script>
    const choices = new Choices('[data-trigger]',
        {
            searchEnabled: false,
            itemSelectText: '',
        });

</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
