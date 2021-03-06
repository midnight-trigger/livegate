@extends("layout")
@section("content")
<div class="scroll-top">
  <a href="#">ライブハウス<br>を探す</a>
</div>
<!-- header -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light h-100">
  <a class="navbar-brand" href="#">Live Gate</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse bg-light" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="#">ホーム</a></li>
      <li class="nav-item"><a class="nav-link" href="#how-to-use">使い方</a></li>
      <li class="nav-item"><a class="nav-link" href="#reason">選ばれる理由</a></li>
    </ul>
  </div>
</nav>
</header><!-- end of header -->

<main>
<!-- top-wrapper -->
<section class="top-wrapper text-center">
  <h1 class="text-white font-weight-bold">Live Gate</h1>
  <div class="button signup text-center mx-auto text-white"><a href="signup">新規登録<br><span class="livehouse">サイト管理者専用</span></a></div>
  <div class="button search text-white text-center mx-auto"><a href="result">ライブハウスを探す</a></div>
</section><!-- end of top-wrapper -->

<!-- section1 -->
<section class="section1 text-center">
  <p>ライブやりたいけど評判の良い箱がいいなぁ</p>
  <p>ライブ出演者を募りたいけど、<br>こっちのニーズにあったバンド・ユニットいないかなぁ</p>
  <p>Live Gateはこれらの希望を叶えます!!</p>
</section><!-- end of section1 -->

<!-- section2 -->
<section id="how-to-use" class="section2">
  <h2 class="section-title">使い方はたったの<strong class="text-danger">3ステップ</strong></h2>

  <div class="how-to-use">
    <div class="step">1</div>
    <p>条件を指定してライブハウスを検索</p>
    <img src="/img/how-to-use1.png" class="how-to-use-img">
  </div>
  <div class="how-to-use">
    <div class="step">2</div>
    <p>気になるライブハウスをクリック<br>ユーザー評価や設備、概要などの詳細情報をチェック</p>
    <img src="/img/how-to-use2.png" class="how-to-use-img">
  </div>
  <div class="how-to-use">
    <div class="step">3</div>
    <p>フォームに必要事項を記入して送ればライブハウス側にメールが届きます</p>
    <img src="/img/how-to-use3.png" class="how-to-use-img">
  </div>
</section><!-- end of section2 -->

<!-- section3 -->
<section id="reason" class="section3 text-center py-5">
  <h2 class="section-title"><strong>Live Gate</strong>が選ばれる理由</h2>
  <div class="reason mb-5">
    <i class="fas fa-users point-image"></i>
    <h3>POINT 1</h3>
    <p>ユーザー評価機能があるので、<br>実際の評判が丸分かり！</p>
  </div>
  <div class="reason">
    <i class="far fa-handshake point-image"></i>
    <h3>POINT 2</h3>
    <p>お好みの条件で絞れるので、<br>自分のニーズに合った<br>ライブハウスを探しやすい</p>
  </div>
</section><!-- end of section3 -->
</main>

<!-- footer -->
<footer class="text-center text-white py-5">
  <p>Junya Nishiwaki All Rights Reserved.</p>
</footer><!-- end of footer -->
@endsection
