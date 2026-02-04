<?php
$page_title = 'BIツール入門 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：BIツール実践';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">BIツール入門</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">BIツールを使えば、複数のデータソースを統合し、インタラクティブなダッシュボードを作成できます。意思決定のスピードと質が向上します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">BIツールとは</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">BI（Business Intelligence）の役割</h3>
                <p class="text-gray-600 mb-4">企業内のデータを収集・統合・分析・可視化し、ビジネスの意思決定を支援するシステム・ツールの総称</p>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-emerald-50 p-4 rounded">
                        <h4 class="font-bold mb-2">できること</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 複数データソースの統合</li>
                            <li>• リアルタイムデータ更新</li>
                            <li>• インタラクティブなグラフ</li>
                            <li>• ドリルダウン分析</li>
                            <li>• 共有・コラボレーション</li>
                        </ul>
                    </div>
                    <div class="bg-emerald-50 p-4 rounded">
                        <h4 class="font-bold mb-2">Excelとの違い</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 大量データの処理が高速</li>
                            <li>• 自動でデータ更新</li>
                            <li>• Webブラウザで閲覧</li>
                            <li>• チームで共有しやすい</li>
                            <li>• セキュリティ管理が容易</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">代表的なBIツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📊</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Tableau</h3>
                            <p class="text-gray-600 mb-2">ビジュアル分析に強い。直感的な操作でグラフ作成が可能</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded text-xs">ビジュアル重視</span>
                                <span class="bg-emerald-100 text-emerald-700 px-2 py-1 rounded text-xs">ドラッグ&ドロップ</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📈</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Power BI</h3>
                            <p class="text-gray-600 mb-2">Microsoft製。Excelとの連携が強力。コスパが良い</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">Microsoft連携</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">低コスト</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🔍</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Looker Studio（旧Data Studio）</h3>
                            <p class="text-gray-600 mb-2">Google製。無料で使える。Googleサービスとの連携が強い</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">無料</span>
                                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs">Google連携</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🚀</span>
                        <div>
                            <h3 class="font-bold text-lg mb-2">Metabase</h3>
                            <p class="text-gray-600 mb-2">オープンソース。シンプルで導入しやすい</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">オープンソース</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">シンプル</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">BIツール選定のポイント</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">データソースとの接続性</h4>
                        <p class="text-sm text-gray-600">使いたいデータに接続できるか確認</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">ユーザーのスキルレベル</h4>
                        <p class="text-sm text-gray-600">使う人の技術力に合っているか</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">コスト</h4>
                        <p class="text-sm text-gray-600">ライセンス費用とランニングコスト</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">既存ツールとの相性</h4>
                        <p class="text-sm text-gray-600">社内システムとの連携のしやすさ</p>
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
                        <span>BIツールはデータの統合・分析・可視化を効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>Tableau、Power BI、Looker Studioなどが代表的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>まずは無料のLooker Studioから始めるのがおすすめ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>データソース・スキル・コスト・既存ツールを考慮して選定</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-reporting.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIでレポート作成
            </a>
            <a href="dashboard.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：ダッシュボード作成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
