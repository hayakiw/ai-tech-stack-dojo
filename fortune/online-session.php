<?php
$page_title = 'オンライン鑑定・予約管理 - AI×占い・スピリチュアル | AI Tech Stack';
$current_page = 'operation';
$section_name = '第4部：運営・収益化';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">オンライン鑑定・予約管理</h1>

    <div class="bg-purple-50 border-l-4 border-purple-500 p-6 mb-8">
        <p class="text-lg">場所を選ばずに鑑定できるオンライン占い。予約管理を効率化して、より多くの方に鑑定を届ける方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">鑑定方法の種類</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-purple-600 mb-3">テキスト鑑定</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・メール、LINE、ココナラ等</li>
                    <li>・自分のペースで作成できる</li>
                    <li>・AIを活用しやすい</li>
                    <li>・初心者におすすめ</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-purple-600 mb-3">電話・ビデオ鑑定</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>・電話、Zoom、LINE通話等</li>
                    <li>・リアルタイムで対話</li>
                    <li>・高単価を設定しやすい</li>
                    <li>・スケジュール管理が必要</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">予約管理の効率化</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">予約確認メッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        電話鑑定の予約確認メッセージを作成してください。<br><br>
                        【予約内容】<br>
                        ・日時：〇月〇日 20:00〜<br>
                        ・メニュー：タロット恋愛鑑定（30分）<br>
                        ・料金：5,000円<br><br>
                        【含める内容】<br>
                        ・予約確定のお知らせ<br>
                        ・当日の流れ<br>
                        ・準備してほしいこと<br>
                        ・キャンセルポリシー<br>
                        ・連絡先<br><br>
                        【条件】<br>
                        ・丁寧で分かりやすく<br>
                        ・当日が楽しみになる一言
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-purple-600">リマインドメッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        電話鑑定の前日リマインドメッセージを作成してください。<br><br>
                        【条件】<br>
                        ・明日の予約のリマインド<br>
                        ・開始時刻の確認<br>
                        ・変更・キャンセルの連絡先<br>
                        ・楽しみにしている旨<br>
                        ・100文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">販売プラットフォーム</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="bg-purple-100">
                        <th class="p-4 text-left">プラットフォーム</th>
                        <th class="p-4 text-left">手数料</th>
                        <th class="p-4 text-left">特徴</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-t">
                        <td class="p-4 font-bold">ココナラ</td>
                        <td class="p-4 text-sm">22%</td>
                        <td class="p-4 text-sm">集客力◎、初心者向け</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">STORES</td>
                        <td class="p-4 text-sm">5%〜</td>
                        <td class="p-4 text-sm">予約機能あり、手数料安い</td>
                    </tr>
                    <tr class="border-t">
                        <td class="p-4 font-bold">LINE公式</td>
                        <td class="p-4 text-sm">決済手数料のみ</td>
                        <td class="p-4 text-sm">リピーター向け</td>
                    </tr>
                    <tr class="border-t bg-gray-50">
                        <td class="p-4 font-bold">自社サイト</td>
                        <td class="p-4 text-sm">決済手数料のみ</td>
                        <td class="p-4 text-sm">ブランディング◎</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">運営のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">対応時間を決める</h4>
                    <p class="text-sm text-gray-600">無理のない時間帯を設定。自分の生活リズムを守る。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">キャンセルポリシーを明確に</h4>
                    <p class="text-sm text-gray-600">前日〇%、当日100%など、事前に伝えておく。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-purple-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">予約枠を絞る</h4>
                    <p class="text-sm text-gray-600">少なめの枠で「予約が取りにくい」感を出す方が価値が上がる。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">オンライン鑑定は場所を選ばず、全国のお客様にサービスを届けられます。予約管理をAIで効率化し、鑑定に集中できる環境を作りましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="service-design.php" class="flex items-center text-gray-600 hover:text-purple-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：商品・サービス設計
        </a>
        <a href="retention.php" class="flex items-center bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition">
            次へ：リピーター獲得
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
