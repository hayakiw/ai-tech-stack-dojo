<?php
$page_title = 'AIでインサイト発見 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×分析ツール';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでインサイト発見</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">インサイトとは「データから得られる洞察」。AIは人間が見落としがちなパターンや関係性を発見し、ビジネスに活かせるインサイトを提案してくれます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">インサイトの種類</h2>

            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-3">🔍</div>
                    <h3 class="font-bold text-emerald-600 mb-2">発見型</h3>
                    <p class="text-sm text-gray-600">予想外の事実やパターンを発見</p>
                    <p class="text-xs text-gray-500 mt-2">例：特定の曜日に売上が急増</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-3">⚠️</div>
                    <h3 class="font-bold text-emerald-600 mb-2">警告型</h3>
                    <p class="text-sm text-gray-600">問題やリスクを早期に検出</p>
                    <p class="text-xs text-gray-500 mt-2">例：顧客離脱率が上昇傾向</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-3">💡</div>
                    <h3 class="font-bold text-emerald-600 mb-2">機会型</h3>
                    <p class="text-sm text-gray-600">ビジネスチャンスを特定</p>
                    <p class="text-xs text-gray-500 mt-2">例：未開拓の顧客セグメント</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでインサイトを引き出すプロンプト</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">気づきを発見する</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のデータから、ビジネスに役立つインサイトを発見してください。

[データを貼り付け]

【特に注目してほしい観点】
・通常と異なるパターンや異常値
・成功している要因（売上が高い時の共通点）
・改善できそうなポイント
・競合と差別化できそうな強み

5つ以上のインサイトを、重要度順に教えてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">Why?を深掘りする</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のデータで、3月の売上が前月比で30%減少しています。

[データ]

【質問】
1. 考えられる原因は何ですか？
2. どのような追加データがあれば原因を特定できますか？
3. 同様の問題を防ぐための対策案は？

データからわかる範囲で仮説を立ててください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">アクション提案を求める</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の分析結果から、具体的なアクションプランを提案してください。

【分析結果】
・商品Aの売上は好調だが、商品Bは低迷
・20代顧客の購入が減少傾向
・週末の売上が平日の2倍

【制約条件】
・予算：月100万円
・人員：マーケティング担当2名
・期間：3ヶ月

優先度と期待効果も含めて教えてください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">インサイトを活かすポイント</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">1</span>
                        <div>
                            <h4 class="font-bold">So What?（だから何？）</h4>
                            <p class="text-sm text-gray-600">発見した事実がビジネスにどう影響するか考える</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">2</span>
                        <div>
                            <h4 class="font-bold">Now What?（次に何をする？）</h4>
                            <p class="text-sm text-gray-600">インサイトを具体的なアクションに落とし込む</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">3</span>
                        <div>
                            <h4 class="font-bold">検証する</h4>
                            <p class="text-sm text-gray-600">アクションの効果を測定し、仮説を検証する</p>
                        </div>
                    </div>
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
                        <span>インサイトは発見型・警告型・機会型の3種類</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIに「気づき」「Why?」「アクション」を問いかける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>So What? → Now What? → 検証のサイクルを回す</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>インサイトはアクションに落とし込んでこそ価値がある</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-analysis.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでデータ分析
            </a>
            <a href="ai-reporting.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：AIでレポート作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
