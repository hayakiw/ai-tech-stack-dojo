<?php
$page_title = 'カリキュラム設計 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'teaching';
$section_name = '第3部：教務・授業支援';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">カリキュラム設計</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">生徒一人ひとりに最適な学習計画をAIで効率的に作成。目標設定から進捗管理まで、カリキュラム設計のノウハウを学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">個別カリキュラムの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">学習計画作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の生徒の学習カリキュラムを作成してください。<br><br>
                    【生徒情報】<br>
                    ・学年：中学2年生<br>
                    ・目標：3ヶ月後の定期テストで数学を60点→80点に<br>
                    ・現状：方程式は理解、関数が苦手<br>
                    ・通塾頻度：週2回（火・金）各90分<br><br>
                    【条件】<br>
                    ・12週間分の計画<br>
                    ・各回の学習内容と目標を明記<br>
                    ・復習ポイントも含める<br>
                    ・テスト2週間前は総復習の時間を確保
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">年間カリキュラムの設計</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">年間計画プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    中学3年生の数学の年間カリキュラムを作成してください。<br><br>
                    【前提条件】<br>
                    ・公立高校受験を目標<br>
                    ・4月スタート、翌3月入試<br>
                    ・週2回の通塾<br><br>
                    【含める内容】<br>
                    ・月別の学習単元<br>
                    ・定期テスト対策の時期<br>
                    ・夏期・冬期講習での重点項目<br>
                    ・過去問演習の開始時期<br>
                    ・直前期の総仕上げ内容<br><br>
                    【出力形式】<br>
                    月別の表形式で作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">弱点分析と対策</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">弱点分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下のテスト結果から弱点を分析し、対策を提案してください。<br><br>
                    【テスト結果】<br>
                    ・計算問題：18/20点<br>
                    ・方程式：12/20点<br>
                    ・関数：8/20点<br>
                    ・図形：15/20点<br>
                    ・文章題：7/20点<br>
                    合計：60/100点<br><br>
                    【分析してほしい内容】<br>
                    ・弱点の優先順位<br>
                    ・各弱点の原因（推測）<br>
                    ・具体的な対策方法<br>
                    ・必要な学習時間の目安
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">進捗管理のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">小さな目標を設定</h4>
                    <p class="text-sm text-gray-600">「方程式の計算を10問中8問正解」など、達成可能な短期目標を設定。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">定期的な見直し</h4>
                    <p class="text-sm text-gray-600">月1回はカリキュラムを見直し、進捗に応じて調整。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">達成感を与える</h4>
                    <p class="text-sm text-gray-600">目標達成時は具体的に褒め、モチベーションを維持。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">保護者との共有</h4>
                    <p class="text-sm text-gray-600">カリキュラムと進捗を保護者と共有し、家庭学習の協力を得る。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで作成したカリキュラムはあくまで「たたき台」。生徒の性格、学習スタイル、家庭環境を考慮して、講師が調整することが重要です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="web-advertising.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：Web広告・チラシ作成
        </a>
        <a href="teaching-materials.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：教材・問題作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
