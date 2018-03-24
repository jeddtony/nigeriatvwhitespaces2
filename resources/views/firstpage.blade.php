<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nigeria Tv White spaces</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <style>
        body{
            background-color: #F7F0F0;
        }
        .container{
            background-color: #fff;
            padding-top: 20px;
        }
        table.table-bordered{
            border:1px solid #fff;
            margin-top:20px;
        }
        table.table-bordered > tbody > tr > td{
            border:5px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Nigerian Tv White Spaces</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="post" action="/freespaces">
                {{csrf_field()}}
                <h4>Coordinates</h4>
                <div class="row">

                    <div class="form-group col">
                        <label for="long" class=" col-sm-3">longitude</label>
                        <input type="text"
                               class="form-control-sm col-sm-7" name="" id="long" aria-describedby="helpId" placeholder="longitude">
                    </div>
                </div>

                <div class="form-group ">
                    <label for="lat" class="col-sm-3">latitude</label>
                    <input type="text"
                           class="col-sm-7 form-control-sm" name="" id="lat" aria-describedby="helpId" placeholder="latitude">
                </div>
                {{--</div>--}}
                {{--<div class="form-group">--}}
                {{----}}
                {{--<input type="text"--}}
                {{--class="form-control" name="" id="" aria-describedby="helpId" placeholder="latitude">--}}
                {{--</div>--}}
                <h4>Criteria</h4>

                <div class="form-group ">
                    <label for="" class="col-sm-3">Power</label>
                    <input type="text"
                           class="form-control-sm col-sm-7" name="" id="" aria-describedby="helpId" value="Less than 3 meters (4W)">
                </div>

                <div class="form-group">
                    <label class="col-sm-3">Location</label>
                    <select class="form-control-sm">
                        <option value="benin">Benin</option>
                        <option value="ogbona">Ogbona</option>
                    </select>
                </div>
                @if(isset($timeSelected))
                    <div class="form-group">
                        <label for="">Select time</label>
                        <select class="form-control-sm" name="selected_time">
                            <option value={{$timeSelected}}> {{$timeSelected}} </option>
                            <option value="1">1:00 am</option>
                            <option value="2">2:00 am</option>
                            <option value="3">3:00 am</option>
                            <option value="4">4:00 am</option>
                            <option value="5">5:00 am</option>
                            <option value="6">6:00 am</option>
                            <option value="7">7:00 am</option>
                            <option value="8">8:00 am</option>
                            <option value="9">9:00 am</option>
                            <option value="10">10:00 am</option>
                            <option value="11">11:00 am</option>
                            <option value="12">12:00 pm</option>
                            <option value="13">1:00 pm</option>
                            <option value="14">2:00 pm</option>
                            <option value="15">3:00 pm</option>
                            <option value="16">4:00 pm</option>
                            <option value="17">5:00 pm</option>
                            <option value="18">6:00 pm</option>
                            <option value="19">7:00 pm</option>
                            <option value="20">8:00 pm</option>
                            <option value="21">9:00 pm</option>
                            <option value="22">10:00 pm</option>
                            <option value="23">11:00 pm</option>
                            <option value="24">00:00 am</option>
                        </select>

                        @else
                            <div class="form-group">
                                <label for="">Select time</label>
                                <select class="form-control-sm" name="selected_time">
                                    <option value="1">1:00 am</option>
                                    <option value="2">2:00 am</option>
                                    <option value="3">3:00 am</option>
                                    <option value="4">4:00 am</option>
                                    <option value="5">5:00 am</option>
                                    <option value="6">6:00 am</option>
                                    <option value="7">7:00 am</option>
                                    <option value="8">8:00 am</option>
                                    <option value="9">9:00 am</option>
                                    <option value="10">10:00 am</option>
                                    <option value="11">11:00 am</option>
                                    <option value="12">12:00 pm</option>
                                    <option value="13">1:00 pm</option>
                                    <option value="14">2:00 pm</option>
                                    <option value="15">3:00 pm</option>
                                    <option value="16">4:00 pm</option>
                                    <option value="17">5:00 pm</option>
                                    <option value="18">6:00 pm</option>
                                    <option value="19">7:00 pm</option>
                                    <option value="20">8:00 pm</option>
                                    <option value="21">9:00 pm</option>
                                    <option value="22">10:00 pm</option>
                                    <option value="23">11:00 pm</option>
                                    <option value="24">00:00 am</option>
                                </select>
                                @endif

                            </div>
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <button type="submit" class="btn-primary col-sm-">Check availability</button>
                            </div>
            </form>

            @if(isset($channels) )
                {{--{{dd($channels)}}--}}
                <table class="table table-sm table-bordered">
                    @for($i = 14; $i <= 69; $i+=5)
                        <tr>
                            @for($j = 0; $j < 5; $j++)
                                @if(($i + $j) > 69 )
                                    @break;
                                @endif

                                <?php
                                $colorChanged = false;
                                ?>
                                @foreach($channels as $channel => $value)
                                    {{--{{dd($value)}}--}}
                                    @if(($i + $j) == $value)
                                        {{--{{dd($channels)}}--}}
                                        <?php
                                        $colorChanged = true;
                                        ?>
                                        <td style=" background-color: #A1FFB5 ">{{$i + $j}}</td>
                                    @endif
                                @endforeach
                                @if($colorChanged == false)
                                    <td>{{$i + $j}}</td>
                                @endif
                            @endfor
                        </tr>
                    @endfor
                </table>
            @else
                <table class="table table-bordered table-sm">
                    @for($i = 14; $i <= 69; $i+=5)
                        <tr>
                            @for($j = 0; $j < 5; $j++)
                                @if(($i + $j) > 69 )
                                    @break;
                                @endif
                                <td>{{$i + $j}}</td>
                            @endfor
                        </tr>
                    @endfor
                </table>

            @endif
        </div>

        <div class="col-md-7">
            {{--For the map--}}

            <div id="map" style="width:100%; height:600px;"></div>
        </div>
    </div>
</div>

{{--FOR THE MAP SCRIPT --}}
<script>
    function initMap() {
        var uluru = {lat: 6.339185, lng:  5.617447};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwjwRWC6rksF7GnJVyx6-b_hspjvWuI3Y&callback=initMap">
</script>

</body>
</html>