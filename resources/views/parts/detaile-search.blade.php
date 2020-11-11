<div class="detailed-search col-md-3">
  @switch(Route::currentRouteName())
  @case('likes.index')
  <form action="{{ route('likes.index')}}" method="GET" name="detailed-search_form" class="detailed-search_form">
    @break
    @case('my_posts')
    <form action="{{ route('my_posts')}}" method="GET" name="detailed-search_form" class="detailed-search_form">
      @break

      @default
      <form action="{{ route('root')}}" method="GET" name="detailed-search_form" class="detailed-search_form">
        @endswitch

        <div class="detailed-search_form_head">記事の条件</div>
        <div class="detailed-search_form_body">
          <div class="search-conditions keyword-terms">
            <div>
              <span class="search-conditions_title keyword-terms_title">キーワード</span>
            </div>
            <div class="search-warapper">
              <div class="form-inline search-form">
                <i class="fas fa-search"></i>
                @if(isset($keyword))
                <input type="search" name="search" value="{{$keyword}}" class="search-input" placeholder="キーワードを入力" aria-label="検索...">
                @else
                <input type="search" name="search" placeholder="キーワードを入力" class="search-input" aria-label="検索...">
                @endif
              </div>
            </div>
          </div>
          <div class="search-conditions order-terms">
            <div>
              <span class="search-conditions_title order-terms_title">順番</span>
            </div>
            @if(Session::has('order') && Session::get('order') == "new")
            <div class="search-conditions_radio">
              <input type="radio" name="order" value="lgtm">LGTM数順
            </div>
            <div class="search-conditions_radio">
              <input type="radio" name="order" value="new" checked="checked">新着順
            </div>
            @else
            <div class="search-conditions_radio">
              <input type="radio" name="order" value="lgtm" checked="checked">LGTM数順
            </div>
            <div class="search-conditions_radio">
              <input type="radio" name="order" value="new">新着順
            </div>
            @endif
          </div>
          <div class="search-conditions date-terms">
            <div>
              <span class="search-conditions_title">期間</span>
            </div>
            <div class="search-conditions_radio">
              @if(Session::has('priod') && Session::get('priod') == "day")
              <input type="radio" name="priod" value="day" checked="checked">1日
              @else
              <input type="radio" name="priod" value="day">1日
              @endif
            </div>
            <div class="search-conditions_radio">
              @if(Session::has('priod') && Session::get('priod') == "week")
              <input type="radio" name="priod" value="week" checked="checked">1週間
              @else
              <input type="radio" name="priod" value="week">1週間
              @endif
            </div>
            <div class="search-conditions_radio">
              @if(Session::has('priod') && Session::get('priod') == "month")
              <input type="radio" name="priod" value="month" checked="checked">1月間
              @else
              <input type="radio" name="priod" value="month">1月間
              @endif
            </div>
            <div class="search-conditions_radio">
              @if(Settion::has('priod') && Settion::get('priod') == "period")
              <input type="radio" name="priod" value="period" checked="checked">期間指定
              @else
              <input type="radio" name="priod" value="period">期間指定
              @endif
            </div>
            <div class="search-conditions_radio">
              <span>
                <label for="">
                  @if($priod_start !== null)
                  開始:<input type="date" class="input-small" name="piriod-start" placeholder="2020-01-11" value="{{$priod_start}}">
                  @else
                  開始:<input type="date" class="input-small" name="piriod-start" placeholder="2020-01-11">
                  @endif
                </label>
              </span>
              <span>
                <label for="">
                  @if($priod_end !== null)
                  終了:<input type="date" class="input-small" name="piriod-end" placeholder="2020-02-11" value="{{$priod_end}}">
                  @else
                  終了:<input type="date" class="input-small" name="piriod-end" placeholder="2020-02-11">
                  @endif
                </label>
              </span>
            </div>
          </div>
          <div class="search-conditions lgtm-terms">
            <div>
              <span class="search-conditions_title lgtm-terms_title">LGTM</span>
            </div>
            <div class="search-conditions_radio">
              <span>
                <label for="">
                  @if($lgtm_min !== null)
                  最低:<input type="number" class="input-small" name="lgtm-min" placeholder="100" value="{{$lgtm_min}}">
                  @else
                  最低:<input type="number" class="input-small" name="lgtm-min" placeholder="100">
                  @endif
                </label>
              </span>
              <span>
                <label for="">
                  @if($lgtm_max !== null)
                  最高:<input type="number" class="input-small" name="lgtm-max" placeholder="1000" value="{{$lgtm_max}}">
                  @else
                  最高:<input type="number" class="input-small" name="lgtm-max" placeholder="1000">
                  @endif
                </label>
              </span>
            </div>
          </div>
        </div>
      </form>
</div>