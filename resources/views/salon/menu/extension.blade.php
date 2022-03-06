@extends('layouts.front')
@section('title','マツエク')
@section('content')
{{-- Laravel標準で用意されているCSSを読み込みます --}}
<link href="{{ asset('css/app.css') }}" rel ="stylesheet">
{{-- 作成したCSSを追記 --}}
<link href="{{ asset('css/menu.css') }}" rel="stylesheet">
<div class="menu-container">
    <div class="menu-page-head">
        <img src="images/extension.png" class="d-block w-100 menu-page-head-img">
        <h2>
            <span>MENU & PRICE</span>
            <small>マツエク</small>
        </h2>
    </div>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>シングルラッシュ
            <br>(3種類の毛質)</h3>
            <p class="recommend-ttl">
                ①フラットラッシュ
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    60分つけ放題　120本まで（初回限定）
                                </p>
                                <p class="item-detail">所要時間：60分</p>
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
                                    90分つけ放題　160本まで（初回限定）
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    60本
                                </p>
                                <p class="item-detail">所要時間：30分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    80本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
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
                                    100本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">6,600
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    120本(人気No.1)
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    140本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">8,800
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    160本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">9,900
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    ~200本
                                </p>
                                <p class="item-detail">所要時間：110分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">12,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> 
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○軽い付け心地がお好きな方
                    </li>
                    <li>
                        ○持続力を重視する方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
             <p class="recommend-ttl">
                ②セーブル
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    60本
                                </p>
                                <p class="item-detail">所要時間：30分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">3,300
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    80本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    100本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
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
                                    120本(人気No.1)
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">6,600
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    140本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    160本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">8,800
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    ~200本
                                </p>
                                <p class="item-detail">所要時間：110分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">11,000
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○ナチュラルに見せたい方
                    </li>
                    <li>
                        ○ご予算を抑えたい方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
            <p class="recommend-ttl">
                ③ミンク
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    60本
                                </p>
                                <p class="item-detail">所要時間：30分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">3,300
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    80本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">4,400
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    100本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
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
                                    120本(人気No.1)
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">6,600
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    140本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    160本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">8,800
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    ~200本
                                </p>
                                <p class="item-detail">所要時間：110分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">11,000
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○カールをキープしたい方
                    </li>
                    <li>
                        ○ご予算を抑えたい方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
        </div>
        <div class="inner inner--sm inner-padding--lg">
            <h3>ボリュームラッシュ</h3>
            <p class="recommend-ttl-2">
                負担軽減＆ボリューム
            </p>
            <div class="price">
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    300本まで（初回限定）
                                </p>
                                <p class="item-detail">所要時間：85分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    400本まで（初回限定）
                                </p>
                                <p class="item-detail">所要時間：85分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">8,800
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    500本まで（初回限定）
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">9,900
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    60本
                                </p>
                                <p class="item-detail">所要時間：30分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">6,600
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    80本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">7,700
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    100本
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">8,800
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    120本(人気No.1)
                                </p>
                                <p class="item-detail">所要時間：60分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">9,900
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    140本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">11,000
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    160本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">12,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    ~200本
                                </p>
                                <p class="item-detail">所要時間：110分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">14,300
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div> 
            <div class="menu-price-item-recommend">
                <ul class="recommend-point">
                    <li>
                        ○まつ毛への負担を軽減したい方
                    </li>
                    <li>
                        ○ボリュームを出したい方
                    </li>
                    <li>
                        ○カラー変更可！＋1,100円(税込)
                    </li>
                    <li>
                        ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                    </li>
                    <br>
                    <li>
                        ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                    </li>
                    <li>
                        ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
                    </li>
                 </ul>
            </div>
        </div>
        <div class="inner inner--sm inner-padding--lg">
        <h3>バインドロック</h3>
        <p class="recommend-ttl-2">
            持続力＆ボリューム
        </p>
        <div class="price">
            <ul class="table">
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                60本
                            </p>
                            <p class="item-detail">所要時間：30分</p>
                        </div>
                        <div class="right c-flex-column--item">
                            <p class="item-price">9,900
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                80本
                            </p>
                            <p class="item-detail">所要時間：90分</p>
                        </div>
                        <div class="right c-flex-column--item">
                            <p class="item-price">11,000
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                100本
                            </p>
                            <p class="item-detail">所要時間：60分</p>
                        </div>
                        <div class="right c-flex-column--item">
                            <p class="item-price">12,100
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                120本(人気No.1)
                            </p>
                            <p class="item-detail">所要時間：90分</p>
                        </div>
                        <div class="right c-flex-column--item">
                            <p class="item-price">13,200
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                140本
                            </p>
                            <p class="item-detail">所要時間：120分</p>
                        </div>
                        <div class="right c-flex-column--item">
                            <p class="item-price">14,300
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                160本
                            </p>
                            <p class="item-detail">所要時間：120分</p>
                        </div>
                        <div class="right c-flex-column--item">
                            <p class="item-price">15,400
                            <i>円（税込）</i>
                            </p>
                        </div>
                    </div>
                </li>
                <li class="item">
                    <div class="c-flex-column-half">
                        <div class="left c-flex-column--item">
                            <p class="item-name">
                                ~200本
                            </p>
                            <p class="item-detail">所要時間：140分</p>
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
        <div class="menu-price-item-recommend">
            <ul class="recommend-point">
                <li>
                    ○マツエクを長持ちさせたい方
                </li>
                <li>
                    ○ボリュームを出したい方
                </li>
                <li>
                    ○カラー変更可！＋1,100円(税込)
                </li>
                <li>
                    ○カールの種類：J/JC/C/CC　○太さ：0.15mm　○長さ：7mm～14mm
                </li>
                <br>
                <li>
                    ※初回＆前回から1ヶ月以内：オフ無料　※前回から1ヶ月以上：＋1,100円(税込)　※他店オフ：＋2,200円(税込)
                </li>
                <li>
                    ※前回のご来店から2ヶ月以上経ってのご来店はメニューの金額から＋1,100円(税込)頂きます。
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
                <ul class="table">
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    フラットラッシュ60分つけ放題＋
                                    <br>
                                    ボリュームラッシュ100本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">11,000
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    フラットラッシュ60分つけ放題＋
                                    <br>
                                    ボリュームラッシュ200本
                                </p>
                                <p class="item-detail">所要時間：90分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">12,100
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    フラットラッシュ60分つけ放題＋
                                    <br>
                                    ボリュームラッシュ300本
                                </p>
                                <p class="item-detail">所要時間：120分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">13,200
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="menu">
        <div class="inner inner--sm inner-padding--lg">
            <h3>オプションメニュー</h3>
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
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    アップワード
                                </p>
                                <p class="item-detail">所要時間：5分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">2,200
                                <i>円（税込）</i>
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    オフ(前回から１ヶ月以上)
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
                    <li class="item">
                        <div class="c-flex-column-half">
                            <div class="left c-flex-column--item">
                                <p class="item-name">
                                    オフ(他店)
                                </p>
                                <p class="item-detail">所要時間：5分</p>
                            </div>
                            <div class="right c-flex-column--item">
                                <p class="item-price">2,200
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
                    ○まつ毛ケア：持続力を高めたい　＆　まつ毛ダニ予防をしたい方
                </li>
                <li>
                    ○アップワード：まつ毛をパッチリ上げたい方
                </l>
            </ul>
        </div>
    </section>
</div>
@endsection