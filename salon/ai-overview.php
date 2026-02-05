<?php
$page_title = '美容業界でのAI活用の全体像 - AI×美容院経営 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：AI×美容院経営の基礎';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">美容業界でのAI活用の全体像</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">美容院経営のあらゆる場面でAIを活用できます。このレッスンでは、活用シーンごとにどんなAIツールが使えるか、全体像を把握しましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AI活用マップ</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">🎯 集客・マーケティング</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">SNS運用</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• ChatGPT/Claude：投稿文・キャプション作成</li>
                            <li>• Canva AI：画像デザイン</li>
                            <li>• ハッシュタグ最適化</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">予約サイト対策</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• メニュー説明文の作成</li>
                            <li>• スタイリスト紹介文</li>
                            <li>• 口コミ返信の効率化</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">💇 接客・カウンセリング</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">カウンセリング</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• カウンセリングシート作成</li>
                            <li>• 要望の言語化サポート</li>
                            <li>• 似合うスタイル提案</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">顧客管理</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• カルテ記入の効率化</li>
                            <li>• 施術履歴の検索</li>
                            <li>• 次回提案の自動生成</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">⚙️ 業務効率化</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">スケジュール管理</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• シフト作成支援</li>
                            <li>• 予約の最適化</li>
                            <li>• リマインド送信</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">教育・マニュアル</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 接客マニュアル作成</li>
                            <li>• 技術チェックリスト</li>
                            <li>• 研修資料の作成</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">💰 売上向上</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">店販強化</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 商品説明文の作成</li>
                            <li>• お客様への提案トーク</li>
                            <li>• POP・販促物作成</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">データ分析</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• 売上分析</li>
                            <li>• 顧客セグメント分類</li>
                            <li>• リピート率改善</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">主要なAIツール一覧</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead class="bg-violet-100">
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
                        <td class="px-4 py-3 text-sm">長文作成、分析、カウンセリング支援</td>
                        <td class="px-4 py-3 text-sm">無料〜月$20</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Canva</td>
                        <td class="px-4 py-3 text-sm">SNS画像、POP、名刺作成</td>
                        <td class="px-4 py-3 text-sm">無料〜月¥1,500</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">LINE公式アカウント</td>
                        <td class="px-4 py-3 text-sm">顧客コミュニケーション、予約</td>
                        <td class="px-4 py-3 text-sm">無料〜</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">Googleスプレッドシート</td>
                        <td class="px-4 py-3 text-sm">顧客管理、売上管理</td>
                        <td class="px-4 py-3 text-sm">無料</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">導入の優先順位</h2>

        <div class="space-y-4">
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">1</span>
                <div>
                    <h4 class="font-bold">ChatGPT/Claude（基本ツール）</h4>
                    <p class="text-sm text-gray-600">まずはAIチャットに慣れることが第一歩。SNS投稿や口コミ返信に活用。</p>
                </div>
            </div>
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">2</span>
                <div>
                    <h4 class="font-bold">SNS・集客ツール</h4>
                    <p class="text-sm text-gray-600">売上に直結する集客施策をAIで効率化。投稿作成、ハッシュタグ選定など。</p>
                </div>
            </div>
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">3</span>
                <div>
                    <h4 class="font-bold">接客・カウンセリング</h4>
                    <p class="text-sm text-gray-600">カウンセリングシートやスタイル提案でお客様満足度を向上。</p>
                </div>
            </div>
            <div class="flex items-start bg-white p-4 rounded-lg shadow">
                <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">4</span>
                <div>
                    <h4 class="font-bold">業務効率化・データ活用</h4>
                    <p class="text-sm text-gray-600">蓄積したデータを活用して、より高度な経営判断を。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">すべてを一度に導入する必要はありません。まずは1つのツールから始めて、慣れてきたら徐々に活用範囲を広げていきましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="ai-salon-intro.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：AI×美容院経営の可能性
        </a>
        <a href="preparation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：導入前の準備
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
