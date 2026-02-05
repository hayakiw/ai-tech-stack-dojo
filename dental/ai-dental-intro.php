<?php
$page_title = 'AI×歯科医院経営とは - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'intro';
$section_name = '第1部：AI基礎（導入）';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AI×歯科医院経営とは</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">歯科医院経営にAIを導入することで、集客・患者対応・業務効率化などを大幅に改善できます。このレッスンでは、AIが歯科医院にもたらす可能性を解説します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">歯科医院経営の課題</h2>

        <div class="grid md:grid-cols-2 gap-4">
            <div class="bg-red-50 p-4 rounded-lg">
                <h3 class="font-bold text-red-600 mb-2">集客・新患獲得</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>・競合医院が多い</li>
                    <li>・Web集客のノウハウがない</li>
                    <li>・口コミ対策が難しい</li>
                </ul>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <h3 class="font-bold text-red-600 mb-2">患者対応</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>・治療説明に時間がかかる</li>
                    <li>・患者の理解度にばらつき</li>
                    <li>・クレーム対応が難しい</li>
                </ul>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <h3 class="font-bold text-red-600 mb-2">リコール・予防</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>・定期検診の来院率が低い</li>
                    <li>・リコールはがきの作成が手間</li>
                    <li>・予防歯科の啓発が難しい</li>
                </ul>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <h3 class="font-bold text-red-600 mb-2">業務・スタッフ</h3>
                <ul class="text-sm text-gray-600 space-y-1">
                    <li>・事務作業が多い</li>
                    <li>・スタッフ教育に時間がかかる</li>
                    <li>・マニュアル整備ができていない</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">AIでできること</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-3xl mr-4">📢</span>
                <div>
                    <h3 class="font-bold text-cyan-600">集客・マーケティング</h3>
                    <p class="text-sm text-gray-600">SNS投稿文作成、口コミ返信、広告文の作成、ホームページの文章作成</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-3xl mr-4">💬</span>
                <div>
                    <h3 class="font-bold text-cyan-600">患者コミュニケーション</h3>
                    <p class="text-sm text-gray-600">治療説明文の作成、同意書のひな型、患者向け資料の作成</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-3xl mr-4">📅</span>
                <div>
                    <h3 class="font-bold text-cyan-600">リコール・予防管理</h3>
                    <p class="text-sm text-gray-600">リコールはがきの文面作成、予防歯科の啓発コンテンツ作成</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-3xl mr-4">📋</span>
                <div>
                    <h3 class="font-bold text-cyan-600">業務効率化</h3>
                    <p class="text-sm text-gray-600">マニュアル作成、研修資料、書類テンプレートの作成</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">AIを使う際の注意点</h2>

        <div class="space-y-4">
            <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                <span class="text-yellow-500 mr-3">⚠️</span>
                <div>
                    <h4 class="font-bold">医療情報の正確性</h4>
                    <p class="text-sm text-gray-600">AIが生成した医療情報は必ず専門家が確認してください。誤った情報は患者の健康に関わります。</p>
                </div>
            </div>
            <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                <span class="text-yellow-500 mr-3">⚠️</span>
                <div>
                    <h4 class="font-bold">個人情報の取り扱い</h4>
                    <p class="text-sm text-gray-600">患者の個人情報や診療情報をAIに入力してはいけません。匿名化が必須です。</p>
                </div>
            </div>
            <div class="bg-yellow-50 p-4 rounded-lg flex items-start">
                <span class="text-yellow-500 mr-3">⚠️</span>
                <div>
                    <h4 class="font-bold">広告規制への配慮</h4>
                    <p class="text-sm text-gray-600">医療広告ガイドラインに沿った表現になっているか確認が必要です。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIを活用することで、院長やスタッフは「患者さんと向き合う時間」に集中できるようになります。事務作業や文章作成の時間を削減し、より質の高い医療サービスを提供しましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="index.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            コーストップへ
        </a>
        <a href="ai-overview.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：AI概要・ツール紹介
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
