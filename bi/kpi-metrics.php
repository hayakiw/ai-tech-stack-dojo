<?php
$page_title = 'KPI・指標設計 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：BIツール実践';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">KPI・指標設計</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">「測れないものは管理できない」。適切なKPIを設計することで、目標達成に向けた進捗を可視化し、改善アクションにつなげられます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">KPIとKGIの違い</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">KGI（重要目標達成指標）</h3>
                    <p class="text-sm text-gray-600 mb-3">最終的に達成したいゴール</p>
                    <div class="bg-emerald-50 p-3 rounded">
                        <p class="text-sm">例：年間売上10億円、顧客満足度90%</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">KPI（重要業績評価指標）</h3>
                    <p class="text-sm text-gray-600 mb-3">KGI達成に向けた中間指標</p>
                    <div class="bg-emerald-50 p-3 rounded">
                        <p class="text-sm">例：月間商談数50件、CVR 3%</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">良いKPIの条件（SMART）</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded font-bold mr-3">S</span>
                        <div>
                            <h4 class="font-bold">Specific（具体的）</h4>
                            <p class="text-sm text-gray-600">曖昧さがなく、何を測るか明確</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded font-bold mr-3">M</span>
                        <div>
                            <h4 class="font-bold">Measurable（測定可能）</h4>
                            <p class="text-sm text-gray-600">数値で測定できる</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded font-bold mr-3">A</span>
                        <div>
                            <h4 class="font-bold">Achievable（達成可能）</h4>
                            <p class="text-sm text-gray-600">現実的に達成できる目標値</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded font-bold mr-3">R</span>
                        <div>
                            <h4 class="font-bold">Relevant（関連性）</h4>
                            <p class="text-sm text-gray-600">KGIの達成に貢献する</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded font-bold mr-3">T</span>
                        <div>
                            <h4 class="font-bold">Time-bound（期限付き）</h4>
                            <p class="text-sm text-gray-600">いつまでに達成するか明確</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">部門別KPI例</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2 text-emerald-600">部門</th>
                            <th class="text-left py-2 text-emerald-600">KPI例</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 font-bold">営業</td>
                            <td class="py-3">商談数、受注率、客単価、リードタイム</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">マーケティング</td>
                            <td class="py-3">リード数、CVR、CPA、LTV</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">カスタマーサクセス</td>
                            <td class="py-3">解約率、NPS、アップセル率</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-bold">EC</td>
                            <td class="py-3">訪問者数、カート投入率、購入完了率</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-bold">人事</td>
                            <td class="py-3">採用充足率、離職率、エンゲージメントスコア</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでKPI設計</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">KPIを提案してもらう</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の事業のKPIを設計してください。

【事業内容】
BtoB SaaSサービス（月額課金モデル）

【KGI】
年間売上3億円（現在1.5億円）

【現状の課題】
・新規顧客獲得が伸び悩み
・解約率が高い（月5%）

【求めるKPI】
・営業、マーケティング、カスタマーサクセスの各部門
・週次で追跡可能なもの
・目標値の目安も提案

SMART条件を満たすKPIでお願いします。</pre>
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
                        <span>KGI（ゴール）とKPI（中間指標）を区別する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>SMART条件を満たすKPIを設計</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>部門・役割に応じたKPIを設定</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIにKPI設計を相談して効率化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="dashboard.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ダッシュボード作成
            </a>
            <a href="data-storytelling.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：データストーリーテリング
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
