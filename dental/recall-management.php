<?php
$page_title = 'リコール・予防管理 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'patient';
$section_name = '第3部：患者対応・診療支援';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">リコール・予防管理</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">定期検診の来院率を上げ、予防歯科を推進するためのリコール（再来院案内）管理をAIで効率化。効果的な案内文の作成方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">リコールはがきの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">リコールはがき文面プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院のリコール（定期検診案内）はがきの文面を作成してください。<br><br>
                    【医院名】〇〇歯科クリニック<br>
                    【前回来院】6ヶ月前<br><br>
                    【含める内容】<br>
                    ・前回来院へのお礼<br>
                    ・定期検診の重要性<br>
                    ・お口の健康状態確認の必要性<br>
                    ・予約方法の案内<br><br>
                    【条件】<br>
                    ・親しみやすいが丁寧なトーン<br>
                    ・押しつけがましくない<br>
                    ・はがきサイズ（100文字程度）
                </p>
            </div>
            <div class="bg-cyan-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm text-gray-700">
                    〇〇様<br><br>
                    先日はご来院いただきありがとうございました。<br>
                    前回の検診から6ヶ月が経ちました。<br><br>
                    お口の健康を保つためには、定期的なチェックが大切です。<br>
                    気になることがなくても、ぜひこの機会にお口の状態を確認させてください。<br><br>
                    ご予約はお電話またはLINEで承っております。<br>
                    スタッフ一同、お待ちしております。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">LINE配信メッセージ</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">リコール配信メッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        LINE公式アカウントから送るリコールメッセージを作成してください。<br><br>
                        【条件】<br>
                        ・カジュアルだが丁寧なトーン<br>
                        ・予約を促すCTA<br>
                        ・絵文字を適度に使用<br>
                        ・200文字程度
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">予防歯科啓発メッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        予防歯科の重要性を伝えるLINE配信メッセージを作成してください。<br><br>
                        【テーマ】歯周病予防<br><br>
                        【含める内容】<br>
                        ・歯周病のリスク<br>
                        ・予防のポイント<br>
                        ・定期検診の重要性<br><br>
                        【条件】<br>
                        ・怖がらせすぎない<br>
                        ・行動を促す<br>
                        ・300文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">予防歯科コンテンツの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">院内掲示用ポスターの文面</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    予防歯科を啓発する院内ポスターの文面を作成してください。<br><br>
                    【テーマ】定期検診のすすめ<br><br>
                    【含める内容】<br>
                    ・キャッチコピー<br>
                    ・定期検診で分かること（3つ程度）<br>
                    ・検診の推奨頻度<br>
                    ・予約の促し<br><br>
                    【条件】<br>
                    ・目を引くキャッチコピー<br>
                    ・箇条書きで簡潔に<br>
                    ・ポジティブな表現
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">リコール率を上げるポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">次回予約を取る</h4>
                    <p class="text-sm text-gray-600">治療終了時に次回の定期検診予約を取ってもらう。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">複数の連絡手段</h4>
                    <p class="text-sm text-gray-600">はがき、LINE、メール、電話など複数の手段でリマインド。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">来院のメリットを伝える</h4>
                    <p class="text-sm text-gray-600">「早期発見で治療費を抑えられる」などメリットを具体的に。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">予約しやすい環境</h4>
                    <p class="text-sm text-gray-600">Web予約、LINE予約など、24時間予約できる手段を用意。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">リコールは「医院のため」ではなく「患者さんの健康のため」という姿勢で。AIで効率化しつつも、患者さん一人ひとりに寄り添った案内を心がけましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="treatment-explanation.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：治療説明・同意書作成
        </a>
        <a href="appointment-management.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：予約管理・受付効率化
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
