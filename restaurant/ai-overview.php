<?php
$page_title = '飲食業界でのAI活用の全体像 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：AI×飲食店経営の基礎';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">飲食業界でのAI活用の全体像</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">飲食店経営のあらゆる場面でAIを活用できます。このレッスンでは、活用シーンごとにどんなAIツールが使えるか、全体像を把握しましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AI活用マップ</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">🎯 集客・マーケティング</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">SNS運用</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• ChatGPT/Claude：投稿文作成</li>
                            <li>• Canva AI：画像デザイン</li>
                            <li>• Later/Buffer：投稿スケジュール</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">予約・問い合わせ</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• LINE公式アカウント＋AI</li>
                            <li>• 予約システム連携</li>
                            <li>• FAQ自動応答</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">🍳 メニュー・商品開発</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">レシピ開発</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• ChatGPT/Claude：レシピ提案</li>
                            <li>• トレンド分析</li>
                            <li>• 原価計算サポート</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">ビジュアル作成</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• DALL-E/Midjourney：画像生成</li>
                            <li>• Canva：メニュー表作成</li>
                            <li>• 販促物デザイン</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">📊 データ分析・経営</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">売上・顧客分析</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• POSデータ分析</li>
                            <li>• 顧客セグメント分類</li>
                            <li>• 売上予測</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">口コミ分析</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• レビュー傾向分析</li>
                            <li>• 感情分析</li>
                            <li>• 改善点の抽出</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">⚙️ 業務効率化</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">在庫・発注</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 需要予測</li>
                            <li>• 自動発注提案</li>
                            <li>• 食品ロス管理</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">スタッフ管理</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• シフト作成支援</li>
                            <li>• マニュアル作成</li>
                            <li>• 教育コンテンツ生成</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">主要なAIツール一覧</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead class="bg-amber-100">
                    <tr>
                        <th class="px-4 py-3 text-left">ツール名</th>
                        <th class="px-4 py-3 text-left">用途</th>
                        <th class="px-4 py-3 text-left">料金</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="px-4 py-3 font-medium">ChatGPT</td>
                        <td class="px-4 py-3 text-sm">文章作成、アイデア出し、データ分析</td>
                        <td class="px-4 py-3 text-sm">無料〜月$20</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Claude</td>
                        <td class="px-4 py-3 text-sm">長文作成、分析、プログラミング</td>
                        <td class="px-4 py-3 text-sm">無料〜月$20</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Canva</td>
                        <td class="px-4 py-3 text-sm">デザイン作成、画像編集</td>
                        <td class="px-4 py-3 text-sm">無料〜月¥1,500</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">DALL-E</td>
                        <td class="px-4 py-3 text-sm">AI画像生成</td>
                        <td class="px-4 py-3 text-sm">ChatGPT Plus内</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">LINE公式アカウント</td>
                        <td class="px-4 py-3 text-sm">顧客コミュニケーション</td>
                        <td class="px-4 py-3 text-sm">無料〜</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Googleスプレッドシート</td>
                        <td class="px-4 py-3 text-sm">データ管理、分析</td>
                        <td class="px-4 py-3 text-sm">無料</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">導入の優先順位</h2>

        <div class="space-y-4">
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-amber-500 text-white px-3 py-1 rounded font-bold mr-4">1</span>
                <div>
                    <h4 class="font-bold">ChatGPT/Claude（基本ツール）</h4>
                    <p class="text-sm text-gray-600">まずはAIチャットに慣れることが第一歩。文章作成やアイデア出しに活用。</p>
                </div>
            </div>
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-amber-500 text-white px-3 py-1 rounded font-bold mr-4">2</span>
                <div>
                    <h4 class="font-bold">SNS・集客ツール</h4>
                    <p class="text-sm text-gray-600">売上に直結する集客施策をAIで効率化。投稿作成、返信対応など。</p>
                </div>
            </div>
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-amber-500 text-white px-3 py-1 rounded font-bold mr-4">3</span>
                <div>
                    <h4 class="font-bold">業務効率化ツール</h4>
                    <p class="text-sm text-gray-600">在庫管理、シフト作成、マニュアル作成などの時間削減。</p>
                </div>
            </div>
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-amber-500 text-white px-3 py-1 rounded font-bold mr-4">4</span>
                <div>
                    <h4 class="font-bold">データ分析・予測</h4>
                    <p class="text-sm text-gray-600">蓄積したデータを活用して、より高度な経営判断を。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">すべてを一度に導入する必要はありません。まずは1つのツールから始めて、慣れてきたら徐々に活用範囲を広げていきましょう。このコースでは、各ツールの具体的な使い方を順番に学んでいきます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-restaurant-intro.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI×飲食店経営の可能性
        </a>
        <a href="preparation.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：導入前の準備
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
