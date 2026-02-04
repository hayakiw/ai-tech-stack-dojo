<?php
$page_title = 'レスポンシブデザイン - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：Web制作の基礎知識';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">レスポンシブデザイン</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">レスポンシブデザインとは、PC・タブレット・スマホなど、どんな画面サイズでも美しく表示されるデザイン手法です。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">なぜレスポンシブが必要？</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-orange-600">デバイス別アクセス比率（一般的な傾向）</h3>
                <div class="space-y-3">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>📱 スマートフォン</span>
                            <span class="font-bold">60-70%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-orange-500 h-3 rounded-full" style="width: 65%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>💻 PC</span>
                            <span class="font-bold">25-35%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-blue-500 h-3 rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span>📲 タブレット</span>
                            <span class="font-bold">5-10%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-3">
                            <div class="bg-green-500 h-3 rounded-full" style="width: 8%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>重要：</strong>現在のWebアクセスの半分以上はスマホから。スマホで見にくいサイトは、多くのユーザーを失います。</p>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">レスポンシブの実装方法</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">1. ビューポートの設定</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">HTMLのhead内に必須。これがないとスマホで正しく表示されません。</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">2. メディアクエリ</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre><code>/* PC（768px以上） */
@media (min-width: 768px) {
    .container { max-width: 1200px; }
}

/* スマホ（768px未満） */
@media (max-width: 767px) {
    .menu { display: none; }
}</code></pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-orange-600">3. Tailwind CSSなら簡単</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre><code>&lt;!-- スマホで1列、PCで3列 --&gt;
&lt;div class="grid grid-cols-1 md:grid-cols-3 gap-4"&gt;
    &lt;div&gt;カード1&lt;/div&gt;
    &lt;div&gt;カード2&lt;/div&gt;
    &lt;div&gt;カード3&lt;/div&gt;
&lt;/div&gt;

&lt;!-- スマホで非表示、PCで表示 --&gt;
&lt;div class="hidden md:block"&gt;PCのみ表示&lt;/div&gt;</code></pre>
                    </div>
                    <p class="text-sm text-gray-600 mt-2"><code>md:</code>プレフィックスで768px以上の場合のスタイルを指定</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIでレスポンシブ対応</h2>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">プロンプト例：</p>
                <pre class="text-sm whitespace-pre-wrap">以下のレイアウトをTailwind CSSでレスポンシブ対応してください。

【PC（768px以上）】
・ヘッダー：ロゴ左、ナビ右に横並び
・メイン：3カラムグリッド
・フッター：4列のリンク

【スマホ（768px未満）】
・ヘッダー：ロゴ中央、ハンバーガーメニュー
・メイン：1カラム縦並び
・フッター：2列

モバイルファーストで書いてください。</pre>
            </div>

            <div class="bg-blue-50 border-l-4 border-blue-500 p-4">
                <p><strong>モバイルファースト：</strong>まずスマホ用のスタイルを書き、PCは後から追加する考え方。現代のWeb制作では主流です。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>レスポンシブは現代のWeb制作に必須</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>ビューポート設定を忘れずに</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>Tailwindなら md: プレフィックスで簡単実装</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>モバイルファーストで設計する</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="css-basics.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：CSSの基礎
            </a>
            <a href="design-principles.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：デザインの基本原則
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
