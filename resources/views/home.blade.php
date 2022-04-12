@extends('layouts.app')

@section('content')
    <header>
    <nav class="nav">
      <ul class="nav-list">
        <li class="nav-list-item"><a href="https://mike7777op.github.io/Gary_Note/">Home</a></li>
        <li class="nav-list-item"><a href="https://mike7777op.github.io/Gary_Note/Photo.html">Photos</a></li>
        <li class="nav-list-item"><a href="https://mike7777op.github.io/Gary_Note/AboutMe.html">About me</a></li>
        <li class="nav-list-item"><a href="https://github.com/mike7777op">Github連結</a></li>
      </ul>
      <button type="button" class="nav-button">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
    </nav>
  </header>
  <main>
    <section>
      <!-- 首頁標語 -->
      <div class="pb-row">
        <div class="col-phone-100">
          <div class="index-cover">
            <div class="index-container">
              <h1 class="_title">Larvel測試網站</h1>
              <div>
                <a href="https://progressbar.tw/users/sign_in" target="_pb">
                  <button type="button" class="btn btn_light">
                    登入
                  </button>
                </a>
                <a href="https://progressbar.tw/users/sign_up" target="_pb">
                  <button type="button" class="btn btn_dark">
                    註冊
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <!-- cards -->
      <div class="pb-container">
        <div class="pb-row">
          <div class="col-phone-100 col-tablet-50">
            <div class="card">
              <div class="_image">
                <div class="ratio_3_2">
                  <img class="ratio_content" src="/imgs/large-card1.jpg">
                </div>
              </div>
              <div class="_content">
                <a class="_link" href="https://mike7777op.github.io/Gary_Note/Code_pages/Unity/HotPot/HotPot.html" target="_pb">
                  <h4 class="_title">
                    [Untiy] 網頁遊戲
                  </h4>
                </a>
                <p class="_detail">
                  Unity是一種跨平台的2D和3D遊戲引擎，由Unity Technologies研發，可開發跨平台的電動遊戲、並延伸於基於WebGL技術的HTML5網頁平台，以及tvOS、Oculus Rift、ARKit等新一代多媒體平台。除可以用於研發電子遊戲之外，Unity還廣泛用作建築視覺化、即時三維動畫等類型互動內容的綜合型創作工具。
                </p>
              </div>
              <div class="_action">
                <div class="_action_content">
                  <a class="_link" href="" target="_pb">
                    <button class="btn" type="button">
                      閱讀更多
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-phone-100 col-tablet-50">
            <div class="card">
              <div class="_image">
                <div class="ratio_3_2">
                  <img class="ratio_content" src="/imgs/large-card2.jpg">
                </div>
              </div>
              <div class="_content">
                <a class="_link" href="" target="_pb">
                  <h4 class="_title">
                    The cuty demon!
                  </h4>
                </a>
                <p class="_detail">
                  可愛的貓咪簡稱惡魔，這裡分享路上遇到的野貓照片!
                </p>
              </div>
              <div class="_action">
                <div class="_action_content">
                  <a class="_link" href="" target="_pb">
                    <button class="btn" type="button">
                      閱讀更多
                    </button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <!-- video player -->
      <div class="pb-container">
        <div class="pb-row">
          <div class="col-phone-100 col-tablet-67">
            <div class="video-player">
              <div class="ratio_16_9">
                <iframe id="video_player" class="ratio_content" src="https://www.youtube.com/embed/IJ5BnoakZrw"
                  frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-phone-100 col-tablet-33">
            <div class="video-list-container mdl-shadow--2dp">
              <div class="ratio_8_9">
                <ul class="ratio_content video-list">
                  <li class="_video" data-video="Enw2PhRe3Bg">
                      喵喵喵喵喵!
                  </li>
                  <li class="_video" data-video="HJwt0fnadUg">
                      喵 喵 喵!!!
                  </li>
                  <li class="_video" data-video="RUZ7gCo7gws">
                      喵喵喵喵喵~~~~
                  </li>
                  <li class="_video" data-video="IVWkKn_8GiQ">
                      喵!!!
                  </li>
                  <li class="_video" data-video="XN031PuViqI">
                    喵喵喵???
                  </li>
                  <li class="_video" data-video="-TDjWe5xZ0w">
                    喵喵喵喵喵!!
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="remove_padding">
      <!-- image links -->
      <div class="pb-container">
        <div class="pb-row">
          <div class="col-phone-100 col-tablet-50 col-desktop-25">
            <a href="https://progressbar.tw">
              <div class="ratio_3_2">
                <img class="ratio_content" src="/imgs/small-card1.jpg">
              </div>
            </a>
          </div>
          <div class="col-phone-100 col-tablet-50 col-desktop-25">
            <a href="https://progressbar.tw">
              <div class="ratio_3_2">
                <img class="ratio_content" src="/imgs/small-card2.jpg">
              </div>
            </a>
          </div>
          <div class="col-phone-100 col-tablet-50 col-desktop-25 hidden-on-phone">
            <a href="https://progressbar.tw">
              <div class="ratio_3_2">
                <img class="ratio_content" src="/imgs/small-card3.jpg">
              </div>
            </a>
          </div>
          <div class="col-phone-100 col-tablet-50 col-desktop-25 hidden-on-phone">
            <a href="https://progressbar.tw">
              <div class="ratio_3_2">
                <img class="ratio_content" src="/imgs/small-card4.jpg">
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="pb-container">
      <div class="pb-row">
        <div class="col-phone-100 col-tablet-33">
          <div class="_container">
            <ul class="footer-links">
              <li>link 1</li>
              <li>link 1</li>
              <li>link 1</li>
            </ul>
          </div>
        </div>
        <div class="col-phone-100 col-tablet-33">
          <div class="_container">
            <ul class="footer-links">
              <li>link 1</li>
              <li>link 1</li>
              <li>link 1</li>
            </ul>
          </div>
        </div>
        <div class="col-phone-100 col-tablet-33">
          <div class="_container _center">
            <div class="pb-row">
              <div class="col-phone-100 col-phone-33">
                <a href="" target="_facebook">
                  <i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-phone-100 col-phone-33">
                <a href="" target="_pb">
                  <i class="fa fa-television" aria-hidden="true"></i>
                </a>
              </div>
              <div class="col-phone-100 col-phone-33">
                <a href="" target="_youtube">
                  <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection

@section('inlin_js')
    @parent
    <script>
        $(function () {
        /* video player init*/
        $("._video").click(function () {
            var video = $(this).data("video");
            var url = "https://www.youtube.com/embed/" + video;
            $("#video_player").attr('src', url);
        })

        /* nav init*/
        $(".nav-button").click(function () {
            $(".nav-list").slideToggle(400);
        })
        })
    </script>
@endsection
