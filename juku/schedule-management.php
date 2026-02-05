<?php
$page_title = '時間割・シフト管理 - AI×学習塾経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第4部：業務効率化・保護者対応';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">時間割・シフト管理</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">生徒の時間割と講師のシフトを効率的に管理。AIを活用した最適なスケジュール作成の方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">講師シフトの作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">シフト作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の条件で講師のシフト表を作成してください。<br><br>
                    【塾の営業時間】<br>
                    ・平日：16:00〜22:00<br>
                    ・土曜：10:00〜18:00<br>
                    ・日曜：休み<br><br>
                    【講師情報】<br>
                    ・A先生（社員）：週5日、18時以降は必須で出勤<br>
                    ・B先生（大学生）：週3日希望、月水金のみ可<br>
                    ・C先生（大学生）：週2日希望、火木のみ可<br>
                    ・D先生（大学生）：土曜のみ<br><br>
                    【制約条件】<br>
                    ・各時間帯に最低2名の講師が必要<br>
                    ・土曜は3名体制<br>
                    ・連勤は3日まで<br><br>
                    1週間分のシフト表を時間帯別に作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">生徒の時間割調整</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">時間割調整プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の条件で生徒の時間割を最適化してください。<br><br>
                    【教室の席数】4席<br>
                    【授業時間】1コマ90分<br><br>
                    【時間帯】<br>
                    ・1限目：16:00〜17:30<br>
                    ・2限目：17:40〜19:10<br>
                    ・3限目：19:20〜20:50<br><br>
                    【生徒の希望】<br>
                    ・生徒A：火曜・金曜の2限目希望<br>
                    ・生徒B：月曜・水曜の3限目希望<br>
                    ・生徒C：火曜の2限目または3限目<br>
                    ・生徒D：金曜のどこか<br>
                    ・生徒E：月曜〜水曜で週2回<br><br>
                    【講師の担当】<br>
                    ・A先生：数学担当、生徒A・Cを担当<br>
                    ・B先生：英語担当、生徒B・D・Eを担当<br><br>
                    各生徒と講師のマッチングを考慮した時間割を作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">振替授業の調整</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">振替枠の提案</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の状況で振替授業の候補日を提案してください。<br><br>
                    【振替が必要な生徒】<br>
                    ・通常：火曜 17:40〜19:10<br>
                    ・担当講師：A先生（数学）<br>
                    ・欠席日：〇月〇日（火）<br><br>
                    【A先生の空き状況】<br>
                    ・月曜：3限目のみ空き<br>
                    ・水曜：2限目・3限目空き<br>
                    ・金曜：なし<br>
                    ・土曜：午前のみ<br><br>
                    【生徒の都合】<br>
                    ・土曜は部活で不可<br><br>
                    振替候補を優先順位をつけて3つ提案してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">季節講習のスケジュール</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">夏期講習スケジュール作成</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    夏期講習のスケジュールを作成してください。<br><br>
                    【講習期間】7月22日〜8月31日（約6週間）<br>
                    【営業時間】10:00〜20:00<br><br>
                    【講師体制】<br>
                    ・常勤2名：毎日出勤可<br>
                    ・大学生3名：シフト制<br><br>
                    【生徒の申込状況】<br>
                    ・中3受験生：10名（1人あたり20コマ）<br>
                    ・中2：8名（1人あたり10コマ）<br>
                    ・中1：5名（1人あたり8コマ）<br>
                    ・小学生：6名（1人あたり8コマ）<br><br>
                    【制約】<br>
                    ・お盆期間（8/13-16）は休塾<br>
                    ・1日の最大コマ数は講師1人あたり6コマ<br><br>
                    週別・日別の大まかなスケジュール案を作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">管理のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">早めの確定</h4>
                    <p class="text-sm text-gray-600">シフトは2週間前には確定させ、講師・生徒に共有。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">バッファを確保</h4>
                    <p class="text-sm text-gray-600">急な欠席や振替に対応できるよう、空き枠を残しておく。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-indigo-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">デジタルツールの活用</h4>
                    <p class="text-sm text-gray-600">Googleカレンダーや塾専用システムで共有・管理。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIでたたき台を作成し、個別の事情（講師の得意科目、生徒との相性など）を考慮して調整しましょう。複雑なスケジュール調整もAIに相談することで、見落としを防げます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="parent-communication.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：保護者対応・面談
        </a>
        <a href="staff-training.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：講師教育・研修
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
