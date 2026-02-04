<?php
$page_title = 'データ可視化 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：データ分析の基礎';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データ可視化</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">データは見せ方で伝わり方が変わる。適切なグラフを選び、効果的に可視化することで、インサイトが伝わります。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">グラフの種類と使い分け</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="text-3xl mb-2">📊</div>
                    <h3 class="font-bold text-emerald-600">棒グラフ</h3>
                    <p class="text-sm text-gray-600 mt-1">カテゴリ間の比較に最適</p>
                    <p class="text-xs text-gray-500 mt-2">例：商品別売上、地域別顧客数</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="text-3xl mb-2">📈</div>
                    <h3 class="font-bold text-emerald-600">折れ線グラフ</h3>
                    <p class="text-sm text-gray-600 mt-1">時系列の推移を表現</p>
                    <p class="text-xs text-gray-500 mt-2">例：月次売上推移、アクセス数推移</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="text-3xl mb-2">🥧</div>
                    <h3 class="font-bold text-emerald-600">円グラフ</h3>
                    <p class="text-sm text-gray-600 mt-1">全体に対する割合を表現</p>
                    <p class="text-xs text-gray-500 mt-2">例：売上構成比、顧客セグメント比率</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="text-3xl mb-2">🔵</div>
                    <h3 class="font-bold text-emerald-600">散布図</h3>
                    <p class="text-sm text-gray-600 mt-1">2つの変数の相関関係を表現</p>
                    <p class="text-xs text-gray-500 mt-2">例：広告費と売上の関係</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="text-3xl mb-2">📉</div>
                    <h3 class="font-bold text-emerald-600">面グラフ</h3>
                    <p class="text-sm text-gray-600 mt-1">時系列の累積・構成を表現</p>
                    <p class="text-xs text-gray-500 mt-2">例：チャネル別売上の推移</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="text-3xl mb-2">🗺️</div>
                    <h3 class="font-bold text-emerald-600">ヒートマップ</h3>
                    <p class="text-sm text-gray-600 mt-1">2次元データの濃淡で表現</p>
                    <p class="text-xs text-gray-500 mt-2">例：時間帯×曜日のアクセス数</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">可視化のベストプラクティス</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">シンプルに保つ</h4>
                            <p class="text-sm text-gray-600">1つのグラフで伝えるメッセージは1つ。装飾は最小限に</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">適切なスケールを使う</h4>
                            <p class="text-sm text-gray-600">軸の始点は0から。誤解を招くスケールは避ける</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">色は意味を持たせる</h4>
                            <p class="text-sm text-gray-600">強調したい部分に色を使う。多すぎる色は避ける</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <div>
                            <h4 class="font-bold">タイトルと凡例を明確に</h4>
                            <p class="text-sm text-gray-600">何を表しているか一目でわかるようにする</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIで可視化を相談</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">最適なグラフを提案してもらう</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のデータを可視化したいです。
最適なグラフの種類と、その理由を教えてください。

【データ】
・過去12ヶ月の売上データ
・商品カテゴリ（5種類）ごとの金額

【伝えたいこと】
・各カテゴリの売上推移
・カテゴリ間の比較
・季節性の有無

Excelまたはスプレッドシートで作成する想定です。</pre>
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
                        <span>データの性質に合ったグラフを選ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>比較→棒グラフ、推移→折れ線、構成比→円グラフ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>シンプルで誤解のない表現を心がける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIに最適なグラフ選びを相談できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="spreadsheet.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：スプレッドシート活用
            </a>
            <a href="ai-analysis.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：AIでデータ分析
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
