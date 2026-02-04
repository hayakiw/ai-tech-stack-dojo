<?php
$page_title = 'マーケティングとは - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：マーケティングの基礎知識';
$step_number = 1;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">マーケティングとは</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">マーケティングは「売れる仕組み」を作ること。難しそうに聞こえますが、基本を押さえれば誰でも実践できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">マーケティングの本質</h2>

            <p class="mb-4">マーケティングとは、簡単に言うと「お客さんが欲しいものを、欲しい時に、欲しい形で届ける」ための活動です。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-teal-600">マーケティング = 売り込まなくても売れる状態を作ること</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-red-50 p-4 rounded">
                        <h4 class="font-bold text-red-600 mb-2">従来の営業スタイル</h4>
                        <ul class="text-sm space-y-1">
                            <li>・飛び込み営業</li>
                            <li>・しつこい電話</li>
                            <li>・押し売り</li>
                        </ul>
                    </div>
                    <div class="bg-green-50 p-4 rounded">
                        <h4 class="font-bold text-green-600 mb-2">マーケティング思考</h4>
                        <ul class="text-sm space-y-1">
                            <li>・お客さんから来てもらう</li>
                            <li>・価値を伝える</li>
                            <li>・信頼関係を築く</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mb-6">
                <p><strong>ポイント：</strong>マーケティングは「売り込む」のではなく「見つけてもらう」「選んでもらう」仕組みを作ることです。</p>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">マーケティングの4P</h2>

            <p class="mb-4">マーケティングを考える基本フレームワークとして「4P」があります。</p>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-2">📦</div>
                    <h3 class="font-bold text-lg mb-2">Product（製品）</h3>
                    <p class="text-gray-600 text-sm">何を売るか？お客さんのどんな問題を解決するか？</p>
                    <p class="text-teal-600 text-sm mt-2">例：オンライン英会話サービス</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-2">💰</div>
                    <h3 class="font-bold text-lg mb-2">Price（価格）</h3>
                    <p class="text-gray-600 text-sm">いくらで売るか？価値に見合った価格か？</p>
                    <p class="text-teal-600 text-sm mt-2">例：月額9,800円</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-2">🏪</div>
                    <h3 class="font-bold text-lg mb-2">Place（流通）</h3>
                    <p class="text-gray-600 text-sm">どこで売るか？どうやって届けるか？</p>
                    <p class="text-teal-600 text-sm mt-2">例：自社サイト、アプリ</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-2">📣</div>
                    <h3 class="font-bold text-lg mb-2">Promotion（販促）</h3>
                    <p class="text-gray-600 text-sm">どうやって知ってもらうか？</p>
                    <p class="text-teal-600 text-sm mt-2">例：SNS広告、YouTube</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIがマーケティングを変える</h2>

            <p class="mb-4">AIの登場により、マーケティングの効率は飛躍的に向上しました。</p>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold mb-4">AIで効率化できること</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-sm mr-3">文章作成</span>
                        <span>ブログ記事、SNS投稿、広告コピーの下書き</span>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-sm mr-3">市場調査</span>
                        <span>競合分析、トレンド調査の効率化</span>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-sm mr-3">データ分析</span>
                        <span>アクセス解析、顧客データの分析</span>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-sm mr-3">アイデア出し</span>
                        <span>企画のブレスト、新しい切り口の発見</span>
                    </div>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>このコースでは：</strong>AIツール（ChatGPT、Claude等）を活用したマーケティングの実践方法を、具体的なプロンプト例とともに学んでいきます。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>マーケティングは「売れる仕組み」を作ること</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>4P（製品・価格・流通・販促）が基本フレームワーク</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIを活用することで効率が大幅にアップ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>「売り込む」から「見つけてもらう」への発想転換</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                トップページ
            </a>
            <a href="digital-marketing.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：デジタルマーケティング入門
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
