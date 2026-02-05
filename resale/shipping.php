<?php
$page_title = '発送・梱包効率化 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'operation';
$section_name = '第4部：運営・スケールアップ';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">発送・梱包効率化</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">発送作業は利益に直結するコスト。効率的な梱包と最適な配送方法の選択で、コスト削減と時間短縮を実現します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">配送方法の比較</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">配送方法選択プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の商品に最適な配送方法を提案してください。<br><br>
                    【商品サイズ】縦20cm × 横15cm × 高さ5cm<br>
                    【重量】500g<br>
                    【販売プラットフォーム】メルカリ<br>
                    【商品価格】3,000円<br><br>
                    【比較してほしい配送方法】<br>
                    ・らくらくメルカリ便（ネコポス/宅急便コンパクト/宅急便）<br>
                    ・ゆうゆうメルカリ便（ゆうパケット/ゆうパック）<br>
                    ・普通郵便<br><br>
                    【出力形式】<br>
                    ・各配送方法の料金<br>
                    ・メリット・デメリット<br>
                    ・おすすめ順位と理由
                </p>
            </div>
        </div>

        <div class="overflow-x-auto mt-6">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-lime-100">
                        <th class="p-4 text-left">配送方法</th>
                        <th class="p-4 text-left">料金</th>
                        <th class="p-4 text-left">サイズ上限</th>
                        <th class="p-4 text-left">特徴</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4 font-bold">ネコポス</td>
                        <td class="p-4 text-sm">210円</td>
                        <td class="p-4 text-sm">A4・厚さ3cm・1kg</td>
                        <td class="p-4 text-sm">追跡◯ 補償◯</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">ゆうパケット</td>
                        <td class="p-4 text-sm">230円</td>
                        <td class="p-4 text-sm">3辺60cm・厚さ3cm・1kg</td>
                        <td class="p-4 text-sm">追跡◯ 補償◯</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4 font-bold">宅急便コンパクト</td>
                        <td class="p-4 text-sm">450円</td>
                        <td class="p-4 text-sm">専用BOX</td>
                        <td class="p-4 text-sm">厚みのある小物に</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">宅急便60</td>
                        <td class="p-4 text-sm">750円</td>
                        <td class="p-4 text-sm">3辺60cm・2kg</td>
                        <td class="p-4 text-sm">大きめの商品に</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">梱包の効率化</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">梱包資材のストック</h4>
                    <p class="text-sm text-gray-600">段ボール、OPP袋、緩衝材を常にストック。まとめ買いでコスト削減。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">サイズ別に箱を用意</h4>
                    <p class="text-sm text-gray-600">よく売れるサイズの箱を事前に用意しておく。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">作業スペースを固定</h4>
                    <p class="text-sm text-gray-600">梱包専用のスペースを設け、道具を一箇所にまとめる。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">まとめて発送</h4>
                    <p class="text-sm text-gray-600">1日の発送時間を決めて、まとめて処理することで効率アップ。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">梱包方法のマニュアル化</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">梱包マニュアル作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の商品カテゴリの梱包マニュアルを作成してください。<br><br>
                    【商品カテゴリ】本・CD/DVD<br><br>
                    【含める内容】<br>
                    ・必要な梱包資材<br>
                    ・梱包の手順（ステップバイステップ）<br>
                    ・注意点（破損防止、防水）<br>
                    ・コスト削減のコツ<br><br>
                    【条件】<br>
                    ・初心者でも分かりやすく<br>
                    ・写真を撮るポイントも記載
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">コスト削減のコツ</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lime-600 mb-3">資材のコスト削減</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・100均で梱包資材を購入</li>
                    <li>・通販の段ボールを再利用</li>
                    <li>・新聞紙を緩衝材代わりに</li>
                    <li>・まとめ買いで単価を下げる</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lime-600 mb-3">送料のコスト削減</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・サイズに合った配送方法を選ぶ</li>
                    <li>・ネコポス・ゆうパケットを活用</li>
                    <li>・送料込み価格で出品</li>
                    <li>・コンビニ発送で24時間対応</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">発送・梱包の効率化は「塵も積もれば山となる」。1件あたり5分短縮できれば、100件で8時間以上の節約になります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="customer-service.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：顧客対応・評価管理
        </a>
        <a href="scaling.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：スケールアップ・外注化
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
