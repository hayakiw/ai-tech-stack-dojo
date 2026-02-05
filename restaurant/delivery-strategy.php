<?php
$page_title = 'デリバリー・テイクアウト戦略 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第4部：売上向上・発展';
$step_number = 13;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">デリバリー・テイクアウト戦略</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">店内飲食以外の収益チャネルを確立。デリバリー・テイクアウトの導入と、AIを活用した効率的な運営方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">デリバリー・テイクアウトのメリット</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💰</div>
                <h3 class="font-bold">売上の底上げ</h3>
                <p class="text-sm text-gray-600">席数に縛られない売上増</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🏠</div>
                <h3 class="font-bold">新規顧客獲得</h3>
                <p class="text-sm text-gray-600">来店ハードルを下げる</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📊</div>
                <h3 class="font-bold">稼働率向上</h3>
                <p class="text-sm text-gray-600">アイドルタイムの有効活用</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">デリバリープラットフォーム比較</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead class="bg-amber-100">
                    <tr>
                        <th class="px-4 py-3 text-left">サービス</th>
                        <th class="px-4 py-3 text-left">手数料</th>
                        <th class="px-4 py-3 text-left">特徴</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="px-4 py-3 font-medium">Uber Eats</td>
                        <td class="px-4 py-3 text-sm">約35%</td>
                        <td class="px-4 py-3 text-sm">知名度高、配達員多い</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">出前館</td>
                        <td class="px-4 py-3 text-sm">約35%</td>
                        <td class="px-4 py-3 text-sm">日本最大手、シニア層にも浸透</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Wolt</td>
                        <td class="px-4 py-3 text-sm">約30%</td>
                        <td class="px-4 py-3 text-sm">都市部中心、若年層に人気</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">menu</td>
                        <td class="px-4 py-3 text-sm">約34%</td>
                        <td class="px-4 py-3 text-sm">24時間営業対応</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">自社配達</td>
                        <td class="px-4 py-3 text-sm">0%（人件費別）</td>
                        <td class="px-4 py-3 text-sm">利益率高、近隣限定</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-amber-50 p-4 rounded-lg mt-4">
            <p class="text-sm">💡 手数料が高いため、デリバリー専用メニューは価格を10-15%上げるか、原価率の低いメニューに絞るのがおすすめ。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AIで商品説明を最適化</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">デリバリーアプリ用の商品説明</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    Uber Eatsに掲載する商品説明を作成してください。<br><br>
                    【メニュー】特製カルボナーラ<br>
                    【特徴】<br>
                    ・自家製生パスタ使用<br>
                    ・ベーコンは厚切りで香ばしく<br>
                    ・濃厚なチーズソース<br>
                    【価格】1,400円<br><br>
                    【条件】<br>
                    ・100文字以内<br>
                    ・食欲をそそる表現<br>
                    ・デリバリーでも美味しいことをアピール<br>
                    ・写真を見なくても想像できる描写
                </p>
            </div>
            <div class="bg-amber-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm">「もちもち自家製生パスタに、厚切りベーコンの香ばしさと濃厚チーズソースが絡む一皿。お届け後すぐに混ぜてお召し上がりください。冷めても美味しいよう、特製ソースでお届けします。」</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">テイクアウトメニューの開発</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">テイクアウト向けメニュー提案</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    居酒屋のテイクアウトメニューを5つ提案してください。<br><br>
                    【条件】<br>
                    ・冷めても美味しい<br>
                    ・持ち運びしやすい<br>
                    ・原価率30%以下<br>
                    ・家飲み需要に対応<br>
                    ・電子レンジで温められる<br><br>
                    【現在の人気メニュー】<br>
                    ・唐揚げ<br>
                    ・焼き鳥<br>
                    ・刺身<br>
                    ・出汁巻き卵
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">オペレーションの効率化</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                <div>
                    <h4 class="font-bold">注文を一元管理</h4>
                    <p class="text-sm text-gray-600">複数プラットフォームの注文をタブレット1台で管理できるサービス（Orderlyなど）を活用。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                <div>
                    <h4 class="font-bold">ピーク時間の調整</h4>
                    <p class="text-sm text-gray-600">店内ピーク時はデリバリーの受付を一時停止、またはメニュー限定。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                <div>
                    <h4 class="font-bold">包装資材の最適化</h4>
                    <p class="text-sm text-gray-600">こぼれにくい容器、保温バッグの使用でクレーム防止。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">4</span>
                <div>
                    <h4 class="font-bold">調理時間の標準化</h4>
                    <p class="text-sm text-gray-600">AIでマニュアル作成、調理時間を統一して配達員の待ち時間を削減。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">集客・販促</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">デリバリー・テイクアウトの告知</h3>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">店頭POP</span>
                        <p class="text-sm text-gray-600">「テイクアウトできます」「UberEatsで注文可能」</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">SNS投稿</span>
                        <p class="text-sm text-gray-600">テイクアウト写真、おうちでの食べ方提案</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">LINE配信</span>
                        <p class="text-sm text-gray-600">テイクアウト限定クーポン、予約受付</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">✓</span>
                    <div>
                        <span class="font-bold">Googleビジネス</span>
                        <p class="text-sm text-gray-600">「テイクアウト可」「デリバリー可」属性を設定</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">デリバリーは手数料が高いため、利益を出すには工夫が必要です。「デリバリー専用の高利益メニュー」を開発し、店内メニューと差別化するのが成功のコツです。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="customer-analysis.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：顧客分析
        </a>
        <a href="glossary.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：用語集
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
