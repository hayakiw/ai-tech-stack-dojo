<?php
$page_title = 'AIでレポート作成 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×分析ツール';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでレポート作成</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">分析結果をレポートにまとめる作業は時間がかかるもの。AIを活用すれば、構成から文章作成まで効率的にレポートを作成できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">レポートの基本構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">1</span>
                        <div>
                            <h4 class="font-bold">エグゼクティブサマリー</h4>
                            <p class="text-sm text-gray-600">結論・重要ポイントを最初に。忙しい人向け</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">2</span>
                        <div>
                            <h4 class="font-bold">分析の背景・目的</h4>
                            <p class="text-sm text-gray-600">なぜこの分析を行ったのか</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">3</span>
                        <div>
                            <h4 class="font-bold">データと分析手法</h4>
                            <p class="text-sm text-gray-600">使用したデータと分析アプローチ</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">4</span>
                        <div>
                            <h4 class="font-bold">分析結果</h4>
                            <p class="text-sm text-gray-600">グラフや表を使ってわかりやすく</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">5</span>
                        <div>
                            <h4 class="font-bold">考察・示唆</h4>
                            <p class="text-sm text-gray-600">結果から何が言えるか、ビジネスへの影響</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">6</span>
                        <div>
                            <h4 class="font-bold">推奨アクション</h4>
                            <p class="text-sm text-gray-600">具体的な次のステップを提案</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでレポート作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">レポート構成を作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の分析結果をもとに、経営層向けレポートの構成を作成してください。

【分析テーマ】
第3四半期の売上分析

【分析結果】
・売上：前年比105%
・商品Aが好調（+20%）、商品Bが不調（-15%）
・新規顧客が減少、既存顧客のLTVは向上
・ECチャネルが大幅成長（+40%）

【レポートの目的】
・四半期の振り返り
・第4四半期の戦略検討

各セクションで書くべき内容も簡潔に示してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">本文を作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のデータと分析結果をもとに、
「分析結果」セクションの本文を作成してください。

【データ】
[グラフ用データや数値]

【分析結果の要点】
・商品Aが好調な理由：新機能リリースとSNSでの話題化
・商品Bが不調な理由：競合の新製品投入

【トーン】
・客観的かつ簡潔に
・専門用語は避ける
・300文字程度

グラフの説明文も含めてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">サマリーを作成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のレポート内容を、エグゼクティブサマリー（要約）にまとめてください。

[レポート本文]

【条件】
・3つの重要ポイントに絞る
・具体的な数値を含める
・推奨アクションを1つ明記
・200文字以内

経営層が30秒で要点を把握できる内容にしてください。</pre>
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
                        <span>レポートは結論から。サマリー→詳細の流れ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIに構成作成→本文作成→サマリー作成を依頼</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>読者（経営層、現場など）に合わせたトーンで</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>必ず推奨アクションを含める</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-insights.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでインサイト発見
            </a>
            <a href="bi-tools.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：BIツール入門
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
