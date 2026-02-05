<?php
$page_title = '価格設定・利益計算 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'research';
$section_name = '第2部：リサーチ・仕入れ';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">価格設定・利益計算</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">利益を確実に出すには、正確な価格設定と利益計算が不可欠。AIを活用して効率的に計算・判断する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">利益計算の基本</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg text-lime-600 mb-4">利益計算式</h3>
            <div class="bg-lime-50 p-4 rounded mb-4 text-center">
                <p class="text-lg font-bold">利益 = 販売価格 − 仕入れ価格 − 手数料 − 送料 − 梱包資材費</p>
            </div>
            <div class="grid md:grid-cols-2 gap-4 mt-6">
                <div class="bg-gray-50 p-4 rounded">
                    <h4 class="font-bold mb-2">メルカリの手数料</h4>
                    <p class="text-sm text-gray-600">販売価格の10%</p>
                </div>
                <div class="bg-gray-50 p-4 rounded">
                    <h4 class="font-bold mb-2">Amazonの手数料</h4>
                    <p class="text-sm text-gray-600">カテゴリにより8〜15% + 成約料</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">利益計算プロンプト</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">利益シミュレーション</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        せどりの利益計算をしてください。<br><br>
                        【商品情報】<br>
                        ・仕入れ価格：3,000円<br>
                        ・想定販売価格：5,500円<br>
                        ・販売プラットフォーム：メルカリ<br>
                        ・送料：200円（出品者負担）<br>
                        ・梱包資材費：50円<br><br>
                        【計算してほしいこと】<br>
                        ・利益額<br>
                        ・利益率<br>
                        ・ROI（投資収益率）<br>
                        ・仕入れ判断のアドバイス
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">損益分岐点の計算</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下の条件で損益分岐点を計算してください。<br><br>
                        【条件】<br>
                        ・仕入れ価格：2,500円<br>
                        ・販売プラットフォーム：メルカリ（手数料10%）<br>
                        ・送料：180円<br>
                        ・梱包資材費：30円<br><br>
                        最低いくらで販売すれば利益が出るか、<br>
                        利益率10%・20%・30%を確保するにはいくらで販売すべきか教えてください。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">価格設定戦略</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">最適価格の分析</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の商品の最適な販売価格を分析してください。<br><br>
                    【商品】〇〇（商品名）<br>
                    【販売プラットフォーム】メルカリ<br>
                    【相場】3,000円〜4,500円<br>
                    【自分の商品状態】美品<br><br>
                    【分析してほしいこと】<br>
                    ・早く売りたい場合の価格<br>
                    ・利益最大化を狙う場合の価格<br>
                    ・バランス型の価格<br>
                    ・それぞれの想定売却期間<br>
                    ・価格設定の根拠
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">仕入れ判断の基準</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">利益率20%以上を目安に</h4>
                    <p class="text-sm text-gray-600">手数料・送料を引いた後の利益率。低すぎると値下げの余地がなくなる。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">利益額500円以上</h4>
                    <p class="text-sm text-gray-600">作業時間を考えると、1個あたり最低500円は欲しい。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">回転率も考慮</h4>
                    <p class="text-sm text-gray-600">利益率が高くても売れなければ意味がない。1ヶ月以内に売れる商品が理想。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">値下げ余地を残す</h4>
                    <p class="text-sm text-gray-600">相場の下限ギリギリでの仕入れは避ける。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">仕入れ前に必ず利益計算を行いましょう。「安いから」という理由だけで仕入れると、手数料・送料で赤字になることもあります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="sourcing.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：仕入れ先の開拓
        </a>
        <a href="product-photo.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：商品撮影・画像作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
