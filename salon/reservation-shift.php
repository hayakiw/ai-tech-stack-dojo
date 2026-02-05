<?php
$page_title = '予約管理・シフト作成の最適化 - AI×美容院経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第4部：業務効率化・売上向上';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">予約管理・シフト作成の最適化</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">予約の取りこぼしを防ぎ、スタッフの稼働を最適化。AIとツールを活用した効率的なスケジュール管理を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">予約管理の課題</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-red-50 p-4 rounded-lg">
                <div class="text-3xl mb-2">📞</div>
                <h3 class="font-bold text-red-600">電話対応の負担</h3>
                <p class="text-sm text-gray-600">施術中の電話で集中が途切れる</p>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <div class="text-3xl mb-2">❌</div>
                <h3 class="font-bold text-red-600">予約の取りこぼし</h3>
                <p class="text-sm text-gray-600">営業時間外の予約を逃す</p>
            </div>
            <div class="bg-red-50 p-4 rounded-lg">
                <div class="text-3xl mb-2">😓</div>
                <h3 class="font-bold text-red-600">ダブルブッキング</h3>
                <p class="text-sm text-gray-600">複数経路からの予約でミス</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">LINE予約の活用</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">LINE公式アカウントで予約受付</h3>

            <div class="space-y-4">
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">リッチメニューに予約ボタンを設置</h4>
                        <p class="text-sm text-gray-600">ホットペッパーや自社予約ページへのリンクを配置。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">自動応答で営業時間外も対応</h4>
                        <p class="text-sm text-gray-600">「予約」と送信されたら自動で予約ページへ誘導。</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <span class="bg-violet-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">予約リマインド配信</h4>
                        <p class="text-sm text-gray-600">来店前日に自動でリマインドメッセージを送信。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIでシフト作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">シフト作成のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下の条件でシフト表を作成してください。<br><br>
                    【店舗情報】<br>
                    ・営業時間：10:00-20:00<br>
                    ・席数：4席<br>
                    ・必要スタッフ：常時2名以上<br><br>
                    【スタッフ】<br>
                    ・Aさん（店長）：週5日、土日出勤必須<br>
                    ・Bさん：週4日希望、火曜定休<br>
                    ・Cさん：週3日、土日いずれか出勤可<br>
                    ・Dさん（パート）：週2日、平日のみ<br><br>
                    【制約】<br>
                    ・土日は3名体制<br>
                    ・連勤は3日まで<br>
                    ・早番（10-17時）と遅番（13-20時）のシフトあり<br><br>
                    1週間分のシフト表を作成してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">予約データの分析</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">予約傾向の分析プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下の予約データを分析し、改善提案をしてください。<br><br>
                    【1ヶ月の予約データ（曜日別）】<br>
                    月：予約15件、キャンセル2件<br>
                    火：定休日<br>
                    水：予約12件、キャンセル1件<br>
                    木：予約18件、キャンセル3件<br>
                    金：予約25件、キャンセル2件<br>
                    土：予約35件、キャンセル4件<br>
                    日：予約30件、キャンセル5件<br><br>
                    【分析してほしい内容】<br>
                    1. 曜日別の稼働率<br>
                    2. キャンセル率が高い曜日の対策<br>
                    3. 予約が少ない曜日の対策<br>
                    4. スタッフ配置の最適化提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">キャンセル対策</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">リマインド配信</h4>
                    <p class="text-sm text-gray-600">前日にLINEやSMSでリマインド。キャンセル率を大幅に削減。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">キャンセルポリシーの明示</h4>
                    <p class="text-sm text-gray-600">予約時にキャンセル料について明記。当日キャンセルの抑止に。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">キャンセル待ち対応</h4>
                    <p class="text-sm text-gray-600">キャンセルが出たらLINEで一斉配信し、空きを埋める。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">予約管理とシフト作成は連動しています。予約データを分析して、忙しい時間帯にスタッフを厚く配置し、閑散時間帯は研修や休憩に充てるなど、効率的な運営を心がけましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="customer-management.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：顧客カルテ管理
        </a>
        <a href="staff-training.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：スタッフ教育
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
