@extends('layouts.front')
@section('title','Lys.kichijoji')
@section('content')
{{----スライドショー-------------------------------------}}
<div class="container">
    <div class="carousel slide" id="sliders" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#sliders" data-slide-to="0" class="active"></li>
            <li data-target="#sliders" data-slide-to="1"></li>
            <li data-target="#sliders" data-slide-to="2"></li>
            <li data-target="#sliders" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href={{ route('service') }}>
                <img src="images/about.png" class="d-block w-100"></a>
                <div class="carousel-caption d-none d-sm-block">
                    <div class="aboutSlider-titleGroup">
                        <div class="aboutSlider-information">
                            <h1 class="aboutSlider-h1 title">ABOUT</h1>
                            <p>お客様のなりたいを叶えるサロン
                            <br>
                            丁寧なカウンセリングによりお客様一人一人に合う似合わせを提案
                            <br>
                            熟練スタッフ在籍の為、幅広い提案が可能です。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href={{ route('perm') }}>
                <img src="images/perm.png" class="d-block w-100"></a>
                <div class="carousel-caption d-none d-sm-block">
                    <div class="aboutSlider-titleGroup">
                        <div class="aboutSlider-information">
                            <h1 class="aboutSlider-h1 title">パーマ</h1>
                            <p>【人気のまつ毛パーマ】ラッシュリフト
                            <br>
                            根元から立ち上げ！一重まぶたや逆さまつ毛などのお悩み解決
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href={{ route('extension') }}>
                <img src="images/extension.png" class="d-block w-100"></a>
                <div class="carousel-caption d-none d-sm-block">
                    <div class="aboutSlider-titleGroup">
                        <div class="aboutSlider-information">
                            <h1 class="aboutSlider-h1 title">マツエク</h1>
                            <p>【カラーエクステで流行りの抜け感】フラットラッシュ
                            <br>
                            肌馴染みの良いロイッシュカラー導入！肌の色に合わせて全5色からセレクト
                            <br>
                            フラットラッシュの為、モチも良く、初めての方にもおすすめ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <a href={{ route('eyebrow') }}>
                <img src="images/eyebrow.png" class="d-block w-100"></a>
                <div class="carousel-caption d-none d-sm-block">
                    <div class="aboutSlider-titleGroup">
                        <div class="aboutSlider-information">
                            <h1 class="aboutSlider-h1 title">アイブロウ</h1>
                            <p>【韓国（オルチャン）眉毛を叶えるサロン】アイブロウWax
                            <br>
                            カウンセリングにより最適な美眉をご提案
                            <br>
                            お一人お一人の輪郭・骨格・印象に合わせた似合わせデザイン
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#sliders" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">前の画像へ</span>
            </a>
            <a href="#sliders" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">次の画像へ</span>
            </a>
        </div>
    </div>
</div>
{{----スライドショー------------------------------------}}
{{---サロンのこだわり-------------------------------------}}
<div class="container-fluid">
    <section class="section" id="kodawari">
        <h2 class="section-ttl">
            <span>Lys.がお客様に選ばれる理由</span>
            こだわり
        </h2>
        <div class="kodawari-in">
            <div class="kodawari-one">
                <div class="kodawari-img">
                    <img src="images/extension.png">
                </div>
                <h3 class="kodawari-ttl">
                    なりたい目元を叶える
                    <br>
                    プロフェッショナルな技術を提供
                </h3>
                <p class="kodawari-txt">
                    マツエクのバリエーションを多数用意
                    <br>
                    しております
                </p>
            </div>
            <div class="kodawari-one">
                <div class="kodawari-img">
                    <img src="images/eyebrow.png">
                </div>
               <h3 class="kodawari-ttl">
                    美眉スタイリングで
                    <br>
                    理想のお目元へ
                    <br>
                </h3>
                <p class="kodawari-txt">
                    一人ひとりの骨格に合わせたデザインを提案
                    <br>
                    プロにお任せください
                </p>
            </div>
            <div class="kodawari-one">
                <div class="kodawari-img">
                    <img src="images/perm.png">
                </div>
                <h3 class="kodawari-ttl">
                    丁寧なカウンセリング
                    <br>
                    まつ毛の状態に合わせた施術
                </h3>
                <p class="kodawari-txt">
                    プライベートサロンならではの
                    <br>
                    お客様に合わせた徹底カウンセリング
                    <br>
                    まつ毛の状態に合わせて施術を致します
                </p>
            </div>
        </div>
    </section>
</div>
{{----サロンのこだわり-------------------------------------}}
{{---Menu-------------------------------------}}
<div class="menu-in">
    <h1>MENU</h1>
    <ul class="col3">
        <li>
            <h2>パーマ</h2>
            <a href={{ route('perm') }}>
            <img src="images/perm-round.png" width="288" height="288" alt></a>
            <p>
            根元から立ち上げ！
            <br>
            一重まぶたや逆さまつ毛などのお悩み解決   
           </p>
        </li>
        <li>
            <h2>マツエク</h2>
            <a href={{ route('extension') }}>
            <img src="images/extension-round.png" width="288" height="288" alt></a>
            <p>
            カラーエクステで流行りの抜け感！
            <br>
            肌の色に合わせて全5色からセレクト   
           </p>
        </li>
        <li>
            <h2>アイブロウ</h2>
            <a href={{ route('eyebrow') }}>
            <img src="images/eyebrow-round.png" width="288" height="288" alt></a>
            <p>
            似合わせ美眉に！
            <br>
            骨格や印象に合わせたデザインを提案   
           </p>
        </li>
    </ul>  
</div>
{{----Menu-------------------------------------}}
{{----おすすめメニュー診断-------------------------------------}}
<div class="container match-in">
    <div class="text-center w-md-50 mx-auto py-5">
        <h1>メニューCHECK</h1>
        <p class="lead font-weight-normal mb-5">
            あなたにぴったりのメニューを診断する
        </p>
        <a class="btn btn--red btn--cubic btn--shadow" href={{ route('match') }}>START</a>
    </div>
</div>
{{----おすすめメニュー診断-------------------------------------}}
{{----サロンの地図------------------------------------}}
<div class="container-fluid">
<div class="location">
    <h3>LOCATION</h3>
    <div class="location-mapArea">
        <a href="https::" target="_brank">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.948129468268!2d139.57338405053963!3d35.702894036294346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ef66b826b691%3A0x559cc192cb003bd3!2z44Ki44Kk44Op44OD44K344Ol77yG44OY44OD44OJ44K544ORIEx5cy4g5ZCJ56Wl5a-6IOOAkOODquODvOOCueOAkQ!5e0!3m2!1sen!2sjp!4v1642436546944!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </a>
    </div>
</div>
</div>
{{----Lサロンの地図-------------------------------------}}
@endsection