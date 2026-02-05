<?php
$page_title = '学習分析・成績管理 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'teaching';
$section_name = '第3部：教務・授業支援';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">学習分析・成績管理</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">成績データを分析し、生徒一人ひとりに最適な指導を行うためのAI活用法を学びます。データに基づいた個別最適化を実現しましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">成績推移の分析</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">成績分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の成績推移を分析し、今後の学習アドバイスを作成してください。<br><br>
                    【生徒情報】中学2年生、数学<br><br>
                    【定期テスト推移】<br>
                    ・1学期中間：65点<br>
                    ・1学期期末：58点<br>
                    ・2学期中間：72点<br>
                    ・2学期期末：68点<br><br>
                    【単元別の正答率】<br>
                    ・計算：85%<br>
                    ・方程式：70%<br>
                    ・関数：45%<br>
                    ・図形：60%<br><br>
                    【分析してほしい内容】<br>
                    ・成績推移の傾向<br>
                    ・伸び悩みの原因（推測）<br>
                    ・重点的に取り組むべき単元<br>
                    ・具体的な学習アドバイス
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">クラス全体の分析</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">クラス分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の塾内テスト結果を分析してください。<br><br>
                    【テスト情報】中学2年生数学、塾内模試<br><br>
                    【結果データ】<br>
                    ・受験者数：15名<br>
                    ・平均点：62点<br>
                    ・最高点：92点、最低点：35点<br><br>
                    【単元別正答率】<br>
                    ・計算問題：78%<br>
                    ・方程式：65%<br>
                    ・一次関数：48%<br>
                    ・図形の証明：42%<br><br>
                    【分析内容】<br>
                    ・全体の傾向<br>
                    ・重点的に復習すべき単元<br>
                    ・上位層・中位層・下位層への指導方針<br>
                    ・次回テストに向けた対策
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">個別の学習提案</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">個別学習プラン作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の生徒に対する個別学習プランを提案してください。<br><br>
                    【生徒情報】<br>
                    ・学年：中学3年生<br>
                    ・目標：偏差値55の公立高校合格<br>
                    ・現在の偏差値：48（5教科）<br><br>
                    【各教科の状況】<br>
                    ・数学：52（得意）<br>
                    ・英語：45（苦手・単語力不足）<br>
                    ・国語：48（読解に時間がかかる）<br>
                    ・理科：50（暗記は得意）<br>
                    ・社会：46（歴史が苦手）<br><br>
                    【条件】<br>
                    ・入試まで6ヶ月<br>
                    ・通塾は週3回<br>
                    ・各教科の優先順位と学習時間配分を提案<br>
                    ・家庭学習のアドバイスも含める
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">データ管理のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">定期的なデータ更新</h4>
                    <p class="text-sm text-gray-600">テスト後は速やかにデータを更新し、最新の状況を把握。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">単元別の記録</h4>
                    <p class="text-sm text-gray-600">総合点だけでなく、単元別の正答率を記録することで弱点が見える。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">学習態度も記録</h4>
                    <p class="text-sm text-gray-600">宿題の提出状況、授業態度なども記録し、総合的に判断。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">保護者との共有</h4>
                    <p class="text-sm text-gray-600">グラフや表で可視化し、保護者面談で活用。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">データ分析は「客観的な根拠」を得るための手段。最終的な判断は、生徒との対話や観察を通じて講師が行うことが大切です。AIの分析結果を参考にしつつ、人間的な判断を加えましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="teaching-materials.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：教材・問題作成
        </a>
        <a href="parent-communication.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：保護者対応・面談
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
