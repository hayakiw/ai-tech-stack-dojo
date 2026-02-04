<?php
$page_title = 'AI×データ分析・BI | AI Tech Stack';
$current_page = 'home';

include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×データ分析・BI</h1>
            <p class="text-xl mb-6 opacity-90">データから価値を引き出し、ビジネスの意思決定を支援</p>
            <p class="text-lg opacity-75 mb-8">AIを活用してデータ分析を効率化し、インサイトを発見しよう</p>
            <a href="data-basics.php" class="inline-block bg-white text-emerald-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">
                学習を始める
            </a>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このコースで学べること</h2>
            <div class="grid md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="font-bold mb-2">データ分析基礎</h3>
                    <p class="text-sm text-gray-600">データの種類、収集、可視化の基本を習得</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">AI分析ツール</h3>
                    <p class="text-sm text-gray-600">AIでデータ分析・レポート作成を効率化</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">📈</div>
                    <h3 class="font-bold mb-2">BIツール実践</h3>
                    <p class="text-sm text-gray-600">ダッシュボード作成とKPI設計</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">💡</div>
                    <h3 class="font-bold mb-2">意思決定支援</h3>
                    <p class="text-sm text-gray-600">データストーリーテリングで伝える力</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 学習ロードマップ -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">学習ロードマップ</h2>
            <div class="max-w-4xl mx-auto space-y-8">
                <!-- 第1部 -->
                <div class="bg-emerald-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-emerald-600">第1部：データ分析の基礎</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="data-basics.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-emerald-500 text-white px-2 py-1 rounded text-sm mr-3">1</span>
                                <span>データ分析の基本</span>
                            </div>
                        </a>
                        <a href="data-types.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-emerald-500 text-white px-2 py-1 rounded text-sm mr-3">2</span>
                                <span>データの種類と収集</span>
                            </div>
                        </a>
                        <a href="spreadsheet.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-emerald-500 text-white px-2 py-1 rounded text-sm mr-3">3</span>
                                <span>スプレッドシート活用</span>
                            </div>
                        </a>
                        <a href="visualization.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-emerald-500 text-white px-2 py-1 rounded text-sm mr-3">4</span>
                                <span>データ可視化</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第2部 -->
                <div class="bg-green-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-green-600">第2部：AI×分析ツール</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="ai-analysis.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-sm mr-3">5</span>
                                <span>AIでデータ分析</span>
                            </div>
                        </a>
                        <a href="ai-insights.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-sm mr-3">6</span>
                                <span>AIでインサイト発見</span>
                            </div>
                        </a>
                        <a href="ai-reporting.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-sm mr-3">7</span>
                                <span>AIでレポート作成</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第3部 -->
                <div class="bg-teal-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-teal-600">第3部：BIツール実践</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="bi-tools.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-teal-500 text-white px-2 py-1 rounded text-sm mr-3">8</span>
                                <span>BIツール入門</span>
                            </div>
                        </a>
                        <a href="dashboard.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-teal-500 text-white px-2 py-1 rounded text-sm mr-3">9</span>
                                <span>ダッシュボード作成</span>
                            </div>
                        </a>
                        <a href="kpi-metrics.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-teal-500 text-white px-2 py-1 rounded text-sm mr-3">10</span>
                                <span>KPI・指標設計</span>
                            </div>
                        </a>
                        <a href="data-storytelling.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-teal-500 text-white px-2 py-1 rounded text-sm mr-3">11</span>
                                <span>データストーリーテリング</span>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第4部 -->
                <div class="bg-cyan-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-cyan-600">第4部：応用とサポート</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="advanced-analysis.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-cyan-500 text-white px-2 py-1 rounded text-sm mr-3">12</span>
                                <span>高度な分析手法</span>
                            </div>
                        </a>
                        <a href="next-steps.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-cyan-500 text-white px-2 py-1 rounded text-sm mr-3">13</span>
                                <span>次のステップ</span>
                            </div>
                        </a>
                        <a href="glossary.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-cyan-500 text-white px-2 py-1 rounded text-sm mr-3">14</span>
                                <span>用語集</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">データの力を引き出そう</h2>
            <p class="text-xl mb-8 opacity-90">AIを活用して、データドリブンな意思決定を実現しましょう</p>
            <a href="data-basics.php" class="inline-block bg-white text-emerald-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">
                今すぐ始める
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
