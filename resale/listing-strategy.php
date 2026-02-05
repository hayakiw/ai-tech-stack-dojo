<?php
$page_title = '出品・販売戦略 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'sales';
$section_name = '第3部：出品・販売';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">出品・販売戦略</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">出品のタイミングや価格戦略で売上は大きく変わります。AIを活用して効果的な販売戦略を立てる方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">出品タイミングの最適化</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">最適な出品時間帯</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-lime-50 p-4 rounded">
                    <h4 class="font-bold mb-2">メルカリ</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・平日：20:00〜23:00</li>
                        <li>・休日：10:00〜12:00、20:00〜22:00</li>
                        <li>・給料日後（25日〜月末）が狙い目</li>
                    </ul>
                </div>
                <div class="bg-lime-50 p-4 rounded">
                    <h4 class="font-bold mb-2">Amazon</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>・24時間検索されるため影響は少ない</li>
                        <li>・カート取得タイミングが重要</li>
                        <li>・セール時期に合わせた在庫確保</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">販売戦略の立案</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">販売戦略プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の商品の販売戦略を立ててください。<br><br>
                    【商品】〇〇〇<br>
                    【仕入れ価格】3,000円<br>
                    【希望利益】1,000円以上<br>
                    【在庫数】5個<br>
                    【販売期限】1ヶ月以内<br><br>
                    【提案してほしいこと】<br>
                    ・初期価格設定<br>
                    ・値下げのタイミングと幅<br>
                    ・複数プラットフォーム展開の是非<br>
                    ・まとめ売りの可能性<br>
                    ・販促施策（値下げ以外）
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">複数プラットフォーム戦略</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-lime-100">
                        <th class="p-4 text-left">プラットフォーム</th>
                        <th class="p-4 text-left">向いている商品</th>
                        <th class="p-4 text-left">特徴</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4 font-bold">メルカリ</td>
                        <td class="p-4 text-sm">アパレル、雑貨、中古品全般</td>
                        <td class="p-4 text-sm">回転率◎、値下げ交渉あり</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">Amazon</td>
                        <td class="p-4 text-sm">新品、家電、本、ゲーム</td>
                        <td class="p-4 text-sm">高単価、FBA活用可</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4 font-bold">ヤフオク</td>
                        <td class="p-4 text-sm">レア物、コレクター向け</td>
                        <td class="p-4 text-sm">オークション形式で高値狙い</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">ラクマ</td>
                        <td class="p-4 text-sm">アパレル、コスメ</td>
                        <td class="p-4 text-sm">手数料が安い（6%）</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">値下げ・再出品戦略</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">売れない時の対処法</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    メルカリで1週間売れていない商品の対策を提案してください。<br><br>
                    【商品】〇〇〇<br>
                    【出品価格】5,000円<br>
                    【閲覧数】50<br>
                    【いいね数】3<br>
                    【相場】4,500円〜6,000円<br><br>
                    【提案してほしいこと】<br>
                    ・値下げすべきか、再出品すべきか<br>
                    ・改善すべき点（写真、説明文、価格）<br>
                    ・閲覧数・いいね数からの分析<br>
                    ・具体的なアクションプラン
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">販売戦略のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">最初は高めに設定</h4>
                    <p class="text-sm text-gray-600">値下げはできても値上げは難しい。最初は相場の上限で出品。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">定期的に再出品</h4>
                    <p class="text-sm text-gray-600">メルカリは新着順で表示されるため、再出品で露出アップ。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">損切りラインを決める</h4>
                    <p class="text-sm text-gray-600">売れ残りリスクを考え、最低価格を事前に決めておく。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">データを分析</h4>
                    <p class="text-sm text-gray-600">閲覧数、いいね数から問題点を分析し、改善につなげる。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">売れない時は原因分析が大切。AIに現状を伝えて、客観的なアドバイスをもらいましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="product-description.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：商品説明文の作成
        </a>
        <a href="inventory-management.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：在庫・売上管理
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
