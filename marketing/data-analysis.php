<?php
$page_title = 'データ分析×AI - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 8;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データ分析×AI</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">マーケティングデータの分析もAIにお任せ。専門知識がなくても、AIがデータから意味のあるインサイトを引き出してくれます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIでできるデータ分析</h2>

            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📊</span>
                    <h4 class="font-bold mt-2 mb-1">アクセス解析</h4>
                    <p class="text-sm text-gray-600">GA4データの解釈、改善提案</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">📈</span>
                    <h4 class="font-bold mt-2 mb-1">売上データ分析</h4>
                    <p class="text-sm text-gray-600">トレンド把握、予測</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">🔍</span>
                    <h4 class="font-bold mt-2 mb-1">競合分析</h4>
                    <p class="text-sm text-gray-600">競合情報の整理、比較</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <span class="text-2xl">👥</span>
                    <h4 class="font-bold mt-2 mb-1">顧客分析</h4>
                    <p class="text-sm text-gray-600">顧客セグメント、行動パターン</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIにデータを分析してもらう方法</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">方法1: データをテキストで共有</h3>
                    <p class="mb-4">Excelやスプレッドシートの内容をコピー&ペーストしてAIに渡します。</p>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のアクセスデータを分析してください。

月, PV, UU, 直帰率, 平均滞在時間
1月, 15000, 8000, 65%, 2:30
2月, 18000, 9500, 62%, 2:45
3月, 22000, 11000, 58%, 3:00
4月, 19000, 10000, 60%, 2:50

以下の観点で分析してください：
1. トレンドの把握
2. 改善ポイント
3. 次月の予測
4. 具体的な改善施策</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">方法2: CSVファイルをアップロード（有料版）</h3>
                    <p class="mb-4">ChatGPT Plus/ClaudeではファイルをアップロードしてAIに分析させることができます。</p>
                    <div class="bg-gray-50 p-4 rounded">
                        <ol class="text-sm space-y-2">
                            <li>1. ExcelやGA4からCSVをエクスポート</li>
                            <li>2. チャット画面にファイルをドラッグ&ドロップ</li>
                            <li>3. 「このデータを分析して、改善点を教えてください」と指示</li>
                        </ol>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">方法3: スクリーンショットで共有</h3>
                    <p class="mb-4">グラフやダッシュボードのスクリーンショットをアップロードして分析させることも可能です。</p>
                    <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                        <p class="text-sm"><strong>注意：</strong>機密データや個人情報が含まれる画像はアップロードしないでください。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">分析プロンプトの例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">📊 GA4データ分析</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">Google Analytics 4のデータを分析してマーケティング改善提案をしてください。

【データ期間】2024年1月〜3月
【データ】（ここにデータを貼り付け）

以下の観点で分析をお願いします：
1. トラフィックソース別のパフォーマンス
2. コンバージョン率の改善ポイント
3. ユーザー行動の特徴
4. 具体的な改善アクション（優先度付き）</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">📈 売上データ分析</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の売上データからインサイトを抽出してください。

【データ】（ここにデータを貼り付け）

知りたいこと：
1. 売上の季節変動パターン
2. 成長率の推移
3. 売上に影響を与えている要因の仮説
4. 来月の売上予測と根拠
5. 売上向上のための施策提案</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-teal-600">🔍 競合分析</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の情報をもとに競合分析をしてください。

【自社】
・商品：〇〇
・価格：〇〇円
・強み：〇〇
・弱み：〇〇

【競合A】
（同様に記載）

【競合B】
（同様に記載）

分析してほしいこと：
1. 自社のポジショニング
2. 競合との差別化ポイント
3. 自社が勝てる領域
4. 改善すべき領域</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIデータ分析の注意点</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">データの正確性は自分で確認</h4>
                        <p class="text-sm text-gray-600">AIの計算結果は必ずしも正確ではありません。重要な数値は再確認しましょう。</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">因果関係と相関関係は違う</h4>
                        <p class="text-sm text-gray-600">AIが示す関係性は相関であって、必ずしも因果関係ではありません。</p>
                    </div>
                </div>
                <div class="bg-white p-4 rounded-lg shadow flex items-start">
                    <span class="text-yellow-500 text-xl mr-3">⚠️</span>
                    <div>
                        <h4 class="font-bold mb-1">機密データは入力しない</h4>
                        <p class="text-sm text-gray-600">個人情報や社外秘データはAIに入力しないでください。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>テキスト、CSV、画像でAIにデータを共有できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>分析の観点を明確に指示すると良い結果が得られる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIの分析結果は参考として活用し、最終判断は人間が行う</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>機密データの取り扱いには十分注意する</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="prompting.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：プロンプト術
            </a>
            <a href="sns-marketing.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：SNS×AI
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
