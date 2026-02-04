<?php
$page_title = 'データの種類と収集 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：データ分析の基礎';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データの種類と収集</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">良い分析は良いデータから。データの種類を理解し、適切に収集することが分析成功の第一歩です。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">データの種類</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">量的データ（数値）</h3>
                    <p class="text-sm text-gray-600 mb-3">数値で表されるデータ。計算・集計が可能</p>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 売上金額</li>
                        <li>• アクセス数</li>
                        <li>• 顧客年齢</li>
                        <li>• 在庫数量</li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-emerald-600">質的データ（カテゴリ）</h3>
                    <p class="text-sm text-gray-600 mb-3">分類やラベルで表されるデータ</p>
                    <ul class="text-sm space-y-1 text-gray-600">
                        <li>• 商品カテゴリ</li>
                        <li>• 顧客の性別</li>
                        <li>• 地域名</li>
                        <li>• 購入チャネル</li>
                    </ul>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">時系列データ</h3>
                <p class="text-sm text-gray-600 mb-3">時間の経過とともに記録されるデータ。トレンドや季節性の分析に使用</p>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="bg-emerald-50 p-3 rounded text-center">
                        <div class="text-2xl mb-1">📅</div>
                        <p class="text-sm">日次売上</p>
                    </div>
                    <div class="bg-emerald-50 p-3 rounded text-center">
                        <div class="text-2xl mb-1">📈</div>
                        <p class="text-sm">月次アクセス推移</p>
                    </div>
                    <div class="bg-emerald-50 p-3 rounded text-center">
                        <div class="text-2xl mb-1">🕐</div>
                        <p class="text-sm">時間帯別注文数</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">データソース</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">社内システム</h3>
                    <p class="text-sm text-gray-600 mt-1">CRM、ERP、POS、在庫管理システムなど。ビジネスデータの主要ソース</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">Webアナリティクス</h3>
                    <p class="text-sm text-gray-600 mt-1">Google Analytics、Adobe Analyticsなど。Webサイトの行動データ</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">アンケート・調査</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客満足度調査、市場調査など。主観的なデータを収集</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">外部データ</h3>
                    <p class="text-sm text-gray-600 mt-1">政府統計、業界データ、SNSデータなど。市場環境の把握に活用</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">データ品質のポイント</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">正確性</h4>
                        <p class="text-sm text-gray-600">データに誤りがないか確認</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">完全性</h4>
                        <p class="text-sm text-gray-600">欠損値・空白がないか確認</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">一貫性</h4>
                        <p class="text-sm text-gray-600">形式や単位が統一されているか</p>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <h4 class="font-bold">鮮度</h4>
                        <p class="text-sm text-gray-600">最新のデータが使えているか</p>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4 mt-6">
                <p><strong>注意：</strong>「ゴミを入れればゴミが出る（Garbage In, Garbage Out）」。どんな高度な分析も、データ品質が低ければ意味がありません。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">まとめ</h2>
            <div class="bg-emerald-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>量的データ（数値）と質的データ（カテゴリ）を区別する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>時系列データはトレンド分析に重要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>社内外の様々なデータソースを活用</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>データ品質（正確性・完全性・一貫性・鮮度）を確認</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="data-basics.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：データ分析の基本
            </a>
            <a href="spreadsheet.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：スプレッドシート活用
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
