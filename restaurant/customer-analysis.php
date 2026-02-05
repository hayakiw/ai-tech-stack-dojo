<?php
$page_title = 'AIでの顧客分析・売上予測 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第4部：売上向上・発展';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AIでの顧客分析・売上予測</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">データに基づいた経営判断を。POSデータや顧客情報をAIで分析し、売上アップにつなげる方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">分析できるデータ</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3 text-amber-600">売上データ</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>• 日別・曜日別・時間帯別売上</li>
                    <li>• メニュー別売上ランキング</li>
                    <li>• 客単価の推移</li>
                    <li>• 来客数の推移</li>
                </ul>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-3 text-amber-600">顧客データ</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>• リピート率</li>
                    <li>• 来店頻度</li>
                    <li>• 顧客層（年代、性別など）</li>
                    <li>• 注文傾向</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">売上データの分析</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">売上傾向の分析</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下の売上データを分析し、改善提案をしてください。<br><br>
                    【月間売上データ（曜日別）】<br>
                    月曜：8万円（客数40人、客単価2,000円）<br>
                    火曜：10万円（客数45人、客単価2,222円）<br>
                    水曜：9万円（客数42人、客単価2,143円）<br>
                    木曜：12万円（客数50人、客単価2,400円）<br>
                    金曜：18万円（客数70人、客単価2,571円）<br>
                    土曜：25万円（客数90人、客単価2,778円）<br>
                    日曜：15万円（客数55人、客単価2,727円）<br><br>
                    【分析してほしい内容】<br>
                    1. 曜日ごとの特徴<br>
                    2. 弱い曜日の改善策<br>
                    3. 客単価を上げる施策<br>
                    4. 来客数を増やす施策
                </p>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">メニュー分析（ABC分析）</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    以下のメニュー売上データをABC分析してください。<br><br>
                    【月間メニュー別売上】<br>
                    カルボナーラ：180食（売上216,000円）<br>
                    ペペロンチーノ：120食（売上120,000円）<br>
                    マルゲリータ：150食（売上165,000円）<br>
                    シーザーサラダ：90食（売上63,000円）<br>
                    ティラミス：60食（売上36,000円）<br>
                    （他のメニューも記載）<br><br>
                    【分析してほしい内容】<br>
                    1. A/B/Cランクの分類<br>
                    2. 売れ筋メニューの強化策<br>
                    3. 売れないメニューの改善or廃止提案<br>
                    4. クロスセル（追加注文）の提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">売上予測</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">来月の売上予測</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    【プロンプト】<br>
                    過去6ヶ月のデータから来月の売上を予測してください。<br><br>
                    【過去6ヶ月の売上】<br>
                    7月：280万円<br>
                    8月：310万円（お盆需要）<br>
                    9月：260万円<br>
                    10月：275万円<br>
                    11月：290万円<br>
                    12月：350万円（忘年会需要）<br><br>
                    【来月の条件】<br>
                    ・1月（新年会はやや期待できる）<br>
                    ・成人の日の3連休あり<br><br>
                    【出力してほしい内容】<br>
                    1. 予測売上（幅を持たせて）<br>
                    2. 予測の根拠<br>
                    3. 目標達成のための施策提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">スプレッドシートでダッシュボード作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-amber-600">簡易ダッシュボードの作り方</h3>
            <ol class="space-y-4">
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">データ入力シートを作成</h4>
                        <p class="text-sm text-gray-600">日付、売上、客数、天気などを毎日入力。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">集計シートを作成</h4>
                        <p class="text-sm text-gray-600">SUMIF、AVERAGEIF関数で曜日別・月別に集計。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">グラフを作成</h4>
                        <p class="text-sm text-gray-600">折れ線グラフ、棒グラフで視覚化。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">4</span>
                    <div>
                        <h4 class="font-bold">AIで分析</h4>
                        <p class="text-sm text-gray-600">データをコピーしてChatGPTに分析を依頼。</p>
                    </div>
                </li>
            </ol>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">分析結果の活用例</h2>

        <div class="space-y-4">
            <div class="bg-amber-50 p-4 rounded-lg">
                <h4 class="font-bold mb-2">📊 月曜日の売上が低い</h4>
                <p class="text-sm text-gray-600">→ 月曜限定割引、ハッピーアワー延長などの施策</p>
            </div>
            <div class="bg-amber-50 p-4 rounded-lg">
                <h4 class="font-bold mb-2">📊 ランチの客単価が伸び悩み</h4>
                <p class="text-sm text-gray-600">→ セットメニュー強化、デザート追加のおすすめ</p>
            </div>
            <div class="bg-amber-50 p-4 rounded-lg">
                <h4 class="font-bold mb-2">📊 特定メニューの売上が突出</h4>
                <p class="text-sm text-gray-600">→ 派生メニュー開発、SNSでのプロモーション強化</p>
            </div>
            <div class="bg-amber-50 p-4 rounded-lg">
                <h4 class="font-bold mb-2">📊 リピート率が低い</h4>
                <p class="text-sm text-gray-600">→ ポイントカード導入、LINE登録促進</p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">データ分析は「数字を見る」だけでなく「アクションにつなげる」ことが大切です。AIに分析を依頼する際は「改善提案も含めて」と指示すると、具体的な施策まで提案してくれます。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="staff-training.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：スタッフ教育
        </a>
        <a href="delivery-strategy.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：デリバリー戦略
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
