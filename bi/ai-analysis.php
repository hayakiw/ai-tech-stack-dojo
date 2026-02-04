<?php
$page_title = 'AIでデータ分析 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'ai';
$section_name = '第2部：AI×分析ツール';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIでデータ分析</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">ChatGPTやClaudeにデータを渡せば、自然言語で分析を依頼できます。統計知識がなくても、AIが分析をサポートしてくれます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでできるデータ分析</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">基本統計の計算</h4>
                    <p class="text-sm text-gray-600">平均、中央値、標準偏差、相関係数など</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">傾向・パターン発見</h4>
                    <p class="text-sm text-gray-600">データの特徴、異常値、季節性を検出</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">比較分析</h4>
                    <p class="text-sm text-gray-600">期間比較、グループ間比較、ベンチマーク</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">分析コード生成</h4>
                    <p class="text-sm text-gray-600">Excel関数、Pythonコード、SQLクエリを作成</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">データ分析のプロンプト例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">データの概要を把握</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の売上データを分析してください。

[CSVデータをここに貼り付け]

【分析してほしいこと】
1. データの基本統計（合計、平均、最大、最小）
2. 主要な傾向やパターン
3. 注目すべき特徴や異常値
4. 追加で調べるべき観点

わかりやすく表形式でまとめてください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">比較分析</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の2つの期間のデータを比較分析してください。

【前年同期】
[データ]

【今期】
[データ]

【分析観点】
・増減率と主な変動要因
・改善/悪化しているカテゴリ
・今後の対策として考えられること</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">相関分析</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のデータから、売上に影響を与えている要因を分析してください。

[データ：日付、売上、広告費、気温、曜日など]

【知りたいこと】
・売上と各変数の相関関係
・売上に最も影響が大きい要因
・売上を伸ばすためのアクション案</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">分析精度を上げるコツ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">データの背景を伝える</h4>
                        <p class="text-sm text-gray-600">業種、データの取得方法、期間などの文脈を共有</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">分析の目的を明確に</h4>
                        <p class="text-sm text-gray-600">「何を知りたいのか」「何に使うのか」を具体的に</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">出力形式を指定</h4>
                        <p class="text-sm text-gray-600">表形式、箇条書き、グラフ用データなど希望を伝える</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">深掘りする</h4>
                        <p class="text-sm text-gray-600">最初の回答を受けて、追加質問で分析を深める</p>
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
                        <span>AIにデータを渡して自然言語で分析を依頼</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>基本統計、傾向把握、比較分析、相関分析が可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>背景・目的・出力形式を明確にすると精度向上</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>追加質問で分析を深掘りする</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="visualization.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：データ可視化
            </a>
            <a href="ai-insights.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：AIでインサイト発見
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
