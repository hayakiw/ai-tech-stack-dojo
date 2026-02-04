<?php
$page_title = 'ロゴデザイン - AI×デザイン | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践デザイン制作';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ロゴデザイン</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">ロゴはブランドの顔。AIを活用すれば、コンセプト作りからデザイン案の生成まで効率的に進められます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">ロゴデザインの基本</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">シンプルさ</h4>
                    <p class="text-sm text-gray-600">複雑すぎると覚えにくい。シンプルで印象的なデザインに。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">汎用性</h4>
                    <p class="text-sm text-gray-600">大きくても小さくても、白黒でも認識できる。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">独自性</h4>
                    <p class="text-sm text-gray-600">競合と差別化できる、オリジナリティのあるデザイン。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">時代を超える</h4>
                    <p class="text-sm text-gray-600">トレンドに左右されない、長く使えるデザイン。</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">ロゴの種類</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600">ワードマーク（ロゴタイプ）</h4>
                    <p class="text-sm text-gray-600 mt-1">社名・ブランド名をデザイン化。例：Google、Coca-Cola</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600">シンボルマーク</h4>
                    <p class="text-sm text-gray-600 mt-1">図形やアイコン。例：Apple、Nike</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600">コンビネーションマーク</h4>
                    <p class="text-sm text-gray-600 mt-1">シンボル＋文字の組み合わせ。例：Starbucks、Adidas</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600">エンブレム</h4>
                    <p class="text-sm text-gray-600 mt-1">紋章・バッジ型。例：Harley-Davidson、NFL</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIでロゴを作る手順</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 1: コンセプトを固める（Gemini）</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のブランドのロゴコンセプトを考えてください。

【ブランド名】Coffee Garden
【業種】カフェ
【コンセプト】緑に囲まれた癒しの空間
【ターゲット】20-40代、リラックスしたい人

以下を提案してください：
1. ロゴのタイプ（ワードマーク/シンボル/コンビネーション）
2. 使用するモチーフ
3. 配色（HEXコード付き）
4. フォントのイメージ
5. デザインの方向性</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 2: 画像生成AIでアイデア出し</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">シンプルでモダンなロゴデザイン、
カフェ「Coffee Garden」用、
緑の葉っぱとコーヒーカップを組み合わせたモチーフ、
ミニマリスト、フラットデザイン、
白い背景、ベクターアートスタイル</pre>
                    </div>
                    <p class="text-sm text-gray-500 mt-3">※生成AIのロゴはそのまま使わず、参考・ラフとして活用</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-fuchsia-600 mb-3">Step 3: Canvaで仕上げる</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>・Canvaのロゴテンプレートを活用</li>
                        <li>・AIで得たアイデアを参考にカスタマイズ</li>
                        <li>・フォントや色を調整</li>
                        <li>・SVGまたは高解像度PNGで書き出し</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">注意点</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-3 text-sm">
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">⚠</span>
                        <span><strong>AI生成ロゴをそのまま使わない</strong>：類似デザインが存在する可能性。参考・ラフ案として活用。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">⚠</span>
                        <span><strong>商標調査を行う</strong>：類似ロゴがないか確認。特許情報プラットフォーム（J-PlatPat）で検索可能。</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">⚠</span>
                        <span><strong>ベクター形式で保存</strong>：拡大しても劣化しないSVG形式が推奨。</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>ロゴはシンプル、汎用性、独自性が重要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Geminiでコンセプトを固める</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>画像生成AIはアイデア出しに活用</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>Canvaで仕上げてSVGで書き出し</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-design-workflow.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIデザインワークフロー
            </a>
            <a href="banner-design.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：バナーデザイン
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
