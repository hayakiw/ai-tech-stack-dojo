<?php
$page_title = '高度な分析手法 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">高度な分析手法</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">基礎を押さえたら、より高度な分析手法にも挑戦してみましょう。AIを使えば、専門知識がなくてもこれらの手法を活用できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">分析手法の種類</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600 mb-2">コホート分析</h3>
                    <p class="text-sm text-gray-600 mb-2">同じ時期に獲得した顧客グループの行動を追跡</p>
                    <p class="text-xs text-gray-500">活用例：顧客の離脱時期の特定、LTVの予測</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600 mb-2">RFM分析</h3>
                    <p class="text-sm text-gray-600 mb-2">Recency（最終購入日）、Frequency（頻度）、Monetary（金額）で顧客をセグメント</p>
                    <p class="text-xs text-gray-500">活用例：優良顧客の特定、離脱リスク顧客の発見</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600 mb-2">ABC分析</h3>
                    <p class="text-sm text-gray-600 mb-2">売上貢献度で商品・顧客をA/B/Cランクに分類</p>
                    <p class="text-xs text-gray-500">活用例：在庫管理、営業リソース配分</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600 mb-2">ファネル分析</h3>
                    <p class="text-sm text-gray-600 mb-2">購買プロセスの各段階での離脱率を分析</p>
                    <p class="text-xs text-gray-500">活用例：Webサイトの改善、営業プロセスの最適化</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600 mb-2">予測分析</h3>
                    <p class="text-sm text-gray-600 mb-2">過去データから将来を予測（回帰分析、時系列分析）</p>
                    <p class="text-xs text-gray-500">活用例：売上予測、需要予測、解約予測</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIで高度な分析</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">RFM分析を依頼</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の顧客購買データでRFM分析を行ってください。

[データ：顧客ID、購入日、購入金額]

【分析してほしいこと】
1. R（最終購入日）、F（購入頻度）、M（購入金額）を計算
2. 各指標を5段階でスコアリング
3. 顧客をセグメント分類（例：優良顧客、新規顧客、離脱リスク顧客）
4. 各セグメントへのマーケティング施策を提案

スプレッドシートで実行できる手順も教えてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">予測分析を依頼</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の過去24ヶ月の売上データから、今後6ヶ月の売上を予測してください。

[データ：月、売上金額]

【分析してほしいこと】
1. トレンド（増加/減少傾向）の分析
2. 季節性の有無
3. 今後6ヶ月の予測値と予測根拠
4. 予測の信頼区間（上限・下限）

グラフで表示できるデータ形式も出力してください。</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">まとめ</h2>
            <div class="bg-emerald-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>コホート、RFM、ABC、ファネル、予測分析が代表的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>目的に応じて適切な分析手法を選ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIに分析を依頼すれば専門知識がなくても実行可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>分析結果は必ずビジネスアクションにつなげる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="data-storytelling.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：データストーリーテリング
            </a>
            <a href="next-steps.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
