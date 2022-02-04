@extends('layouts.front')
@section('title','Eyebrow')
@section('content')
<div class="menu-container">
    <div class="menu-page-head">
        <img src="images/eyebrow.png" class="d-block w-100 menu-page-head-img">
        <h2>
            <span>MENU & PRICE</span>
            <small>美眉スタイリング</small>
        </h2>
    </div>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>眉毛ブロウWax</h3>
            <p class="recommend-ttl-2">
                自分の骨格に合った美眉に
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    眉毛ブロウWax (1回)
                                </p>
                                <p class="item-detail">所要時間：45分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">5,500
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li> 
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    眉毛ブロウWax　
                                </p>
                                <p class="item-detail">
                                     ※デザインなしでお手入れのみ (1回)
                                </p>
                                <br>
                                <br>
                                <p class="item-detail">所要時間：45分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li> 
                </ul>
            </div> 
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○自分の骨格に合った眉デザインにしたい方
                </li>
                <li>
                    ○毎日のメイクを楽にしたい方
                </l>
                <br>
                <br>
                <li>
                    ※3週間程度自己処理はお控えください。
                </li>
                <li>
                    ※お手入れのみのメニュー(4,400円（税込）)をお選びの方は、
                    <br>
                    普段の眉メイクをした上で、ご来店下さい。
                    <br>
                    メイクをしていない場合は、デザイン代(別途、1,100円（税込）)頂きます。
                </l>
            </ul>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>ブロウラミネーション（眉毛パーマ）</h3>
            <p class="recommend-ttl-2">
                眉毛の毛流れを整える眉毛パーマ
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    ブロウラミネーション（眉毛パーマ)
                                </p>
                                <p class="item-detail">所要時間：45分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li> 
                </ul>
            </div> 
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○眉毛の毛流れが気になる方
                </li>
                <li>
                    ○メイクの時間短縮に興味のある方
                </li>
            </ul>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>セットメニュー</h3>
            <p class="recommend-ttl-2">
                お得なおすすめセット
            </p>
            <div class="price">
                <ul class="table"><li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    （初回限定）
                                    <br>
                                    眉WAX（1回）＋
                                    <br>
                                    ブロウラミネーション（眉毛パーマ）
                                    <br>
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price"> 6,980
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    眉WAX（1回）＋
                                    <br>
                                    ブロウラミネーション（眉毛パーマ）
                                    <br>
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price"> 9,900
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    (初回限定)
                                    <br>
                                    ラッシュリフト＋眉WAX（1回）
                                    <br>
                                    ブロウラミネーション（眉毛パーマ）
                                    <br>
                                </p>
                                <p class="item-detail">
                                    アイブロウメニューにまつ毛パーマが追加されたお得なメニュー
                                    <br>
                                    <br>
                                    所要時間：120分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">12,480
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    ラッシュリフト＋眉WAX（1回）
                                    <br>
                                    ブロウラミネーション（眉毛パーマ）
                                    <br>
                                </p>
                                <p class="item-detail">
                                    アイブロウメニューにまつ毛パーマが追加されたお得なメニュー
                                    <br>
                                    <br>
                                    所要時間：120分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">16,500
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○眉毛のお手入れを楽にしたい方
                </li>
                <li>
                    ○自分の骨格に合った眉毛を手に入れたい方
                </l>
                <li>
                    ○眉毛の毛流れが気になる方
                </li>
            </ul>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>オプションメニュー</h3>
            <p class="recommend-ttl-2">
                お目元ケア
            </p>
            <div class="option">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    シャンプー、トリートメント、ケア
                                </p>
                                <p class="item-detail">所要時間：5分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">1,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○マツエクやまつ毛パーマの持続力を高めたい方
                </li>
                <li>
                    ○まつ毛ダニ予防をしたい方
                </l>
            </ul>
        </div>
    </section>

@endsection