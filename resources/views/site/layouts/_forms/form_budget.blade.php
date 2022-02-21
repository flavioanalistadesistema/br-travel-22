<form action="" method="post" class="search-property-1">
    @csrf
    <div class="row">
        <div class="col-lg-4 col-sm-4">
            <label></label>
            <div class="form-field">
                <select
                    name="origin_budgets"
                    id="origin_budgets"
                    data-placeholder="Origin"
                    class="autoCompleteAeroporte form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
                </select>
                @if ($errors->has('origin_budgets'))
                    <li class="error_budgets">{{ $errors->first('origin_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4 col-sm-4">
            <label></label>
            <div class="form-field">
                <select name="destination_budgets" id="destination_budgets" data-placeholder="Destination" class="autoCompleteAeroporte form-control {{$errors->has('destination_budgets') ? 'border-error-budgets': ''}}">
                </select>
                @if ($errors->has('destination_budgets'))
                    <li class="error_budgets">{{ $errors->first('destination_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-field">
                <input type="text" name="checkout_in_date_budgets" placeholder="Depart" value="{{ old('checkout_in_date_budgets') }}" autofocus class="form-control checkout_date {{$errors->has('checkout_in_date_budgets') ? 'border-error-budgets': ''}}">
                @if ($errors->has('checkout_in_date_budgets'))
                    <li class="error_budgets">{{$errors->first('checkout_in_date_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-field">
                <input type="text" name="checkout_out_date_budgets" placeholder="return" value="{{ old('checkout_out_date_budgets') }}" autofocus class="form-control checkout_date {{$errors->has('checkout_out_date_budgets') ? 'border-error-budgets': ''}}">
                @if ($errors->has('checkout_out_date_budgets'))
                    <li class="error_budgets">{{$errors->first('checkout_out_date_budgets')}}</li>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input class="form-control {{$errors->has('name_budgets') ? 'border-error-budgets': ''}}" placeholder="Name" type="text" name="name_budgets" value="{{ old('name_budgets') }}" id="name_budgets" autofocus>
                @if ($errors->has('name_budgets'))
                    <li class="error_budgets">{{$errors->first('name_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2">
            <label for="#"></label>
            <div class="form-fiel">
                <input class="form-control {{$errors->has('phone_budgets') ? 'border-error-budgets': ''}}" placeholder="Phone" type="text" name="phone_budgets" value="{{ old('phone_budgets') }}" id="phone_budgets">
                @if ($errors->has('phone_budgets'))
                    <li class="error_budgets">{{ $errors->first('phone_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <label for="#"></label>
            <div class="form-fiel">
                <input class="form-control {{$errors->has('email_budgets') ? 'border-error-budgets': ''}}" placeholder="E-mail" type="text" name="email_budgets" value="{{ old('email_budgets') }}" autofocus>
                @if ($errors->has('email_budgets'))
                    <li class="error_budgets">{{$errors->first('email_budgets')}}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2 col-sm-2">
            <label></label>
            <div class="form-field">
                <select name="adults_budgets" data-placeholder="Adults" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
                    <option value="" disabled selected>Adult</option>
{{--                    @foreach($numbersPerson as $number)--}}
{{--                        <option value="{{old('adults_budgets', $number)}}"> {{$number}} </option>--}}
                        <option value="{{old('adults_budgets', 1)}}"> 1 </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-2 col-sm-2">
            <label></label>
            <div class="form-field">
                <select name="children_budgets" id="children_budgets" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
                    <option value="" disabled selected>Children</option>
{{--                    @foreach($numbersPerson as $number)--}}
                        <option value="{{old('adults_budgets', 1)}}"> 1 </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
    </div>

    <!- Button submit ->
    <div class="row">
        <div class="col-lg align-self-end">
            <label for="#"></label>
            <div class="form-group">
                <div class="form-field">
                    <input type="submit" value="Submit" class="form-control btn btn-primary">
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-sm-1">
            <label></label>
            <div class="form-field">
                <small style="display: none; text-transform: uppercase">1 chield</small>
                <select name="children_age_budgets" id="chield1" style="display: none; text-transform: uppercase" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
{{--                    @foreach($numbersPerson as $number)--}}
                        <option value="{{1}}"> {{1}} </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-1 col-sm-1">
            <label></label>
            <div class="form-field">
                <select name="children_age_budgets" id="chield2" style="display: none; text-transform: uppercase" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
{{--                    @foreach($numbersPerson as $number)--}}
                        <option value="{{1}}"> {{1}} </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-1 col-sm-1">
            <label></label>
            <div class="form-field">
                <select name="children_age_budgets" id="chield3" style="display: none; text-transform: uppercase" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
{{--                    @foreach($numbersPerson as $number)--}}
                        <option value="{{1}}"> 1 </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-1 col-sm-1">
            <label></label>
            <div class="form-field">
                <select name="children_age_budgets" id="chield4" style="display: none; text-transform: uppercase" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
{{--                    @foreach($numbersPerson as $number)--}}
                        <option value="{{1}}"> 1 </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
        <div class="col-lg-1 col-sm-1">
            <label></label>
            <div class="form-field">
                <select name="children_age_budgets" id="chield5" style="display: none; text-transform: uppercase" class="form-control {{$errors->has('origin_budgets') ? 'border-error-budgets': ''}}">
{{--                    @foreach($numbersPerson as $number)--}}
                        <option value="{{1}}"> 1 </option>
{{--                    @endforeach--}}
                </select>
                @if ($errors->has('adults_budgets'))
                    <li class="error_budgets">{{ $errors->first('adults_budgets') }}</li>
                @endif
            </div>
        </div>
    </div>
</form>

@section('scripts')
    <script type="text/javascript">
        $("#phone_budgets").mask("00000000009");
    </script>

    <script type="text/javascript">
        $('.autoCompleteAeroporte').select2({
            delay: 500,
            pageLoadErrorMessage: "Error Message...",
            formatNoMatches: function(term) {
                return "Nenhum resultado. To add " + term + "?";
            },
            ajax: {
                url: '/autocomplete/show',
                dataType: 'json',
                delay: 250,
                errorLoading: function() {
                    return 'Результат не может быть загружен.';
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.acronyms + ', ' + item.aeroport,
                                id: item.aeroport
                            }
                        })
                    };
                },
                cache: true
            },
            "language": {
                "noResults": function() {
                    return "No Results Found";
                },
                searching: function() {
                    return 'Searching...';
                },
                errorLoading: function() {
                    return 'Search';
                }
            }
        });

        $(function () {
            $("#children_budgets").click(function () {
                if($("#children_budgets").val() === "0") {
                    $("#chield1").css({ display: "none" });
                    $("#chield2").css({ display: "none" });
                    $("#chield3").css({ display: "none" });
                    $("#chield4").css({ display: "none" });
                    $("#chield5").css({ display: "none" });
                }
                if ($("#children_budgets").val() === "5") {
                    $("#chield1").css({ display: "block" });
                    $("#chield2").css({ display: "block" });
                    $("#chield3").css({ display: "block" });
                    $("#chield4").css({ display: "block" });
                    $("#chield5").css({ display: "block" });
                }
                if ($("#children_budgets").val() === "4") {
                    $("#chield1").css({ display: "block" });
                    $("#chield2").css({ display: "block" });
                    $("#chield3").css({ display: "block" });
                    $("#chield4").css({ display: "block" });
                }
                if ($("#children_budgets").val() === "3") {
                    $("#chield1").css({ display: "block" });
                    $("#chield2").css({ display: "block" });
                    $("#chield3").css({ display: "block" });
                }
                if ($("#children_budgets").val() === "2") {
                    $("#chield1").css({ display: "block" });
                    $("#chield2").css({ display: "block" });
                }
                if ($("#children_budgets").val() === "1") {
                    $("#chield1").css({ display: "block" });
                    $("#chield2").css({ display: "none" });
                    $("#chield3").css({ display: "none" });
                    $("#chield4").css({ display: "none" });
                    $("#chield5").css({ display: "none" });
                }

            });
        });
    </script>
@show
