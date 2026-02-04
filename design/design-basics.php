<?php
$page_title = 'デザインの基礎 - AI×デザイン | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：デザインの基礎知識';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">デザインの基礎</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">良いデザインには法則があります。デザインの4原則を理解すれば、誰でもプロっぽいデザインが作れるようになります。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">デザインの4原則</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-3">1. 近接（Proximity）</h3>
                    <p class="text-gray-600 mb-3">関連する要素は近くに、関連しない要素は離して配置する。</p>
                    <div class="bg-gray-100 p-4 rounded">
                        <p class="text-sm"><strong>例：</strong>名刺では、名前と役職は近くに、住所と連絡先は別のグループに</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-3">2. 整列（Alignment）</h3>
                    <p class="text-gray-600 mb-3">すべての要素を意図的に揃える。何かに沿わせる。</p>
                    <div class="bg-gray-100 p-4 rounded">
                        <p class="text-sm"><strong>例：</strong>左揃え、中央揃え、右揃えを統一。要素の端を揃える</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-3">3. 反復（Repetition）</h3>
                    <p class="text-gray-600 mb-3">色、フォント、形などのデザイン要素を繰り返し使う。</p>
                    <div class="bg-gray-100 p-4 rounded">
                        <p class="text-sm"><strong>例：</strong>見出しは常に同じフォント・色、アイコンは同じスタイル</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-3">4. コントラスト（Contrast）</h3>
                    <p class="text-gray-600 mb-3">異なる要素は思い切り違いを出す。中途半端は避ける。</p>
                    <div class="bg-gray-100 p-4 rounded">
                        <p class="text-sm"><strong>例：</strong>大きい見出しと小さい本文、太い文字と細い文字</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">レイアウトの基本</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">余白（ホワイトスペース）</h4>
                    <p class="text-sm text-gray-600">詰め込みすぎない。余白が読みやすさと高級感を生む。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">視線の流れ</h4>
                    <p class="text-sm text-gray-600">左上から右下へ（Z型）または上から下へ（F型）。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">グリッドシステム</h4>
                    <p class="text-sm text-gray-600">要素を整然と配置するための見えない線。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">黄金比・三分割法</h4>
                    <p class="text-sm text-gray-600">美しいバランスを作る数学的な比率。</p>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIにデザイン原則を教えてもらう</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-fuchsia-600 mb-3">Geminiへのプロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のデザインを「デザインの4原則」で分析してください。

【デザイン内容】
・カフェのチラシ
・店名、メニュー、営業時間、住所が配置されている
・全体的にごちゃごちゃして見える

改善点と具体的なアドバイスを教えてください。</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>デザインの4原則：近接・整列・反復・コントラスト</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>余白を恐れない、詰め込みすぎない</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>視線の流れを意識した配置</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIに分析やアドバイスを求められる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                トップへ戻る
            </a>
            <a href="design-thinking.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：デザイン思考
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
