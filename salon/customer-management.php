<?php
$page_title = '顧客カルテ管理の効率化 - AI×美容院経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：接客・カウンセリング';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">顧客カルテ管理の効率化</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">お客様の施術履歴や好みを正確に記録・活用することで、満足度とリピート率がアップ。AIを活用したカルテ管理の効率化方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">カルテに記録すべき情報</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h4 class="font-bold mb-3 text-violet-600">基本情報</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 名前、連絡先、誕生日</li>
                        <li>• 来店きっかけ、紹介者</li>
                        <li>• アレルギー、NGなこと</li>
                        <li>• 職業、ライフスタイル</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3 text-violet-600">施術履歴</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 日付、担当者</li>
                        <li>• カット内容、長さ</li>
                        <li>• カラー剤、配合、放置時間</li>
                        <li>• パーマのロッド、薬剤</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3 text-violet-600">お客様の好み</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 好きなスタイル、NGなスタイル</li>
                        <li>• シャンプーの強さ</li>
                        <li>• 会話の好み（静かに/話したい）</li>
                        <li>• ドリンクの好み</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-3 text-violet-600">次回への引き継ぎ</h4>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 次回提案したいメニュー</li>
                        <li>• 気になった点、課題</li>
                        <li>• 会話の内容（家族、旅行など）</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIでカルテ記入を効率化</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">施術メモの要約</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下の施術メモを、カルテ用に簡潔にまとめてください。<br><br>
                    【施術メモ（音声入力などのラフなメモ）】<br>
                    今日は前回より少し短めにカット、毛先軽くして動きを出した。<br>
                    カラーはイルミナのオーシャン6とフォレスト8を1:1で<br>
                    根元から毛先まで全体染め、放置25分。<br>
                    お客様は明るすぎないのが好みで、次回も同じくらいがいいとのこと。<br>
                    来月沖縄旅行に行くって言ってた。<br><br>
                    【出力形式】<br>
                    ・カット：<br>
                    ・カラー：<br>
                    ・お客様の好み：<br>
                    ・次回メモ：
                </p>
            </div>
            <div class="bg-violet-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm">
                    ・カット：前回より短め、毛先軽く、動きを出す<br>
                    ・カラー：イルミナ オーシャン6:フォレスト8=1:1、全体染め、25分<br>
                    ・お客様の好み：明るすぎないのが好み、次回も同じトーン希望<br>
                    ・次回メモ：来月沖縄旅行→日焼け後のケア提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">次回提案の自動生成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">来店周期に合わせた提案</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下のお客様情報から、次回来店時の提案を考えてください。<br><br>
                    【顧客情報】<br>
                    ・前回施術：2ヶ月前にカット＋カラー<br>
                    ・カラー：アッシュベージュ（9トーン）<br>
                    ・髪の悩み：毛先のパサつき<br>
                    ・来店周期：2ヶ月に1回<br>
                    ・季節：これから夏<br><br>
                    【出力】<br>
                    ・根元のカラーリタッチの必要性<br>
                    ・追加メニューの提案（理由付き）<br>
                    ・季節に合わせた提案<br>
                    ・お声がけトーク例
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">スプレッドシートでカルテ管理</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">簡易カルテシステムの作り方</h4>
            <ol class="space-y-3 text-sm">
                <li class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">1</span>
                    Googleスプレッドシートで顧客マスターシートを作成（1行1顧客）
                </li>
                <li class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">2</span>
                    施術履歴シートを別に作成（顧客IDで紐付け）
                </li>
                <li class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">3</span>
                    VLOOKUP関数で顧客情報を自動表示
                </li>
                <li class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">4</span>
                    スマホからも入力できるようGoogleフォームを連携
                </li>
            </ol>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">カルテは「書いて終わり」ではなく「次回に活かす」ことが大切。施術直後にAIで要約し、次回提案まで考えておくと、リピート率アップにつながります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="style-suggestion.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：スタイル提案
        </a>
        <a href="reservation-shift.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：予約管理・シフト作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
